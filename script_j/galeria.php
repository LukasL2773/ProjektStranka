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
  <<?php include 'header.php'; ?>
    
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
    
  <footer class="container bg-dark text-white">
    <div class="row">
      <div class="col-25">
        <h4>Kto som</h4>
        <p>Volám sa Lukáš Lacina</p>
        <p>Som študent na VŠ UKF v Nitre odbor Aplikovaná informatika</p>
        <p>Pochádzam z Nitry, mám 19 rokov a stránka je určená na záverečný projekt</p>

      </div>
      <div class="col-25 text-left">
        <h4>Kontakt</h4>
        <p><i class="fa fa-envelope" aria-hidden="true"><a href="mailto:lukilacina@gmail.com"> lukilacina@gmail.com</a></i></p>
        <p><i class="fa fa-phone" aria-hidden="true"><a href="tel:0905485111"> 0905485111</a></i></p>
      </div>
      <div class="col-25">
        <h4>Odkazy na:</h4>
        <p><a href="index.html">Domov</a></p>
        <p><a href="staorstlivost.html">Starostlivosť</a></p>
        <p><a href="pomoc.html">Pomoc</a></p>
      </div>
      <div class="col-25">
        <img src="img/LogoWh.png" alt="">
       </div>
    </div>
    <div class="copyright">
      <p>Copyright &copy; 2023 Lukáš Lacina. All rights reserved. </p>
    </div>
  </footer>
    <script src="js/accordion.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/zoom.js"></script>
</body>
</html>