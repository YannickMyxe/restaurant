<?php
session_start();
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
        $msgNaam = 'Please enter your name';
        $allOk = false;
    }

    if (trim($geslacht) === '') {
        $msgGeslacht = 'Please indicate your gender';
        $allOk = false;
    }

    if (trim($email) === '') {
        $msgEmail = 'Please enter your email address';
        $allOk = false;
    }

    if (trim($bericht) === '') {
        $msgBericht = 'Please enter a message';
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Multicultura</title>
    <?php
        include '../../php/loadCss.php'
    ?>
    <link rel="stylesheet" href="../../css/map.css">
    <link rel="icon" href="../../img/logo.png">
</head>
<body>
    <header>
    <?php
        include '../../php/loadNavBar_en.php';
    ?>
    </header>
    <main>
    <h1>Contact us</h1>
    <p>If you have any questions, please contact us by filling out the form below.</p>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-item">
            <label for="naam">Your name</label>
            <input id="naam" type="text" name="naam" value="<?php echo htmlentities($naam); ?>">
            <span class="message error"><?php echo $msgNaam; ?></span>
        </div>
        <div class="form-item">
            <label for="geslacht">Gender</label>
            <input id="man" name="geslacht" value="0" type="radio" <?php if(isset($_POST['gl']) && $_POST['gl'] === "man") {echo "checked";} ?>>Male
            <input id="vrouw" name="geslacht" value="1" type="radio" <?php if(isset($_POST['gl']) && $_POST['gl'] === "vrouw") {echo "checked";} ?>>Female
            <input id="anders" name="geslacht" value="2" type="radio" <?php if(isset($_POST['gl']) && $_POST['gl'] === "anders") {echo "checked";} ?>>Other
            <span class="message error"><?php echo $msgGeslacht; ?></span>
        </div>

        <div class="form-item">
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" value="<?php echo htmlentities($email); ?>">
            <span class="message error"><?php echo $msgEmail; ?></span>
        </div>

        <div class="form-item">
            <label for="bericht">Your message</label>
            <textarea name="bericht" id="bericht" cols="30" rows="10" value="<?php echo htmlentities($email); ?>"></textarea>
            <span class="message error"><?php echo $msgBericht; ?></span>
        </div>
        
        <p><button type="submit" id="btnSubmit" name="btnSubmit">Submit</button></p>
    </form>
    </main>
    <footer class="center">
        Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Ghent | est 2021
    </footer>
</body>
</html>