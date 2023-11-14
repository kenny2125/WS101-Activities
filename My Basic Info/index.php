<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Kenny's Basic Info</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

p {
  font-family: 'Poppins', sans-serif;
  background-color: white;
  border-radius: 15px;
  padding: 10px;
}

body {
 background-color: orange;
}

</style>
<body>
  <div>
  <header>
  <h1 class="header" style="font-family: 'Poppins', sans-serif;font-size: 50px; color:black; text-align:center">My Basic Information</h1>
  </header>
</div>




<p style="text-align: center;">
    Full Name: John Kenny Q. Reyes <br>
    Age: 18 years old <br>
    Birthday: January 21, 2005 <br>
    Favorite Color: Orange, Black, White <br>
    Zodiac Sign: Aquarius <br> <br>
    Can you suggest a new username for my social media? <br>
</p>

  <form method="POST">
    <h1></h1>
    <label for="username" 
    style="color:red; text-align:center; font-size: 32px;
      background-color: white;
      border-radius: 15px;
      padding: 10px;
    ">Username Suggestion:</label>
    <input style=" background-color: white;
      border-radius: 15px;
      padding: 10px;"type="text" name="username" size="8">
    <input style=" background-color: white;
      border-radius: 15px;
      padding: 10px;"type="submit" value="Submit" name="submit">
  </form>

<?php
	if(isset($_POST['submit'])){
    	$username = $_POST['username'];
      echo "<br>";
      echo "  <p style='color:red;text-align:center; font-size: 32px;'> Thank you for suggesting $username</p> ";
		}
?>
</body>
</html>