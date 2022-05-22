// Je récupère les différents éléments de la page
const items = document.getElementsByClassName("img");
const nbSlide = items.length;
const suivant = document.querySelector(".right");
const precedent = document.querySelector(".left");

// j'initialise un système de compteur d'image à zéro
let compteur = 0;

// Je crée une fonction qui incrémente chaque image de 1
function slideSuivante(){
    // je sélectionne la première image de mon tableau et lui enlève la classe active : elle disparait
    items[compteur].classList.remove("active");

    // je fais apparaitre l'image suivante : si mon compteur est inférieur à -1, j'incrémente de 1
    if(compteur < nbSlide-1){
        console.log(compteur++);
    // sinon on repasse le compteur à zéro de sorte que la classe active ne s'applique qu'à compteur=0
    }else{
        compteur = 0;
    }

    // j'ajoute la classe active à cette image pour la faire apparaitre
    items[compteur].classList.add("active")
    console.log(compteur);
}
// j'ajoute un écouteur d'évènement qui déclenche la fonction au click
suivant.addEventListener("click", slideSuivante)

// Je crée ma fonction qui décrémente chaque image de 1
function slidePrecedente(){
    // je sélectionne la première image de mon tableau et lui enlève la classe active : elle disparait
    items[compteur].classList.remove("active");

    // je fais apparaitre l'image précédente : si mon compteur est supérieur à 0, je décrémente de 1
    if(compteur >0){
        compteur--;
    // sinon on repasse le compteur à zéro de sorte que la classe active ne s'applique qu'à compteur=0
    }else{
        compteur = nbSlide -1;
    }

    // j'ajoute la classe active à cette image pour la faire apparaitre
    items[compteur].classList.add("active")
    console.log(compteur);
}
// j'ajoute un écouteur d'évènement qui déclenche la fonction au click
precedent.addEventListener("click", slidePrecedente)