<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Multicultura</title>
    <link rel="stylesheet" href="static/chat.css">
    <link rel="stylesheet" href="static/home.css">
    <?php
        include './php/loadCss.php'
    ?>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/map.css">
    <link rel="icon" href="img/logo.png">
</head>
<body>
    <header>
        <?php
            include './php/isAdmin.php';
            include './php/loadNavBar.php';
        ?>
    </header>
    <main>
        <div class="leftalign">
            <h1>Restaurant multicultura</h1>
            <div>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eaque, vitae mollitia cupiditate porro id! Culpa, corporis enim. Quam, hic, quaerat dignissimos quasi distinctio facere deleniti eligendi recusandae soluta similique voluptate corrupti delectus officiis, voluptates qui possimus nisi harum impedit mollitia? Optio at corrupti consectetur maxime id delectus quis fugiat!
                </p>
            </div>
        </div>
        <div class="leftalign">
            <h2>info</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed repellat facilis, placeat, saepe recusandae, architecto possimus voluptas fuga totam libero quae quos delectus quasi rerum ullam dolores minima? Magni, veniam?</p>
        </div>
        <section class="menu">
            <h2 class="center">Menukaart</h2>
            <div class="menu-wrapper">
                <h3 class="menu-title">Italiaanse Keuken</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Pasta</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quibusdam iste pariatur debitis? Accusamus, tenetur esse ex blanditiis voluptatem aut sequi excepturi tempora fuga voluptate quidem praesentium ab deleniti corrupti!</p>
                    </div>
                    <div class="menu-item">
                        <h4>Pizza</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quibusdam iste pariatur debitis? Accusamus, tenetur esse ex blanditiis voluptatem aut sequi excepturi tempora fuga voluptate quidem praesentium ab deleniti corrupti!</p>
                    </div>
                    <div class="menu-item">
                        <h4>menu item</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quibusdam iste pariatur debitis? Accusamus, tenetur esse ex blanditiis voluptatem aut sequi excepturi tempora fuga voluptate quidem praesentium ab deleniti corrupti!</p>
                    </div>
                    <div class="menu-item">
                        <h4>menu item</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quibusdam iste pariatur debitis? Accusamus, tenetur esse ex blanditiis voluptatem aut sequi excepturi tempora fuga voluptate quidem praesentium ab deleniti corrupti!</p>
                    </div>
                    <div class="menu-item">
                        <h4>menu item</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quibusdam iste pariatur debitis? Accusamus, tenetur esse ex blanditiis voluptatem aut sequi excepturi tempora fuga voluptate quidem praesentium ab deleniti corrupti!</p>
                    </div>
                </div>
                <h3  class="menu-title">Aziatische Keuken</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>menu item</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quibusdam iste pariatur debitis? Accusamus, tenetur esse ex blanditiis voluptatem aut sequi excepturi tempora fuga voluptate quidem praesentium ab deleniti corrupti!</p>
                    </div>
                    <div class="menu-item">
                        <h4>menu item</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quibusdam iste pariatur debitis? Accusamus, tenetur esse ex blanditiis voluptatem aut sequi excepturi tempora fuga voluptate quidem praesentium ab deleniti corrupti!</p>
                    </div>
                    <div class="menu-item">
                        <h4>menu item</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quibusdam iste pariatur debitis? Accusamus, tenetur esse ex blanditiis voluptatem aut sequi excepturi tempora fuga voluptate quidem praesentium ab deleniti corrupti!</p>
                    </div>
                    <div class="menu-item">
                        <h4>menu item</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quibusdam iste pariatur debitis? Accusamus, tenetur esse ex blanditiis voluptatem aut sequi excepturi tempora fuga voluptate quidem praesentium ab deleniti corrupti!</p>
                    </div>
                    <div class="menu-item">
                        <h4>menu item</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quibusdam iste pariatur debitis? Accusamus, tenetur esse ex blanditiis voluptatem aut sequi excepturi tempora fuga voluptate quidem praesentium ab deleniti corrupti!</p>
                    </div>
                    <div class="menu-item">
                        <h4>menu item</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quibusdam iste pariatur debitis? Accusamus, tenetur esse ex blanditiis voluptatem aut sequi excepturi tempora fuga voluptate quidem praesentium ab deleniti corrupti!</p>
                    </div>
                </div>
            </div >
        </section>

        <section class="location">
            <h2>Locatie</h2>
            <div class="map-wrapper">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, tempora quisquam officia sequi debitis possimus inventore. Minima, temporibus iusto. Sit.</p>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2299.513860969966!2d3.7087566727579064!3d51.05978203806784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3710281d9c345%3A0xc50bd6d3515ba4db!2sKU%20Leuven%20Technologiecampus%20Gent!5e0!3m2!1sen!2sbe!4v1632398621501!5m2!1sen!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
            </div>
        </section>

        <div class="chat-bar-collapsible">
            <button id="chat-button" type="button" class="collapsible">Chat met ons!
                <i id="chat-icon" style="color: #fff;" class="fas fa-comment"></i>
            </button>

            <div class="content">
                <div class="full-chat-block">
                    <div class="outer-container">
                        <div class="chat-container">
                            <div id="chatbox">
                                <h5 id="chat-timestamp"></h5>
                                <p id="botStarterMessage" class="botText"><span>Laden...</span></p>
                            </div>

                            <div class="chat-bar-input-block">
                                <div id="userInput">
                                    <input type="text" id="textInput" class="input-box" name="msg" placeholder="Druk op 'Enter' om een bericht to versturen">
                                    <p></p>
                                </div>

                                <div class="chat-bar-icons">
                                    <i class="chat-icon2 fas fa-heart" style="color: crimson;" onclick="heartButton()"></i>
                                    <i class="chat-icon2 fas fa-paper-plane" style="color: #333;" onclick="sendButton()"></i>
                                </div>
                            </div>

                            <div id="chat-bar-bottom">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="center">
        Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Gent | est 2021
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="menu.js"></script>
<script src="static/chat.js"></script>
<script src="static/responses.js"></script>
</html>
