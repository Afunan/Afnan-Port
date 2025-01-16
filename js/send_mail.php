<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = strip_tags($_POST['cname']);
    $cemail = strip_tags($_POST['cemail']);
    $message = strip_tags($_POST['cmessage']);

   
    $adminEmail1 = "afnanaffu2003@gmail.com"; 
    $adminEmail2 = "afnanjobs46@gmail.com"; 

    // Email subject and body
    $subject = "Afnan Portfolio Contact Form From $name";
    $body = "You have received a new message:\n\n" .
            "Name: $name\n" .
            "Mail:  $cemail\n" .
            "Message:\n$message";

    // Email headers
    $headers = "From: $cemail\r\n";
    $headers .= "Reply-To: $cemail\r\n";

    // Send email to multiple recipients
    $to = "$adminEmail1, $adminEmail2";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false]);
    }
} else {
    echo json_encode(["success" => false]);
}
?>
