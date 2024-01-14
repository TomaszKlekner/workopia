<?php
$config = require basePath('config/db.php');
$db = new Database($config);

$listing = $db->query('SELECT * FROM workopia.listings LIMIT 6')->fetchAll();

loadView('home');
