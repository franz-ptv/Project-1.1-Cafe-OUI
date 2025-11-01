<?php
// Determine current page language by current PHP filename
$current_file = basename($_SERVER['PHP_SELF']);

switch ($current_file) {
    case 'about_usFR.php':
        $current_lang = 'fr';
        $current_lang_text = 'FR';
        break;
    case 'about_usNL.php':
        $current_lang = 'nl';
        $current_lang_text = 'NL';
        break;
    default:
        $current_lang = 'en';
        $current_lang_text = 'EN';
        break;
}

// Dropdown language options excluding current language using associative arrays and keys$lang_options = [
    'en' => ['text' => 'EN', 'page' => 'about_us.php'],
    'fr' => ['text' => 'FR', 'page' => 'about_usFR.php'],
    'nl' => ['text' => 'NL', 'page' => 'about_usNL.php'],
];

// Remove the current language from options so it doesn't appear in dropdown
unset($lang_options[$current_lang]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/impression_style.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="icon" type="image/x-icon" href="assets/images/navigation-bar/fav.png">
    <title>Over ons</title>
</head>
<body class="body_impression">
    
<nav class="navbar">
 <div class="navlogo">
    <a class="logo" href="indexNL.php">OUI</a>
 </div>
 <div class="navlinks">
    <a href="indexNL.php">Home</a>
    <a href="menuNL.php">Menu</a>
    <a href="about_usNL.php">Over ons</a>
    <a href="impressionNL.php">Impresse</a>
    <a href="contactNL.php">Contact</a>
 </div>
 <div class="navactions">
    <div class="language-dropdown">
    <button class="lang-select">
        <img src="assets/images/flags/<?php echo $current_lang; ?>.png" alt="<?php echo $current_lang_text; ?> Flag" class="flag-icon">
        <?php echo $current_lang_text; ?>
        <span class="arrow">&#9662;</span>
    </button>
    <ul class="lang-menu">
        <?php foreach($lang_options as $lang_code => $lang): ?>
            <li>
                <a href="<?php echo $lang['page']; ?>">
                    <img src="assets/images/flags/<?php echo $lang_code; ?>.png" alt="<?php echo $lang['text']; ?> Flag" class="flag-icon">
                    <?php echo $lang['text']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

    <button>Dark/Light</button>
 </div>
</nav>

    <section class="aboutus">

    <div class="about_image">
        <img src="assets/images/about-us/about_us_cappuccino.png" alt="about_us_cappuccino" style="width: 100%;">
        <div class="centered">Over ons</div>
    </div>
    <div class="oui_about">
        Bienvenue á Cafe Oui – waar elke slok ja zegt tegen de kleine geluksmomentjes in het leven.  

Geïnspireerd door de charme van Parijse cafés, combineert Café Oui Franse traditie met een warme, moderne sfeer. Van het aroma van versgemalen koffiebonen tot de subtiele zoetigheid van onze gebakjes – wij geloven dat koffie meer is dan een drankje. Het is een moment van verbinding, comfort en vreugde. 

Ons verhaal begon met een eenvoudig idee: een plek creëren waar mensen even kunnen vertragen, het moment kunnen proeven en oui kunnen zeggen tegen goed gezelschap, geweldige koffie en heerlijke hapjes. Elk croissantje wordt met zorg gebakken, elke latte met liefde bereid, en elke gast ontvangen als een vriend. 

Bij Café Oui serveren we niet zomaar koffie – we serveren belevingen. Of je nu komt voor een ochtendespresso, een middag macaron of een gezellig hoekje om tot rust te komen, ons café is jouw kleine stukje Frankrijk, gewoon hier bij jou in de buurt. 

Dus kom binnen, neem plaats, en hef met ons het kopje op het goede leven. 
Café Oui – Zeg ja tegen koffie, zeg ja tegen het leven.</div>
    </section>

    <section class="inspiration">
    <div class="lineabout1"></div>
    <div class="lineabout2"></div>
    <div class="lineabout3"></div>
    <div class="inspiration_image">
        <img src="assets/images/about-us/about_us_tea.png" alt="about_us_tea" style="width: 100%;">
        <div class="centered">Onze inspiratie</div>
    </div>
    <div class="oui_inspiration">
        In het hart van de stad, verscholen tussen kinderkopjes en het zachte gezoem van fietsen, ligt een klein Frans café dat meer aanvoelt als een levend museum dan als een plek om koffie te drinken. De muren zijn bekleed met oude posters van vroegere tentoonstellingen – de impressionistische penseelstreken van Monet, de gedurfde kleuren van Matisse, en de verfijnde lijnen van Toulouse-Lautrec. 
Elke tafel lijkt een stukje geschiedenis met zich mee te dragen: een stille hoek waar studenten schetsen, een versleten leren stoel waar ooit een oude schilder zat, en een zonovergoten raam waar foto’s van vroegere exposities hangen als zwijgende vertellers. 

Het café organiseert vaak kleine, intieme tentoonstellingen – lokale kunstenaars tonen hun doeken naast dampende kopjes café au lait. Schilderijen en beelden worden niet alleen bewonderd, maar ook besproken, openlijk, tussen croissants en glazen rode wijn. 
Het is een plek waar kunst ademt, waar de galerie zich vermengt met het aroma van gebrande koffie, en waar het alledaagse zelf verandert in een tentoonstelling. 

Hier, in dit Franse café, is het museum geen gebouw om te bezoeken – het is het leven zelf dat zich ontvouwt, vastgelegd in verf, gesprek en het zachte klingelen van porseleinen kopjes. 
    </div>
    <a class="button" href="impression.php" target="_blank" class="button">
        Neem ook een kijkje bij onze laatste tentoonstelling 
    </a>
    </section>

  <footer>
    <div class = "footer_container">

      <div class = "box1">
        <div class = "footer_links_row">
          <a href="indexNL.php">Home</a>
          <a href="about_usNL.php">Over ons</a>
          <a href="contactNL.php">Contact</a>
        </div>
        <div class = "footer_links_row">
          <a href="menuNL.php">Menu</a>
          <a href="impressionNL.php">Impressie</a>
        </div>
      </div>

      <div class = "box2">
        <a href="indexNL.php" class = "logo_footer">OUI</a>
        <div class = "social_icons">
          <a href="https://facebook.com" target="_blank">
            <img src="assets/images/home-page/facebook-svgrepo-com.svg" alt="Facebook icon">
          </a>
          <a href="https://twitter.com" target="_blank">
            <img src="assets/images/home-page/twitter-color-svgrepo-com.svg" alt="Twitter icon">
          </a>
          <a href="https://instagram.com" target="_blank">
            <img src="assets/images/home-page/instagram-1-svgrepo-com.svg" alt="Instagram icon">
          </a>
        </div>
      </div>

      <div class = "box3">
        <h3>Adres: Van Schaikweg 94, 7811KL Emmen</h3>
        <h4>Openingstijden:</h4>
        <ul>
          <li>Ma - Close</li>
          <li>Di - 09:00 - 17:00</li>
          <li>Woe - 09:00 - 17:00</li>
          <li>Do - 09:00 - 17:00</li>
          <li>Vrij - 09:00 - 17:00</li>
          <li>Zat - 09:00 - 17:00</li>
          <li>Zon - 09:00 - 17:00</li>
        </ul>
      </div>

    </div>
  </footer>  
</body>
</html>