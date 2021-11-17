<?php
echo '
<nav class="navbar">
            <div class="navbar__container">
                <a class="logo" href="/restaurant/de"><img src="/restaurant/img/logo.png" alt="LOGO"></a>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item"><a class="navbar__links" href="/restaurant/de"><i class="fas fa-home"></i> Startseite</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="/restaurant/de/buchen"><i class="fas fa-utensils"></i> Buchung</a></li>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item"><i class="fas fa-question-circle"></i> Info <i class="fas fa-caret-down"></i></div>
                            <ul>
                            <li class="navbar__item"><a class="navbar__links" href="/restaurant/de/uber"><i class="fas fa-info-circle"></i> Über</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="https://github.com/YannickMyxe/restaurant"><i class="fas fa-code"></i> Projekt</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="/restaurant/de/kontakt/"><i class="far fa-comment-dots"></i> Kontakt</a></li>
                            </ul>
                        </div>
                    </li>';
                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                        echo '<li class="navbar__item"><a class="navbar__links" href="/restaurant/de/account/"><i class="fas fa-user"></i> Account</a></li>';
                        echo '<li class="navbar__item"><a class="navbar__links" href="/restaurant/de/logout/"><i class="fas fa-sign-out-alt"></i> Logout</a></li>';} 
                    else 
                        {echo '<li class="navbar__item"><a class="navbar__links" href="/restaurant/de/anmeldung/"><i class="fas fa-sign-in-alt"></i> Anmeldung</a></li>';}
                    echo'
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item de">Deutsch</div>
                            <ul>
                                <li><a class="fr" href="/restaurant/fr/">Französisch</a></li>
                                <li><a class="ne" href="/restaurant/">Niederländisch</a></li>
                                <li><a class="en" href="/restaurant/en/">Englisch</a> </li>
                                <li><a class="de" href="/restaurant/de/">Deutsch</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>    
        </nav>
        ';
?>
                    