<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/accordion.css">
    <link rel="stylesheet" href="css/galeria.css">
    <link rel="stylesheet" href="css/accordion.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div id="cookie-popup">
    <p>Táto stránka využíva nevyhnutné cookies na optimalizáciu funkcií webovej stránky.</p>
    <button onclick="rejectCookies()">Bez Cookies</button>
    <button onclick="confirmCookies()">Potvrdiť</button>

  </div>
  <?php
  $file_path = "parts/header.php";
  if(!include($file_path)) {
    echo"Failed to include $file_path";
  }
  ?>
    
  <main>
    <section class="main-banner">
      <div class="slide fade">
        <img src="img/banner1.jpg">
        <div class="main-text">
          Mačky
        </div>
      </div>
    </section>
 
    <section class="container">
      <div class="row">
        <div class="col-50">
          <h2>Čo sú to vlastne mačky?</h2>
          <p>Mačky, tieto štýlové a nezávislé tvory, patria do rozmanitej rodiny Felidae. Sú to malé a pohyblivé cicavce, ktoré osídľujú domácnosti a divočinu po celom svete. Ich výnimočná schopnosť prispôsobiť sa rôznym prostrediam a ich výrazný charakter robia z mačiek jedny z najpopulárnejších domácich zvierat.</p>
          <p>Mačky majú charakteristické vlastnosti, vrátane hladkého pohybu, bystrých zmyslov a výrazného správania. Ich adaptabilita im umožňuje žiť v rôznych podmienkach, od mestských bytov až po vidiecke domy. Mačky sú loveckými špecialistami so schopnosťou rýchleho a presného pohybu, čo v kombinácii s ich ostrými pazúrmi robí z nich efektívnych dravcov.</p>
          <p>Čo sa týka vzťahov s ľuďmi, mačky majú schopnosť vyjadrovať svoje emócie, a to nielen prostredníctvom výrazov tváre, ale aj cez telo a zvuky. Ich nezávislá povaha však nebráni vytváraniu hlbokých pút s ľuďmi, čo robí mačky vynikajúcimi spoločníkmi.</p>
          <p>Okrem toho, mačky sú nesmierne čistotné zvieratá, venovávajúce veľkú pozornosť starostlivosti o svoju srst. Ich úžasná schopnosť pohrávať si a vytvárať hrejivé okamihy s majiteľmi robí z mačiek jedinečné a neodolateľné spoločníky v domácnostiach po celom svete.</p>
        </div>
        <div class="col-50">
          <img src="img/cosumacky.jpg">
        </div>
      </div>
    </section>
    <?php
  ?>  
    <section class="container">
      <h2>Zaujímavosti o mačkách</h2>
      <div class="row">
        <div class="col-50">
          <h4>1. Noční lovcovia:</h4><p>Mačky sú výborní noční lovci vďaka ich skvelému nočnému videniu. Ich oči obsahujú špeciálnu vrstvu tkaniva, tzv. tapetum lucidum, ktorá zvyšuje svetelnú citlivosť očí.</p>
          <h4>2. Starnutie a mačky:</h4><p>Výskum ukázal, že kastrácia alebo sterilizácia mačky môže predĺžiť jej život až o dve až tri roky. Okrem toho, staršie mačky majú tendenciu byť menej aktívne, ale stále si užívajú spánok a hry.</p>
          <h4>3. Mačky sú čistotné:</h4><p>Mačky venujú veľa času starostlivosti o svoje telo. Čistia si srst, lížu si labky a starajú sa o svoje pazúry. Táto potreba čistoty môže byť dôvodom, prečo mačky majú reputáciu byť čistotné zvieratá.</p>
          <h4>4. Rôzne mačie zvuky:</h4><p>Mačky komunikujú nielen prostredníctvom mňaukania. Vydávajú rôzne zvuky vrátane mrmlania, štekania, syčania a kňučania. Každý z týchto zvukov môže vyjadrovať rôzne emócie a potreby mačky.</p>
          <h4>5. Pohodlie na výške:</h4><p>Mačky majú radi výšky. Radi vyliezajú na stromy, parapety alebo na vyvýšené miesta, aby mohli pozorovať svoje okolie. Táto vlastnosť má korene v ich prírodných loveckých inštinktoch, umožňuje im sledovať pohybujúce sa predmety alebo byť v bezpečí pred možnými nebezpečenstvami.</p>
        </div>
       <div class="col-50">
          <h4>6. Ostré pazúry:</h4><p> Mačky si pravidelne čistia a nabrušujú pazúry. Pazúry im slúžia nielen na ochranu, ale aj na označovanie teritória a na upravovanie svalov.</p>
          <h4>7. Mačky sú výborní lovci na myši:</h4><p>Ich lovecký inštinkt je veľmi silný. Aj keď sú to domáce mačky, niektoré z nich si zachovávajú tieto lovecké schopnosti a môžu chytať myši alebo iné malé hlodavce.</p>
          <h4>8. Senzorika:</h4><p>Mačky majú výborné senzorické schopnosti vrátane vôňového a sluchového vnímania. Ich schopnosť zachytiť jemné vône im umožňuje detegovať rôzne látky vo svojom prostredí.</p>
          <h4>9. Mačie rady:</h4><p>V Egypte boli mačky považované za posvätne zvieratá a boli spojené so sochou bohyne Bastet, bohyne domácnosti a radosti, ktorá mala mačičku za svoj symbol.</p>
          <h4>10. Rôznorodé plemená:</h4><p>Existuje veľa rôznych plemien mačiek s rôznymi farbami srsti, tvarmi a veľkosťami. Každé plemeno má svoje špecifické vlastnosti a osobitosť.</p>
        </div>
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
  <script src="js/cookies.js" defer></script>
    <script src="js/accordion.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/zoom.js"></script>

    
</body>
</html>