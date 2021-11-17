<?php

	$username = isset($_GET['username']) ? $_GET['username'] : false;

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bedankt | Multicultura</title>
    <link rel="stylesheet" href="../static/chat.css">
    <link rel="stylesheet" href="../static/home.css">
    <?php
        include '../php/loadCss.php'
    ?>
    <link rel="icon" href="../img/logo.png">
</head>
<body>
	<header>
    <?php
        include '../php/isAdmin.php';
        include '../php/loadNavBar.php';
    ?>
    </header>
	<main>
	<div class="thank-you-message">
		
    <h1>Registratie geslaagd</h1>
	<?php
		// Name sent in
		if ($username) {
			echo '<p>Bedankt ' . htmlentities($username).', uw account is regeistreerd, log u in of ga terug naar de home pagina</p>';
			}
        else {
            echo '<p>Bedankt.</p>';
        }
    ?>
    <a class="button" href="../login">Ga naar het login scherm</a>
    <a class="button" href="../">Keer terug naar de home pagina</a>
	</div>
</main>
</body>
</html>
