<?php

namespace App\Controllers;

use Framework\Database;

class ListingController
{
  protected $db;

  public function __construct()
  {
    $config = require basePath('config/db.php');
    $this->db = new Database($config);
  }

  public function index()
  {
    $listings = $this->db->query('SELECT * FROM workopia.listings LIMIT 6')->fetchAll();

    loadView('listings/index', [
      'listings' => $listings
    ]);
  }
}
