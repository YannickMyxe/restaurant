<?php

// Constanten (connectie-instellingen databank)
define ('DB_HOST', 'localhost');
define ('DB_USER', 'yannick.vankerckvoor');
define ('DB_PASS', 'udb7K@22');
define ('DB_NAME', 'portfolio_yannick');


date_default_timezone_set('Europe/Brussels');

// Verbinding maken met de databank
try {
    $db = new PDO('mysql:host=' . DB_HOST .';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Verbindingsfout: ' .  $e->getMessage();
    exit;
}

// Opvragen van alle taken uit de tabel tasks
$stmt = $db->prepare('SELECT * FROM messages ORDER BY added_on DESC');
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My messages</title>
    <?php
        include '../php/loadCss.php'
    ?>
</head>
<body>
<header>
    <?php
        include '../php/isAdmin.php';
        include '../php/loadNavBar.php';
    ?>
</header>
    <main>
        <h1>My messages</h1>
        <?php if (sizeof($items) > 0) { ?>
        <ul class="messagelist">
            <?php foreach ($items as $item) { ?>
            <li><?php echo htmlentities($item['sender']); ?><?php echo ' ['.htmlentities($item['email']).'] ';?>: <?php echo htmlentities($item['message']); ?> (<?php echo (new Datetime($item['added_on']))->format('d-m-Y H:i:s'); ?>)</li>
            <?php } ?>
        </ul>
        <?php
        } else {
            echo '<p>No messages recieved.</p>' . PHP_EOL;
        }
        ?>
    </main>
    <footer>
        <p>Footer (c) 2021 Yannick Van kercvkoorde - socials - copyright - address</p>
    </footer>
</body>