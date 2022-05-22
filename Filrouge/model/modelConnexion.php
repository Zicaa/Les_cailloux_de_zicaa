<?php
// Je créé une requête préparée qui sélectionne tous les pseudos de ma BDD
 try {

    $requete = $database->prepare("SELECT * FROM client WHERE
        pseudo_client = :pseudo_client"
    ); 
    
    // Je stocke les résultats de ma requête dans une variable
    $execution = $requete->execute(array(
        'pseudo_client' => $pseudo,
    ));

    // Si l'exécution a lieu, une fonction compare si le mot de passe du champ correspond à celui de ma BDD
    if ($execution){
        $user=$requete->fetch();
        if (password_verify($mdp, $user['mdp_client'])){
            // Je créé un cookie qui affiche le prénom du client sur son compte
            setcookie("username",$user['prenom_client']);
            echo "<script type='text/javascript'>window.location.replace('../controler/controlerCompteConnect.php');</script>";
        }else{
            echo "<script type='text/javascript'>alert('Erreur de saisie, veuillez retaper le formulaire.');</script>";
            echo "<script type='text/javascript'>window.location.replace('../vue/vueConnexion.php');</script>";
        }
    
    }
    // Si l'exécution échoue, un message d'erreur s'affiche
    } catch (EXCEPTION $e) {
        die("erreur de connexion");
}

?>