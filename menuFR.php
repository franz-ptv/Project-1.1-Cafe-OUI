<?php
$current_file = basename($_SERVER['PHP_SELF']);

switch ($current_file) {
    case 'menuFR.php':
        $current_lang = 'fr';
        $current_lang_text = 'FR';
        break;
    case 'menuNL.php':
        $current_lang = 'nl';
        $current_lang_text = 'NL';
        break;
    default:
        $current_lang = 'en';
        $current_lang_text = 'EN';
        break;
}

$lang_options = [
    'en' => ['text' => 'EN', 'page' => 'menu.php'],
    'fr' => ['text' => 'FR', 'page' => 'menuFR.php'],
    'nl' => ['text' => 'NL', 'page' => 'menuNL.php'],
];

unset($lang_options[$current_lang]);
?>


<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
    <link rel="stylesheet" href="cafeoui.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="icon" type="image/x-icon" href="assets/images/navigation-bar/fav.png">

</head>
<body>
  <body class="body_impression">

<nav class="navbar">
 <div class="navlogo">
    <a class="logo" href="index.php">OUI</a>
 </div>
 <div class="navlinks">
    <a href="indexFR.php">Accueil</a>
    <a href="menuFR.php">Menu</a>
    <a href="about_usFR.php">À propos de nous</a>
    <a href="impressionFR.php">Impression</a>
    <a href="contactFR.php">Contacteur nous</a>
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
  

  


  <!-- Green Tea section -->
<div class="menu-container">
  <div class="top-left">
    
    <div class="tea-section">
      <img src="assets/images/menu/tea.png" alt="tea">
      <span class="side-text">Green tea</span>
      <h1>Tea</h1>
      <ul>
        <li>Thé noir<li>
        <li>Thé vert</li>
        <li>Tisane</li>
        <li>hé au jasmin</li>
        <li>Rooibos t</li>
      </ul>
    </div>
  </div>

  <!-- Cool drinks section -->
  <div class="center-section">
    <h1>Cool drinks</h1>
    <ul>
      <li>Limonade faite a la maison</li>
      <li>Jus d'orange</li>
      <li>jus de pomme</li>
      <li>Eau Glace</li>
      <li>Eau Plate</li>
      <li>Eau petillante </li>
    </ul>

    <h1>Boison chaute</h1>
    <ul>
      <li>Cappuccino</li>
      <li>Latte</li>
      <li>Mocha</li>
      <li>Espresso</li>
      <li>Americano</li>
      <li>“Café au lait crémeux”</li>
    </ul>
  </div>

  <!-- Right-side images -->
  <div class="right-section">
    <div class="drink-item">
      <img src="assets/images/menu/lemonade.png" alt="Homemade Lemonade" class="menu-img">
      <span class="side-text-vertical">Home-made lemonade</span>
    </div>
    <div class="drink-item bottom">
      <img src="assets/images/menu/cappuccino.png" alt="Cappuccino" class="menu-img">
      <span class="side-text-vertical">Cappuccino</span>
    </div>
  </div>
</div>

<!----  Joining div-->

<div class="section-divider"></div>

<!--Complection of divider-->

 <div class="menu-wrapper">
  <div class="image-container top">
    <img src="assets/images/menu/croissant.png" alt="Plain Croissant">
    <span class="side-text left-text">Plain Croissant</span>
  </div>

  <div class="content">
    <div class="section croissant">
      <h1>Croissant or Petit Pain</h1>
      <ul>
        <li>Pain – Croissant ou Petit Pain</li>
        <li>Nature/plain</li>
        <li>Beurre</li>
        <li>Beurre aux herbe</li>
        <li>Confiture ou Nutella</li>
        <li>Brie ou camembert</li>
        <li>Fromage aux noix</li>
        <li>Fromage à la crème</li>
        <li>Fromage de chèvre doux</li>
        <li>Saumon fumé/li>
        <li>Tuna salad</li>
        <li>salad de neuf</li>
        <li>Hummus</li>
        <li>French ragout</li>
      </ul>
    </div>

    <div class="section sweets">
      <h1>Sweets</h1>
      <ul>
  <li>Macarons (3 pièces)</li>
  <li>Vanille</li>
  <li>Fraises et crème</li>
  <li>Crème de citron</li>
  <li>Cookies et crème</li>
  <li>Myrtille</li>
  <li>Chocolat</li>
  <li>Moka / Café</li>
  <li>Paris-Brest</li>
  <li>Choux à la crème</li>
  <li>Éclair</li>
  <li>Mille-feuille</li>
</ul>
    </div>
  </div>

  <div class="image-container bottom">
    <img src="assets/images/menu/merengue.png" alt="merengue">
    <span class="side-text left-text">Macarons (Vanilla, Strawberry)</span>
  </div>

  <div class="button-container">
    <button>download menu</button>
  </div>
</div>

<footer>
    <div class = "footer_container">

      <div class = "box1">
        <div class = "footer_links_row">
          <a href="index.php">A’accueil</a>
          <a href="about_us.php">À propos de nous</a>
          <a href="contact.php">Contacteur nous</a>
        </div>
        <div class = "footer_links_row">
          <a href="menu.php">Menu</a>
          <a href="impression.php">Impression</a>
        </div>
      </div>

      <div class = "box2">
        <a href="index.php" class = "logo_footer">OUI</a>
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

     <div class="box3">
  <h3>Adresse : Van Schaikweg 94, 7811KL Emmen</h3>
  <h4>Heures d'ouverture :</h4>
  <ul>
    <li>Lundi    – Fermé</li>
    <li>Mardi    – 09:00 - 17:00</li>
    <li>Mecredi  – 09:00 - 17:00</li>
    <li>Jeudi    – 09:00 - 17:00</li>
    <li>Vendredi – 09:00 - 17:00</li>
    <li>Samedi   – 09:00 - 17:00</li>
    <li>Dimache  – 09:00 - 17:00</li>
  </ul>
</div>

    </div>
  </footer>


</body>
</html>