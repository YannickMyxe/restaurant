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
        $msgName = 'Bitte geben Sie Ihren Namen ein';
        $allOk = false;
    }
    if (trim($amount) === '') {
        $msgAmount = 'Bitte geben Sie die Anzahl der Personen für Ihre Reservierung an';
        $allOk = false;
    }

    if (trim($date) === '') {
        $msgDate = 'Bitte geben Sie ein Datum ein';
        $allOk = false;
    }

    // end of form check. If $allOk still is true, then the form was sent in correctly
    if ($allOk) {
        if (trim($message) === '') {
            $message = "Es wurden keine Kommentare hinzugefügt";
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
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservierungen | Multicultura</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/map.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="icon" href="../../img/logo.png">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="navbar__container">
                <a class="logo" href="../"><img src="../../img/logo.png" alt="LOGO"></a>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>

                <ul class="navbar__menu">
                    <li class="navbar__item"><a class="navbar__links" href="../../de">Startseite</a></li>
                    <li class="navbar__item"><a class="navbar__links current-page" href="../../de/buchen">Buchung</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../about/">Über</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="https://github.com/YannickMyxe/restaurant">Projekt</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../../de/Kontakt">Kontakt</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="login/"><i class="fas fa-user-circle"></i> Anmeldung</a></li>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item de">
                                Deutsch
                            </div>
                            <ul>
                                <li>
                                    <a class="de" href="../../de/buchen">Deutsch</a>
                                </li>

                                <li>
                                    <a class="fr" href="../../fr/reservaties.php">Französisch</a>
                                </li>

                                <li>
                                    <a class="ne" href="../../reservaties">Niederländisch</a>
                                </li>

                                <li>
                                    <a class="en" href="../../en/reservations/">Englisch</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="reservaties">
            <h1>Reservierungen!</h1>
            <p>Willkommen im Buchungsmenü, bitte füllen Sie dieses Formular aus.</p>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-item">
                    <label for="name" id="name">Ihr Name</label>
                    <input name="name" id="name" class="text" type="text" maxlength="100" value="<?php echo htmlentities($name); ?>">
                    <span class="message error"><?php echo $msgName; ?></span>
                </div>

                <div class="form-item">
                    <label for="aantal">Anzahl der Personen</label>
                    <input type="number" name="aantal" id="aantal" min="1" max="20" value="<?php echo htmlentities($amount); ?>">
                    <span class="message error"><?php echo $msgAmount; ?></span>
                </div>

                <div class="form-item">
                    <label for="datum">Datum der Reservierung</label>
                    <input type="datetime-local" name="datum" id="datum" value="<?php echo htmlentities($date); ?>">
                    <span class="message error"><?php echo $msgDate; ?></span>
                </div>

                <div class="form-item">
                    <label for="message">Haben Sie irgendwelche Kommentare?</label>
                    <textarea name="message" id="message" class="text"><?php echo htmlentities($message); ?></textarea>
                    <span class="message error"><?php echo $msgMessage; ?></span>
                </div>

                <p><button type="submit" id="btnSubmit" name="btnSubmit">Bestätigen Sie Ihre Reservierung</button></p>
            </form>
        </div>
    </main>
    <footer class="center">
        Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Gent | est 2021
    </footer>
</body>
</html>