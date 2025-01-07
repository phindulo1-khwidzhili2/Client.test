<?php
if(isset($_POST['submit'])){
    $to = "khwidzhiliphindulo@gmail.com";
    $subject = "Form Submission";
    
    // Collecting Form Data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message_content = $_POST['message'];
    
    // Constructing the Message
    $message = "Name: " . $name . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Phone: " . $phone . "\n";
    $message .= "Message: " . $message_content . "\n";
    
    $headers = "From: " . $email;

    // SMTP Configuration
    ini_set("SMTP", "smtp.turbosmtp.com");
    ini_set("smtp_port", "587");
    ini_set("sendmail_from", $email);

    // Sending Email
    $result = mail($to, $subject, $message, $headers);
    
    if($result){
        echo "Message sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>

