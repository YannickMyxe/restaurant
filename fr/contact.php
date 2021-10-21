<?php

// Show all errors (for educational purposes)
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

// Constanten (connectie-instellingen databank)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'multicultura');

date_default_timezone_set('Europe/Brussels');

// Verbinding maken met de databank
try {
    $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Verbindingsfout: ' . $e->getMessage();
    exit;
}

$naam = isset($_POST['naam']) ? (string)$_POST['naam'] : '';
$geslacht = isset($_POST['geslacht']) ? (string)$_POST['geslacht'] : '';
$email = isset($_POST['email']) ? (string)$_POST['email'] : '';
$bericht = isset($_POST['bericht']) ? (string)$_POST['bericht'] : '';
$msgNaam = '';
$msgGeslacht = '';
$msgEmail = '';
$msgBericht = '';

// form is sent: perform formchecking!
if (isset($_POST['btnSubmit'])) {

    $allOk = true;

    // name not empty
    if (trim($naam) === '') {
        $msgNaam = 'Veuillez entrer votre nom';
        $allOk = false;
    }

    if (trim($geslacht) === '') {
        $msgGeslacht = 'Veuillez indiquer votre sexe';
        $allOk = false;
    }

    if (trim($email) === '') {
        $msgEmail = 'Veuillez entrer votre adresse e-mail';
        $allOk = false;
    }

    if (trim($bericht) === '') {
        $msgBericht = 'Veuillez entrer un message';
        $allOk = false;
    }

    // end of form check. If $allOk still is true, then the form was sent in correctly
    if ($allOk) {
        // build & execute prepared statement
        $stmt = $db->prepare('INSERT INTO contact (naam, geslacht, email, bericht) VALUES (?, ?, ?, ?)');
        $stmt->execute(array($naam, $geslacht, $email, $bericht));

        // the query succeeded, redirect to this very same page
        if ($db->lastInsertId() !== 0) {
            header('Location: bedank.php?naam=' . urlencode($naam));
            exit();
        } // the query failed
        else {
            echo 'Databankfout.';
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Multicultura</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/map.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="icon" href="../img/logo.png">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="navbar__container">
                <a class="logo" href="../"><img src="../img/logo.png" alt="LOGO"></a>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>

                <ul class="navbar__menu">
                    <li class="navbar__item"><a class="navbar__links" href="../fr">Accueil</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../fr/reservaties.php">Réservation</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../about/">À propos de</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="https://github.com/YannickMyxe/restaurant">Projet</a></li>
                    <li class="navbar__item"><a class="navbar__links current-page" href="../contact/contact.php">Contact</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../login/"><i class="fas fa-user-circle"></i> Connexion</a></li>
                    <li class="navbar_item">
                        <div class="lang-menu">
                            <div class="selected-lang fr">
                                Français
                            </div>
                            <ul>
                                <li>
                                    <a class="fr" href="../fr/contact.php">Français</a>
                                </li>

                                <li>
                                    <a class="ne" href="../contact">Néerlandais</a>
                                </li>
                                
                                <li>
                                    <a class="en" href="../en/contact">Anglais</a>
                                </li>

                                <li>
                                    <a class="de" href="../de/Kontakt">Allemand</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <h1>Nous contacter</h1>
    <p>Si vous avez des questions, veuillez nous contacter en remplissant le formulaire ci-dessous.</p>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-item">
            <label for="naam">Votre nom</label>
            <input id="naam" type="text" name="naam" value="<?php echo htmlentities($naam); ?>">
            <span class="message error"><?php echo $msgNaam; ?></span>
        </div>
       
        <div class="form-item">
            <label for="geslacht">Sexe</label>
            <input id="man" name="geslacht" value="0" type="radio" <?php if(isset($_POST['gl']) && $_POST['gl'] === "man") {echo "checked";} ?>>Homme
            <input id="vrouw" name="geslacht" value="1" type="radio" <?php if(isset($_POST['gl']) && $_POST['gl'] === "vrouw") {echo "checked";} ?>>Vrouw
            <input id="anders" name="geslacht" value="2" type="radio" <?php if(isset($_POST['gl']) && $_POST['gl'] === "anders") {echo "checked";} ?>>Autrement
            <span class="message error"><?php echo $msgGeslacht; ?></span>
        </div>

        <div class="form-item">
            <label for="email">Courrier électronique</label>
            <input id="email" type="email" name="email" value="<?php echo htmlentities($email); ?>">
            <span class="message error"><?php echo $msgEmail; ?></span>
        </div>

        <div class="form-item">
            <label for="bericht">Votre message</label>
            <textarea name="bericht" id="bericht" cols="30" rows="10" value="<?php echo htmlentities($email); ?>"></textarea>
            <span class="message error"><?php echo $msgBericht; ?></span>
        </div>
        
        <p><button type="submit" id="btnSubmit" name="btnSubmit">Soumettre</button></p>
    </form>

    <footer class="center">
        Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Gand | est 2021
    </footer>
</body>
</html>