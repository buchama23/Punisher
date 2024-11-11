


// JE DELANE PRO "ZAKLADNI_ROZVRZENI_WEBU"



$(document).ready(function (){


    let html = `<nav class="open_menu">
                    <span>
                    </span>
                    <span>
                    </span>
                    <span>
                    </span>
                </nav>
                <div class="menu">
                    <ul>
                    <div class="menu_rozdelovac">
                    </div>
                        <li><a href="#">home</a></li>
                        <li><a href="#">tvoje rodina</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                </div>`;
    $( "#center" ).append(html);

    let css = "<link rel='stylesheet' href='slide_menu/slide_menu.css'>";
    $( "head" ).append(css);

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

