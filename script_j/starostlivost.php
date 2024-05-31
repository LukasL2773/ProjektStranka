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
    <link rel="stylesheet" href="css/accordion.css">
    <link rel="stylesheet" href="css/form.css">
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
      <div class="container text-white" >
        <h1>Staroslivosť</h1>
      </div>
    </section>
  </main>
 <?php
  $file_path = "parts/otazky.php";
  if(!include($file_path)) {
    echo"Failed to include $file_path";
  }
  ?>
  <?php
  $file_path = "parts/footer.php";
  if(!include($file_path)) {
    echo"Failed to include $file_path";
  }
  ?>
  <script src="js/accordion.js"></script>
  <script src="js/menu.js"></script>
</body>
</html>