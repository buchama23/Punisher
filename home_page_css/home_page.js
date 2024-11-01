const open_menu = document.querySelector(".open_menu");

const menu = document.querySelector(".menu");

if(open_menu, menu){
    open_menu.addEventListener("click", () => {
        open_menu.classList.toggle("active");
        menu.classList.toggle("active");
    });
}