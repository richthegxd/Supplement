$(".slider_button").click(function () {
        $(".slider_button").not(this).removeClass("sb_active");
        $(this).toggleClass("sb_active");
    }
);
$(function(){
    $("a[href^='#']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top - 89 +"px"});
            return false;
            }
        );
    }
);
setTimeout(function(){
    window.scrollTo(0, 0);
}, 1);
Revealator.effects_padding = '-150';

var inquireAll = document.querySelectorAll(".inquire_input");
for(var t = 0; t < inquireAll.length; t++) {
    inquireAll[t].addEventListener("input",function(){
            if(this.value.length > 0) {
                this.style = "border-bottom: .1vh solid #18a3dd;"
            } else {
                this.style = "border-bottom: .1vh solid #dbdbdb;"
            }
        }
    )
}