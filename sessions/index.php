<?php
// How Sessions Work
// 1. Session Initialization: Session ID is created and stored in a cookie
// 2. Data Storage: Data such as the user ID can be stored in a session
// 3. Data Retrieval: The server can retrieve session data associated with the user
// 4. Session Termination: Sessions can expire or be terminated explicitly

session_start();

$_SESSION['name'] = "Tomek";

if (isset($_SESSION['name'])) {
  echo 'Name: ' . $_SESSION['name'];
} else {
  echo 'Name is not set.';
}
