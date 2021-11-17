<?php

	$username = isset($_GET['username']) ? $_GET['username'] : false;

?><!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci | Multicultura</title>
    <link rel="stylesheet" href="../static/chat.css">
    <link rel="stylesheet" href="../static/home.css">
    <?php
        include '../../php/loadCss.php'
    ?>
    <link rel="icon" href="../img/logo.png">
</head>
<body>
	<header>
    <?php
        include '../../php/loadNavBar_fr.php';
    ?>
    </header>
	<main>
	<div class="thank-you-message">
		
    <h1>Inscription réussie</h1>
	<?php
		// Name sent in
		if ($username) {
			echo '<p>Merci, ' . htmlentities($username).', votre compte est enregistré, veuillez vous connecter ou retourner à la page d"accueil.</p>';
			}
        else {
            echo '<p>Merci.</p>';
        }
    ?>
    <a class="button" href="../login">Aller à l"écran de connexion</a>
    <a class="button" href="../">Retour à la page d"accueil</a>
	</div>
</main>
</body>
</html>
