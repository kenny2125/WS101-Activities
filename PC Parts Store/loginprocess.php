<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieving form data
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Correct username and password
        $correct_username = "batdimoiprint";
        $correct_password = "hatdog123";
        
        // Validation logic
        if (empty($username) || empty($password)) {
            // Display error if fields are empty
            echo "Please fill in both username and password fields.";
        } elseif ($username !== $correct_username || $password !== $correct_password) {
            // Display error for incorrect username or password
            header("Location: login.php?error=invalid_username&username=" . urlencode($username));
        } else {
            // If both username and password are correct
            header("Location: index.html"); // Redirect to successful login page
            exit();
        }
    } else {
        // Redirect back to the form if accessed directly without form submission
        exit();
    }
?>