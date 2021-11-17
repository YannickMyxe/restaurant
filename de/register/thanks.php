<?php

	$username = isset($_GET['username']) ? $_GET['username'] : false;

?><!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danke | Multicultura</title>
    <link rel="stylesheet" href="../../static/chat.css">
    <link rel="stylesheet" href="../../static/home.css">
    <?php
        include '../../php/loadCss.php'
    ?>
    <link rel="icon" href="../../img/logo.png">
</head>
<body>
	<header>
    <?php
        include '../../php/isAdmin.php';
        include '../../php/loadNavBar.php';
    ?>
    </header>
	<main>
	<div class="thank-you-message">
		
    <h1>Anmeldung erfolgreich</h1>
	<?php
		// Name sent in
		if ($username) {
			echo '<p>Danke ' . htmlentities($username).', Ihr Konto ist registriert, bitte melden Sie sich an oder gehen Sie zurück zur Startseite</p>';
			}
        else {
            echo '<p>Danke.</p>';
        }
    ?>
    <a class="button" href="../login">Gehen Sie zum Anmeldebildschirm</a>
    <a class="button" href="../">Zurück zur Startseite</a>
	</div>
</main>
</body>
</html>
