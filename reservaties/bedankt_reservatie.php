<?php

	$name = isset($_GET['name']) ? $_GET['name'] : false;
	$age = isset($_GET['age']) ? $_GET['age'] : false;

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>
	<main>
	<div class="thank-you-message">
		
	<?php
		// Name sent in
		if ($name) {
			echo '<h1>Reservatie ontvangen</h1>';
			echo '<p>Bedankt ' . htmlentities($name). ', we zullen u zo spoedig mogelijk contacteren!</p>';
			}
			else {
				echo '<p>Bedankt.</p>';
			}
			echo '<a class="button" href="../">Return to Home page</a>';
			?>
	</div>
</main>
</body>
</html>
