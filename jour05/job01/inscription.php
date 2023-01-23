<?php

error_reporting(E_USER_WARNING);

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$pass = $_POST['pass'];

if (isset($_POST['nom']) && $_POST['nom'] != '') {
    $mysqli = new mysqli('localhost', 'root', '', 'users_rtr2_jour05');
    $query = "INSERT INTO utilisateurs (nom, prenom, email, password) VALUES ('$nom', '$prenom', '$email', '$pass')";
    $result = $mysqli->query($query);
}

if ($_POST['submit'] == 'ok') {
    session_destroy();
    session_unset();
    session_abort();
    
    session_start();
    $_SESSION['user'] = $_POST['prenom'];
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>   
    <div class="main">
        <div class="form-container">
            <div class="form-window">
                
                <h2>Creez un nouvel utilizateur</h2>

                <form action="inscription.php" method="post">
                    <div class="form-container__block">
                        <div class="form-window__input-block">
                            <input type="text" placeholder="prenom" name="prenom" id="prenom">
                            <input type="text" placeholder="nom" name="nom" id="nom">
                            <input type="email" placeholder="email" name="email" id="email">
                            <input type="password" placeholder="password" name="pass" id="pass">
                            <input type="password" placeholder="confirm password" name="passconfirm" id="passconfirm">
                        </div>
                        <div class="btn-block">
                            <button type="submit" id="submit" name="submit" value="ok">Creer</button>
                            <button><a href="./index.php">Accueil</a></button>
                        </div>                         
                    </div>
                </form>
                <div class="error-window">
                    <p id="prenomerror"></p>
                    <p id="nomerror"></p>
                    <p id="emailerror"></p>
                    <p id="passerror"></p>
                </div>
            </div>            
        </div>
    </div>
    <script src="./scriptInsc.js"></script>
</body>
</html>