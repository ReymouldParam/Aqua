<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "reymould.social@gmail.com";
    $subject = "Enquiry from aquasite  website";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send email to both recipients
    mail("pravallika.pentakota@reymould.com", $subject, $body);

    if (mail($to, $subject, $body)) {
        header("Location: contact.html?emailSuccess=true");
    } else {
        header("Location: contact.html?emailSuccess=false");
    }
    exit;
}
?>