<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    $name = $_POST["name_inquire"];
    $mail = $_POST["email_inquire"];
    $subject = $_POST["subject_inquire"];


    foreach($_POST as $n => $k) {
        if($k == "") {
            exit("The fields must not be empty.");
        };
    };

    if (filter_var($mail, FILTER_VALIDATE_EMAIL) == false) {
        exit("Incorrect email address");
    }

    $connect = mysqli_connect("localhost", "root", "");

    $createdb = "CREATE DATABASE IF NOT EXISTS Supplement";

    if (!mysqli_query($connect, $createdb)) {
        exit("Ошибка при создании базы данных");
    };

    $createt = "CREATE TABLE IF NOT EXISTS Supplement.Subjects (
        `idSubject` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `Name` varchar(30) NOT NULL,
        `Email` varchar(100) NOT NULL,
        `Subject` varchar(1000) NOT NULL,
        `StatusQuestion` INT NOT NULL
    )";

    if (!mysqli_query($connect, $createt)) {
        exit("Ошибка при создании таблицы");
    };

    $insertsubject = "INSERT INTO Supplement.Subjects
    (Name, Email, Subject, StatusQuestion)
    VALUES('$name', '$mail', '$subject', 1)";

    if (!mysqli_query($connect, $insertsubject)) {
        exit("Ошибка при заполнении данных");
    }
    echo "Your question has been sent.";
?>