<?php
echo '
<nav class="navbar">
            <div class="navbar__container">
                <a class="logo" href="/restaurant/en"><img src="/restaurant/img/logo.png" alt="LOGO"></a>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item"><a class="navbar__links" href="/restaurant/en"><i class="fas fa-home"></i> Home</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="/restaurant/en/reservations"><i class="fas fa-utensils"></i> Reservations</a></li>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item"><i class="fas fa-question-circle"></i> Info <i class="fas fa-caret-down"></i></div>
                            <ul>
                            <li class="navbar__item"><a class="navbar__links" href="/restaurant/en/about"><i class="fas fa-info-circle"></i> About</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="https://github.com/YannickMyxe/restaurant"><i class="fas fa-code"></i> About our project</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="/restaurant/en/contact/"><i class="far fa-comment-dots"></i> Contact us</a></li>
                            </ul>
                        </div>
                    </li>';
                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                        echo '<li class="navbar__item"><a class="navbar__links" href="/restaurant/en/account/"><i class="fas fa-user"></i> Account</a></li>';
                        echo '<li class="navbar__item"><a class="navbar__links" href="/restaurant/en/logout/"><i class="fas fa-sign-out-alt"></i> Logout</a></li>';} 
                    else 
                        {echo '<li class="navbar__item"><a class="navbar__links" href="/restaurant/en/login/"><i class="fas fa-sign-in-alt"></i> Login</a></li>';}
                    echo'
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item en">English</div>
                            <ul>
                                <li><a class="fr" href="/restaurant/fr/">French</a></li>
                                <li><a class="ne" href="/restaurant/">Dutch</a></li>
                                <li><a class="en" href="/restaurant/en/">English</a> </li>
                                <li><a class="de" href="/restaurant/de/">German</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>    
        </nav>
        ';
?>
                    