const pages = document.querySelectorAll(".page")
const header = document.querySelector("header")
const nbPages = pages.length // Nombres de pages du formulaire
let pageActive = 1

console.log(nbPages)

// 1 AJOUT DES NUMEROS DE PAGE DANS LE HEADER

window.onload = () => {
    document.querySelector(".page").style.display = "initial"
    pages.forEach((page, formulaire_inscription) => {
        let element = document.createElement("div")
        element.classList.add("page-num")
        element.id = "num" + (formulaire_inscription +1)
        if(pageActive == formulaire_inscription+1){
            element.classList.add("active")
        }
        element.innerHTML = formulaire_inscription+1
        header.appendChild(element)
    })

    // 2 GESTION DES BOUTONS ET DE L'ANIMATION

    let boutons = document.querySelectorAll(".next")
    for(let bouton of boutons){
        bouton.addEventListener("click", pageSuivante);
    }
    boutons = document.querySelectorAll(".prev")
    for(let bouton of boutons){
        bouton.addEventListener("click", pagePrecedente);
    }
}

function pageSuivante(){
    for(let page of pages){
        page.style.display = "none"
    }
    this.parentElement.nextElementSibling.style.display = "initial"
    document.querySelector(".active").classList.remove("active")
    pageActive+
    document.querySelector("#num"+pageActive).classList.add("active")
}

function pagePrecedente(){
    for(let page of pages){
        page.style.display = "none"
    }
    this.parentElement.previousElementSibling.style.display = "initial"
    document.querySelector(".active").classList.remove("active")
    pageActive-
    document.querySelector("#num"+pageActive).classList.add("active")
}
