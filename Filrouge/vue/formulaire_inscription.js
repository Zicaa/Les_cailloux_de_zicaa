// Je cherche les différents éléments de la page

const pages = document.querySelectorAll(".page")
const header = document.querySelector("header")
const nbPages = pages.length // Nombres de pages du formulaire
let pageActive = 1

console.log(nbPages)

// J'attend le chargement de la page
window.onload = () => {
    // J'affiche la première page du formulaire
    document.querySelector(".page").style.display = "initial"
    // J'affiche les numéros des pages dans l'entête
    // Je parcours la liste des pages
    pages.forEach((page, formulaire_inscription) => {
        // Je créé l'élément "numéro de page"
        let element = document.createElement("div")
        element.classList.add("page-num")
        element.id = "num" + (formulaire_inscription +1)
        if(pageActive == formulaire_inscription+1){
            element.classList.add("active")
        }
        element.innerHTML = formulaire_inscription+1
        header.appendChild(element)
    })

    // Je gère les boutons "suivant"
    let boutons = document.querySelectorAll(".next")

    for(let bouton of boutons){
        bouton.addEventListener("click", pageSuivante);
    }

    // Je gère les boutons "précédent"
    boutons = document.querySelectorAll(".prev")

    for(let bouton of boutons){
        bouton.addEventListener("click", pagePrecedente);
    }
}


/* Cette fonction fait avancer le formulaire d'une page */

function pageSuivante(){
    // J'incrémente pageActive pour dire qu'on passe à la page suivante
    pageActive++

    // Je masque toutes les pages
    for(let page of pages){
        page.style.display = "none"
    }

    // J'affiche la page suivante
    this.parentElement.nextElementSibling.style.display = "initial"

    // Je désactive la page active
    document.querySelector(".active").classList.remove("active")

    // J'incrémente pageActive pour dire qu'on passe à la page suivante
    pageActive+

    // J'active le nouveau numéro
    document.querySelector("#num"+pageActive).classList.add("active")
}

/* Cette fonction fait reculer le formulaire d'une page */

function pagePrecedente(){
    // Je décrémente pageActive pour dire qu'on passe à la page précédente
    pageActive--

    // Je masque toutes les pages
    for(let page of pages){
        page.style.display = "none"
    }

    // J'affiche la page précédente
    this.parentElement.previousElementSibling.style.display = "initial"

    // Je désactive la page active
    document.querySelector(".active").classList.remove("active")

    // J'incrémente pageActive pour dire qu'on passe à la page suivante
    pageActive-

    // J'active le nouveau numéro
    document.querySelector("#num"+pageActive).classList.add("active")
}