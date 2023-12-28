<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "contact@illforddigital.com, illforddigital@gmail.com"; // Your email address
    $subject = "New form submission";
    $headers = "From: $email";

    $email_body = "You have received a new message from $firstname $lastname.\n".
                  "Email address: $email\n".
                  "Mobile Number: $phone\n".
                  "Message: $message\n";

    // Use mail() function to send the email
    if (mail($to, $subject, $email_body, $headers)) {
        header('Location: thankyou.html');
    } else {
        header('Location: oops.html');
    }
}
?>
