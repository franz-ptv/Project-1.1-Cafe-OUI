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
    case 'impressionFR.php':
        $current_lang = 'fr';
        $current_lang_text = 'FR';
        break;
    case 'impressionNL.php':
        $current_lang = 'nl';
        $current_lang_text = 'NL';
        break;
    default:
        $current_lang = 'en';
        $current_lang_text = 'EN';
        break;
}

$lang_options = [
    'en' => ['text' => 'EN', 'page' => 'impression.php'],
    'fr' => ['text' => 'FR', 'page' => 'impressionFR.php'],
    'nl' => ['text' => 'NL', 'page' => 'impressionNL.php'],
];

unset($lang_options[$current_lang]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/impression_style.css">
    <link rel="stylesheet" href="css/stylesheet.css"> -->
    <link rel="stylesheet" href="css/<?php echo ($_SESSION['mode'] === 'dark') ? 'stylesheetD.css' : 'stylesheetL.css'; ?>">
    <link rel="icon" type="image/x-icon" href="assets/images/navigation-bar/fav.png">
    <title>Impressie</title>
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
    <a href="impressionNL.php">Impressie</a>
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

    <section class="exhibition">

        <div class="exhibition-header">
            <h3>Kijk eerst naar onze laatste</h3>
            <h1>TENTOONSTELLING</h1>
        </div>

        <div class="exhibition-gallery">
            <div class="artwork">
                <img src="assets/images/impression/jeune_fille_au_ruban_rouge.png" alt="Jeune Fille au Ruban Rouge">
                <h4>Éloise Marchand (1768-1729)</h4>
                <p>1796</p>
            </div>
            <div class="artwork">
                <img src="assets/images/impression/la_serenite_dautomne.png" alt="La Sérénité d'Automne">
                <h4>Henri Delacroix (1779-1847)</h4>
                <p>1812</p>
            </div>
            <div class="artwork">
                <img src="assets/images/impression/la_demenite_dautomne.png" alt="La Démenité d'Automne">
                <h4>Marguerite Lefèvre (1725-1791)</h4>
                <p>1758</p>
            </div>
            <div class="artwork">
                <img src="assets/images/impression/la_legende.png" alt="La Légende">
                <h4>Alexandre Vautrin (1742-1805)</h4>
                <p>1784</p>
            </div>
        </div>
    <div class="border1"></div>
    <div class="border2"></div>
    <div class="border3"></div>
    </section>

    <section class="impression_part">
        <div class="impression-header">
            <div class="border4"></div>
            <h1>Wij doen altijd ons best voor een goede impressie!</h1>
        </div>
        <div class="gallery-grid">
            <img class="img-croissant" src="assets/images/impression/small_croissant.png" alt="croissant">
            <img class="img-tea-powder" src="assets/images/impression/small_tea_powder.png" alt="tea-powder">
            <img class="img-coffee" src="assets/images/impression/small_coffee.png" alt="coffee">
            <img class="img-tea" src="assets/images/impression/small_tea.png" alt="tea">
            
            <div class="impression-player">
                <iframe style="border-radius:12px;" 
                    src="https://open.spotify.com/embed/playlist/3NOU6rfchhZ6B0u7BWlbuq?utm_source=generator" 
                    width="100%" height="152" frameborder="0" 
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
                    loading="lazy"></iframe>
            </div>
            
            <img class="img-cappuccino" src="assets/images/impression/small_cappuccino.png" alt="cappuccino">
            <img class="img-merengue" src="assets/images/impression/small_merengue.png" alt="merengue">
        </div>
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