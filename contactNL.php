<?php
session_start();

// Set default mode if not set
if (!isset($_SESSION['mode'])) {
    $_SESSION['mode'] = 'dark';
}

// Process the dark/light toggle if posted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['toggle_mode'])) {
    $_SESSION['mode'] = ($_SESSION['mode'] === 'dark') ? 'light' : 'dark';
}

// Your existing contact form validation
$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['toggle_mode'])) {
    $name = filter_input(INPUT_POST, "name");
    $email = filter_input(INPUT_POST, "email");
    $message = filter_input(INPUT_POST, "message");
    
    if(empty($name)) {
        array_push($errors, 'Vul een naam in');
    }
    if(empty($email) || strpos($email, '@') === false || substr($email, -4) != ".com") {
        array_push($errors, 'Vul een geldig email adres in');
    }
    if(empty($message)) {
        array_push($errors, 'Vul een bericht in');
    }
    if(count($errors) == 0){
        array_push($errors, "Uw bericht is verzonden.");
    }
}
?>
<?php
$current_file = basename($_SERVER['PHP_SELF']);

switch ($current_file) {
    case 'contactFR.php':
        $current_lang = 'fr';
        $current_lang_text = 'FR';
        break;
    case 'contactNL.php':
        $current_lang = 'nl';
        $current_lang_text = 'NL';
        break;
    default:
        $current_lang = 'en';
        $current_lang_text = 'EN';
        break;
}

$lang_options = [
    'en' => ['text' => 'EN', 'page' => 'contact.php'],
    'fr' => ['text' => 'FR', 'page' => 'contactFR.php'],
    'nl' => ['text' => 'NL', 'page' => 'contactNL.php'],
];

unset($lang_options[$current_lang]);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact</title>
        <!-- <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/stylesheet.css"> -->
        <link rel="stylesheet" href="css/<?php echo ($_SESSION['mode'] === 'dark') ? 'stylesheetD.css' : 'stylesheetL.css'; ?>">
        <link rel="icon" type="image/x-icon" href="images/navigation-bar/fav.png">
    </head>
    <body class="contact-body">
        
<nav class="navbar">
 <div class="navlogo">
    <a class="logo" href="index.php">OUI</a>
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
            Switch to <?php echo ($_SESSION['mode'] === 'dark') ? 'Light' : 'Dark'; ?> Mode
        </button>
    </form>
 </div>
</nav>

        <div class="main">
            <div class="info-left">
                <div class="opening-hours">
                    <ul>
                        <li>Ma - Gesloten</li>
                        <li>Di - 9:00/17:00</li>
                        <li>Woe - 9:00/17:00</li>
                        <li>Do - 9:00/17:00</li>
                        <li>Vrij - 9:00/17:00</li>
                        <li>Zat - 9:00/17:00</li>
                        <li>Zon - 9:00/17:00</li>
                    </ul>
                </div>
                <div class="link">
                    <p>
                        <a href="mailto:emmen@oui-cafe.fr">
                            <img src="assets/images/contact-us/white_mail.png" alt="Mail icon" class="icon">
                            emmen@oui-cafe.fr
                        </a>
                        </p>

                        <p>
                        <a href="tel:+31631782094">
                            <img src="assets/images/contact-us/white_phone.png" alt="Phone icon" class="icon">
                            +31 6 31782094
                        </a>
                    </p>
                </div>
                

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4826.873940502982!2d6.91088217693991!3d52.77842821706407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b7e61f3ec72443%3A0xbe9d297b3e4fbcc7!2sNHL%20Stenden%20Hogeschool!5e0!3m2!1snl!2snl!4v1760084667689!5m2!1snl!2snl"
                    width="250" height="165" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="form-right">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

                    <input type="text" name="name" id="name" placeholder="Uw naam">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <textarea name="message" id="message" rows="4" cols="50" placeholder="Bericht"></textarea>

                    <div>
                        <input type="submit" name="submit" value="Verzenden">
                        <input type="reset" name="reset" value="Resetten">
                    </div>
                </form>

                <?php
                // to display the errors
                if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    foreach($errors as $error)
                    {
                        if($error === "Your message has been sent.") 
                        {
                            echo "<p class='form-success'>$error</p>";
                        } 
                        else 
                        {
                            echo "<p class='form-error'>$error</p>";
                        }
                    }
                }
                ?>
            </div>
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
