<?php
    session_start();
    include "../../php/isAdmin.php";
    // Check if the user is already logged in, if not then redirect him to loin page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false || !isAdmin()){
        header("location: ../../login");
        exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-accounts | Multicultura</title>
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
            <h1>Accounts</h1>
            <div>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eaque, vitae mollitia cupiditate porro id! Culpa, corporis enim. Quam, hic, quaerat dignissimos quasi distinctio facere deleniti eligendi recusandae soluta similique voluptate corrupti delectus officiis, voluptates qui possimus nisi harum impedit mollitia? Optio at corrupti consectetur maxime id delectus quis fugiat!
                </p>
            </div>
        </div>
    </main>
    <footer class="center">
        Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Gent | est 2021
    </footer>
</body>