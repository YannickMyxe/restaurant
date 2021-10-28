<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uber | Multicultura</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="../../css/main.css">
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
                    <li class="navbar__item"><a class="navbar__links" href="../../de/"><i class="fas fa-home"></i> Startseite</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../fr/reservaties.php"><i class="fas fa-utensils"></i> Reservierung</a></li>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item current-page"><i class="fas fa-question-circle"></i> Infos <i class="fas fa-caret-down"></i></div>
                            <ul>
                            <li class="navbar__item"><a class="navbar__links" href="../fr/about.php"><i class="fas fa-info-circle"></i> Über</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="https://github.com/YannickMyxe/restaurant"><i class="fas fa-code"></i> Informationen über das Projekt</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="../fr/contact.php"><i class="far fa-comment-dots"></i> Kontakt</a></li>
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
                            <div class="selected-drop-item"><i class="fas fa-tools"></i> Verwaltung <i class="fas fa-caret-down"></i></div>
                            <ul>
                                <li><a href="../admin/reservaties/">Reservierungen</a></li>
                                <li><a href="../admin/contact/">Kontakt</a></li>
                                <li><a href="../admin/accounts/">Konten</a> </li>
                                <li><a href="../admin/roles/">Rollen</a> </li>
                            </ul>
                        </div>
                    </li>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item de">Deutsch</div>
                            <ul>
                                <li><a class="fr" href="../../fr/about.php">Français</a></li>
                                <li><a class="ne" href="../../about/">Néerlandais</a></li>
                                <li><a class="en" href="../../en/about/">Anglais</a> </li>
                                <li><a class="de" href="../../de/uber">Allemand</a></li>
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
                <h1>Über uns!</h1>
                <p>
                    <h2>Willkommen im Restaurant Multicultura!</h2>
                    <br>Das Restaurant bietet schmackhafte Gerichte aus verschiedenen Kulturen und Ländern. Unsere Gerichte sind immer 
                    frisch zubereitet von unseren verschiedenen Köchen. Darüber hinaus können Sie eine schöne Innenausstattung genießen. 
                    Alle Zutaten werden aus dem Herkunftsland importiert, was Ihnen die beste Erfahrung und Qualität garantiert.
                    Unser Restaurant bietet auch eine große Auswahl an verschiedenen Getränken, die ebenso wie unsere Gerichte aus verschiedenen Ländern stammen. 
                    verschiedene Kulturen. Die Gerichte, die Sie bei uns bekommen können, kommen aus verschiedenen Ländern der Welt, wie zum Beispiel 
                    Ländern auf der ganzen Welt wie China, Japan, Italien, Frankreich, Deutschland, Thailand und den Philippinen, 
                    USA, Mexiko, Brasilien, Argentinien, Australien, Neuseeland, Marokko, Ägypten, Türkei, ... .
                 </p>
            </div>
            <img class="image-about" src="../../img/perceel_interieur_1.jpg" alt="">
        </div>

        <div class="sub1-container">
            <div class="sub1-about">
                <p>
                    <h2>Ursprung unseres Restaurants</h2>
                    <br>Dieses Restaurant gibt es erst seit 2021. Das Restaurant wurde von Dylan Daelman gegründet 
                    und Yannick van Kerckvoorde. Wir hatten die Idee, eine
                    ein Restaurant, in dem Menschen aus anderen Kulturen Gerichte aus ihrem Land genießen können, vor allem diejenigen, die ihre Gerichte hier nicht zu Hause zubereiten können. 
                    Vor allem diejenigen, die ihre Gerichte nicht zu Hause zubereiten können. Zum Beispiel, weil einige Inhaltsstoffe sein müssen
                    Einige Zutaten müssen importiert werden. Wir haben auch dieses Restaurant für die Leute hier eröffnet.
                    die eine andere Kultur kennen lernen wollen und die, zum Beispiel wegen des Corona, das jetzt nicht mehr tun können. (Weil 
                    (Weil das Reisen jetzt nicht mehr so einfach ist). Außerdem wollen wir die Kulturen zusammenbringen und die Begegnung zwischen Menschen aus verschiedenen Kulturen ermöglichen.
                    Kulturen, um voneinander zu lernen und zu entdecken. Dies ist der Ursprung unseres Restaurants.
                 </p>
            </div>
            <img class="image2-about" src="../../img/unnamed.jpg" alt="">
        </div>

        <div class="sub2-container">
            <div class="sub2-about">
                <p>
                    <h2>Wo befindet sich unser Restaurant?</h2>
                    <br> Unser Restaurant befindet sich in der Gebroeders Desmetstraat 1, 9000 Gent. Auf der Karte auf der rechten Seite finden Sie 
                    den Standort zu finden.
                 </p>
            </div>
            <iframe class="map locatie-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2299.513860969966!2d3.7087566727579064!3d51.05978203806784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3710281d9c345%3A0xc50bd6d3515ba4db!2sKU%20Leuven%20Technologiecampus%20Gent!5e0!3m2!1sen!2sbe!4v1632398621501!5m2!1sen!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
        </div>
    </main>

    <footer class="center">
        Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Gent | est 2021
    </footer>
    <script src="../menu.js"></script>
</body>
</html>