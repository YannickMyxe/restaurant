<?php
// Initialize the session
session_start();

include "../../php/isAdmin.php";
// Check if the user is already logged in, if not then redirect him to loin page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false || !isAdmin()){
    header("location: ../../login");
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
    $sql = "SELECT contact.messageID, contact.naam as persoon, geslachten.naam as geslacht, contact.email, contact.bericht FROM contact, geslachten WHERE contact.geslacht = geslachten.id";
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
    <title>Admin-contact | Multicultura</title>
    <?php
        include '../../php/loadCss.php'
    ?>
    <link rel="icon" href="../../img/logo.png">
</head>
<body>
    <header>
    <?php
        include '../../php/loadNavBar.php';
    ?>
    </header>
    <main>
        <div class="leftalign">
            <h1>Contact messages</h1>
            <div class="reservatie-cards">
                <?php
                    foreach ($data as $row)
                    {
                        echo '<form class="reservatie-card">
                            <p> <i>ID: </i><input type="number" readonly value="'.$row['messageID'].'"></p>
                            <p> <i>Naam: </i><input type="text" readonly value="'.$row['persoon'].'"></p>
                            <p> <i>Email: </i><input type="email" readonly value="'.$row['email'].'"></p>
                            <p> <i>Geslacht: </i><input type="text" readonly value="'.$row['geslacht'].'"></p>
                            <p> <i>Bericht: </i><textarea readonly>"'.$row['bericht'].'</textarea></p>
                            <p><a class="button" href="./edit.php?id='.$row['messageID'].'">Edit</a></p>
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