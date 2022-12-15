<?php
// echo "This msg is sent from PHP file";
// let's get all form values
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];

if(!empty($email) && !empty($message)) { //if email and message field is not empty
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) { //if user entered email is valid
        $receiver = "dptandel2002@gmail.com"; //email receiver email address
        $subject = "From: $name <$email>"; //subject of the email. Subject looks like From: Dharmin <dptandel052002@gmail.com>
        //merging concating all user values inside body variable. \n is used for new line
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage: $message\n\nRegards, $name";
        $sender = "From: $email"; //sender email
        if(mail($receiver, $subject, $body, $sender)){ //mail() is inbuilt php function to send mail
            echo "Your message has been sent successfully..!";
        } else {
            echo "Sorry, failed to send your message..!";
        }
    } else {
        echo "Enter a valid email address..!";
    }
} else {
    echo "Email and message field is required..!";
}
?>