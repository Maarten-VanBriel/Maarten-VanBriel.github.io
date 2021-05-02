<?php
function sendmail() {
    $email = $_POST['txtMail'];
    $subject = $_POST['txtSubject'];
    $message = $_POST['txtMsg'];

    $headers = "From: $email";

    $sent = mail('maarten.vanbriel@student.ucll.be', $subject, $message, $headers);
    echo $success=$sent;
    header("Location: http://r0790938.iswlabs.be/contact.html");
}
if (isset($_POST['submit'])) {
    sendmail();
}
