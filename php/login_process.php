<?php
require_once 'db_conn.php';
date_default_timezone_set('Asia/Manila');

if (isset($_POST['login'])) {
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    if ($email == "" || $password == "") return;
    // Prepare and execute a SQL query to retrieve user data by email
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Fetch user data as an associative array
    $userData = $result->fetch_assoc();

    // Check if a user with the provided email exists
    if ($userData) {
        // User found, now verify the password
        $storedPassword = $userData['password'];

        if ($password == $storedPassword) {
            // Password matches, redirect to the admin dashboard page
            header("Location: ../read.php");
            exit;
        } else {
            // Password doesn't match, show an error message
            echo '<script>alert("Incorrect password.");</script>';
        }
    } else {
        // User not found, show an error message
        echo '<script>alert("User not found.");</script>';
    }

    // Close the MySQLi connection
    $conn->close();
}
?>
