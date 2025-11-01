<?php
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

$lang_options = [
    'en' => ['text' => 'EN', 'page' => 'about_us.php'],
    'fr' => ['text' => 'FR', 'page' => 'about_usFR.php'],
    'nl' => ['text' => 'NL', 'page' => 'about_usNL.php'],
];

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
    <title>About Us</title>
</head>
<body class="body_impression">
    
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

    <section class="aboutus">
    <div class="about_image">
        <img src="assets/images/about-us/about_us_cappuccino.png" alt="about_us_cappuccino" style="width: 100%;">
        <div class="centered">About us</div>
    </div>
    <div class="oui_about">
        Bienvenue à Café Oui – where every sip says yes to life’s little pleasures.
        Inspired by the charm of Parisian cafés, Café Oui blends French tradition with a warm, modern atmosphere. From the aroma of freshly ground beans to the delicate sweetness of our pastries, we believe coffee is more than a drink – it’s a moment of connection, comfort, and joy.
        Our story began with a simple idea: to create a space where people could slow down, savor the moment, and say oui to good company, great coffee, and delicious bites. Every croissant is baked with care, every latte crafted with love, and every guest welcomed as a friend.
        At Café Oui, we’re not just serving coffee – we’re serving experiences. Whether you’re here for a morning espresso, an afternoon macaron, or a cozy corner to unwind, our café is your little taste of France right here at home.
        So come in, take a seat, and let’s raise a cup to the art of living well.
        Café Oui – Say yes to coffee, say yes to life.</div>
    </section>

    <section class="inspiration">
    <div class="lineabout1"></div>
    <div class="lineabout2"></div>
    <div class="lineabout3"></div>
    <div class="inspiration_image">
        <img src="assets/images/about-us/about_us_tea.png" alt="about_us_tea" style="width: 100%;">
        <div class="centered">Our inspiration</div>
    </div>
    <div class="oui_inspiration">
        In the heart of the city, tucked between cobblestone streets and the faint hum of bicycles, there is a small French café that feels more like a living museum than a place for coffee. Its walls are lined with old posters from past exhibitions—impressionist brushstrokes of Monet, bold colors of Matisse, and the delicate lines of Toulouse-Lautrec. Each table seems to carry a fragment of history: a quiet corner where students sketch, a worn leather chair where an old painter once sat, and a sunlit window where photographs of past exhibits hang like silent storytellers.
        The café often hosts small, intimate exhibitions—local artists displaying their canvases beside steaming cups of café au lait. Paintings and sculptures are not only admired but discussed openly over croissants and red wine. It is a place where art breathes, where the gallery meets the aroma of roasted coffee, and where the everyday becomes an exhibition in itself.
        Here, in this French café, the museum is not a building to visit—it is life unfolding, captured in paint, conversation, and the gentle clink of porcelain cups.
    </div>
    <a class="button" href="impression.php" target="_blank" class="button">
        Try checking out our exhibition page
    </a>
    </section>
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