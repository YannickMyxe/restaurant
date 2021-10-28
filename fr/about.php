<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos de | Multicultura</title>
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
                <a class="logo" href="../fr/"><img src="../img/logo.png" alt="LOGO"></a>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item"><a class="navbar__links" href="../fr/"><i class="fas fa-home"></i> Accueil</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../fr/reservaties.php"><i class="fas fa-utensils"></i> Réservation</a></li>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item current-page"><i class="fas fa-question-circle"></i> Info <i class="fas fa-caret-down"></i></div>
                            <ul>
                            <li class="navbar__item"><a class="navbar__links" href="../fr/about.php"><i class="fas fa-info-circle"></i> À propos de</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="https://github.com/YannickMyxe/restaurant"><i class="fas fa-code"></i> Infos sur le projet</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="../fr/contact.php"><i class="far fa-comment-dots"></i> Nous Contacter</a></li>
                            </ul>
                        </div>
                    </li>
                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                        echo '<li class="navbar__item"><a class="navbar__links" href="../account/"><i class="fas fa-user"></i> Compte</a></li>';
                        echo '<li class="navbar__item"><a class="navbar__links" href="../logout/"><i class="fas fa-sign-out-alt"></i> Deconnexion</a></li>';} 
                    else 
                        {echo '<li class="navbar__item"><a class="navbar__links" href="../login/"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>';}
                    ?>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item"><i class="fas fa-tools"></i> Administration <i class="fas fa-caret-down"></i></div>
                            <ul>
                                <li><a href="../admin/reservaties/">Réservations</a></li>
                                <li><a href="../admin/contact/">Contact</a></li>
                                <li><a href="../admin/accounts/">Comptes</a> </li>
                                <li><a href="../admin/roles/">Rolls</a> </li>
                            </ul>
                        </div>
                    </li>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item fr">Français</div>
                            <ul>
                                <li><a class="fr" href="../fr/about.html">Français</a></li>
                                <li><a class="ne" href="../about/">Néerlandais</a></li>
                                <li><a class="en" href="../en/about/">Anglais</a> </li>
                                <li><a class="de" href="../de/uber/">Allemand</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>    
        </nav>
    </header>

    <main>
        <div class="main-container">
            <div class="main-about">
                <h1>A propos de nous !</h1>
                <p>
                    <h2>Bienvenue au Restaurant Multicultura !</h2>
                    <br>Ce restaurant propose des plats savoureux issus de cultures et de pays différents. Nos plats sont toujours 
                    fraîchement préparés par nos différents chefs. En outre, vous pouvez profiter d'un bel intérieur. 
                    Tous les ingrédients sont importés du pays d'origine, ce qui vous garantit une expérience et une qualité optimales.
                    Notre restaurant propose également un large éventail de boissons différentes qui, tout comme nos plats, proviennent de différents pays. 
                    différentes cultures. Les plats que vous pouvez obtenir chez nous peuvent provenir de différents pays du monde, tels que 
                    des pays du monde entier tels que la Chine, le Japon, l'Italie, la France, l'Allemagne, la Thaïlande et les Philippines, 
                    États-Unis, Mexique, Brésil, Argentine, Australie, Nouvelle-Zélande, Maroc, Égypte, Turquie, ... .
                 </p>
            </div>
            <img class="image-about" src="../img/perceel_interieur_1.jpg" alt="">
        </div>

        <div class="sub1-container">
            <div class="sub1-about">
                <p>
                    <h2>Origine de notre restaurant</h2>
                    <br>Ce restaurant n'existe que depuis 2021. Le restaurant a été fondé par Dylan Daelman. 
                    et Yannick van Kerckvoorde. Nous avons eu l'idée de créer un
                    restaurant où les personnes d'autres cultures pourraient déguster des plats de leur pays, en particulier celles qui ne peuvent pas faire leurs plats chez elles ici. 
                    surtout ceux qui ne peuvent pas faire leurs plats à la maison ici. Par exemple, parce que certains ingrédients doivent être
                    certains ingrédients doivent être importés. Nous avons aussi ouvert ce restaurant pour les gens d'ici.
                    qui veulent goûter à une autre culture et qui, à cause de la Corona par exemple, ne peuvent pas le faire maintenant. (Parce que 
                    (Parce que voyager n'est pas si facile maintenant). En outre, nous voulons rapprocher les cultures et permettre à des personnes de différentes cultures de se rencontrer.
                    les cultures pour apprendre et découvrir les uns des autres. C'est l'origine de notre restaurant.
                 </p>
            </div>
            <img class="image2-about" src="../img/unnamed.jpg" alt="">
        </div>

        <div class="sub2-container">
            <div class="sub2-about">
                <p>
                    <h2>Où est situé notre restaurant ?</h2>
                    <br> Notre restaurant est situé dans la Gebroeders Desmetstraat 1, 9000 Gand. Sur la carte à droite, vous pouvez 
                    trouver l'emplacement.
                 </p>
            </div>
            <iframe class="map locatie-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2299.513860969966!2d3.7087566727579064!3d51.05978203806784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3710281d9c345%3A0xc50bd6d3515ba4db!2sKU%20Leuven%20Technologiecampus%20Gent!5e0!3m2!1sen!2sbe!4v1632398621501!5m2!1sen!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
        </div>
    </main>

    <footer class="center">
        Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Gand | est 2021
    </footer>
    <script src="../menu.js"></script>
</body>
</html>