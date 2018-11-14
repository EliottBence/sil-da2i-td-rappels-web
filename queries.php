<?php
$servername = "mysql:host=mysql-eliottbence.alwaysdata.net;dbname=eliottbence_lp";
$username = "144458_lp";
$password = "eliottbence";


try
{
    $bdd = new PDO($servername, $username, $password);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$id = 1;
$stmt = $bdd->prepare("SELECT * FROM movie WHERE id=".$id);
//$stmt = $bdd->prepare("SELECT * FROM MovieHasPerson WHERE id=".$id);

$stmt->execute();
$res = $stmt->fetch();



