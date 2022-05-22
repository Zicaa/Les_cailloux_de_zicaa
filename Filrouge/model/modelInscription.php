<?php
// Je créé une requête préparée qui insère des données dans ma table client
try {
    $requete = $database->prepare("INSERT INTO client SET
        nom_client = :nom_client,
        prenom_client = :prenom_client,
        adresse_client = :adresse_client,
        CP_client = :CP_client,
        ville_client = :ville_client,
        telephone_client = :telephone_client,
        email_client = :email_client,
        pseudo_client = :pseudo_client,
        mdp_client = :mdp_client"
    ); 
    
    // J'insère dans ma BDD les données récupérées dans les champs de mon formulaire
    $execution = $requete->execute(array(
        'nom_client' => $nom, 
        'prenom_client' => $prenom, 
        'adresse_client' => $adresse, 
        'CP_client' => $CP, 
        'ville_client' => $ville,
        'telephone_client' => $tel, 
        'email_client' => $email, 
        'pseudo_client' => $pseudo, 
        'mdp_client' => password_hash($mdp,PASSWORD_DEFAULT),
    ));

    // Si la requête est exécutée je renvoie l'utilisateur sur sa page de compte
    if ($execution){
        echo "<script type='text/javascript'>window.location.replace('../controler/controlerCompteCreate.php');</script>";
    }
    // Si la requête échoue, un message d'erreur s'affiche et renvoie l'utilisateur sur le formulaire
    } catch (EXCEPTION $e) {
        die("<script type='text/javascript'>alert('Erreur de saisie, veuillez retaper le formulaire.');</script>
            <script type='text/javascript'>window.location.replace('../vue/vueInscription.php');</script>");
}
?>
