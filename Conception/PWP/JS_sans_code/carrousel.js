const items = document.getElementsByClassName("img");
const nbSlide = items.length;
const suivant = document.querySelector(".right");
const precedent = document.querySelector(".left");

let compteur = 0;

function slideSuivante(){
    items[compteur].classList.remove("active");

    if(compteur < nbSlide-1){
        compteur++;
    }else{
        compteur = 0;
    }

    items[compteur].classList.add("active")
    console.log(compteur);
}
suivant.addEventListener("click", slideSuivante)

function slidePrecedente(){
    items[compteur].classList.remove("active");

    if(compteur >0){
        compteur--;
    // Nombre de slide = -1 pour rester dans mon tableau d'images
    }else{
        compteur = nbSlide -1;
    }

    items[compteur].classList.add("active")
    console.log(compteur);
}
precedent.addEventListener("click", slidePrecedente)