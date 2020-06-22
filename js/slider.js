var sliderButton = document.querySelectorAll(".slider_button"),
sliderContent = document.querySelectorAll(".slider_content");

for(var i = 0; i < sliderButton.length; i++) {
    sliderButton[i].addEventListener("click",function(){
            var thisId = this.dataset.id;
            for(var z = 0; z < sliderContent.length; z++) {
                if(sliderContent[z].id == thisId) {
                    document.getElementById(thisId).classList.add("active_slider_content")
                    if(document.getElementById(thisId).classList.toggle("slider_content_hidden")) {
                        sliderContent[z].classList.remove("slider_content_hidden")
                    }
                } else if(sliderContent[z].id !== thisId) {
                    if(sliderContent[z].classList.toggle("active_slider_content")) {
                        sliderContent[z].classList.remove("active_slider_content")
                    }
                    sliderContent[z].classList.add("slider_content_hidden")
                }
            }
        }
    )
}