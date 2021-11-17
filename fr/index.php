<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | Multicultura</title>
    <link rel="stylesheet" href="../static/chat.css">
    <link rel="stylesheet" href="../static/home.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/map.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="icon" href="../img/logo.png">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="navbar__container">
                <a class="logo" href="./"><img src="../img/logo.png" alt="LOGO"></a>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item"><a class="navbar__links current-page" href="../fr/"><i class="fas fa-home"></i> Accueil</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../fr/reservaties.php"><i class="fas fa-utensils"></i> Réserver</a></li>
                    <li class="navbar_item">
                        <div class="drop-menu">
                            <div class="selected-drop-item"><i class="fas fa-question-circle"></i> Info <i class="fas fa-caret-down"></i></div>
                            <ul>
                            <li class="navbar__item"><a class="navbar__links" href="../fr/about.php"><i class="fas fa-info-circle"></i> À propos de</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="https://github.com/YannickMyxe/restaurant"><i class="fas fa-code"></i> Infos sur le projet</a></li>
                            <li class="navbar__item"><a class="navbar__links" href="../fr/contact.php"><i class="far fa-comment-dots"></i> Nous contacter</a></li>
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
                            <div class="selected-drop-item"><i class="fas fa-tools"></i> Administrer <i class="fas fa-caret-down"></i></div>
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
                                <li><a class="fr" href="../fr/">Français</a></li>
                                <li><a class="ne" href="../">Néerlandais</a></li>
                                <li><a class="en" href="../en/">Anglais</a> </li>
                                <li><a class="de" href="../de/">Allemand</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>    
        </nav>
    </header>
    <main>
        <div class="leftalign">
            <h1>Restaurant multicultura</h1>
            <div>
                <p>
                    Bienvenue au Restaurant Multicultura ! Nous sommes spécialisés dans la préparation de plats issus de différentes cultures. Nous préparons nos plats avec les ingrédients les plus frais provenant d'entreprises locales.
                </p>
            </div>
        </div>
        <div class="leftalign">
            <h2>Information</h2>
            <p>
                Vous souhaitez réserver une table ?
                Vous souhaitez en savoir plus sur notre entreprise ou notre restaurant ?
            </p>
        </div>
        <section class="menu">
            <h2 class="center">Carte de menu</h2>
            <div class="menu-wrapper">
                <h3 class="menu-title">Cuisine italienne</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Pâtes</h4>
                        <p>Nos pâtes peuvent ressembler aux pâtes ordinaires que vous obtenez à la maison. Mais ne vous méprenez pas ! Ces pâtes sont fabriquées avec notre mélange secret d'épices, de sorte qu'elles accentuent notre sauce pour lui donner une saveur parfaite. Vous préférez quelque chose d'épicé ? Savourez ensuite notre variété "Diablo", avec plus de passion et de piquant !</p>
                    </div>
                    <div class="menu-item">
                        <h4>Pizza</h4>
                        <p>Nos pizzas sont préparées à la manière italienne classique, elles sont cuites dans un ancien four en pierre modernisé, ce qui leur donne une croûte croustillante. Notre mélange spécial d'ingrédients crée une pizza unique que vous ne trouverez nulle part ailleurs.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Lasagna</h4>
                        <p>Nos lasagnes sont préparées avec les ingrédients les plus frais. Vous pouvez choisir parmi différentes lasagnes : bolognaise, épinards, végétarienne, saumon,... et bien d'autres. Il y a donc quelque chose pour chaque client qui lui plaira.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Ossobuco</h4>
                        <p>L'ossobuco est un plat de viande italien. La base de l'ossobuco est le jarret de veau. Les jarrets sont mijotés avec des oignons, des carottes et du céleri, entre autres. Le plat est terminé par une gremolata, un mélange proportionnel de persil, d'ail haché et de zeste de citron. L'Ossobuco est généralement servi avec du risotto.</p>
                    </div>
                </div>
                <h3  class="menu-title">Cuisine asiatique</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Sushi</h4>
                        <p>Le sushi est un aliment japonais dont le diamètre est de quelques centimètres. Il est toujours composé de riz cuit (refroidi) (鮨飯, sushi-meshi) et souvent d'algues et est levé au vinaigre de riz. Celle-ci est généralement associée à d'autres ingrédients (ネタ, neta) tels que du poisson ou des fruits de mer, un œuf au plat, des légumes et parfois des fruits tropicaux.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Wantan</h4>
                        <p>Un wantan est un plat de pâte dans la cuisine chinoise, c'est une boule de viande enroulée dans de la pâte. Un wantan se présente sous la forme d'une boule de pâte ou de nouilles, et est rempli de viande hachée. La garniture se compose généralement de porc haché, parfois de crevettes grossièrement hachées, de gingembre finement haché, d'oignon finement haché, d'huile de sésame et de sauce soja.</p>
                    </div>
                    <div class="menu-item">
                        <h4>L'adobo philippin</h4>
                        <p>L'adobo philippin est un plat populaire philippin et un procédé de cuisson à base de viande, de fruits de mer ou de légumes marinés dans du vinaigre, de la sauce soja, de l'ail, des feuilles de laurier et des grains de poivre noir, qui sont ensuite rissolés dans l'huile et mijotés dans la marinade. Il est parfois considéré comme le plat national non officiel des Philippines.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Kimchi</h4>
                        <p>Le kimchi est un plat traditionnel de la cuisine coréenne. Il se compose de choux et de légumes fermentés. Le mot kimchi est généralement traduit par "légume en creux" et fait référence à la méthode de préparation, par laquelle les légumes sont marinés.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Pad thai</h4>
                        <p>Le pad thaï ou kway teow pad est un plat populaire thaïlandais composé de nouilles de riz frites, vendu en Thaïlande principalement sur les étals et dans les restaurants locaux. Le pad thai est composé de nouilles de riz trempées puis frites dans un wok, avec des œufs et du tofu en tranches. Pendant le wok, on ajoute la pâte de tamarin, la sauce de poisson, les crevettes, l'ail ou les échalotes, les piments rouges et le sucre de palme.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Nasi goreng</h4>
                        <p>Le Nasi Goreng est un plat indonésien très connu. Les ingrédients de base du nasi goreng sont : du riz cuit refroidi, de l'huile ou du beurre, de la sauce de soja ou de la sauce de soja. Ces ingrédients peuvent être complétés par du piment, de l'oignon et de l'ail, entre autres. Le Nasi goreng peut être servi avec du bawang goreng (oignon frit), un œuf au plat, de l'atjar, du sambal, des crackers de crevettes, du satay et de la sauce arachide.</p>
                    </div>
                </div>
                <h3  class="menu-title">Cuisine sud-américaine</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Moqueca</h4>
                        <p>La Moqueca est un plat de poisson traditionnel brésilien. La Moqueca peut être préparée avec des crevettes ou du poisson comme base avec des tomates, des oignons, de l'ail, du citron vert et de la coriandre. Le nom moqueca vient du terme mu'keka en langue kimbundu.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Ceviche</h4>
                        <p>Le ceviche est un plat de poisson cru péruvien. Différents types de poissons peuvent être utilisés pour préparer le ceviche. Le poisson est mariné avec du citron ou du citron vert. Des oignons et des piments émincés sont ajoutés et le tout est saupoudré de poivre noir et de sel. Le plat est généralement complété par de la patate douce, de l'avocat, du maïs et de la laitue.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Humita</h4>
                        <p>La humita (du quechua humint'a) est un plat indien préhispanique d'Amérique du Sud, un plat traditionnel des Andes que l'on trouve en Bolivie, au Chili, en Équateur, au Pérou et dans le nord-ouest de l'Argentine. Il s'agit de choclo (maïs péruvien) frais réduit en pâte, enveloppé dans une enveloppe de maïs frais et cuit lentement à la vapeur ou à l'eau dans une casserole d'eau.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Empanada</h4>
                        <p>Une empanada ou empanadilla est une pâtisserie fourrée qui est cuite ou frite. Ils sont fabriqués en repliant la pâte sur une garniture, qui peut être constituée de viande, de fromage, de tomate, de maïs ou d'autres ingrédients, puis en cuisant le chausson obtenu, soit en le faisant frire, soit en le faisant frire.</p>
                    </div>
                </div>
                <h3  class="menu-title">Cuisine nord-américaine</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Burger avec frites</h4>
                        <p>Un plat typique souvent consommé aux États-Unis. Un hamburger est une tranche de viande hachée frite ou grillée (généralement du bœuf haché). Le terme "hamburger" est aussi souvent utilisé pour désigner un sandwich garni de cette tranche. Il est souvent garni de laitue, de tomates, d'oignons, de bacon, d'œufs, de cornichons et de fromage et de sauces telles que la moutarde, la mayonnaise, le ketchup ou la sauce chili.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Burrito</h4>
                        <p>Ce mets délicat de la culture mexicaine consiste en une tortilla faite de farine de blé, habituellement remplie de haricots et de viande (généralement de la viande ou du poulet haché, parfois du fromage), et roulée de façon à ce que la garniture soit à l'intérieur de la tortilla.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Poutine</h4>
                        <p>La poutine est un plat composé de frites recouvertes de morceaux de fromage blanc, trempés dans une sauce et éventuellement d'autres ingrédients. C'est un plat typiquement canadien et il est particulièrement populaire au Québec, où il est considéré comme le plat national.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Taco</h4>
                        <p>Le taco est une petite tortilla pliée. La tortilla, cuite sur une fine plaque de cuisson, est combinée à différents ingrédients, tels que viande-poisson-poulet, coriandre et oignons. La couleur de la tortilla varie en fonction du type de maïs utilisé ; vous pouvez trouver des tortillas blanches, jaunes, bleues, violettes et même rouges. Le taco est un plat typiquement mexicain qui se mange sur le pouce.</p>
                    </div>
                </div>
                <h3  class="menu-title">Cuisine africaine</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Bobotie</h4>
                        <p>Le bobotie est un plat de la cuisine sud-africaine qui se compose de viande hachée et d'épices enrobées d'un œuf, de lait et de curcuma.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Yassa</h4>
                        <p>Le Yassa est un plat épicé à base d'oignons et de volaille ou de poisson mariné. Originaire du Sénégal, il est désormais populaire dans toute l'Afrique de l'Ouest. La recette la plus populaire est le yassa au poulet, préparé avec du poulet, des oignons et du citron, une spécialité de la région de Casamance, située au sud de Dakar, la capitale du Sénégal.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Couscous</h4>
                        <p>Le couscous est un blé dur (farine) grossièrement moulu provenant d'Afrique du Nord. La semoule qui en est issue est façonnée dans un tambour rotatif en petites boules qui sont séchées comme des pâtes longues. Ils sont disponibles en différentes tailles. Tant les boules de pâte elles-mêmes que les plats préparés avec elles sont considérés comme du couscous.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Fatta</h4>
                        <p>Les Égyptiens préparent un plat appelé "fatta" en guise de repas de fête. Il est préparé lors d'occasions spéciales, comme pour célébrer la première grossesse d'une femme ou pour un Iftar pendant le Ramadan. Il est composé d'une soupe de viande aromatisée à l'ail et au vinaigre et d'un pain plat croustillant servi dans un bol avec du riz et une sauce composée de tomates à l'ail.</p>
                    </div>
                </div>
            </div >
        </section>

        <section class="location">
            <h2>Localisation</h2>
            <div class="map-wrapper">
                <p>Vous trouverez ici notre adresse. Vous pouvez donc nous trouver facilement !</p>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2299.513860969966!2d3.7087566727579064!3d51.05978203806784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3710281d9c345%3A0xc50bd6d3515ba4db!2sKU%20Leuven%20Technologiecampus%20Gent!5e0!3m2!1sen!2sbe!4v1632398621501!5m2!1sen!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
            </div>
        </section>

        <div class="chat-bar-collapsible">
            <button id="chat-button" type="button" class="collapsible">Chattez avec nous!
                <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
            </button>

            <div class="content">
                <div class="full-chat-block">
                    <div class="outer-container">
                        <div class="chat-container">
                            <div id="chatbox">
                                <h5 id="chat-timestamp"></h5>
                                <p id="botStarterMessage" class="botText"><span>Chargement...</span></p>
                            </div>

                            <div class="chat-bar-input-block">
                                <div id="userInput">
                                    <input type="text" id="textInput" class="input-box" name="msg" placeholder="Appuyez sur 'Enter' pour envoyer un message">
                                    <p></p>
                                </div>

                                <div class="chat-bar-icons">
                                    <i class="chat-icon2 fa fa-fw fa-heart" style="color: crimson;" onclick="heartButton()"></i>
                                    <i class="chat-icon2 fa fa-fw fa-send" style="color: #333;" onclick="sendButton()"></i>
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
        Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Gand | est 2021
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../menu.js"></script>
<script src="../static/chat.js"></script>
<script src="../static/responses.js"></script>
</html>