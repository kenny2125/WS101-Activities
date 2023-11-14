<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>PC Parts Store</title>
</head>
<body>

<div class="topnav">
    <a class="active" href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>


    <div id="id01" class="modal">
  
  <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
  </script>
</div>

    <div class="search-container">
      <form action="/action_page.php">
    
        <input type="text" placeholder="Search.." id="mySearch"  onkeyup="myFunction()" placeholder="Search.." title="Type in a PC Part" name="search" >
      
        <ul id="myMenu">
          <li><a href="#">CPU</a></li>
          <li><a href="#">Cooler</a></li>
          <li><a href="#">GPU</a></li>
          <li><a href="#">RAM</a></li>
          <li><a href="#">Motherboard</a></li>
          <li><a href="#">PSU</a></li>
          <li><a href="#">Chassis</a></li>
          <li><a href="#">Accesories</a></li>
  
          <li><a href="#">Monitor</a></li>
          
        </ul>
        
      </form>
    </div>
    <script>
      function myFunction() {
        // Declare variables
        var input, filter, ul, li, a, i;
        input = document.getElementById("mySearch");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myMenu");
        li = ul.getElementsByTagName("li");

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByTagName("a")[0];
          if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
          } else {
            li[i].style.display = "none";
          }
        }
      }
    </script>
</div>


<div class="Welcome">
 <p>Welcome to PC Parts Store!!</p>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="Images/wgsegwegw.jpg" alt="Cinque Terre">
    </a>
    <div class="desc">Ryzen 9 5950x</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="Images/31r2yodbPuL.jpg" alt="Forest">
    </a>
    <div class="desc">G.SKill  DDR4 64GB RAM</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="Images/713dOnHdPHL.jpg" alt="Northern Lights">
    </a>
    <div class="desc">MSI NVIDIA RTX 4090ti Gaming Trio</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="Images/81jQ+FS5L3L.jpg" alt="Mountains">
    </a>
    <div class="desc">ASUS ROG Ryujin 240mm AIO Cooler</div>
  </div>
</div>

</body>
</html>