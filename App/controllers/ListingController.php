<?php

namespace App\Controllers;

use Framework\Database;
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
    $listings = $this->db->query('SELECT * FROM workopia.listings LIMIT 12')->fetchAll();

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
    $newListingData['user_id'] = 1;
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
    } {
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

      redirect("/listings");
    }
  }

  /**
   * Show the listing details view
   *
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
}
