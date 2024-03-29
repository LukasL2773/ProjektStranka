<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja stránka</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/galeria.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include 'header.php'; ?>

  <main>
    <section class="banner">
      <div class="container text-white">
        <h1>Pomoc</h1>
      </div>
    </section>
    <section class="container">
      <div class="pomoc">
          <h2>Máte nejasnosti?</h2>
          <p>Kontaktujte nás pomocou mailu alebo formuláru.</p> 
          <p><i class="fa fa-envelope" aria-hidden="true"><a href="mailto:lukilacina@gmail.com"> lukilacina@gmail.com</a></i></p>
          <p>Zákaznícka info linka funguje nonstop.</p>
          <p><i class="fa fa-phone" aria-hidden="true"><a href="tel:0905485111"> 0905485111</a></i></p>
        <form id="contact" action="thankyou.html">
          <input type="text" placeholder="Vaše meno" id="meno" required><br>
          <input type="email" placeholder="Váš email" id="email" required><br>
          <textarea name="" placeholder="Vaša správa" id="sprava"></textarea><br>
          <input type="checkbox" name="" id="" required>
          <label for="">Súhlasím so spracovaním osobných údajov</label><br>
          <input type="submit" value="Odoslať">
        </form>
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
  <script src="js/menu.js"></script>
</body>
</html>