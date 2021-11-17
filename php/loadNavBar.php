<?php
echo '
<nav class="navbar">
            <div class="navbar__container">
                <a class="logo" href="/restaurant/"><img src="/restaurant/img/logo.png" alt="LOGO"></a>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item"><a class="navbar__links current-page" href="/restaurant/"><i class="fas fa-home"></i> Home</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="/restaurant/reservaties/"><i class="fas fa-utensils"></i> Reserveren</a></li>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item"><i class="fas fa-question-circle"></i> Info <i class="fas fa-caret-down"></i></div>
                            <ul>
                            <li class="navbar__item"><a class="navbar__links" href="/restaurant/about/"><i class="fas fa-info-circle"></i> Over ons</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="https://github.com/YannickMyxe/restaurant"><i class="fas fa-code"></i> Project info</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="/restaurant/contact/"><i class="far fa-comment-dots"></i> Contacteer ons</a></li>
                            </ul>
                        </div>
                    </li>';
                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                        echo '<li class="navbar__item"><a class="navbar__links" href="/restaurant/account/"><i class="fas fa-user"></i> Account</a></li>';
                        echo '<li class="navbar__item"><a class="navbar__links" href="/restaurant/logout/"><i class="fas fa-sign-out-alt"></i> Logout</a></li>';} 
                    else 
                        {echo '<li class="navbar__item"><a class="navbar__links" href="/restaurant/login/"><i class="fas fa-sign-in-alt"></i> Login</a></li>';}
                    if(isAdmin()===true){echo '
                            <li class="navbar_item">
                            <div class="drop-menu">
                                <div class="selected-drop-item"><i class="fas fa-tools"></i> Administrate <i class="fas fa-caret-down"></i></div>
                                <ul>
                                    <li><a href="/restaurant/admin/reservaties/">Reservaties</a></li>
                                    <li><a href="/restaurant/admin/contact/">Contact</a></li>
                                    <li><a href="/restaurant/admin/accounts/">Accounts</a> </li>
                                    <li><a href="/restaurant/admin/roles/">Rollen</a> </li>
                                </ul>
                            </div>
                        </li>
                        ';}
        echo'
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item ne">Nederlands</div>
                            <ul>
                                <li><a class="ne" href="/restaurant/">Nederlands</a></li>
                                <li><a class="fr" href="/restaurant/fr/">Frans</a></li>
                                <li><a class="en" href="/restaurant/en/">Engels</a> </li>
                                <li><a class="de" href="/restaurant/de/">Duits</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>    
        </nav>
        ';
?>