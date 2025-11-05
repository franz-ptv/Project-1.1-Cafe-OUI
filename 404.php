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
        <title>404</title>
        <link rel="stylesheet" href="css/<?php echo ($_SESSION['mode'] === 'dark') ? 'stylesheetD.css' : 'stylesheetL.css'; ?>">
        <link rel="icon" type="image/x-icon" href="images/navigation-bar/fav.png">
    </head>
    <body class="main-error">
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

                <form method="POST" style="display:inline;">
                    <button type="submit" name="toggle_mode">
                        Press for <?php echo ($_SESSION['mode'] === 'dark') ? 'Light' : 'Dark'; ?> Mode
                    </button>
                </form>
            </div>
        </nav>

        <div class="error">
            <h1>404!</h1>
            <h2>Something went wrong, we couldn't find what you were looking for.</h2>
            <h2>We are sorry for that, please take a croissant while you go back to the homepage.</h2>
            <a href="index.php">Go back home!</a>
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