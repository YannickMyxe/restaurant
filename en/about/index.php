<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Multicultura</title>
    <?php
        include '../../php/loadCss.php'
    ?>
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
                    <li class="navbar__item"><a class="navbar__links" href="../../en/"><i class="fas fa-home"></i> Home</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../en/reservations/"><i class="fas fa-utensils"></i> Reservation</a></li>
                    <li class="navbar_item">
                        <div class="drop-menu current-page">
                            <div class="selected-drop-item"><i class="fas fa-question-circle"></i> Info <i class="fas fa-caret-down"></i></div>
                            <ul>
                            <li class="navbar__item"><a class="navbar__links" href="../en/about/"><i class="fas fa-info-circle"></i> About</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="https://github.com/YannickMyxe/restaurant"><i class="fas fa-code"></i> Project info</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="../en/contact/"><i class="far fa-comment-dots"></i> Contact</a></li>
                            </ul>
                        </div>
                    </li>
                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                        echo '<li class="navbar__item"><a class="navbar__links" href="account/"><i class="fas fa-user"></i> Compte</a></li>';
                        echo '<li class="navbar__item"><a class="navbar__links" href="logout/"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>';} 
                    else 
                        {echo '<li class="navbar__item"><a class="navbar__links" href="login/"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>';}
                    ?>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item"><i class="fas fa-tools"></i> Administration <i class="fas fa-caret-down"></i></div>
                            <ul>
                                <li><a href="../admin/reservaties/">Reservations</a></li>
                                <li><a href="../admin/contact/">Contact</a></li>
                                <li><a href="../admin/accounts/">Acoounts</a> </li>
                                <li><a href="../admin/roles/">Rolls</a> </li>
                            </ul>
                        </div>
                    </li>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item en">English</div>
                            <ul>
                                <li><a class="en" href="../../en/about/">English</a> </li>
                                <li><a class="fr" href="../../fr/about.php">French</a></li>
                                <li><a class="ne" href="../../about/">Dutch</a></li>
                                <li><a class="de" href="../../de/uber">German</a></li>
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
                <h1>About us!</h1>
                <p>
                    <h2>Welcome to Multicultura Restaurant!</h2>
                    <br>This restaurant offers tasty dishes from different cultures and countries. Our dishes are always freshly 
                    freshly prepared by our different chefs. In addition, you can enjoy a beautiful interior. 
                    All ingredients are imported from the country of origin, which guarantees you the best experience and quality.
                    Our restaurant also offers a wide range of different beverages that, just like our dishes, come from different countries. 
                    different cultures. The dishes you can get at our restaurant can come from different countries of the world, such as 
                    countries around the world such as China, Japan, Italy, France, Germany, Thailand and the Philippines, 
                    United States, Mexico, Brazil, Argentina, Australia, New Zealand, Morocco, Egypt, Turkey, ... .
                 </p>
            </div>
            <img class="image-about" src="../../img/perceel_interieur_1.jpg" alt="">
        </div>

        <div class="sub1-container">
            <div class="sub1-about">
                <p>
                    <h2>Origin of our restaurant</h2>
                    <br>This restaurant has only been around since 2021. The restaurant was founded by Dylan Daelman 
                    and Yannick van Kerckvoorde. We had the idea to create a
                    restaurant where people from other cultures could taste dishes from their country, especially those who can't make their dishes at home here. 
                    Especially those who can't make their dishes at home here. For example, because some ingredients have to be
                    some ingredients have to be imported. We also opened this restaurant for people here
                    who want to taste another culture and who, because of the Corona for example, can't do it now. (Because 
                    (Because traveling is not so easy now). Also, we want to bring cultures together and allow people from different cultures to meet.
                    cultures to learn and discover each other. This is the origin of our restaurant.
                 </p>
            </div>
            <img class="image2-about" src="../../img/unnamed.jpg" alt="">
        </div>

        <div class="sub2-container">
            <div class="sub2-about">
                <p>
                    <h2>Where is our restaurant located?</h2>
                    <br> Our restaurant is located in Gebroeders Desmetstraat 1, 9000 Ghent. On the map on the right, you can find 
                    find the location.
                 </p>
            </div>
            <iframe class="map locatie-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2299.513860969966!2d3.7087566727579064!3d51.05978203806784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3710281d9c345%3A0xc50bd6d3515ba4db!2sKU%20Leuven%20Technologiecampus%20Gent!5e0!3m2!1sen!2sbe!4v1632398621501!5m2!1sen!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
        </div>
    </main>

    <footer class="center">
        Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Ghent | est 2021
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../menu.js"></script>
<script src="../static/chat.js"></script>
<script src="../static/responses.js"></script>
</html>