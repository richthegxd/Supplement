document.getElementById("send_inquire").addEventListener("click",function(oe){
        oe.preventDefault();
        var inquireRequest = new XMLHttpRequest,
        inquireForm = new FormData(inquire_form);
        inquireRequest.open("POST","../php/inquire.php",false)
        inquireRequest.send(inquireForm);
        document.getElementById("status_send").innerText = inquireRequest.responseText;
        if(inquireRequest.responseText == "Your question has been sent.") {
            document.getElementById("status_send").style.color = "green"
        } else {
            document.getElementById("status_send").style.color = "red"
        }
    }
)