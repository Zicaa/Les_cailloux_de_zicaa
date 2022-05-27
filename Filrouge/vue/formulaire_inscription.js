const pages = document.querySelectorAll(".page")
const header = document.querySelector("header")
const nbPages = pages.length // nbre de pages du formulaire
let pageActive = 1

console.log(nbPages)

/*1 / CREATION DES NUMEROS DE PAGES DANS LE HEADER*/

window.onload = () => {
    // j'affiche la première page du formulaire
    document.querySelector(".page").style.display = "initial"
    // je parcours la liste des pages
    pages.forEach((page, formulaire_inscription) => {
        // je créé l'élément "numéro de page" dans le header
        let element = document.createElement("div")
        element.classList.add("page-num")
        element.id = "num" + (formulaire_inscription +1)
        if(pageActive == formulaire_inscription+1){
            element.classList.add("active")
        }
        element.innerHTML = formulaire_inscription+1
        header.appendChild(element)
    })

/*2 GESTION DES BOUTONS*/

    // boutons suivant
    let boutons = document.querySelectorAll(".next")

    for(let bouton of boutons){
        bouton.addEventListener("click", pageSuivante);
    }

    // boutons précédents
    boutons = document.querySelectorAll(".prev")

    for(let bouton of boutons){
        bouton.addEventListener("click", pagePrecedente);
    }
}


/* Cette fonction fait avancer le formulaire d'une page */

function pageSuivante(){
    pageActive++
    for(let page of pages){
        page.style.display = "none"
    }
    this.parentElement.nextElementSibling.style.display = "initial"

    document.querySelector(".active").classList.remove("active")
    pageActive+

    // j'active le nouveau numéro
    document.querySelector("#num"+pageActive).classList.add("active")
}

/* Cette fonction fait reculer le formulaire d'une page */

function pagePrecedente(){
    pageActive--

    for(let page of pages){
        page.style.display = "none"
    }

    this.parentElement.previousElementSibling.style.display = "initial"
    document.querySelector(".active").classList.remove("active")
    pageActive-

    // j'active le nouveau numéro
    document.querySelector("#num"+pageActive).classList.add("active")
}