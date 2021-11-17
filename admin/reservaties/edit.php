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

$id = (isset($_GET["id"]))? $_GET["id"] : 0;

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
    $stmt = $pdo->prepare("SELECT * FROM reservaties WHERE id=?");
    $stmt->execute([$id]); 
    $user = $stmt->fetch();
}
// Close connection
unset($pdo);

try{
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

$naam = isset($_POST['naam']) ? (string)$_POST['naam'] : '';
$aantal = isset($_POST['aantal']) ? (string)$_POST['aantal'] : '';
$datum = isset($_POST['datum']) ? (string)$_POST['datum'] : '';
$opmerking = isset($_POST['opmerking']) ? (string)$_POST['opmerking'] : '';
$id = isset($_POST['id']) ? (string)$_POST['id'] : 1;;

$msgNaam = '';
$msgAantal = '';

// form is sent: perform formchecking!
if (isset($_POST['btnSubmit'])) {

    $allOk = true;

    // naam not empty
    if (trim($naam) === '') {
        $msgUsername = 'Gelieve uw naam in te geven';
        $allOk = false;
    }
    if (trim($aantal) === '') {
        $msgEmail = 'Gelieve een aantal in te geven';
        $allOk = false;
    }
    // end of form check. If $allOk still is true, then the form was sent in correctly
    if ($allOk) {
        // build & execute prepared statement
        $data = [
            'naam' => $naam,
            'aantal' => $aantal,
            'datum' => $datum,
            'opmerking' => $opmerking,
            'id' => $id,
        ];
        $sql = "UPDATE reservaties SET naam=:naam, aantal=:aantal, datum=:datum, opmerking=:opmerking WHERE id=:id";
        $stmt= $pdo->prepare($sql);
        $stmt->execute($data);

        // the query succeeded, redirect to this very same page
        if ($pdo->lastInsertId() !== 0) {
            header('Location: ../reservaties');
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
            <div class="">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <label for="id">ID</label><input name="id" type="number" readonly value="<?php echo htmlentities($user['ID']);?>"></p>
                    <label for="naam">Naam</label><input name="naam"  type="text" value="<?php echo htmlentities($user['naam']);?>"></p>
                    <label for="aantal">aantal</label><input name="aantal" type="number" value="<?php echo htmlentities($user['aantal']);?>"></p>
                    <label for="datum">datum</label><input name="datum" type="datetime-local" value="<?php echo htmlentities($user['datum']);?>"></p>
                    <label for="opmerking">opmerking</label><textarea name="opmerking" id="opmerking"><?php echo htmlentities($user['opmerking']);?></textarea></p>
                    <label for="datum-toegevoegd">datum-toegevoegd</label><input name="datum-toegevoegd" type="text" readonly value="<?php echo htmlentities($user['added_on']);?>"></p>
                    
                    <a href="./" class="button">Anuleren</a>
                    <button type="submit" id="btnSubmit" name="btnSubmit" class="button">Verander gegevens</button>
                </form>
            </div>
        </div>
    </main>
    <footer class="center">
        Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Gent | est 2021
    </footer>
</body>