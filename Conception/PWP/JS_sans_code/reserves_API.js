// Je déclare l'adresse url de mon API
const url = 'https://data.laregion.fr/api/records/1.0/search/?dataset=reserves-naturelles-regionales-rnr&q=&facet=nom_dep';

let zone = document.getElementById("zone");

function showAllReserve() {
    fetch(url)
    .then(response => response.json())
    .then(data => 
    {
        for (let i = 0; i<data.records.length; i++)
        {
            let url2 = data.records[i].fields.url_fiche;
            zone.innerHTML += "<section><h3>Nom : " + data.records[i].fields.nom_site + "</h3>" +
            "<p>Surface : " + data.records[i].fields.surface + " km²" + "</p>" +
            "<p>Url de la fiche : " + "<a href =" + url2 + ">" + data.records[i].fields.url_fiche + "</a></p>" +
            "<p>Code du département : " + data.records[i].fields.code_dep + "</p></section>"; 
        }
    });
}

const input = document.querySelector("#dpt");
input.addEventListener("input", showFilter);

function showFilter()
{
    zone.innerHTML = "";

    fetch(url)
    .then(response => response.json())
    .then(data => {
        for (let i = 0; i<data.records.length; i++) {
            if (data.records[i].fields.code_dep === input.value) 
            {
                let url2 = data.records[i].fields.url_fiche;
                zone.innerHTML += "<section><h3>Nom : " + data.records[i].fields.nom_site + "</h3>" +
                "<p>Surface : " + data.records[i].fields.surface + " km²" + "</p>" +
                "<p>Url de la fiche : " + "<a href =" + url2 + "target=_blank>" + data.records[i].fields.url_fiche + "</a></p>" + 
                "<p>Code du département : " + data.records[i].fields.code_dep + "</p></section>";             
            } 
        }
    });document.getElementById('input').value = showFilter;
}

