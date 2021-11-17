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
        include '../php/loadNavBar_en.php';
    ?>
    </header>
    <main>
        <div class="leftalign">
            <h1>Restaurant multicultura</h1>
            <div>
                <p>
                    Welcome to Restaurant Multicultura! We are specialized in the preparation of dishes from different cultures. We prepare our dishes with the freshest ingredients from local companies.
                </p>
            </div>
        </div>
        <div class="leftalign">
            <h2>Information</h2>
            <p>
                Would you like to book a table?
                Want to know more about our company or our restaurant?
            </p>
        </div>
        <section class="menu">
            <h2 class="center">Menu card</h2>
            <div class="menu-wrapper">
                <h3 class="menu-title">Italian Cuisine</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Pasta</h4>
                        <p>Our pasta may look like a plain old pasta from your home. But make no mistake! This pasta is made with our secret blend of spices, so it accents our sauce to give it the perfect flavor. Do you prefer something spicy? Then enjoy our 'Diablo' variety, with extra passion and spice!</p>
                    </div>
                    <div class="menu-item">
                        <h4>Pizza</h4>
                        <p>Our pizzas are prepared the classic Italian way, these are baked in a modernized old stone over, so they get a crispy crust. Our special blend of ingredients creates a unique pizza like you won't find anywhere else.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Lasagna</h4>
                        <p>Our lasagnas are made with the freshest ingredients. You have the choice of different lasagnas: Bolognese, Spinach, Vegetarian, Salmon,... and many more. So there is something for every customer that he/she will like.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Ossobuco</h4>
                        <p>Ossobuco is an Italian meat dish. The basis of ossobuco is veal shanks. The shanks are simmered with onions, carrot and celery, among other ingredients. The dish is finished with gremolata, a proportional mixture of parsley, chopped garlic and lemon zest. Usually ossobuco is served with risotto.</p>
                    </div>
                </div>
                <h3  class="menu-title">Asian Cuisine</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Sushi</h4>
                        <p>Sushi is a dish of Japanese cuisine with a diameter of several centimeters. It always consists of (cooled) cooked rice (鮨飯, sushi-meshi) and often seaweed and is leavened with rice vinegar. This is usually combined with other ingredients (ネタ, neta) such as fish or seafood, fried egg, vegetables and sometimes tropical fruits.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Wantan</h4>
                        <p>A wantan is a dough dish from Chinese cuisine, it is a ball of meat rolled up in dough. A wantan is made as a dough ball or noodle, and filled with minced meat. The filling typically consists of minced pork, sometimes roughly chopped shrimp, finely chopped ginger, finely chopped onion, sesame oil and soy sauce.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Philippine adobo</h4>
                        <p>Filipino adobo is a popular Filipino dish and cooking process in Filipino cuisine with meat, seafood, or vegetables marinated in vinegar, soy sauce, garlic, bay leaves and black peppercorns, browned in oils and simmered in the marinade. It is occasionally considered the unofficial national dish in the Philippines.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Kimchi</h4>
                        <p>Kimchi is a traditional dish of Korean cuisine. It consists of fermented cabbage and vegetables. The word kimchi is usually translated as sunken vegetable and refers to the preparation method, in which the vegetables are pickled.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Pad thai</h4>
                        <p>Pad Thai or kway teow pad is a popular Thai single-plate dish of dry-fried rice noodles sold in Thailand primarily at food stalls and local eateries. Pad thai is made from rice noodles that have first been soaked and then fried in a wok, along with eggs and sliced tofu. During the wok, tamarind paste, fish sauce, shrimp, garlic or shallots, red chili peppers and palm sugar are added.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Nasi goreng</h4>
                        <p>Nasi Greng is a very famous Indonesian dish. The basic ingredients of nasi goreng are: cooled cooked rice, oil or butter, soy sauce or soy sauce. These ingredients can be supplemented with chilli, onion and garlic, among others. Nasi goreng can be served with bawang goreng (fried onion), fried egg, atjar, sambal, prawn crackers, satay and peanut sauce.</p>
                    </div>
                </div>
                <h3  class="menu-title">South American cuisine</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Moqueca</h4>
                        <p>Moqueca is a traditional Brazilian fish dish. Moqueca can be made with shrimp or fish as a base with tomatoes, onions, garlic, lime and cilantro. The name moqueca comes from the term mu'keka in kimbundu language.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Ceviche</h4>
                        <p>Ceviche is a Peruvian raw fish dish. Different types of fish can be used to prepare ceviche. The fish is marinated with lemon or lime. Sliced onions and chili peppers are added and sprinkled with black pepper and salt. The dish is usually completed with sweet potato, avocado, corn and lettuce.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Humita</h4>
                        <p>Humita (from Quechua humint'a)is a pre-Hispanic Indian South American dish, a traditional dish of the Andes and it is found in Bolivia, Chile, Ecuador, Peruen Northwest Argentina. It consists of fresh choclo (Peruvian corn) pounded into a paste, wrapped in a fresh corn husk and slowly steamed or boiled in a pot of water.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Empanada</h4>
                        <p>An empanada or empanadilla is stuffed dough that is baked or fried. They are made by folding dough over a filling, which may consist of meat, cheese, tomato, corn or other ingredients, and then cooking the resulting turnover, either by baking or deep frying.</p>
                    </div>
                </div>
                <h3  class="menu-title">North American cuisine</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Burger with fries</h4>
                        <p>A typical dish often eaten in the US. A hamburger is a disk of fried or grilled ground meat (usually minced beef). Often "hamburger" is also used as pars pro toto for a sandwich topped with this disk. Often lettuce, tomato, onion, bacon, egg, pickles and cheese are added to this and sauces such as mustard, mayonnaise, ketchup or chili sauce.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Burrito</h4>
                        <p>This delicacy of Mexican culture consists of a tortilla, made of wheat flour, usually filled with beans and meat (usually minced meat or chicken, sometimes cheese), and rolled up so that the filling is inside the tortilla.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Poutine</h4>
                        <p>Poutine is a dish consisting of fries covered with pieces of curd, soaked in gravy and possibly additional ingredients. It is a typical Canadian dish and it enjoys especially great popularity in Quebec where it is considered the national dish.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Taco</h4>
                        <p>The taco is a small, folded tortilla. The tortilla, baked on a thin griddle, is combined with different ingredients, such as meat-fish-chicken, cilantro and onions. The color of the tortilla varies depending on the type of corn used; for example, you may encounter white, yellow, blue, purple and even red. The taco is a typical Mexican dish eaten on the go.</p>
                    </div>
                </div>
                <h3  class="menu-title">African cuisine</h3>
                <div class="menu-section">
                    <div class="menu-item">
                        <h4>Bobotie</h4>
                        <p>Bobotie is a dish of South African cuisine that consists of minced meat and spices coated with egg, milk and turmeric.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Yassa</h4>
                        <p>Yassa is a spicy dish with onions and marinated poultry or fish. The dish originated in Senegal, but is now popular throughout West Africa. The most popular recipe is yassa au poulet, prepared with chicken, onions and lemon, a specialty from the Casamance area, located south of Senegal's capital Dakar.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Couscous</h4>
                        <p>Couscous is coarsely ground durum wheat originating in North Africa. The semolina made with it is transformed via a rotary drum into small balls that are dried just like long-life pasta. They are available in different sizes. Both the dough balls themselves and the dishes made with them are considered couscous dishes.</p>
                    </div>
                    <div class="menu-item">
                        <h4>Fatta</h4>
                        <p>Egyptians prepare a dish called "fatta" as a festive meal. It is prepared on special occasions, such as to celebrate a woman's first pregnancy or for an Iftar during Ramadan. It is made with a garlic and vinegar flavored meat soup and crispy flatbread served in a bowl with rice and a sauce consisting of garlic tomato sauce.</p>
                    </div>
                </div>
            </div >
        </section>

        <section class="location">
            <h2>Location</h2>
            <div class="map-wrapper">
                <p>Here you will find our address. This way you can easily find us!</p>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2299.513860969966!2d3.7087566727579064!3d51.05978203806784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3710281d9c345%3A0xc50bd6d3515ba4db!2sKU%20Leuven%20Technologiecampus%20Gent!5e0!3m2!1sen!2sbe!4v1632398621501!5m2!1sen!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
            </div>
        </section>

        <div class="chat-bar-collapsible">
            <button id="chat-button" type="button" class="collapsible">Chat with us!
                <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
            </button>

            <div class="content">
                <div class="full-chat-block">
                    <div class="outer-container">
                        <div class="chat-container">
                            <div id="chatbox">
                                <h5 id="chat-timestamp"></h5>
                                <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                            </div>

                            <div class="chat-bar-input-block">
                                <div id="userInput">
                                    <input type="text" id="textInput" class="input-box" name="msg" placeholder="Press 'Enter' to send a message">
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
        Copyright &copy; Restaurant Multicultura - Gebroeders de Smetstraat 1, 9000 Ghent | est 2021
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../menu.js"></script>
<script src="../static/chat.js"></script>
<script src="../static/responses.js"></script>
</html>