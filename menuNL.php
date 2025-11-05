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
    <a href="indexNL.php">Home</a>
    <a href="menuNL.php">Menu</a>
    <a href="about_usNL.php">Over ons</a>
    <a href="impressionNL.php">Impressie</a>
    <a href="contactNL.php">Contact </a>
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
        <li>Black tea</li>
        <li>Green tea</li>
        <li>Herbal tea</li>
        <li>Jasmine tea</li>
        <li>Rooibos tea</li>
      </ul>
    </div>
  </div>

  <!-- Cool drinks section -->
  <div class="center-section">
    <h1>Koude dranken</h1>
    <ul>
      <li>Huisgemaakte limonade </li>
      <li>Sinasappelsap </li>S
      <li>Appelsap </li>
      <li>IJsthee </li>
      <li>water</li>
      <li>Bruisend water</li>
    </ul>

    <h1>Thee</h1>
    <ul>
      <li>Zwarte thee</li>
      <li>Groene thee</li>
      <li>Kruidenthee </li>
      <li>Jasmijn thee </li>
      <li>Americano</li>
      <li>Rooibos thee </li>
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
      <h1>Warme dranken </h1>
      <ul>
        <li>Pain – Croissant or Petit Pain</li>
        <li>Nature/plain</li>
        <li>Beurre</li>
        <li>Herb bu</li>
        <li>Jam or Nutella</li>
        <li>Brie or camembert</li>
        <li>Cheese with walnuts</li>
        <li>Cream cheese</li>
        <li>Soft goat cheese</li>
        <li>Smoked salmon</li>
        <li>Tuna salad</li>
        <li>Egg salad</li>
        <li>Hummus</li>
        <li>French ragout</li>
      </ul>
    </div>

    <div class="section sweets">
      <h1>Sweets</h1>
      <ul>
        <li>Macarons (3 pieces)</li>
        <li>Vanilla</li>
        <li>Strawberries and cream</li>
        <li>Lemon Curd</li>
        <li>Cookies and cream</li>
        <li>Blueberry</li>
        <li>Chocolate</li>
        <li>Mocha/Coffee</li>
        <li>Paris-Brest</li>
        <li>Cream puffs</li>
        <li>Eclair</li>
        <li>Millefeuille</li>
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
          <a href="index.php">Home</a>
          <a href="about_us.php">Over ons</a>
          <a href="contact.php">Contact</a>
        </div>
        <div class = "footer_links_row">
          <a href="menu.php">Menu</a>
          <a href="impression.php">Impressie</a>
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
    <li>ma   – Gesloten</li>
    <li>di   – 09:00 - 17:00</li>
    <li>woe  – 09:00 - 17:00</li>
    <li>do   – 09:00 - 17:00</li>
    <li>Vrij – 09:00 - 17:00</li>
    <li>zat  – 09:00 - 17:00</li>
    <li>zon  – 09:00 - 17:00</li>
  </ul>
</div>

    </div>
  </footer>


</body>
</html>