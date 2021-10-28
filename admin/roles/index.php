<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if not then redirect him to loin page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false){
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

// Prepare a select statement
$stmt = $pdo->prepare("SELECT roles.name, roles.description FROM rolelink, roles WHERE rolelink.accountID=? && rolelink.RoleID = roles.id");
$stmt->execute([$id]); 
$user_roles = $stmt->fetchall();

if(!empty($user_roles))
{
    foreach($user_roles as $rol)
    {
        echo "<p>".$rol['name'].": ".$rol['description']."</p>";
    }
}

// Close connection
unset($pdo);


#region GET USER
// #set name/id
if (isset($_POST['gotoid']) && $_POST['gotoid'] !== 0){ 
    $location = "location: ./?id=".$_POST['gotoid'];
    header($location);
}

if (!isset($_POST['naam'])){
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
        $stmt = $pdo->prepare("SELECT * FROM accounts WHERE id=?");
        $stmt->execute([$id]); 
        $user = $stmt->fetch();
    }
    // Close connection
    unset($pdo);
}
#endregion GET USER

#region ROLES
// #get roles
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
    $sql = "SELECT * FROM roles";
    $data = $pdo->query($sql)->fetchAll();
}
// Close connection
unset($pdo);
#endregion ROLES

#region SET ROLES 
//SET ROLES SECTION 
$naam = isset($_POST['naam']) ? (string)$_POST['naam'] : $user['username'];
$id = isset($_POST['id']) ? (string)$_POST['id'] : $user['id'];

$msgError = "";

if(isset($_POST['btnSubmit'])){
    if(!empty($_POST['roles'])) {
        $selected = $_POST['roles'];
        echo 'You have chosen: ' . $selected;
    } else {
        echo 'Please select the value.';
    }
    $allOk = true;
    if(empty($_POST['roles']))
    {
        $msgError = "Er is een fout gebeurd bij roles, gelieve een role te kiezen";
        $allOk = false;
    }

    if($allOk)
    {
        try{
            $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            die("ERROR: Could not connect. " . $e->getMessage());
        }
        // build & execute prepared statement
        $stmt = $pdo->prepare('INSERT INTO rolelink (accountID, RoleID) VALUES (?, ?)');
        $stmt->execute(array($id, $selected));

        // the query succeeded, redirect to this very same page
        if ($pdo->lastInsertId() !== 0) {
            header('Location: ./?id='.$id);
            exit();
        } // the query failed
        else {
            echo 'Databankfout.';
            exit;
        }
    }

}
unset($pdo)
#endregion SET ROLES

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-rollen | Multicultura</title>
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
                        <div class="drop-menu">
                            <div class="selected-drop-item">Administrate</div>
                            <ul>
                                <li><a href="../reservaties/">Reservaties</a></li>
                                <li><a href="../contact/">Contact</a></li>
                                <li><a href="../accounts/">Accounts</a> </li>
                            </ul>
                        </div>
                    </li>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item ne">Nederlands</div>
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
            <h1>Rollen aanpassen</h1>
            <div class="">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <label for="id">ID</label><input name="id" type="number" readonly value="<?php echo htmlentities($id);?>"></p>
                    <label for="naam">Naam</label><input name="naam"  type="text" readonly value="<?php echo htmlentities($naam);?>"></p>
                    <label for="role-select">Choose role</label>
                    <select name="roles" id="role-select">
                        <option value="" disabled <?php if(!isset($_POST['roles'])) echo "selected"; ?>>--Please choose an option--</option>
                        <?php
                            foreach($data as $role){
                                echo "<option value=".$role['id'].">".$role['name']."</option>";
                            }
                        ?>
                    </select>
                    <span class="message error"><?php echo $msgError; ?></span>
                    <button type="submit" id="btnSubmit" name="btnSubmit" class="button">Voeg role toe</button>
                </form>
            </div>
            <h2>Veranderen van ID </h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="gotoid">ID</label><input type="number" name="gotoid" id="gotoid">
                <button type="submit" id="btnSubmit-id" name="btnID" class="button">Verander naar id</button>
            </form>
            <p>
                <a class="button" href="./?id=<?php if($id == 1){echo 1;}else{echo ($id-1);} ?>"> << vorige </a> 
                <a class="button" href="./?id=<?php echo ($id+1);?>"> >> volgende </a>
            </p>
        </div>
    </main>
    <footer class="center">
        Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Gent | est 2021
    </footer>
</body>