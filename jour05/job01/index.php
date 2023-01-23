<?php

error_reporting(E_WARNING || E_USER_WARNING);

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'users_rtr2_jour05');
$mysqli->query("DELETE FROM utilisateurs WHERE nom = ''");
$result = $mysqli->query("SELECT * FROM utilisateurs");

$json = [];
while ($row = $result->fetch_assoc()) {
    $json[] = ['id' => $row['id'], 'name' => $row['prenom'], 'surname' => $row['nom'], 'email' => $row['email'], 'password' => $row['password']];
}

$arr = json_encode($json);

$fd = fopen("users.json", 'w') or die("failed");
fwrite($fd, $arr);
fclose($fd);

if (isset($_POST['quit']) && $_POST['quit'] == 'Quitter') {
    $_SESSION['authUser'] = '';
    $_SESSION['user'] = '';
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="form-container">
            <div class="form-window">
                <?php if (!isset($_SESSION['authUser']) || $_SESSION['authUser'] == ''): ?>   
                    <?php if (!isset($_SESSION['user']) || $_SESSION['user'] == ''): ?>
                    <h2>Connectez-vous ou inscrivez-vous</h2>
                    <?php else: ?>
                    <h2>Bonjour, <?=$_SESSION['user']?>! Souhaitez-vous vous connecter?</h2>
                    <?php endif; ?>    
                    <div class="form__btns-block">
                        <button><a href="./connexion.php">Connection</a></button>
                        <button><a href="./inscription.php">Inscription</a></button>
                    </div>
                <?php else: ?>
                    <h2>Bonjour, <b><?=$_SESSION['authUser']?>!</b></h2>
                    <form action="" method="post">
                        <input type="submit" value="Quitter" name="quit">
                    </input></form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>