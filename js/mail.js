document.getElementById("subscribe_input").addEventListener("input",function(oe){
        oe.preventDefault();
        var mailRequest = new XMLHttpRequest;
        var mailFormVar = new FormData(mailForm);
        mailRequest.open("POST", "../php/mail_validator.php", false);
        mailRequest.send(mailFormVar);
        console.log(mailRequest.responseText )
        if(mailRequest.responseText == "Mail status: true") {
            document.getElementById("subscribe_button").style.background = "#18a3dd";
            document.getElementById("subscribe_button").disabled = false;
        } else {
            document.getElementById("subscribe_button").style.background = "#666666";
            document.getElementById("subscribe_button").disabled = true;
        }
    }       
)

