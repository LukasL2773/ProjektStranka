<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/banner.css">
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
          <h1>Ďakujeme</h1>
        </div>
      </section>
      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
            <h2>Ďakujeme za vyplnenie formulára</h2>
            <h4>Odpovedáme do 3 pracovných dní</h4>
          </div>
        </div>
      </section>

    </main>
    
    <?php
  $file_path = "parts/footer.php";
  if(!include($file_path)) {
    echo"Failed to include $file_path";
  }
  ?>

    <script src="js/menu.js"></script>
</body>
</html>