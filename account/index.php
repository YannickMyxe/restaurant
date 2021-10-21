<?php
    session_start();
    // Check if the user is already logged in, if yes then redirect him to welcome page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false){
        header("location: ../login");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account | Multicultura</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="icon" href="img/logo.png">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="navbar__container">
                <a class="logo" href="./"><img src="../img/logo.png" alt="LOGO"></a>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>

                <ul class="navbar__menu">
                    <li class="navbar__item"><a class="navbar__links" href="../">Home</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../reservaties/">Reserveren</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../about/">About</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="https://github.com/YannickMyxe/restaurant">Project</a></li>
                    <li class="navbar__item"><a class="navbar__links" href="../contact/">Contact</a></li>
                    <li class="navbar__item"><a class="navbar__links current-page" href="../login/"><i class="fas fa-user-circle"></i>Login</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <h1>Account gegevens</h1>
        <form action="" method="get">
            <label for="username">Naam</label>
            <input type="text" name="username" id="username" readonly value="<?php echo $_SESSION['username']; ?>">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" readonly value="<?php echo $_SESSION['email']; ?>">
            <label for="id">Id</label>
            <input type="text" name="id" id="id" readonly value="<?php echo $_SESSION['id']; ?>">

        </form>
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