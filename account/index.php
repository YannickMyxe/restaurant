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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
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
                    <li class="navbar__item"><a class="navbar__links current-page" href="../"><i class="fas fa-home"></i> Home</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../reservaties/"><i class="fas fa-utensils"></i> Reserveren</a></li>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item"><i class="fas fa-question-circle"></i> Info <i class="fas fa-caret-down"></i></div>
                            <ul>
                            <li class="navbar__item"><a class="navbar__links" href="../about/"><i class="fas fa-info-circle"></i> About us</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="https://github.com/YannickMyxe/restaurant"><i class="fas fa-code"></i> Project info</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="../contact/"><i class="far fa-comment-dots"></i> Contact us</a></li>
                            </ul>
                        </div>
                    </li>
                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                        echo '<li class="navbar__item"><a class="navbar__links" href="../account/"><i class="fas fa-user"></i> Account</a></li>';
                        echo '<li class="navbar__item"><a class="navbar__links" href="../logout/"><i class="fas fa-sign-out-alt"></i> Logout</a></li>';} 
                    else 
                        {echo '<li class="navbar__item"><a class="navbar__links" href="../login/"><i class="fas fa-sign-in-alt"></i> Login</a></li>';}
                    ?>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item"><i class="fas fa-tools"></i> Administrate <i class="fas fa-caret-down"></i></div>
                            <ul>
                                <li><a href="../admin/reservaties/">Reservaties</a></li>
                                <li><a href="../admin/contact/">Contact</a></li>
                                <li><a href="../admin/accounts/">Accounts</a> </li>
                                <li><a href="../admin/roles/">Rollen</a> </li>
                            </ul>
                        </div>
                    </li>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item ne">Nederlands</div>
                            <ul>
                                <li><a class="ne" href="../">Nederlands</a></li>
                                <li><a class="fr" href="fr/">Frans</a></li>
                                <li><a class="en" href="en/">Engels</a> </li>
                                <li><a class="de" href="de/">Duits</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>    
        </nav>
    </header>
    <main>
        <h1>Jouw Account</h1>
        <p>Hier kan je jouw gegevens aanpassen indien er wijzegingen nodig zijn.</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php if(isset($_SESSION['role']) && $_SESSION['role'] === 'editor'){
                echo'
                <label for="id">Id</label>
                <input type="text" name="id" id="id" readonly value="<?php echo htmlentities($_SESSION["id"]); ?>">';} 
            else echo '';?>
            <label for="username">Naam</label>
            <input type="text" name="username" id="username" value="<?php echo htmlentities($username); ?>">
            <span class="message error"><?php echo $msgUsername; ?></span>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo htmlentities($email); ?>">
            <span class="message error"><?php echo $msgEmail; ?></span>
            <button type="submit" id="btnSubmit" name="btnSubmit" class="button">Pas account aan</button>
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