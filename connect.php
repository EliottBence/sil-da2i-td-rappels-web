<?php
$servername = "mysql:host=mysql-eliottbence.alwaysdata.net;dbname=eliottbence_lp";
$username = "144458_lp";
$password = "eliottbence";


try
{
    global $bdd;
    $bdd = new PDO($servername, $username, $password);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
