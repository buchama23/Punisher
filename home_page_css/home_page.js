$(document).ready(function (){
    const open_menu = document.querySelector(".open_menu");

    const menu = document.querySelector(".menu");

    const main = document.getElementById("main");

    if(open_menu, menu, main){
        open_menu.addEventListener("click", () => {
            open_menu.classList.toggle("active");
            menu.classList.toggle("active");
            main.classList.toggle("active");
        });
    }
})