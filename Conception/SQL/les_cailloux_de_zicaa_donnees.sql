use les_cailloux_de_zicaa;
insert into administrateur (id_admin, nom_admin, prenom_admin, email_admin, adresse_admin, CP_admin, ville_admin) values
(null,"cresta", "zicaa","zikaha@hotmail.fr","16 rue condorcet","34110","frontignan");

insert into client (id_client, nom_client, prenom_client, adresse_client, CP_client, ville_client, telephone_client, email_client, pseudo_client, mdp_client) values
(null,"DUFORT", "Gautier","37 rue de la Camargaise","34000","MONTPELLIER","0700000026", "dufort-gau@hotmail.fr", "GAUDUF", ""),
(null,"DUPOND", "Tara", "18 rue delarueinvente","34000","MONTPELLIER", "0600000003", "tara@hotmail.fr", "TARDUP", ""),
(null,"GERARD", "Bertrand","20 rue de la Colombette","31200","TOULOUSE","0700000002", "gerard-ber@gmail.com", "BERGER", ""),
(null,"MARTIN", "Nicolas", "18 rue du Thaur","31000","TOULOUSE", "0600000007", "nico@hotmail.fr", "NIMART", ""),
(null,"BERNARD", "Léo","17 rue Comédie","34000","MONTPELLIER","0700000005", "leobernard@gmail.com", "LEOBER", ""),
(null,"PETIT", "Marc", "18 rue Chalançon","34000","MONTPELLIER", "0600000006", "marc.petit@gmail.com", "MARPET", ""),
(null,"ROBERT", "Jennyfer","17 rue de la Gare","31000","TOULOUSE","0700000006", "jenny.robert@hotmail.fr", "JENROB", ""),
(null,"RICHARD", "Carine", "88 rue delarueinvente","34000","MONTPELLIER", "0600000009", "carine@hotmail.fr", "CARRIC", ""),
(null,"DURAND", "Laura","25 rue de la Gare","31000","TOULOUSE","0700000003", "laura-durand@hotmail.fr", "LAUDUR", ""),
(null,"DUBOIS", "Paul", "25 rue Roquelaine","34000","MONTPELLIER", "0600000008", "paul@hotmail.fr", "PAUDUB", ""),
(null,"SIMON", "Olivier","35 rue Marquier","31000","TOULOUSE","0700000010", "oliviersimon@hotmail.fr", "OLISIM", ""),
(null,"BONNET", "Maxime", "18 rue Fosch","34000","MONTPELLIER", "0600000010", "max@hotmail.fr", "MAXBON", ""),
(null,"ROUX", "Ludovic","80 rue Riquet","31000","TOULOUSE","0700000011", "ludoroux@hotmail.fr", "LUDROU", ""),
(null,"DAVID", "Tatiana", "18 rue Marquise","34000","MONTPELLIER", "0600000011", "david@hotmail.fr", "TATIAD", ""),
(null,"DUPUY", "Laurence","27 rue de la Gare","31000","TOULOUSE","0700000012", "dupuylaurence@gmail.com", "LAUDUP", ""),
(null,"CRES", "Nausicaa", "18 rue delarueinvente","34000","MONTPELLIER", "0600000015", "naucre@hotmail.fr", "NAUCRE", ""),
(null,"DUPONT", "Martin", "15 rue duclient","34000","MONTPELLIER", "0600000015", "dupmar@hotmail.fr", "DUPMAR", "");

insert into commande (id_commande, id_client, id_produit, numero_commande, nom_client, prenom_client, adresse_client, CP_client, ville_client, montant_commande, quantite_produit, prix_final) values
(null, "2", "12", "01","DUPONT", "martin","15 rue duclient","34000","MONTPELLIER","15","1","20"),
(null, "2", "12", "02", "DUPONT", "martin","15 rue duclient","34000","MONTPELLIER","15","1","20");

insert into droits (id_droits, id_utilisateur) values
(null, "2");

insert into livraison (id_client, nom_client, prenom_client, adresse_livraison, CP_livraison, ville_livraison) values
(null, "dupont", "martin", "15 rue duclient","34000","montpellier"),
(null, "dupont", "martin", "15 rue duclient","34000","montpellier");

insert into paiement (id_paiement, paiement_cb, paiement_paypal) values
(null,"paiement par cb","nul");

insert into produit (id_produit, nom_produit, type_produit, prix_produit, id_admin) values
(null,"améthyste brute","pierre brute", "20", "1"),
(null,"bague aventurine","bague", "30", "1"),
(null,"citrine roulée","pierre roulée", "10", "1"),
(null,"labradorite galet","galet", "40", "1"),
(null,"géode améthyste","géode", "150", "1");

insert into utilisateur (id_utilisateur, identifiant_utilisateur) values
(null,"identifiant1"),
(null,"identifiant2"),
(null,"identifiant3");