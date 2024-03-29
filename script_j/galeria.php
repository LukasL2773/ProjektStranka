<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/galeria.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/accordion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
  $file_path = "parts/header.php";
  if(!include($file_path)) {
    echo"Failed to include $file_path";
  }
  ?>
    
  <main>
    <section class="banner">
        <div class="container text-white">
          <h1>Galéria</h1>
        </div>
      </section>
    <section class="container">
      <h2>Galéria mačiek</h2>
      <div class="fotky" id="imageContainer">
        <img src="img2/obr1.jpg" alt="" onclick="zoomIn(this)">
        <img src="img2/obr2.jpg" alt="" onclick="zoomIn(this)">
        <img src="img2/obr3.jpg" alt="" onclick="zoomIn(this)">
        <img src="img2/obr4.jpg" alt="" onclick="zoomIn(this)">
        <img src="img2/obr5.jpg" alt="" onclick="zoomIn(this)">
        <img src="img2/obr6.jpg" alt="" onclick="zoomIn(this)">
        <img src="img2/obr7.jpg" alt="" onclick="zoomIn(this)">
        <img src="img2/obr8.jpg" alt="" onclick="zoomIn(this)">
        <img src="img2/obr9.jpg" alt="" onclick="zoomIn(this)">
        <img src="img2/obr10.jpg" alt="" onclick="zoomIn(this)">
        <img src="img2/obr11.jpg" alt="" onclick="zoomIn(this)">
        <img src="img2/obr12.jpg" alt="" onclick="zoomIn(this)">
      </div>
    
      <div class="overlay" id="overlay" onclick="zoomOut()">
        <span class="close" onclick="zoomOut()"></span>
        <img src="" alt="Zväčšený obrázok" id="zoomed-in-image">
      </div>
    
    </section>
  </main>
    
  <?php
  $file_path = "parts/footer.php";
  if(!include($file_path)) {
    echo"Failed to include $file_path";
  }
  ?>
    <script src="js/accordion.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/zoom.js"></script>
</body>
</html>