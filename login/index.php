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

$username = isset($_POST['username']) ? (string)$_POST['username'] : '';
$message = isset($_POST['message']) ? (string)$_POST['message'] : '';
$amount = isset($_POST['password']) ? (string)$_POST['password'] : '1';
$date = isset($_POST['datum']) ? (string)$_POST['datum'] : '';

$msgName = '';
$msgMessage = '';
$msgAmount = '';
$msgDate = '';

// form is sent: perform formchecking!
if (isset($_POST['btnSubmit'])) {

    $allOk = true;

    // username not empty
    if (trim($username) === '') {
        $msgName = 'Gelieve uw naam in te geven';
        $allOk = false;
    }
    if (trim($amount) === '') {
        $msgAmount = 'Gelieve het password personen mee te geven voor uw reservatie';
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
        $stmt = $db->prepare('INSERT INTO reservaties (naam, password, datum, opmerking, added_on) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute(array($username, $amount, $date, $message, (new DateTime())->format('Y-m-d H:i:s')));

        // the query succeeded, redirect to this very same page
        if ($db->lastInsertId() !== 0) {
            header('Location: bedankt_reservatie.php?username=' . urlencode($username));
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
    <meta username="viewport" content="width=device-width, initial-scale=1.0">
    <title>login | Multicultura</title>
    <link rel="stylesheet" href="../static/chat.css">
    <link rel="stylesheet" href="../static/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/map.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="icon" href="../img/logo.png">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="navbar__container">
                <a class="logo" href="./"><img src="../img/logo.png" alt="LOGO"></a>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item"><a class="navbar__links" href="../">Home</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="./">Login</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../reservaties/">Reserveren</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../about/">About</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="https://github.com/YannickMyxe/restaurant">Project</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../contact/">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
    <div class="login">
        <h1>Login!</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-item">
                    <label for="username" id="username">Accountnaam</label>
                    <input username="username" id="username" class="text" type="text" maxlength="100" value="<?php echo htmlentities($username); ?>">
                    <span class="message error"><?php echo $msgName; ?></span>
                </div>

                <div class="form-item">
                    <label for="password">Wachtwoord</label>
                    <input type="password" username="password" id="password">
                    <span class="message error"><?php echo $msgAmount; ?></span>
                </div>
                <p>
                    <button type="submit" id="btnSubmit" username="btnSubmit" class="button btnlogin">Login</button>
                    <a href="../register/" class="button btnregistreer">Maak een account aan</a>
                </p>
            </form>
        </div>
    </main>
    <footer class="center">
        Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Gent | est 2021
    </footer>
</body>
</html>