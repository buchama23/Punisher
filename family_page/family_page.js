$(document).ready(function (){
    const open_menu = document.querySelector(".open_menu");

    const menu = document.querySelector(".menu");

    const main = document.getElementById("main");

    const add_family = document.querySelector(".add_family");

    const add_family_div = document.querySelector(".add_family_div");

    if(open_menu, menu, main){
        open_menu.addEventListener("click", () => {
            open_menu.classList.toggle("active");
            menu.classList.toggle("active");
            main.classList.toggle("active");
        });
    }
    if(add_family, add_family_div, main){
        add_family.addEventListener("click", () => {
            add_family.classList.toggle("active");
            add_family_div.classList.toggle("active");
            main.classList.toggle("active");
        });
    }

    
})