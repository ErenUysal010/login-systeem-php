<?php

// Start a session
session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Retrieve the username and password from the form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dbname = $_POST['dbname'];
    $servername = $_POST['localhost'];

    // Validate the login credentials
    if ($username === 'myusername' && $password === 'mypassword') {

        // Login successful, redirect to the dashboard page
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
        exit;

    } else {

        // Login failed, set an error message
        $_SESSION['error'] = 'Invalid username or password';

        // Redirect back to the login page
        header('Location: login.php');
        exit;

    }
}

?>
