<?php
    session_start();
    // Check if the user is already logged in, if yes then redirect him to welcome page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false){
        header("location: ../login");
        exit;
    }
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
    
    $username = isset($_POST['username']) ? (string)$_POST['username'] : $_SESSION['username'];
    $email = isset($_POST['email']) ? (string)$_POST['email'] : $_SESSION['email'];
    $id = $_SESSION['id'];

    $msgUsername = '';
    $msgEmail = '';
    
    // form is sent: perform formchecking!
    if (isset($_POST['btnSubmit'])) {
    
        $allOk = true;
    
        // username not empty
        if (trim($username) === '') {
            $msgUsername = 'Gelieve uw naam in te geven';
            $allOk = false;
        }
        if (trim($email) === '') {
            $msgEmail = 'Gelieve uw email in te geven';
            $allOk = false;
        }
        // end of form check. If $allOk still is true, then the form was sent in correctly
        if ($allOk) {
            // build & execute prepared statement
            $data = [
                'username' => $username,
                'email' => $email,
                'id' => $id,
            ];
            $sql = "UPDATE accounts SET username=:username, email=:email WHERE id=:id";
            $stmt= $db->prepare($sql);
            $stmt->execute($data);
    
            // the query succeeded, redirect to this very same page
            if ($db->lastInsertId() !== 0) {
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;                            
                $_SESSION["email"] = $email;  
                header('Location: ../');
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
    <title>Account | Multicultura</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="icon" href="img/logo.png">
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
                    <li class="navbar__item"><a class="navbar__links" href="../reservaties/">Reserveren</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../about/">About</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="https://github.com/YannickMyxe/restaurant">Project</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../contact/">Contact</a></li>
                    <li class="navbar__item"><a class="navbar__links current-page" href="../login/"><i class="fas fa-user-circle"></i>Login</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <h1>Account gegevens</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="id">Id</label>
            <input type="text" name="id" id="id" readonly value="<?php echo htmlentities($_SESSION['id']); ?>">
            <label for="username">Naam</label>
            <input type="text" name="username" id="username" value="<?php echo htmlentities($username); ?>">
            <span class="message error"><?php echo $msgUsername; ?></span>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo htmlentities($email); ?>">
            <span class="message error"><?php echo $msgEmail; ?></span>
            <button type="submit" id="btnSubmit" name="btnSubmit" class="button btnlogin">Pas account aan</button>
        </form>
    </main>
    <footer class="center">
        Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Gent | est 2021
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="menu.js"></script>
<script src="static/chat.js"></script>
<script src="static/responses.js"></script>
</html>