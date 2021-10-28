<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../account/");
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

/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, email, password FROM accounts WHERE email = :email";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Check if username exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $email = $row["email"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            $_SESSION["email"] = $email;                            
                            
                            // Redirect user to welcome page
                            header("location: ../");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($pdo);

    /* Attempt to connect to MySQL database */
    try{
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        die("ERROR: Could not connect. " . $e->getMessage());
    }

    // Prepare a select statement
    $stmt = $pdo->prepare("SELECT roles.id, roles.name, roles.description, roles.rolenummer FROM rolelink, roles WHERE rolelink.accountID=? && rolelink.RoleID = roles.id");
    $stmt->execute([$_SESSION["id"]]); 
    $user_roles = $stmt->fetchall();
    $_SESSION['roles'] = $user_roles;

    // Close connection
    unset($pdo);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login | Multicultura</title>
    <link rel="stylesheet" href="../static/chat.css">
    <link rel="stylesheet" href="../static/home.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
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
                    <li class="navbar__item"><a class="navbar__links" href="../"><i class="fas fa-home"></i> Home</a></li>
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
                        echo '<li class="navbar__item"><a class="navbar__links" href="account/"><i class="fas fa-user"></i> Account</a></li>';
                        echo '<li class="navbar__item"><a class="navbar__links" href="logout/"><i class="fas fa-sign-out-alt"></i> Logout</a></li>';} 
                    else 
                        {echo '<li class="navbar__item"><a class="navbar__links current-page" href="login/"><i class="fas fa-sign-in-alt"></i> Login</a></li>';}
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
                                <li><a class="ne" href="../login">Nederlands</a></li>
                                <li><a class="fr" href="../fr/login.php">Frans</a></li>
                                <li><a class="en" href="../en/login/">Engels</a> </li>
                                <li><a class="de" href="../de/anmeldung/">Duits</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>    
        </nav>
    </header>
    <main>
    <div class="login">
        <h1>Login!</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-item">
                    <label for="email" id="email">Emailadres</label>
                    <input name="email" id="email" class="email" type="email" maxlength="100" value="<?php echo htmlentities($email); ?>">
                    <span class="message error"><?php echo $email_err; ?></span>
                </div>

                <div class="form-item">
                    <label for="password">Wachtwoord</label>
                    <input type="password" name="password" id="password">
                    <span class="message error"><?php echo $password_err; ?></span>
                </div>
                <p>
                    <button type="submit" id="btnSubmit" name="btnSubmit" class="button btnlogin">Login</button>
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