// AJOUT DES VARIABLES POUR LE MENU RESPONSIVE
const OpenNav = document.querySelector(".icon1")
const FermerNav = document.querySelector(".fermer")
const Menu = document.querySelector(".menu")

const PositionMenu = Menu.getBoundingClientRect().left;

// OUVRIR LE MENU
OpenNav.addEventListener("click", () =>{
    if(PositionMenu <0){
        Menu.classList.add("monter")
    }
})
// FERMER LE MENU
FermerNav.addEventListener("click", () =>{
    if(PositionMenu <0){
        Menu.classList.remove("monter")
    }
})