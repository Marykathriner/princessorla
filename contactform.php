<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "laura@breiteneder.net";
    $headers = "From: ".$mailFrom;
    $txt = "You have receved an E-Mail from ".$name.".\n\n"."$message;

    mail($mailTo. $subject, $txt, $headers);
    header('Location: index.php?mailsend');

}