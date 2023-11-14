<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
</head>
<body>
<?php
    //Now lets create a three variables for each users
    //now lets puts initial value for the users account
    //This is just an example in reality if you have a database you comes up only three variables
    //We need additional two variables for username and password
    $adminUname = "Admin123";$facultyUname = "faculty123";$studentUname="student123";
    $adminPassword = "@adminpassword";$facultyPassword="@faculty123";$studentPassword="@student123";
    $username = "Admin123";
    $password = "@adminpassword";
    $role="Admin";
    //if you want to implement role just add another variable for role
    //Now we will determine the accounts by evaluating 
    //We will use conditional statement
    //Now lets put a value to the username and password variables
    //First run is welcome administrator

    if($username == $adminUname && $password == $adminPassword && $role == "Admin"){
        echo"Welcome administrator";
    }
    elseif($username == $facultyUname && $password == $facultyPassword && $role == "Faculty"){
        echo"Welcome faculty";
    }
    elseif($username == $studentUname && $password == $studentPassword && $role == "Student"){
        echo"Welcome Student";
    }
    else{
        echo"The acount is invalid!";
    }
?>
</body>
</html>