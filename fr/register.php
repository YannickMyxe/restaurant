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
$email = isset($_POST['email']) ? (string)$_POST['email'] : '';
$password = isset($_POST['password']) ? (string)$_POST['password'] : '';
$passwordAgain = isset($_POST['password-again']) ? (string)$_POST['password-again'] : '';

$msgName = '';
$msgEmail = '';
$msgPassword = '';
$msgPasswordAgain = '';

// form is sent: perform formchecking!
if (isset($_POST['btnSubmit'])) {

    $allOk = true;

    // username not empty
    if (trim($username) === '') {
        $msgName = 'Veuillez entrer votre nom';
        $allOk = false;
    }
    if (trim($email) === '') {
        $msgEmail = 'Veuillez entrer votre adresse e-mail';
        $allOk = false;
    }
    if (trim($password) === '') {
        $msgPassword = 'Veuillez entrer votre mot de passe';
        $allOk = false;
    }
    if (trim($passwordAgain) === '') {
        $msgPasswordAgain = 'Veuillez entrer à nouveau votre mot de passe';
        $allOk = false;
    }

    if (!(trim($password) === trim($passwordAgain)))
    {
        $msgPasswordAgain = 'Les mots de passe donnés ne correspondent pas';
        $allOk = false;
    }


    // end of form check. If $allOk still is true, then the form was sent in correctly
    if ($allOk) {
        $param_password = password_hash($password, PASSWORD_DEFAULT);
        // build & execute prepared statement
        $stmt = $db->prepare('INSERT INTO accounts (username, email, password, created_at) VALUES (?, ?, ?, ?)');
        $stmt->execute(array($username, $email, $param_password, (new DateTime())->format('Y-m-d H:i:s')));

        // the query succeeded, redirect to this very same page
        if ($db->lastInsertId() !== 0) {
            header('Location: bedankt_regestratie.php?username=' . urlencode($username));
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
    <title>enregistrez | Multicultura</title>
    <link rel="stylesheet" href="../static/chat.css">
    <link rel="stylesheet" href="../static/home.css">
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
    <div class="login">
        <h1>Enregistrez un compte !</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-item">
                    <label for="username" id="username">Nom du compte</label>
                    <input name="username" id="username" class="text" type="text" maxlength="100" value="<?php echo htmlentities($username); ?>">
                    <span class="message error"><?php echo $msgName; ?></span>
                </div>

                <div class="form-item">
                    <label for="email" id="email">Courriel</label>
                    <input name="email" id="email" class="email" type="text" maxlength="100" value="<?php echo htmlentities($email); ?>">
                    <span class="message error"><?php echo $msgEmail; ?></span>
                </div>

                <div class="form-item">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password">
                    <span class="message error"><?php echo $msgPassword; ?></span>
                </div>
                <div class="form-item">
                    <label for="password-again">Nouveau mot de passe</label>
                    <input type="password"  name="password-again">
                    <span class="message error"><?php echo $msgPasswordAgain; ?></span>
                </div>
                <p>
                    <button type="submit" id="btnSubmit" name="btnSubmit" class="button btnlogin">Créer un compte</button>
                    <a href="../login/" class="button btnregistreer">Vous avez déjà un compte</a>
                </p>
            </form>
        </div>
    </main>
    <footer class="center">
        Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Gand | est 2021
    </footer>
</body>
</html>