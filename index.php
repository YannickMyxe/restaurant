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
            <h1>Restaurant Multicultura</h1>
            <div>
                <p>
                    Welkom bij restaurant Multicultura! Wij zijn gespesializeerd in het bereiden van gerechten uit meerdere culturen. Wij bereiden onze gerechten met de verste ingredienten van een lokale bedrijven.
                </p>
            </div>
        </div>
        <div class="leftalign">
            <h2>Meer info</h2>
            <p> 
                Wil je een tafel reserveren?
                Wil je meer weten over ons bedrijf of over ons restaurant?
            </p>
        </div>
        <section class="menu">
            <h2 class="center">Menukaart</h2>
            <div class="menu-wrapper">
                <h3 class="menu-title">Italiaanse Keuken</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Pasta</h4>
                        <p>Onze pasta lijkt misschien wel op een doodnormale pasta van bij je thuis. Maar vergis je niet! Deze pasta is gemaakt met onze geheime kruidenmix, zo accentuurt hij onze saus zodat deze de perfecte smaak krijgt. Hou je liever van iets pikkants? Geniet dan van onze 'Diablo' varriant, met extra veel passie en pit!</p>
                    </div>
                    <div class="menu-item">
                        <h4>Pizza</h4>
                        <p>Onze pizza's worden bereid op de klassieke Italiaanse wijze, deze worden in een gemodernizeerde oude steen over gebakken, zo krijgen ze een krokant korstje. Onze speciale mix van ingredienten zorgt voor een unieke pizza zoals je die nergens anders zult vinden.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Lasagna</h4>
                        <p>Onze lasagnas zijn met de meest verse ingrediënten gemaakt. U heeft dan ook de keuze uit verschillende lasagnas: Bolognese, Spinazie, Vegetarisch, Zalm,.. en nog veel meer. Zo zit er wel voor iedere klant iets waar hij/zij zin in zal hebben.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Ossobuco</h4>
                        <p>Ossobuco is een Italiaans vleesgerecht. De basis van ossobuco zijn kalfsschenkels. De schenkels worden met onder meer uien, wortel en bleekselderij gestoofd. Het gerecht wordt afgemaakt met gremolata, een evenredig mengsel van peterselie, gehakte knoflook en citroenrasp. Doorgaans wordt ossobuco met risotto geserveerd.</p>
                    </div>
                </div>
                <h3  class="menu-title">Aziatische Keuken</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Sushi</h4>
                        <p>Sushi is een gerecht uit de Japanse keuken met een doorsnede van enkele centimeters. Het bestaat altijd uit (afgekoelde) gekookte rijst (鮨飯, sushi-meshi) en vaak ook uit zeewier en is met rijstazijn gezuurd. Dit wordt meestal gecombineerd met andere ingrediënten (ネタ, neta) zoals vis of zeevruchten, gebakken ei, groenten en soms tropische vruchten.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Wantan</h4>
                        <p>Een wantan is een deeggerecht uit de Chinese keuken, het is een balletje vlees opgerold in deeg. Een wantan wordt gemaakt als een deegballetje of noedel, en gevuld met gehakt vlees. De vulling bestaat typisch uit gehakt varkensvlees, soms ruw versneden garnaal, fijnversneden gember, fijnversneden ui, sesamolie en sojasaus.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Filipijnse adobo</h4>
                        <p>Filippijnse adobo is een populair Filipijns gerecht en kookproces in de Filipijnse keuken met vlees, zeevruchten, of groenten gemarineerd in azijn, sojasaus, knoflook, laurierbladerenen zwarte peperkorrels, die gebruind zijn in olieen gestoofd in de marinade. Het is af en toe beschouwd als het onofficiële nationale gerecht in de Filippijnen.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Kimchi</h4>
                        <p>Kimchi is een traditioneel gerecht uit de Koreaanse keuken. Het bestaat uit gefermenteerde kool en groenten. Het woord kimchi wordt meestal vertaald met verzonken groente en verwijst naar de bereidingswijze, waarbij de groente wordt ingelegd.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Pad thai</h4>
                        <p>Pad Thai of kway teow pad is een populair Thais eenbordsgerecht van drooggebakken rijstnoedels dat in Thailand voornamelijk wordt verkocht in etenskraampjes en lokale eetgelegenheden. Pad thai wordt gemaakt van rijstnoedels die eerst zijn geweekt en vervolgens in een wok gebakken, samen met eieren en gesneden tofoe. Tijdens het wokken worden tamarindepasta, vissaus, garnalen, knoflook of sjalotten, rode chilipepers en palmsuiker toegevoegd.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Nasi goreng</h4>
                        <p>Nasi Greng is een zeer bekend indonesisch gerecht. De basisingrediënten van nasi goreng zijn: afgekoelde gekookte rijst, olie of boter, ketjap of sojasaus. Deze ingrediënten kunnen onder andere aangevuld worden met Spaanse peper, ui en knoflook. Nasi goreng kan geserveerd worden met bawang goreng (gebakken ui), spiegelei, atjar, sambal, kroepoek, saté en pindasaus.</p>
                    </div>
                </div>
                <h3  class="menu-title">Zuid-Amerikaanse keuken</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Moqueca</h4>
                        <p>Moqueca is een traditioneel Braziliaans visgerecht. Moqueca kan gemaakt worden met garnalen of vis als basis met tomaten, uien, knoflook, limoen en koriander. De naam moqueca komt van de term mu'keka in kimbundu taal.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Ceviche</h4>
                        <p>Ceviche is een peruviaans rauw-vis gerecht. Voor de bereiding van ceviche kunnen verschillende soorten vis gebruikt worden. De vis wordt gemarineerd met citroen of limoen . Hier worden gesneden uien en chilipepers aan toegevoegd en het geheel wordt bestrooid met zwarte peper en zout. Het gerecht wordt meestal aangevuld met zoete aardappel, avocado, mais en sla.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Humita</h4>
                        <p>Humita (van Quechua humint'a)is een indiaans Zuid-Amerikaans gerecht uit de pre-Spaanse tijd, een traditioneel gerecht uit de Andes en het is te vinden in Bolivia, Chili, Ecuador, Peruen Noordwest-Argentinië. Het bestaat uit verse choclo (Peruaanse maïs) gestampt tot een pasta, gewikkeld in een verse maïsschil en langzaam gestoomd of gekookt in een pot water.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Empanada</h4>
                        <p>Een empanada of empanadilla is gevulde deegwaar die gebakken of gefrituurd wordt. Ze worden gemaakt door deeg over een vulling te vouwen, die kan bestaan uit vlees, kaas, tomaat, maïs of andere ingrediënten, en vervolgens de resulterende omzet te koken, hetzij door te bakken of te frituren.</p>
                    </div>
                </div>
                <h3  class="menu-title">Noord-Amerikaanse keuken</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Burger met frieten</h4>
                        <p>Een typisch gerecht dat vaak in de VS wordt gegeten. Een hamburger is een schijf gebakken of gegrild gemalen vlees (meestal rundergehakt). Vaak wordt 'hamburger' ook als pars pro toto gebruikt voor een broodje dat met deze schijf belegd is. Vaak worden hier sla, tomaat, ui, spek, ei, augurken en kaas aan toegevoegd en sauzen als mosterd, mayonaise, ketchup of chilisaus.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Burrito</h4>
                        <p>Deze delicatesse van de Mexicaanse cultuur bestaat uit een tortilla, vervaardigd uit tarwebloem, meestal gevuld met bonen en vlees (meestal gehakt of kip, soms ook kaas), en opgerold zodat de vulling binnenin de tortilla zit.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Poutine</h4>
                        <p>Poutine is een gerecht bestaande uit friet bedekt met stukjes wrongel, gedrenkt in jus en eventueel nog extra ingrediënten. Het is een typisch Canadees gerecht en het geniet vooral grote populariteit in Quebec waar het wordt gezien als het nationale gerecht.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Taco</h4>
                        <p>De taco is een kleine, gevouwen tortilla. De tortilla, gebakken op een dunne bakplaat, wordt gecombineerd met verschillende ingrediënten, zoals vlees-vis-kip, koriander en uitjes. De kleur van de tortilla varieert afhankelijk van het type mais dat gebruikt wordt; zo kun je witte, gele, blauwe, paarse en zelfs rode tegenkomen. De taco is een typisch Mexicaans gerecht dat uit het vuistje wordt gegeten.</p>
                    </div>
                </div>
                <h3  class="menu-title">Afrikaanse keuken</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Bobotie</h4>
                        <p>Bobotie is een gerecht uit de Zuid-Afrikaanse keuken dat bestaat uit gehakt en specerijen met een ei, melk- en een kurkumalaag.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Yassa</h4>
                        <p>Yassa is een pittig gerecht met uien en gemarineerd gevogelte of vis. Het gerecht komt oorspronkelijk uit Senegal, maar is nu populair in geheel West-Afrika. Het populairste recept is yassa au poulet, bereid met kip, uien en citroen, een specialiteit afkomstig uit het gebied Casamance, gelegen ten zuiden van de Senagalese hoofdstad Dakar.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Couscous</h4>
                        <p>Couscous of koeskoes is grof gemalen durumtarwe (gries) afkomstig uit Noord-Afrika. Het hiermee gemaakte griesmeel wordt via een draaitrommel omgevormd in kleine bolletjes die net zoals houdbare pasta's worden gedroogd. Ze zijn in verschillende maten verkrijgbaar. Zowel de deegbolletjes zelf als de gerechten die ermee worden gemaakt, worden als couscous-gerecht beschouwd.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Fatta</h4>
                        <p> Egyptenaren bereiden een gerecht genaamd "fatta" als een feestmaaltijd. Het wordt bereid bij speciale gelegenheden, zoals om de eerste zwangerschap van een vrouw te vieren of voor een Iftar tijdens de Ramadan. Het is gemaakt met een vleessoep met knoflook- en azijnsmaak en knapperig flatbread geserveerd in een kom met rijst en een saus bestaande uit knoflooktomatensaus.</p>
                    </div>
                </div>
            </div >
        </section>

        <section class="location">
            <h2>Locatie</h2>
            <div class="map-wrapper">
                <p>Hier vind je ons adress. Zo kan je ons gemakkelijk vinden!</p>
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
