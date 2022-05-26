<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire_inscription</title>
    <link rel="stylesheet" href="formulaire_inscription.css">
</head>
    <body>
        <main>
            <header></header>
                <form action="../controler/controlerInscription.php" method="post">
                    <div class="page" id="page1">
                        <h1>Identité</h1>
                            <div>
                                <label for="nom">Nom :</label>
                                <input type ="text" id="nom" name="nom" class="form-control" placeholder="Tapez ici votre nom" required="required" autocomplete="off"></input>
                            </div>
                            <div>
                                <label for="prenom">Prénom :</label>
                                <input type ="text" id="prenom" name="prenom" class="form-control" placeholder="Tapez ici votre prénom" required="required" autocomplete="off"></input>
                            </div>
                        <button class="next" type="button">Suivant</button>
                    </div>
                    <div class="page" id="page2">
                        <h1>Informations</h1>
                            <div>
                                <label for="adresse">Adresse :</label>
                                <input type ="text" id="adresse" name="adresse" class="form-control" placeholder="Tapez ici votre adresse postale" required="required" autocomplete="off"></input>
                            </div>
                            <div>
                                <label for="CP">Code postal :</label>
                                <input type ="text" id="CP" name="CP" class="form-control" placeholder="Tapez ici votre code postal" required="required" autocomplete="off"></input>
                            </div>
                            <div>
                                <label for="ville">Ville :</label>
                                <input type ="text" id="ville" name="ville" class="form-control" placeholder="Tapez ici votre ville" required="required" autocomplete="off"></input>
                            </div>
                        <button class="prev" type="button">Prédédent</button>
                        <button class="next" type="button">Suivant</button>
                    </div>
                    <div class="page" id="page3">
                        <h1>Contact</h1>
                            <div>
                                <label for="tel">Numéro de téléphone :</label>
                                <input type ="text" id="tel" name="tel" class="form-control" placeholder="Tapez ici votre numéro de téléphone" required="required" autocomplete="off"></input>
                            </div>
                            <div>
                                <label for="email">E-mail :</label>
                                <input type ="email" id="email" name="email" class="form-control" placeholder="Tapez ici votre code email" required="required" autocomplete="off"></input>
                            </div>
                        <button class="prev" type="button">Prédédent</button>
                        <button class="next" type="button">Suivant</button>
                    </div>
                    <div class="page" id="page4">
                        <h1>Identifiants</h1>
                            <div>
                                <label for="pseudo">Pseudo :</label>
                                <input type ="text" id="pseudo" name="pseudo" class="form-control" placeholder="Tapez ici votre code pseudo" required="required" autocomplete="off"></input>
                            </div>
                            <div>
                                <label for="pass">Mot de passe :</label>
                                <input type ="password" id="mdp" name="mdp" class="form-control" placeholder="Tapez ici votre mot de passe" required="required" autocomplete="off"></input>
                            </div>
                        <button class="prev" type="button">Prédédent</button>
                        <button>Terminer</button>
                    </div>
                </form>
        </main>
    <script src="formulaire_inscription.js"></script>
    </body>
</html>