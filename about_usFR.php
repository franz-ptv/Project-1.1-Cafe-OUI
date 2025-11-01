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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/impression_style.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="icon" type="image/x-icon" href="assets/images/navigation-bar/fav.png">
    <title>Over ons</title>
</head>
<body class="body_impression">
    
<nav class="navbar">
 <div class="navlogo">
    <a class="logo" href="indexFR.php">OUI</a>
 </div>
 <div class="navlinks">
    <a href="indexFR.php">Home</a>
    <a href="menuFR.php">Menu</a>
    <a href="about_usFR.php">À propos</a>
    <a href="impressionFR.php">Impression</a>
    <a href="contactFR.php">Contact</a>
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
        <div class="centered">À propos</div>
    </div>
    <div class="oui_about">
        Bienvenue à Café Oui – où chaque gorgée dit oui aux petits plaisirs de la vie. 
        Inspiré par le charme des cafés parisiens, Café Oui marie la tradition française à une ambiance chaleureuse et moderne. 
        De l’arôme des grains fraîchement moulus à la douceur subtile de nos pâtisseries – nous croyons que le café est plus qu’une boisson. C’est un moment de connexion, de réconfort et de joie. 

        Notre histoire a commencé avec une idée simple : créer un lieu où les gens peuvent ralentir, savourer l’instant et dire oui à la bonne compagnie, au bon café et aux délices faits maison. 
        Chaque croissant est préparé avec soin, chaque latte avec amour, et chaque invité accueilli comme un ami. 

        Chez Café Oui, nous ne servons pas seulement du café – nous servons des expériences. 
        Que vous veniez pour un espresso du matin, un macaron de l’après-midi ou un coin douillet pour vous détendre, notre café est votre petit coin de France, juste ici chez vous. 

        Alors entrez, installez-vous, et levons nos tasses à l’art de bien vivre.
        Café Oui – Dites oui au café, dites oui à la vie. 
    </div>
    </section>

    <section class="inspiration">
    <div class="lineabout1"></div>
    <div class="lineabout2"></div>
    <div class="lineabout3"></div>
    <div class="inspiration_image">
        <img src="assets/images/about-us/about_us_tea.png" alt="about_us_tea" style="width: 100%;">
        <div class="centered">Notre inspiration</div>
    </div>
    <div class="oui_inspiration">
        Au cœur de la ville, niché entre les rues pavées et le doux bourdonnement des vélos, se trouve un petit café français qui ressemble plus à un musée vivant qu’à un simple lieu pour boire un café. 
        Les murs sont décorés d’anciennes affiches d’expositions passées – les coups de pinceau impressionnistes de Monet, les couleurs audacieuses de Matisse, et les lignes délicates de Toulouse-Lautrec. 

        Chaque table semble porter un fragment d’histoire : un coin tranquille où des étudiants dessinent, un vieux fauteuil en cuir où un peintre autrefois s’asseyait, et une fenêtre baignée de soleil où pendent des photographies d’expositions passées, telles des conteurs silencieux. 

        Le café accueille souvent de petites expositions intimes – des artistes locaux exposent leurs toiles à côté de tasses fumantes de café au lait. 
        Les peintures et les sculptures ne sont pas seulement admirées, mais discutées ouvertement autour de croissants et de verres de vin rouge. 

        C’est un lieu où l’art respire, où la galerie rencontre l’arôme du café torréfié, et où le quotidien devient lui-même une exposition. 
        Ici, dans ce café français, le musée n’est pas un bâtiment à visiter – c’est la vie elle-même qui se déroule, capturée dans la peinture, la conversation et le doux tintement des tasses en porcelaine. 
    </div>
    <a class="button" href="impression.php" target="_blank" class="button">
        Découvrez aussi notre dernière exposition. 
    </a>
    </section>

  <footer>
    <div class = "footer_container">

      <div class = "box1">
        <div class = "footer_links_row">
          <a href="indexFR.php">Accueil</a>
          <a href="about_usFR.php">À propos</a>
          <a href="contactFR.php">Contact</a>
        </div>
        <div class = "footer_links_row">
          <a href="menuFR.php">Menu</a>
          <a href="impressionFR.php">Impression</a>
        </div>
      </div>

      <div class = "box2">
        <a href="indexFR.php" class = "logo_footer">OUI</a>
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
        <h3>Adresse: Van Schaikweg 94, 7811KL Emmen</h3>
        <h4>Heures d'ouverture:</h4>
        <ul>
          <li>Lun - Close</li>
          <li>Mar - 09:00 - 17:00</li>
          <li>Mer - 09:00 - 17:00</li>
          <li>Jeu - 09:00 - 17:00</li>
          <li>Ven - 09:00 - 17:00</li>
          <li>Sam - 09:00 - 17:00</li>
          <li>Dim - 09:00 - 17:00</li>
        </ul>
      </div>

    </div>
  </footer> 
</body>
</html>