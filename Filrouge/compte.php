<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /></meta>
        <title>Les cailloux de Zicaa</title>
        <link rel="stylesheet" href="css/index.css"></link>
        <link rel="stylesheet" href="css/responsive_index.css" media="only screen and (max-width:800px)"></link>
    </head>
    <body>
        <header><!-- CSS en pleine page --></header>
            <aside>
                <nav class="liens">
                    <ul>
                        <li class="liens"><a href="index.php">ACCUEIL</a></li>
                        <li class="liens"><a href="boutique.php">BOUTIQUE</a></li>
                        <li class="liens"><a href="guide.php">GUIDE DES PIERRES</a></li>
                        <li class="liens"><a href="compte.php">MON COMPTE</a></li>
                        <li class="liens"><a href="reserves_API.html"target="_blank">RESERVES NATURELLES DE LA REGION</a></li>
                        <li><input type="search" id="site-search" aria-label="Search through site content" placeholder="rechercher"></input></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 
                        1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 
                        0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
                        </svg></li>
                    </ul>  
                </nav>
            </aside>  
                <fieldset>
                    <legend><h1>Me connecter</h1></legend>
                    <form action="vue/vueConnexion.php"method="get" target="_blank">
                        <button type="submit">Connexion</button>
                    </form>
                    </form>
                    <legend><h1>Créer mon compte</h1></legend>
                    <form action="vue/vueInscription.php"method="get" target="_blank">
                        <button type="submit">Création</button>
                        <div>
                            <img src ="images/amethyst.png" alt="img"/>
                        </div>
                    </form>
                </fieldset>
        <footer>
                <nav>
                    <ul>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="mentions_legales.php">Mentions légales</a></li>
                        <li><a href="partenaire.php">Nos partenaires</a></li>
                    </ul>
                </nav>
            <script src="js/navbar.js"></script>
        </footer>
    </body>
</html>