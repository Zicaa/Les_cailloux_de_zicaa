<?php

    // Je me connecte à mon serveur de base de données grâce à un new PDO
    $database= new PDO('mysql:host=localhost;dbname=les_cailloux_de_zicaa', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $database->exec("set names utf8"); 

?>