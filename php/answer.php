<?php
    $answermessage = $_POST['answer'];
    $email = $_POST['email_answer'];
    $id = $_POST['id_question'];
    
    $connect = mysqli_connect("localhost", "root", "", "Supplement");

    $setid = mysqli_query($connect,"UPDATE `subjects` SET `StatusQuestion`= 0 WHERE idSubject = $id");

    $deletestatus = mysqli_query($connect, "DELETE FROM `subjects` WHERE StatusQuestion = 0");

    if(!$setid) {
        exit("Ошибка смены статуса");
    };

    $sendmail = mail($email,"Ответ на Ваш вопрос", $answermessage);

    if(!$sendmail) {
        exit("Ошибка отправки ответа");
    };

    echo "Answer:True";
?>