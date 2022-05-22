<?php

    // Je récupère la vue de mon formulaire d'inscription
    require '../vue/vueInscription.php';

    // Je me connecte à la bdd
    require '../config/connectDatabase.php';

        // Je récupère les champs renseignés dans mon formulaire d'inscription
        if(isset($_POST['nom'])
        && isset($_POST['prenom'])
        && isset($_POST['adresse'])
        && isset($_POST['CP'])
        && isset($_POST['ville'])
        && isset($_POST['tel'])
        && isset($_POST['email'])
        && isset($_POST['pseudo'])
        && isset($_POST['mdp']));
        
    {
        // Je crée les variables qui vont me permettre d'insérer ces champs dans ma base de données
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $adresse = $_POST['adresse'];
            $CP = $_POST['CP'];
            $ville = $_POST['ville'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $pseudo = $_POST['pseudo'];
            $mdp = $_POST['mdp'];

    // Je mets en relation les données de la vue à mon modèle pour l'exécution de la requête préparée
    require '../model/modelInscription.php';
    }
?>