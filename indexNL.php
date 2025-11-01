<?php
session_start(); // Start or resume the session

// Default: dark mode on first visit
if (!isset($_SESSION['mode'])) {
    $_SESSION['mode'] = 'dark';
}

// Handle toggle POST form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['toggle_mode'])) {
    $_SESSION['mode'] = ($_SESSION['mode'] === 'dark') ? 'light' : 'dark';
}
?>

<?php
$current_file = basename($_SERVER['PHP_SELF']);

switch ($current_file) {
    case 'indexFR.php':
        $current_lang = 'fr';
        $current_lang_text = 'FR';
        break;
    case 'indexNL.php':
        $current_lang = 'nl';
        $current_lang_text = 'NL';
        break;
    default:
        $current_lang = 'en';
        $current_lang_text = 'EN';
        break;
}

$lang_options = [
    'en' => ['text' => 'EN', 'page' => 'index.php'],
    'fr' => ['text' => 'FR', 'page' => 'indexFR.php'],
    'nl' => ['text' => 'NL', 'page' => 'indexNL.php'],
];

unset($lang_options[$current_lang]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalabe=no ">
    <title>Café OUI</title>
    <!-- <link rel="stylesheet" href="css/stylesheet.css"> -->
     <link rel="stylesheet" href="css/<?php echo ($_SESSION['mode'] === 'dark') ? 'stylesheetD.css' : 'stylesheetL.css'; ?>">
    <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="assets/images/navigation-bar/fav.png">
</head>

<body>
<div class = "body_main_page">

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

    <form method="POST" style="display:inline;">
        <button type="submit" name="toggle_mode">
            Druk voor <?php echo ($_SESSION['mode'] === 'dark') ? 'Light' : 'Dark'; ?> Mode
        </button>
    </form>
 </div>
</nav>

  <div class = "firstimg">
      <div class = "FirstText">
      Café OUI
      </div>

      <div class = "SecondText">
        Café Oui - Zeg ja tegen koffie, zeg ja tegen het leven.
      </div>
  </div>

  <div class = "secondimg">
    <div class="line_blue"></div>
    <div class="line_blue"></div>
      <div class = "mid_screen">
        <div><p class="cest">C'est delicieux!</p></div>
          <a href="menuNL.php" class = "menu_button" >Bekijk ons menu</a>
        <div><p class="delicious">Ongelofelijk lekker!</p></div>
      </div>
  <img src="assets/images/home-page/croissant.png" class="croissant_pic" alt="">
  <img src="assets/images/home-page/treat.png" class="treat_pic" alt="">
  <img src="assets/images/home-page/i_croissant.png" class="croissant_png" alt="">
  <img src="assets/images/home-page/i_treat.png" class="treat_png" alt="">
  <img src="assets/images/home-page/i_tea.png" class="tea_png" alt="">
  <img src="assets/images/home-page/i_coffee.png" class="coffee_png" alt="">
  </div>

  <div class = "textbox">
    <div class="line_beige"></div>
    <div class="line_beige"></div>
    <a href="impressionNL.php"><p class="link_exh">Klik hier om onze tentoonstelling te zien!</p></a>
    <p class="pared">Een beetje Franse cultuur in jouw favoriete café!</p>
  </div>

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
  
</div>
</body>
</html>