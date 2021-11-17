<?php

	$username = isset($_GET['username']) ? $_GET['username'] : false;

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you | Multicultura</title>
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
		
    <h1>Registration successful</h1>
	<?php
		// Name sent in
		if ($username) {
			echo '<p>Thanks ' . htmlentities($username).', your account is registered, please log in or go back to the home page</p>';
			}
        else {
            echo '<p>Thanks.</p>';
        }
    ?>
    <a class="button" href="../login">Go to the login screen</a>
    <a class="button" href="../">Return to the home page</a>
	</div>
</main>
</body>
</html>
