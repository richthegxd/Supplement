<?php
    $connect = mysqli_connect("localhost", "root", "", "Supplement");

    $result = mysqli_query($connect, "SELECT * FROM `subjects`");

    $deletestatus = mysqli_query($connect, "DELETE FROM `subjects` WHERE StatusQuestion = 0");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Subjects</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/font.css" />
    <link rel="stylesheet" href="css/subjectpage.css" />
</head>

<body>
    <h6 class="main_placeholder">All question.</h6>
    <?php
        $valuesubject = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $valuesubject++;
            echo "<div class='subject'><h6 class='countsubject'>Question number: {$valuesubject}</h6> A person with a name: <span class='subject_name'>{$row['Name']}</span>, ask a question: <div class='ask_subject'><p class='subject_text'> {$row['Subject']} </p></div><h6 class='placeholder_answer'>Your answer</h6><form id='answer_form'><input type='hidden' name='id_question' value='{$row['idSubject']}'><input name='email_answer' type='hidden' value='{$row['Email']}'><textarea placeholder='Your answer' name='answer' class='answer_input' type='text'></textarea><div class='button_answer'><input type='button' value='Send Answer' class='submit' id='submit_input'></div></form></div>";
        };
    ?>
</body>
<script>
    var allButton = document.querySelectorAll("#submit_input");
    for(var d = 0; d < allButton.length; d++) {
        allButton[d].addEventListener("click", function(oe) {
                oe.preventDefault();
                var answerRequest = new XMLHttpRequest;
                var answerFormVar = new FormData(this.parentElement.parentElement);
                answerRequest.open("POST", "php/answer.php", false);
                answerRequest.send(answerFormVar);
                console.log(answerRequest.responseText)
                if(answerRequest.responseText == "Answer:True") {
                    this.parentElement.parentElement.parentElement.id = "delete_question";
                        setTimeout(function(){
                            document.getElementById("delete_question").remove();
                        },600
                    )
                }
            }
        )
    }
</script>

</html>