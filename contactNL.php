<?php
$errors = [];

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = filter_input(INPUT_POST, "name");
    $email = filter_input(INPUT_POST, "email");
    $message = filter_input(INPUT_POST, "message");

    if(empty($name))
    {
        array_push($errors, 'Vul een naam in');
    }

    if(empty($email) || strpos($email, '@') === false || substr($email, -4) != ".com")
    {
        array_push($errors, 'Vul een geldig email adres in');
    }

    if(empty($message))
    {
        array_push($errors, 'Vul een bericht in');
    }

    if(count($errors) == 0){
        array_push($errors, "Uw bericht is verzonden.");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
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

                <p><a href="mailto:emmen@oui-cafe.fr">📩 emmen@oui-cafe.fr</a></p>
                <p><a href="tel:+31631782094">📞 +31 6 31782094</a></p>

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
                if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    foreach($errors as $error)
                    {
                        echo "<p>$error</p>";
                    }
                }
                ?>
            </div>
        </div>
    </body>
</html>
