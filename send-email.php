<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $chooseWarsha = $_POST['choose-warsha'];
    $programName = $_POST['program-name'];
    $consultants = $_POST['consultants'];
    $message = $_POST['message'];

    $headers = "From: hamzanabil913@gmail.com";

    mail($email, $subject, $message, $headers);
?>