<?php
    $usermail = $_POST["subscribe"];
    if (filter_var($usermail, FILTER_VALIDATE_EMAIL) == false) {
        echo "Mail status: false";
    } else {
        echo "Mail status: true";
    }
?>