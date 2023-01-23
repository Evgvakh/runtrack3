<?php

error_reporting(E_WARNING);

if (isset($_POST['email']) && $_POST['email'] != '') {
    session_start();
    $postPass = $_POST['pass'];
    $postEmail = $_POST['email'];
    $mysqli = new mysqli('localhost', 'root', '', 'users_rtr2_jour05');
    $result = $mysqli->query("SELECT prenom, nom FROM utilisateurs WHERE password = '$postPass' AND email = '$postEmail'");
    $result = $result->fetch_assoc();

    $_SESSION['authUser'] = $result['prenom'] . " " . $result['nom'];
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
                             
                <h2>Connectez-vous</h2>
                <form action="connexion.php" method="post">
                    <div class="form-container__block">
                        <div class="form-window__input-block">                            
                            <input type="email" placeholder="email" name="email" id="emailConn">
                            <input type="password" placeholder="password" name="pass" id="passConn">                            
                        </div>
                        <button type="submit" id="submitConn" name="submitConnection" value="ok">Se connecter</button>                        
                    </div>
                </form>
                <div class="error-window">                    
                    <p id="connerror"></p>
                    
                </div>
            </div>            
        </div>
    </div>
    <script src="./scriptConn.js"></script>
</body>
</html>