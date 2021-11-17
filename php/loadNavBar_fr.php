<?php
echo '
<nav class="navbar">
            <div class="navbar__container">
                <a class="logo" href="/restaurant/fr"><img src="/restaurant/img/logo.png" alt="LOGO"></a>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item"><a class="navbar__links" href="/restaurant/fr"><i class="fas fa-home"></i> Accueil</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="/restaurant/fr/reservation"><i class="fas fa-utensils"></i> Réservation</a></li>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item"><i class="fas fa-question-circle"></i> Info <i class="fas fa-caret-down"></i></div>
                            <ul>
                            <li class="navbar__item"><a class="navbar__links" href="/restaurant/fr/a_propos_de"><i class="fas fa-info-circle"></i> À propos de</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="https://github.com/YannickMyxe/restaurant"><i class="fas fa-code"></i> Infos sur le projet</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="/restaurant/fr/nous_contacter/"><i class="far fa-comment-dots"></i> Nous Contacter</a></li>
                            </ul>
                        </div>
                    </li>';
                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                        echo '<li class="navbar__item"><a class="navbar__links" href="/restaurant/fr/Compte/"><i class="fas fa-user"></i> Compte</a></li>';
                        echo '<li class="navbar__item"><a class="navbar__links" href="/restaurant/fr/Deconnexion/"><i class="fas fa-sign-out-alt"></i> Deconnexion</a></li>';} 
                    else 
                        {echo '<li class="navbar__item"><a class="navbar__links" href="/restaurant/fr/Connexion/"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>';}
                    echo'
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item fr">Français</div>
                            <ul>
                                <li><a class="fr" href="/restaurant/fr/">Français</a></li>
                                <li><a class="ne" href="/restaurant/">Néerlandais</a></li>
                                <li><a class="en" href="/restaurant/en/">Anglais</a> </li>
                                <li><a class="de" href="/restaurant/de/">Allemand</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>    
        </nav>
        ';
?>
                    