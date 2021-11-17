<?php

	$name = isset($_GET['naam']) ? $_GET['naam'] : false;

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
		
	<?php
		// Name sent in
		if ($name) {
			echo '<h1>Bericht ontvangen</h1>';
			echo '<p>Bedankt ' . htmlentities($name). ', we zullen u zo spoedig mogelijk contacteren!</p>';
			}
			else {
				echo '<p>Bedankt.</p>';
			}
			echo '<a class="button" href="../">Keer terug naar de home pagina</a>';
			?>
	</div>
</main>
</body>
</html>
