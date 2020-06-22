document.addEventListener("scroll",function(){
        setHeader("introduce_header","active_header")
    }
)

function setHeader(firstId,secondId) {
    if(pageYOffset > 120) {
        if(document.getElementById(firstId)) {
            document.getElementById(firstId).id = secondId;
        }  
    } 
    else if(pageYOffset < 110){
        if(document.getElementById(secondId)) {
            document.getElementById(secondId).id = firstId;
        } 
    }
}