<?php

// Je récupère la vue de mon formulaire de connexion
require '../vue/vueConnexion.php';

// Je me connecte à la bdd
require '../config/connectDatabase.php';

    // Je récupère les champs renseignés dans mon formulaire de connexion
    if(isset($_POST['pseudo'])
    && isset($_POST['mdp']));
    
{
    // Je crée les variables qui vont me permettre d'insérer ces champs dans ma base de données
        $pseudo = $_POST['pseudo'];
        $mdp = $_POST['mdp'];

// Je mets en relation les données de la vue à mon modèle pour l'exécution de la requête préparée
require '../model/modelConnexion.php';
}

?>