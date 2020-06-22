document.getElementById("openMenuButt").addEventListener("click",function(){
        openMenu("menu");
    }
)
document.getElementById("menu").addEventListener("click",function(){
        closeMenu("menu")
    }
)

var menuButt = document.querySelectorAll('.menu_butt');
for(var j = 0; j < menuButt.length;j++) {
    menuButt[j].addEventListener("click",function(){
            closeMenu("menu")
        }
    )
}

function openMenu(idMenu) {
    document.getElementById(idMenu).style.display = "flex";
    setTimeout(function(){
            document.getElementById(idMenu).style.opacity = "1"
        },1
    )
}

function closeMenu(idMenu) {
    document.getElementById(idMenu).style.opacity = "0"
    setTimeout(function(){
            document.getElementById(idMenu).style.display = "none";
        },400
    )
}