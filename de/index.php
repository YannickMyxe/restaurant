<?php session_start(); ?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite | Multicultura</title>
    <link rel="stylesheet" href="../static/chat.css">
    <link rel="stylesheet" href="../static/home.css">
    <?php
        include '../php/loadCss.php'
    ?>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/map.css">
    <link rel="icon" href="../img/logo.png">
</head>
<body>
    <header>
    <?php
        include '../php/loadNavBar_de.php';
    ?>
    </header>
    <main>
        <div class="leftalign">
            <h1>Restaurant multicultura</h1>
            <div>
                <p>
                    Willkommen im Restaurant Multicultura! Wir sind auf die Zubereitung von Gerichten aus verschiedenen Kulturen spezialisiert. Wir bereiten unsere Gerichte mit den frischesten Zutaten von lokalen Unternehmen zu.
                </p>
            </div>
        </div>
        <div class="leftalign">
            <h2>Informationen</h2>
            <p>
                Möchten Sie einen Tisch reservieren?
                Möchten Sie mehr über unser Unternehmen oder unser Restaurant erfahren?
            </p>
        </div>
        <section class="menu">
            <h2 class="center">Menükarte</h2>
            <div class="menu-wrapper">
                <h3 class="menu-title">Italienische Küche</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Nudeln</h4>
                        <p>Unsere Nudeln sehen vielleicht aus wie gewöhnliche Nudeln, die Sie zu Hause bekommen. Aber täuschen Sie sich nicht! Diese Nudeln werden mit unserer geheimen Gewürzmischung zubereitet, die unsere Sauce akzentuiert und ihr den perfekten Geschmack verleiht. Mögen Sie lieber etwas Scharfes? Dann genießen Sie unsere Sorte 'Diablo', mit extra viel Leidenschaft und Würze!</p>
                    </div>
                    <div class="menu-item">
                        <h4>Pizze</h4>
                        <p>Unsere Pizzen werden nach klassischer italienischer Art zubereitet, sie werden in einem modernisierten alten Steinofen gebacken, der ihnen eine knusprige Kruste verleiht. Unsere spezielle Zutatenmischung sorgt für eine einzigartige Pizza, die Sie nirgendwo anders finden werden.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Lasagne</h4>
                        <p>Unsere Lasagne wird mit den frischesten Zutaten zubereitet. Sie können aus verschiedenen Lasagnen wählen: Bolognese, Spinat, Vegetarisch, Lachs,... und viele mehr. Es ist also für jeden Kunden etwas dabei, das ihm gefallen wird.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Ossobuco</h4>
                        <p>Ossobuco ist ein italienisches Fleischgericht. Die Grundlage des Ossobuco ist die Kalbshaxe. Die Haxen werden u. a. mit Zwiebeln, Karotten und Sellerie geschmort. Abgerundet wird das Gericht mit Gremolata, einer proportionalen Mischung aus Petersilie, gehacktem Knoblauch und Zitronenschale. Das Ossobuco wird normalerweise mit Risotto serviert.</p>
                    </div>
                </div>
                <h3  class="menu-title">Asiatische Küche</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Sushi</h4>
                        <p>Sushi ist ein japanisches Lebensmittel mit einem Durchmesser von wenigen Zentimetern. Es besteht immer aus (gekühltem) gekochtem Reis (鮨飯, Sushi-Meshi) und oft aus Seetang und wird mit Reisessig gesäuert. Dies wird in der Regel mit anderen Zutaten (ネタ, neta) wie Fisch oder Meeresfrüchten, Spiegelei, Gemüse und manchmal tropischen Früchten kombiniert.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Wantan</h4>
                        <p>Ein Wantan ist ein Teiggericht in der chinesischen Küche, das aus einer in Teig eingerollten Fleischkugel besteht. Ein Wantan wird als Teigkugel oder Nudel zubereitet und mit Hackfleisch gefüllt. Die Füllung besteht in der Regel aus gehacktem Schweinefleisch, manchmal auch aus grob gehackten Garnelen, fein gehacktem Ingwer, fein gehackter Zwiebel, Sesamöl und Sojasauce.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Philippinische Adobo</h4>
                        <p>Adobo ist ein beliebtes philippinisches Gericht und Kochverfahren, bei dem Fleisch, Meeresfrüchte oder Gemüse in Essig, Sojasauce, Knoblauch, Lorbeerblättern und schwarzen Pfefferkörnern mariniert, in Öl angebraten und in der Marinade gegart werden. Es wird gelegentlich als das inoffizielle Nationalgericht der Philippinen angesehen.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Kimchi</h4>
                        <p>Kimchi ist ein traditionelles Gericht der koreanischen Küche. Er besteht aus fermentiertem Kohl und Gemüse. Das Wort Kimchi wird gewöhnlich mit "versunkenes Gemüse" übersetzt und bezieht sich auf die Zubereitungsmethode, bei der das Gemüse eingelegt wird.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Pad thai</h4>
                        <p>Pad Thai oder Kway Teow Pad ist ein beliebtes thailändisches Ein-Teller-Gericht aus trockenen, gebratenen Reisnudeln, das in Thailand hauptsächlich an Essensständen und in lokalen Restaurants verkauft wird. Pad thai besteht aus eingeweichten Reisnudeln, die zusammen mit Eiern und Tofuscheiben in einem Wok gebraten werden. Im Wok werden Tamarindenpaste, Fischsauce, Garnelen, Knoblauch oder Schalotten, rote Chilischoten und Palmzucker hinzugefügt.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Nasi goreng</h4>
                        <p>Nasi Greng ist ein sehr bekanntes indonesisches Gericht. Die Grundzutaten für Nasi Goreng sind: gekühlter gekochter Reis, Öl oder Butter, Sojasauce oder Sojasauce. Diese Zutaten können unter anderem durch Chili, Zwiebeln und Knoblauch ergänzt werden. Nasi Goreng kann mit Bawang Goreng (gebratene Zwiebel), Spiegelei, Atjar, Sambal, Garnelencrackern, Satay und Erdnusssauce serviert werden.</p>
                    </div>
                </div>
                <h3  class="menu-title">Südamerikanische Küche</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Moqueca</h4>
                        <p>Moqueca ist ein traditionelles brasilianisches Fischgericht. Moqueca kann mit Garnelen oder Fisch als Basis mit Tomaten, Zwiebeln, Knoblauch, Limette und Koriander zubereitet werden. Der Name Moqueca stammt von dem Begriff mu'keka in der Kimbundu-Sprache.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Ceviche</h4>
                        <p>Ceviche ist ein rohes peruanisches Fischgericht. Für die Zubereitung von Ceviche können verschiedene Fischarten verwendet werden. Der Fisch wird mit Zitrone oder Limette mariniert. In Scheiben geschnittene Zwiebeln und Chilischoten werden hinzugefügt und das Ganze wird mit schwarzem Pfeffer und Salz bestreut. Das Gericht wird in der Regel mit Süßkartoffeln, Avocado, Mais und Kopfsalat ergänzt.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Humita</h4>
                        <p>Humita (von Quechua humint'a) ist ein vorspanisches indianisches Gericht aus Südamerika, ein traditionelles Gericht der Anden, das in Bolivien, Chile, Ecuador, Peru und im Nordwesten Argentiniens verbreitet ist. Es besteht aus frischem Choclo (peruanischer Mais), der zu einer Paste zerstampft, in eine frische Maisschale eingewickelt und in einem Topf mit Wasser langsam gedämpft oder gekocht wird.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Empanada</h4>
                        <p>Eine Empanada oder Empanadilla ist ein gefülltes Gebäck, das gebacken oder frittiert wird. Sie werden hergestellt, indem der Teig über eine Füllung, die aus Fleisch, Käse, Tomaten, Mais oder anderen Zutaten bestehen kann, gefaltet und die so entstandene Panade entweder gebraten oder frittiert wird.</p>
                    </div>
                </div>
                <h3  class="menu-title">Nordamerikanische Küche</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Burger mit Pommes frites</h4>
                        <p>Ein typisches Gericht, das häufig in den USA gegessen wird. Ein Hamburger ist ein Stück gebratenes oder gegrilltes Hackfleisch (in der Regel Rinderhackfleisch). Hamburger" wird häufig auch als Bezeichnung für ein mit dieser Scheibe belegtes Sandwich verwendet. Es wird häufig mit Salat, Tomaten, Zwiebeln, Speck, Ei, Gewürzgurken und Käse sowie Soßen wie Senf, Mayonnaise, Ketchup oder Chilisauce belegt.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Burrito</h4>
                        <p>Diese Delikatesse der mexikanischen Kultur besteht aus einer Tortilla aus Weizenmehl, die in der Regel mit Bohnen und Fleisch (meist Hackfleisch oder Hähnchen, manchmal auch Käse) gefüllt und so zusammengerollt wird, dass die Füllung im Inneren der Tortilla liegt.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Poutine</h4>
                        <p>Poutine ist ein Gericht, das aus Pommes frites besteht, die mit Quarkstücken bedeckt sind, die in Bratensoße getränkt und eventuell mit weiteren Zutaten versehen sind. Es ist ein typisch kanadisches Gericht und besonders beliebt in Quebec, wo es als Nationalgericht gilt.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Taco</h4>
                        <p>Der Taco ist eine kleine, gefaltete Tortilla. Die Tortilla, die auf einem dünnen Backblech gebacken wird, wird mit verschiedenen Zutaten wie Fleisch-Fisch-Huhn, Koriander und Zwiebeln kombiniert. Die Farbe der Tortilla hängt von der Art des verwendeten Mais ab; es gibt weiße, gelbe, blaue, violette und sogar rote Tortillas. Der Taco ist ein typisch mexikanisches Gericht, das man gerne unterwegs isst.</p>
                    </div>
                </div>
                <h3  class="menu-title">Afrikanische Küche</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Bobotie</h4>
                        <p>Bobotie ist ein Gericht der südafrikanischen Küche, das aus Hackfleisch und Gewürzen besteht und mit Ei, Milch und Kurkuma überzogen wird.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Yassa</h4>
                        <p>Yassa ist ein würziges Gericht mit Zwiebeln und mariniertem Geflügel oder Fisch. Ursprünglich aus dem Senegal stammend, ist sie heute in ganz Westafrika beliebt. Das beliebteste Rezept ist yassa au poulet, zubereitet mit Huhn, Zwiebeln und Zitrone, eine Spezialität aus der Casamance, die südlich von Senegals Hauptstadt Dakar liegt.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Couscous</h4>
                        <p>Couscous ist grob gemahlener Hartweizen (Mehl) aus Nordafrika. Der daraus gewonnene Grieß wird in einer rotierenden Trommel zu kleinen Kugeln geformt, die wie haltbare Nudeln getrocknet werden. Sie sind in verschiedenen Größen erhältlich. Als Couscous werden sowohl die Teigkugeln selbst als auch die damit zubereiteten Speisen bezeichnet.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Fatta</h4>
                        <p>Die Ägypter bereiten ein Gericht namens "fatta" als festliche Mahlzeit zu. Es wird zu besonderen Anlässen zubereitet, etwa zur Feier der ersten Schwangerschaft einer Frau oder zum Iftar während des Ramadan. Es besteht aus einer mit Knoblauch und Essig gewürzten Fleischsuppe und knusprigem Fladenbrot, das in einer Schüssel mit Reis und einer Soße aus Knoblauch-Tomaten-Sauce serviert wird.</p>
                    </div>
                </div>
            </div >
        </section>

        <section class="location">
            <h2>Standort</h2>
            <div class="map-wrapper">
                <p>Hier finden Sie unsere Adresse. Es ist leicht, uns zu finden!</p>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2299.513860969966!2d3.7087566727579064!3d51.05978203806784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3710281d9c345%3A0xc50bd6d3515ba4db!2sKU%20Leuven%20Technologiecampus%20Gent!5e0!3m2!1sen!2sbe!4v1632398621501!5m2!1sen!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
            </div>
        </section>

        <div class="chat-bar-collapsible">
            <button id="chat-button" type="button" class="collapsible">Chatten Sie mit uns!
                <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
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
                                    <input type="text" id="textInput" class="input-box" name="msg" placeholder="Drücken Sie 'Enter', um eine Nachricht zu senden.">
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
        Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Gent | est 2021
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../menu.js"></script>
<script src="../static/chat.js"></script>
<script src="../static/responses.js"></script>
</html>