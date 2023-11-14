<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieving form data
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Validation logic
        if (empty($username) || empty($password)) {
            // Display error if fields are empty
            echo "Please fill in both username and password fields.";
        } else {
            // Validation successful, perform further actions (e.g., database operations, additional processing)
            header("Location: index.html"); // Replace this with your desired action
        }
    } else {
        // Redirect back to the form if accessed directly without form submission
        
        exit();
    }
?>