<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];

    $mailTo = "joshmyles@mbalearabicacoffeeroasters.com";
    $headers = "From: website".$mailFrom;
    $txt = "You have received an email from".$name."."."Contact: ".$phone.".\n\n";

    mail($mailTo, $subject, $txt, $headers);

    header("Location: index.html?mailsent");
}

?>