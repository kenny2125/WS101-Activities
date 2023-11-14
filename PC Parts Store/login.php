<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>PC Parts Store</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>


<div>
  <h1>PC Parts Picker Log In</h1>
<form action="loginprocess.php" class="loginform" method="post" >

<div class="container">
<label class="label">Username </label>
<input class="label" type="text" id="username" name="username" required>



<label class="label">Password </label>
<input class="label" type="password" id="password" name="password" required>
<?php
        // Display error message if redirected from process_form.php with invalid username
        if(isset($_GET['error']) && $_GET['error'] === 'invalid_username') {
            echo '<p class="error">Invalid username. Please try again.</p>';
        }
    ?>

<input type="submit" value="Log In">
</div>


</form>

</div>

</body>
</html>