<?php
// Determine current page language by current PHP filename
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

// Dropdown language options excluding current language
$lang_options = [
    'en' => ['text' => 'EN', 'page' => 'index.php'],
    'fr' => ['text' => 'FR', 'page' => 'indexFR.php'],
    'nl' => ['text' => 'NL', 'page' => 'indexNL.php'],
];

// Remove the current language from options so it doesn't appear in dropdown
unset($lang_options[$current_lang]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalabe=no ">
    <title>Café OUI</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="images/navigation-bar/fav.png">
</head>

<body>

<nav class="navbar">
 <div class="navlogo">
    <a class="logo" href="index.php">OUI</a>
 </div>
 <div class="navlinks">
    <a href="index.php">Home</a>
    <a href="menu.php">Menu</a>
    <a href="about_us.php">About Us</a>
    <a href="impression.php">Impression</a>
    <a href="contact.php">Contact us</a>
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

  <div class = "firstimg">
      <div class = "FirstText">
      Café OUI
      </div>

      <div class = "SecondText">
        Café Oui - Say yes to coffee, say yes to life.
      </div>
  </div>

  <div class = "secondimg">
    <div class="line_blue"></div>
    <div class="line_blue"></div>
      <div class = "mid_screen">
        <div><p class="cest">C'est delicieux!</p></div>
          <a href="menu.php" class = "menu_button" >Visit our menu</a>
        <div><p class="delicious">Certified delicious!</p></div>
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
    <a href="impression.php"><p class="link_exh">Click here to check our exhibition!</p></a>
    <p class="pared">A little bit of our French culture in your favourite cafe!</p>
  </div>

  <footer>
    <div class = "footer_container">

      <div class = "box1">
        <div class = "footer_links_row">
          <a href="index.php">Home</a>
          <a href="about_us.php">About us</a>
          <a href="contact.php">Contact us</a>
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

      <div class = "box3">
        <h3>Adress: Van Schaikweg 94, 7811KL Emmen</h3>
        <h4>Working hours:</h4>
        <ul>
          <li>Mon - Close</li>
          <li>Tues - 09:00 - 17:00</li>
          <li>Wed - 09:00 - 17:00</li>
          <li>Thurs - 09:00 - 17:00</li>
          <li>Fri - 09:00 - 17:00</li>
          <li>Sat - 09:00 - 17:00</li>
          <li>Sun - 09:00 - 17:00</li>
        </ul>
      </div>

    </div>
  </footer>
  
</body>
</html>