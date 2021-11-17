<?php
echo '
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
                            <div class="selected-drop-item"><i class="fas fa-question-circle"></i> Info <i class="fas fa-caret-down"></i></div>
                            <ul>
                            <li class="navbar__item"><a class="navbar__links" href="../fr/about.php"><i class="fas fa-info-circle"></i> À propos de</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="https://github.com/YannickMyxe/restaurant"><i class="fas fa-code"></i> Infos sur le projet</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="../fr/contact.php"><i class="far fa-comment-dots"></i> Nous Contacter</a></li>
                            </ul>
                        </div>
                    </li>';
                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                        echo '<li class="navbar__item"><a class="navbar__links" href="../account/"><i class="fas fa-user"></i> Compte</a></li>';
                        echo '<li class="navbar__item"><a class="navbar__links" href="../logout/"><i class="fas fa-sign-out-alt"></i> Deconnexion</a></li>';} 
                    else 
                        {echo '<li class="navbar__item"><a class="navbar__links" href="../login/"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>';}
                    echo'
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
        ';
?>
                    