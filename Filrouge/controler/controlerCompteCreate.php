<?php

    // Je récupère la vue de mon formulaire d'inscription
    require '../vue/vueCompte.php';

    // Je me connecte à la bdd
    require '../config/connectDatabase.php';

    // Je mets en relation les données de la vue à mon modèle pour l'exécution de la requête préparée
    require '../model/modelCompteCreate.php';
    
?>