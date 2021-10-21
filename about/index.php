<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about | Multicultura</title>
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
    <h1>About us!</h1>
</body>
</html>