$(document).ready(function (){
    const open_menu = document.querySelector(".open_menu");

    const menu = document.querySelector(".menu");

    const content = document.getElementById("content");

    if(open_menu, menu, content){
        open_menu.addEventListener("click", () => {
            open_menu.classList.toggle("active");
            menu.classList.toggle("active");
            content.classList.toggle("active");
        });
    }
})