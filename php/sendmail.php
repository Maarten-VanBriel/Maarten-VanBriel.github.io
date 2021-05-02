<?php
function sendmail() {
    $email = $_POST['txtMail'];
    $subject = $_POST['txtSubject'];
    $message = $_POST['txtMsg'];

    $headers = "From: $email";

    $sent = mail('maarten.vanbriel@student.ucll.be', $subject, $message, $headers);
    echo $success=$sent;
    header("Location: https://maarten-vanbriel.github.io/contact.html");
}
if (isset($_POST['submit'])) {
    sendmail();
}
