<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "reymould.social@gmail.com";
    $subject = "Enquiry from aquasite  website";
    $body = "Name: $name\nEmail: $email\nNumber: $number\nMessage: $message";

    // Send email to both recipients
    mail("naresh.narnapati@reymould.com", $subject, $body);

    if (mail($to, $subject, $body)) {
        header("Location: contact.html?emailSuccess=true");
    } else {
        header("Location: contact.html?emailSuccess=false");
    }
    exit;
}
?>