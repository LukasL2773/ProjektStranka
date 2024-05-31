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
      <form id="contact" action="db/spracovanieFormulara.php" method="POST">
        <input type="text" name="meno" placeholder="Vaše meno" required><br>
        <input type="email" name="email" placeholder="Váš email" required><br>
        <textarea name="sprava" placeholder="Vaša správa" required></textarea><br>
        <input type="checkbox" name="suhlas" id="suhlas" required>
        <label for="suhlas">Súhlasím so spracovaním osobných údajov</label><br>
        <input type="submit" value="Odoslať">
      </form>
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
