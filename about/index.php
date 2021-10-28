<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over | Multicultura</title>
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
                    <li class="navbar__item"><a class="navbar__links" href="../"><i class="fas fa-home"></i> Home</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../reservaties/"><i class="fas fa-utensils"></i> Reserveren</a></li>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item current-page"><i class="fas fa-question-circle"></i> Info <i class="fas fa-caret-down"></i></div>
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
                                <li><a class="ne" href="../about/">Nederlands</a></li>
                                <li><a class="fr" href="../fr/about.php">Frans</a></li>
                                <li><a class="en" href="../en/about/">Engels</a> </li>
                                <li><a class="de" href="../de/uber">Duits</a></li>
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
                <h1>Over ons!</h1>
                <p>
                    <h2>Welkom bij Restaurant Multicultura!</h2>
                    <br>Dit restaurant heeft lekkere maaltijden uit verschillende culturen en landen. Onze gerechten worden steeds 
                    vers bereid door onze verschillende chefkoks. Daarnaast kan u genieten van een mooi interieur. 
                    Alle ingrediënten worden bij ons geïmporteerd uit het land van herkomst, zodat u zeker de beste ervaring en kwaliteit krijgt.
                    Ook biedt ons restaurant een groot aanbod aan verscheidene dranken die ook net zoals ons eten uit 
                    verschillende culturen komen. Gerechten die u bij ons kunt verkrijgen kunnen komen uit verschillende 
                    landen over heel de wereld zoals China, Japan, Italië, Frankrijk, Duitsland, Thailand, De Filipijnen, 
                    Verenigde Staten, Mexico, Brazilië, Argentinië, Australië, Nieuw-Zeeland, Marrokko, Egypte, Turkije, ... .
                 </p>
            </div>
            <img class="image-about" src="../img/perceel_interieur_1.jpg" alt="">
        </div>

        <div class="sub1-container">
            <div class="sub1-about">
                <p>
                    <h2>Oorsprong van ons restaurant</h2>
                    <br>Dit restaurant bestaat nog maar sinds 2021. Het restaurant is opgericht door Dylan Daelman 
                    en Yannick van Kerckvoorde. We waren op het idee gekomen om een
                    restaurant op te richten waarbij dat mensen van andere culturen van gerechten uit hun land konden 
                    genieten, zeker die die hun gerechten van thuis niet hier kunnen maken. Bijvoorbeeld doordat bepaalde
                    ingrediënten geïmporteerd moeten worden. Ook hebben we dit restaurant geopend voor mensen van hier
                    die een andere cultuur willen proeven en door bijvoorbeeld Corona dit nu niet kunnen doen. (Doordat 
                    op reis gaan nu niet echt gemakkelijk is.) Verder willen we culturen bijeen brengen en mensen uit verschillende
                    culturen van elkaar laten leren en ontdekken. Dit is de oorsprong van ons restaurant.
                 </p>
            </div>
            <img class="image2-about" src="../img/unnamed.jpg" alt="">
        </div>

        <div class="sub2-container">
            <div class="sub2-about">
                <p>
                    <h2>Waar is ons restaurant gelegen?</h2>
                    <br> Ons restaurant is gelegen in de Gebroeders Desmetstraat 1, 9000 Gent. Op de kaart hiernaast kan u 
                    de locatie vinden.
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