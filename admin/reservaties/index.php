<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false){
    header("location: ../../");
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

$data = '';

/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

// Validate credentials
if(empty($username_err) && empty($password_err)){
    // Prepare a select statement
    $sql = "SELECT id, naam, aantal, datum, opmerking, added_on FROM reservaties";
    $data = $pdo->query($sql)->fetchAll();
}
// Close connection
unset($pdo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-reservaties | Multicultura</title>
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
                <a class="logo" href="./"><img src="../../img/logo.png" alt="LOGO"></a>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item"><a class="navbar__links current-page" href="../../">Home</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../../reservaties/">Reserveren</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../../about/">About</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="https://github.com/YannickMyxe/restaurant">Project</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../../contact/">Contact</a></li>
                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) 
                        {   echo '<li class="navbar__item"><a class="navbar__links" href="../../account/">Account</a></li>';
                            echo '<li class="navbar__item"><a class="navbar__links" href="../../logout/"><i class="fas fa-user-circle"></i> Logout</a></li>';} 
                    else 
                        {echo '<li class="navbar__item"><a class="navbar__links" href="../../login/"><i class="fas fa-user-circle"></i> Login</a></li>';}
                    ?>
                    <li class="navbar_item">
                        <div class="lang-menu">
                            <div class="selected-lang">Administrate</div>
                            <ul>
                                <li><a href="../reservaties/">Reservaties</a></li>
                                <li><a href="../contact/">Contact</a></li>
                                <li><a href="../accounts/">Accounts</a> </li>
                            </ul>
                        </div>
                    </li>
                    <li class="navbar_item">
                        <div class="lang-menu">
                            <div class="selected-lang ne">Nederlands</div>
                            <ul>
                                <li><a class="ne" href="../../../">Nederlands</a></li>
                                <li><a class="fr" href="../../fr/">Frans</a></li>
                                <li><a class="en" href="../../en/">Engels</a> </li>
                                <li><a class="de" href="../../de/">Duits</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>    
        </nav>
    </header>
    <main>
        <div class="leftalign">
            <h1>Reservaties</h1>
            <div class="reservatie-cards">
                <?php
                    foreach ($data as $row)
                    {
                        echo '<form class="reservatie-card">
                            <p> <i>ID: </i><input type="number" readonly value="'.$row['id'].'"></p>
                            <p> <i>Naam: </i><input type="text" readonly value="'.$row['naam'].'"></p>
                            <p> <i>Aantal: </i><input type="number" readonly value="'.$row['aantal'].'"></p>
                            <p> <i>Op Datum: </i><input type="text" readonly value="'.$row['datum'].'"></p>
                            <p> <i>Opmerking: </i><input type="text" readonly value="'.$row['opmerking'].'"></p>
                            <p> <i>Datum-aanvraag: </i><input type="text" readonly value="'.$row['added_on'].'"></p>
                            <p><a class="button" href="./edit.php?id='.$row['id'].'">Edit</a></p>
                        </form>';
                    }
                ?>
            </div>
        </div>
    </main>
    <footer class="center">
        Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Gent | est 2021
    </footer>
</body>