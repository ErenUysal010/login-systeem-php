<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php

// Define the database connection parameters
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input data
$userID = $_POST["userID"];
$name = $_POST["name"];
$email = $_POST["email"];

// Validate input data
if (empty($userID) || empty($name) || empty($email)) {
    echo "All fields are required.";
} else {
    // Prepare the SQL query to store user data
    $stmt = $conn->prepare("INSERT INTO users (userID, name, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $userID, $name, $email);

    // Execute the query and check for errors
    if ($stmt->execute()) {
        echo "User data stored successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>

</body>
</html>