<?php

namespace App\Controllers;

use Framework\Authorization;
use Framework\Database;
use Framework\Session;
use Framework\Validation;

class ListingController
{
  protected $db;

  public function __construct()
  {
    $config = require basePath('config/db.php');
    $this->db = new Database($config);
  }

  /**
   * Show all listings
   *
   * @return void
   */
  public function index()
  {
    $listings = $this->db->query('SELECT * FROM workopia.listings ORDER BY created_at DESC LIMIT 12')->fetchAll();

    loadView('listings/index', [
      'listings' => $listings
    ]);
  }

  /**
   * Show the create listing form
   *
   * @return void
   */
  public function create()
  {
    loadView('listings/create');
  }

  /**
   * Store data in database
   * 
   * @return void
   */
  public function store()
  {
    // Create a list of accepted form fields
    $allowedFields = ["title", "description", "salary", "requirements", "benefits", "tags", "company", "address", "city", "state", "phone", "email"];
    // Confirm only allowed fields are being sent in the POST
    $newListingData = array_intersect_key($_POST, array_flip($allowedFields));
    // Hardcode the user id for now
    $newListingData['user_id'] = Session::get('user')['id'];
    // Sanitaze incomming data by filtering special characters
    $newListingData = array_map('sanitaze',  $newListingData);
    // Check if required fields are in
    $requiredFields = ["title", "description", "email", "city", "state"];
    // Initialize errors array
    $errors = [];

    // Check for emplty fields and create error messages for each
    foreach ($requiredFields as $field) {
      if (empty($newListingData[$field]) || !Validation::string($newListingData[$field])) {
        $errors[$field] = ucfirst($field) . " is required";
      }
    }

    if (!empty($errors)) {
      // Reload view with errors
      loadView('listings/create', ['errors' => $errors, 'listing' => $newListingData]);
    } else {
      // Submit data
      $fields = [];
      foreach ($newListingData as $field => $value) {
        $fields[] = $field;
      }
      $fields = implode(', ', $fields);

      $values = [];
      foreach ($newListingData as $field => $value) {
        // Convert empty stringt to null
        if ($value === '') {
          $newListingData[$field] = null;
        }
        // Convert values to a placehoder
        $values[] = ":" . $field;
      }
      $values = implode(', ', $values);

      // Create the query
      $query = "INSERT INTO workopia.listings ({$fields}) VALUES ({$values})";

      $this->db->query($query, $newListingData);

      Session::setFlashMessage('success_message', 'Listing created successfully');

      redirect('/listings');
    }
  }

  /**
   * Show the listing details view
   *
   * @param array $params
   * @return void
   */
  public function show($params)
  {
    // Get the listing id passed as a query parameter
    $id = $params['id'] ?? "";

    $params = [
      'id' => $id
    ];

    $listing = $this->db->query('SELECT * FROM workopia.listings where id = :id', $params)->fetch();

    // Check if listing exists
    if (!$listing) {
      ErrorController::notFound('Listing not found!');
      return;
    }

    loadView('listings/show', [
      'listing' => $listing
    ]);
  }

  /**
   * Delete a listing
   * 
   * @param array $params
   * @return void
   */
  public function destroy($params)
  {
    $id = $params['id'];

    $params = [
      'id' => $id
    ];

    $listing = $this->db->query('SELECT * FROM workopia.listings where id = :id', $params)->fetch();

    // Check if listing exists
    if (!$listing) {
      ErrorController::notFound('Listing not found!');
      return;
    }

    // Authorization
    if (!Authorization::isOwner($listing->user_id)) {
      Session::setFlashMessage('error_message', 'You are not authorize to delete this listing');
      return redirect('/listings/' . $listing->id);
    }

    $this->db->query('DELETE FROM workopia.listings where id = :id', $params);

    // Set flash message
    Session::setFlashMessage('success_message', 'Listing deleted successfully');

    redirect('/listings');
  }

  /**
   * Show the listing edit form
   *
   * @param array $params
   * @return void
   */
  public function edit($params)
  {
    // Get the listing id passed as a query parameter
    $id = $params['id'] ?? "";

    $params = [
      'id' => $id
    ];

    $listing = $this->db->query('SELECT * FROM workopia.listings where id = :id', $params)->fetch();

    // Check if listing exists
    if (!$listing) {
      ErrorController::notFound('Listing not found!');
      return;
    }

    // Authorization
    if (!Authorization::isOwner($listing->user_id)) {
      Session::setFlashMessage('error_message', 'You are not authorize to edit this listing');
      return redirect('/listings/' . $listing->id);
    }

    loadView('listings/edit', [
      'listing' => $listing
    ]);
  }

  /**
   * Update listing
   * 
   * @param array $params
   * @return void
   */
  public function update($params)
  {
    // Get the listing id passed as a query parameter
    $id = $params['id'] ?? "";

    $params = [
      'id' => $id
    ];

    $listing = $this->db->query('SELECT * FROM workopia.listings where id = :id', $params)->fetch();

    // Check if listing exists
    if (!$listing) {
      ErrorController::notFound('Listing not found!');
      return;
    }

    // Authorization
    if (!Authorization::isOwner($listing->user_id)) {
      Session::setFlashMessage('error_message', 'You are not authorize to edit this listing');
      return redirect('/listings/' . $listing->id);
    }

    $allowedFields = ["title", "description", "salary", "requirements", "benefits", "tags", "company", "address", "city", "state", "phone", "email"];

    $updateValues = [];

    $updateValues = array_intersect_key($_POST, array_flip($allowedFields));

    $updateValues = array_map('sanitaze', $updateValues);

    $requiredFields = ['title', 'description', 'salary', 'email', 'city', 'state'];

    $errors = [];

    foreach ($requiredFields as $field) {
      if (empty($updateValues[$field]) || !Validation::string($updateValues[$field])) {
        $errors[$field] = ucfirst($field) . ' is required!';
      }
    }

    if (!empty($errors)) {
      loadView('listings/edit', [
        'listing' => $listing,
        'errors' => $errors
      ]);
      exit;
    } else {
      // Submit to databbase
      $updateFields = [];

      foreach (array_keys($updateValues) as $field) {
        $updateFields[] = "{$field} = :{$field}";
      }

      $updateFields = implode(', ', $updateFields);

      $updateQuery = "UPDATE workopia.listings SET $updateFields WHERE id = :id";

      $updateValues['id'] = $id;

      $this->db->query($updateQuery, $updateValues);

      Session::setFlashMessage('success_message', 'Listing Updated');

      redirect('/listings/' . $id);
    }
  }

  /**
   * Search listings by keywords/location
   * 
   * @return void
   */
  public function search()
  {
    $keywords = isset($_GET['keywords']) ? trim($_GET['keywords']) : '';
    $location = isset($_GET['location']) ? trim($_GET['location']) : '';

    $query = "SELECT * FROM workopia.listings WHERE (title LIKE :keywords OR description LIKE :keywords OR tags LIKE :keywords OR company LIKE :keywords) AND (city LIKE :location OR state LIKE :location)";

    $params = [
      'keywords' => "%{$keywords}%",
      'location' => "%$location%"
    ];

    $listings = $this->db->query($query, $params)->fetchAll();

    loadView('/listings/index', [
      'listings' => $listings,
      'keywords' => $keywords,
      'location' => $location
    ]);
  }
}
