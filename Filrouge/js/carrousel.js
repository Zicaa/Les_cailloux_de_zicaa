const items = document.getElementsByClassName("img");
const nbSlide = items.length;
const suivant = document.querySelector(".right");
const precedent = document.querySelector(".left");

// système de compteur d'image initialisé à zéro
let compteur = 0;

// fonction qui incrémente chaque image de 1
function slideSuivante(){
    // sélection de la première image du tableau : retrait de la classe active
    items[compteur].classList.remove("active");

    // on incrémente de 1 si le compteur est <-1
    if(compteur < nbSlide-1){
        console.log(compteur++);
    }else{
        compteur = 0;
    }

    // ajout de la classe active : l'image apparaît
    items[compteur].classList.add("active")
    console.log(compteur);
}
suivant.addEventListener("click", slideSuivante)

// fonction qui décrémente chaque image de 1
function slidePrecedente(){
    // sélection de la première image du tableau : retrait de la classe active
    items[compteur].classList.remove("active");

    // on décrémente de 1 si le compteur est >0
    if(compteur >0){
        compteur--;
    // sinon on recule la slide activée de 1
    }else{
        compteur = nbSlide -1;
    }

    // ajout de la classe active : l'image apparaît
    items[compteur].classList.add("active")
    console.log(compteur);
}
precedent.addEventListener("click", slidePrecedente)