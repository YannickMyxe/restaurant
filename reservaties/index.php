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

$name = isset($_POST['name']) ? (string)$_POST['name'] : '';
$message = isset($_POST['message']) ? (string)$_POST['message'] : '';
$amount = isset($_POST['aantal']) ? (string)$_POST['aantal'] : '1';
$date = isset($_POST['datum']) ? (string)$_POST['datum'] : '';

$msgName = '';
$msgMessage = '';
$msgAmount = '';
$msgDate = '';

// form is sent: perform formchecking!
if (isset($_POST['btnSubmit'])) {

    $allOk = true;

    // name not empty
    if (trim($name) === '') {
        $msgName = 'Gelieve uw naam in te geven';
        $allOk = false;
    }
    if (trim($amount) === '') {
        $msgAmount = 'Gelieve het aantal personen mee te geven voor uw reservatie';
        $allOk = false;
    }

    if (trim($date) === '') {
        $msgDate = 'Gelieve een datum in te geven';
        $allOk = false;
    }

    // end of form check. If $allOk still is true, then the form was sent in correctly
    if ($allOk) {
        if (trim($message) === '') {
            $message = "geen opmerking toegevoegd";
        }
        // build & execute prepared statement
        $stmt = $db->prepare('INSERT INTO reservaties (naam, aantal, datum, opmerking, added_on) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute(array($name, $amount, $date, $message, (new DateTime())->format('Y-m-d H:i:s')));

        // the query succeeded, redirect to this very same page
        if ($db->lastInsertId() !== 0) {
            header('Location: bedankt_reservatie.php?name=' . urlencode($name));
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
    <title>Reservaties | Multicultura</title>
    <?php
        include '../php/loadCss.php'
    ?>
    <link rel="icon" href="../img/logo.png">
</head>
<body>
<header>
<?php
    include '../php/isAdmin.php';
    include '../php/loadNavBar.php';
?>
</header>
<main>
    <h1>Reservaties!</h1>
    <p>Welkom bij het reservatie menu, gelieve dit formulier in te vullen.</p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-item">
            <label for="name" id="name">Jouw naam</label>
            <input name="name" id="name" class="text" type="text" maxlength="100" value="<?php echo htmlentities($name); ?>">
            <span class="message error"><?php echo $msgName; ?></span>
        </div>

        <div class="form-item">
            <label for="aantal">Aantal personen</label>
            <input type="number" name="aantal" id="aantal" min="1" max="20" value="<?php echo htmlentities($amount); ?>">
            <span class="message error"><?php echo $msgAmount; ?></span>
        </div>

        <div class="form-item">
            <label for="datum">Datum reservatie</label>
            <input type="datetime-local" name="datum" id="datum" value="<?php echo htmlentities($date); ?>">
            <span class="message error"><?php echo $msgDate; ?></span>
        </div>

        <div class="form-item">
            <label for="message">Heb je nog opmerkingen?</label>
            <p class="form-optional">Optioneel, dit hoef je niet in te vullen.</p>
            <textarea name="message" id="message" class="text"><?php echo htmlentities($message); ?></textarea>
            <span class="message error"><?php echo $msgMessage; ?></span>
        </div>
        <button type="submit" id="btnSubmit" name="btnSubmit" class="button">Send your message</button>
    </form>
</main>
<footer class="center">
    Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Gent | est 2021
</footer>
</body>
</html>

