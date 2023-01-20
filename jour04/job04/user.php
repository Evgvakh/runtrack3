<?php

$mysqli = new mysqli('localhost', 'root', '', 'fetchusers');

$result = $mysqli->query("SELECT * FROM utilisateurs");

$json = [];
while ($row = $result->fetch_assoc()) {
    $json[] = ['name' => $row['prenom'], 'surname' => $row['nom'], 'email' => $row['email']];
}

$arr = json_encode($json);

$fd = fopen("file.json", 'w') or die("failed");
fwrite($fd, $arr);
fclose($fd);

header('Location: ./index.php');

var_dump($arr);