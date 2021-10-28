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