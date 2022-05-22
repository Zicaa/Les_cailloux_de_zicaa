const navigation = document.querySelector("aside");

window.addEventListener("scroll",()=> {

    if(window.scrollY>30){
        navigation.classList.add("anim-nav");
    }else {
        navigation.classList.remove("anim-nav");
    }
})