// Je déclare l'adresse url de mon API
const url = 'https://data.laregion.fr/api/records/1.0/search/?dataset=reserves-naturelles-regionales-rnr&q=&facet=nom_dep';

// Je récupère l'id "zone" de mon paragraphe HTML
let zone = document.getElementById("zone");

// Je créé une fonction qui affiche toutes les réserves de la région
function showAllReserve() {
    // Je récupère les données présentes dans mon url
    fetch(url)
    // A la réponse de l'API, je récupère les données présentes dans le format json
    .then(response => response.json())
    // J'utilise les données du data
    .then(data => 
    {
        // Je créé une boucle qui intègre dans mon paragraphe à l'id "zone" les données récupérées dans le tableau de mon API 
        for (let i = 0; i<data.records.length; i++)
        {
            // Je déclare une variable qui stocke les url des réserves naturelles pour les afficher dans mon paragraphe
            let url2 = data.records[i].fields.url_fiche;
            // J'intègre dans mon paragraphe du texte en h3 avec les données : nom, surface, url et CP du département
            zone.innerHTML += "<section><h3>Nom : " + data.records[i].fields.nom_site + "</h3>" +
            "<p>Surface : " + data.records[i].fields.surface + " km²" + "</p>" +
            "<p>Url de la fiche : " + "<a href =" + url2 + ">" + data.records[i].fields.url_fiche + "</a></p>" +
            "<p>Code du département : " + data.records[i].fields.code_dep + "</p></section>"; 
        }
    });
}

// Je récupère mes id "#dpt"
const input = document.querySelector("#dpt");
// J'ajoute un écouteur d'évènement qui déclenche la fonction showFilter quand on rentre des données dans l'input
input.addEventListener("input", showFilter);

// Je créé une fonction qui filtre par département
function showFilter()
{
    // Je vide automatiquement l'input
    zone.innerHTML = "";

    // Je récupère les données présentes dans mon url
    fetch(url)
    // A la réponse de l'API, je récupère les données présentes dans le format json
    .then(response => response.json())
    // Je créé une boucle qui intègre dans mon paragraphe à l'id "zone" les données récupérées dans le tableau de mon API
    .then(data => {
        for (let i = 0; i<data.records.length; i++) {
            // Je renvoi la valeur tapée dans mon input pour créer le filtre
            if (data.records[i].fields.code_dep === input.value) 
            {
                // Je déclare une variable qui stocke les url des réserves naturelles pour les afficher dans mon paragraphe
                let url2 = data.records[i].fields.url_fiche;
                // J'intègre dans mon paragraphe du texte en h3 avec les données : nom, surface, url et CP du département
                zone.innerHTML += "<section><h3>Nom : " + data.records[i].fields.nom_site + "</h3>" +
                "<p>Surface : " + data.records[i].fields.surface + " km²" + "</p>" +
                "<p>Url de la fiche : " + "<a href =" + url2 + ">" + data.records[i].fields.url_fiche + "</a></p>" +
                "<p>Code du département : " + data.records[i].fields.code_dep + "</p></section>";             
            } 
        }
    });document.getElementById('input').value = showFilter;
}

