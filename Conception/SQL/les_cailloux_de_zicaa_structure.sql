drop database if exists les_cailloux_de_zicaa;
create database les_cailloux_de_zicaa CHARACTER SET utf8 COLLATE utf8_general_ci;
use les_cailloux_de_zicaa;

create table utilisateur(
id_utilisateur int auto_increment primary key,
identifiant_utilisateur varchar(50)
);

create table droits(
id_droits int auto_increment primary key,
id_utilisateur int
);

create table administrateur(
id_admin int auto_increment primary key,
nom_admin varchar(50),
prenom_admin varchar(50),
email_admin varchar(50),
telephone_admin varchar(50),
adresse_admin varchar (50),
CP_admin int,
ville_admin varchar (50)
);

create table client(
id_client int auto_increment primary key,
nom_client varchar(50),
prenom_client varchar(50),
adresse_client varchar (50),
CP_client int,
ville_client varchar (50),
telephone_client varchar(50),
email_client varchar(50),
pseudo_client varchar(50),
mdp_client varchar(100)
);


create table livraison(
id_client int auto_increment primary key,
nom_client varchar(50),
prenom_client varchar(50),
adresse_livraison varchar (50),
CP_livraison int,
ville_livraison varchar (50)
);

create table fournisseur(
id_fournisseur int auto_increment primary key,
id_admin int,
nom_fournisseur varchar(50),
prenom_fournisseur varchar(50),
email_fournisseur varchar(50),
telephone_fournisseur varchar(50),
adresse_fournisseur varchar (50),
CP_fournisseur int,
ville_fournisseur varchar (50)
);

create table formulaire(
id_formulaire int auto_increment primary key,
id_client varchar(50),
nom_contact varchar (50),
prenom_contact varchar(50),
email_contact varchar(50),
demande text,
id_admin int not null
);

create table produit(
id_produit int auto_increment primary key,
nom_produit varchar(50),
type_produit varchar(50),
prix_produit int,
id_admin int
);

create table categorie(
id_categorie int auto_increment primary key
);

create table image(
id_image int auto_increment primary key
);

create table stocks(
id_stock int auto_increment primary key,
id_produit int,
nom_produit varchar(50),
type_produit varchar(50),
prix_produit int,
quantite_produit int,
id_admin int
);

create table avantage(
id_avantage int auto_increment primary key,
id_client int,
id_promotion int,
montant_promotion int,
prix_final int
);

create table promotion(
id_promotion int auto_increment primary key,
id_client int,
montant_promotion int,
prix_final int,
id_admin int
);

create table commande(
id_commande int auto_increment primary key,
id_client int,
id_produit int,
numero_commande int,
nom_client varchar (50),
prenom_client varchar (50),
adresse_client varchar (50),
CP_client int,
ville_client varchar (50),
montant_commande int,
quantite_produit int,
prix_final int
);

create table paiement(
id_paiement int auto_increment primary key,
paiement_cb varchar (50),
paiement_paypal varchar (50)
);

create table contacter(
id_client int,
id_formulaire int
);

create table beneficier(
id_client int,
id_avantage int,
id_promotion int
);

create table stocker(
id_produit int,
id_stock int
);

create table acheter(
id_client int,
id_produit int
);

create table fournir(
id_fournisseur int,
id_produit int
);

create table editer(
id_admin int,
id_commande int,
id_client int,
id_produit int
);

create table regler(
id_paiement int,
id_commande int,
id_client int,
id_produit int
);

create table avoir(
id_produit int,
id_categorie int,
id_image int
);

alter table contacter
add constraint fk_contacter_client foreign key (id_client) 
references client(id_client);

alter table contacter
add constraint fk_contacter_formulaire foreign key (id_formulaire) 
references formulaire(id_formulaire);

alter table beneficier
add constraint fk_beneficier_client foreign key (id_client) 
references client(id_client);

alter table beneficier
add constraint fk_beneficier_avantage foreign key (id_avantage) 
references avantage(id_avantage);

alter table beneficier
add constraint fk_beneficier_promotion foreign key (id_promotion) 
references promotion(id_promotion);

alter table stocker
add constraint fk_stocker_produit foreign key (id_produit) 
references produit(id_produit);

alter table stocker
add constraint fk_stocker_stocks foreign key (id_stock) 
references stocks(id_stock);

alter table acheter
add constraint fk_acheter_client foreign key (id_client) 
references client(id_client);

alter table acheter
add constraint fk_acheter_produit foreign key (id_produit) 
references produit(id_produit);

alter table fournir
add constraint fk_fournir_fournisseur foreign key (id_fournisseur) 
references fournisseur(id_fournisseur);

alter table fournir
add constraint fk_fournir_produit foreign key (id_produit) 
references produit(id_produit);

alter table avoir
add constraint fk_avoir_produit foreign key (id_produit) 
references produit(id_produit);

alter table avoir
add constraint fk_avoir_categorie foreign key (id_categorie) 
references categorie(id_categorie);

alter table avoir
add constraint fk_avoir_image foreign key (id_image) 
references image(id_image);

alter table regler
add constraint fk_regler_commande foreign key (id_commande) 
references commande(id_commande);

alter table regler
add constraint fk_regler_client foreign key (id_client) 
references client(id_client);

alter table regler
add constraint fk_regler_produit foreign key (id_produit) 
references produit(id_produit);

alter table editer
add constraint fk_editer_commande foreign key (id_commande) 
references commande(id_commande);

alter table editer
add constraint fk_editer_client foreign key (id_client) 
references client(id_client);

alter table editer
add constraint fk_editer_produit foreign key (id_produit) 
references produit(id_produit);

SELECT nom_client, prenom_client FROM client;
  
SELECT nom_client, prenom_client, 
adresse_client, CP_client, ville_client
FROM client
WHERE ville_client = "TOULOUSE";

SELECT nom_client, prenom_client,
adresse_client, CP_client, ville_client
FROM client
WHERE ville_client = "TOULOUSE" 
AND CP_client = "31200";

SELECT *
FROM `commande`
WHERE `nom_client` = (
    SELECT "DUPONT"
    FROM `client`
    LIMIT 1
  );
  
SELECT *
FROM `commande`
WHERE `nom_client` IN (
    SELECT `nom_client`
    FROM `client`
    WHERE `prix_final` = "20"
  );