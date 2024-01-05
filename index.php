<?php

// $_GET - data from query params

// Check if value is set in two ways
// 1. Method one
//echo isset($_GET['name']) ? $_GET['query'] : 'query not set';

// 2. Method two
// echo $_GET['name'] ?? ""; // ?? -> Null coalescing operator

// You need to be aware of vulnerabilities
// Example
// http://localhost/hostinger/?name=%3Cscript%3Ealert(1);%3C/script%3E
// The above script will be executed!!!

// Ways to prevent this
// 1. This will prevent the script from being executed
// echo htmlspecialchars($_GET['name'] ?? "");
