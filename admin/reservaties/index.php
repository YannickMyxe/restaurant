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