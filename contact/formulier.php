<?php

// Show all errors (for educational purposes)
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

// Constanten (connectie-instellingen databank)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'restaurant');

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
$email = isset($_POST['email']) ? (string)$_POST['email'] : '';
$findme = isset($_POST['radio-findme']) ? (string)$_POST['radio-findme'] : '';
$msgName = '';
$msgMessage = '';
$msgEmail = '';
$msgFindme = '';

// form is sent: perform formchecking!
if (isset($_POST['btnSubmit'])) {

    $allOk = true;

    // name not empty
    if (trim($name) === '') {
        $msgName = 'Please fill in your name';
        $allOk = false;
    }

    if (trim($message) === '') {
        $msgMessage = 'Please leave a message';
        $allOk = false;
    }

    if (trim($email) === '') {
        $msgEmail = 'Please enter your email adress so I can contact you back';
        $allOk = false;
    }

    if (trim($findme) === '') {
        $msgFindme = 'Please select one of the following options';
        $allOk = false;
    }

    // end of form check. If $allOk still is true, then the form was sent in correctly
    if ($allOk) {
        // build & execute prepared statement
        $stmt = $db->prepare('INSERT INTO messages (sender, email, message, findme, added_on) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute(array($name, $email, $message, $findme, (new DateTime())->format('Y-m-d H:i:s')));

        // the query succeeded, redirect to this very same page
        if ($db->lastInsertId() !== 0) {
            header('Location: formchecking_thanks.php?name=' . urlencode($name));
            exit();
        } // the query failed
        else {
            echo 'Databankfout.';
            exit;
        }
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="/img/logo.png">
    <title>Contact | Restaurant Multicultura</title>
</head>
<body>
    <h1>Contacteer ons</h1>
    <p>Als u vragen hebt, kunt u ons contacteren door onderstaand formulier in te vullen.</p>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="naam">Uw naam</label>
        <input id="naam" type="text">

        <label for="geslacht">Geslacht</label>
        <input id="geslacht" name="gl" type="radio">Man
        <input id="geslacht" name="gl" type="radio">Vrouw
        <input id="geslacht" name="gl" type="radio">Anders

        <label for="email">E-mail</label>
        <input id="email" type="email">

        <label for="bericht">Uw bericht</label>
        <textarea name="berichten" id="bericht" cols="30" rows="10"></textarea>

        <input type="submit" name="submit">
    </form>
</body>
</html>