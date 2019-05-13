<?php
    //include PHPMailerAutoload.php
    require 'phpmailer/PHPMailerAutoload.php';

    //create an instance of PHPMailer
    $mail = new PHPMailer();

    //set a host
    $mail->Host = "smtp.gmail.com";

    //enable SMTP
    $mail->isSMTP();
    $mail->SMTPDebug = 2;

    //set authentication to true
    $mail->SMTPAuth = true;

    //set login details for Gmail account
    $mail->Username = "info.dabchy@gmail.com";
    $mail->Password = "dabchy123";

    //set type of protection
    $mail->SMTPSecure = "ssl"; //or we can use TLS

    //set a port
    $mail->Port = 465; //or 587 if TLS

    //set subject
    $mail->Subject = $_POST['sujet'];

    //set HTML to true
    $mail->isHTML(true);

    

    //set body
    $mail->Body = ($_POST['message']);

    //add attachment
    $mail->addAttachment('attachment/12.png', 'Dabchy Logo');

    //set who is sending an email
    $mail->setFrom('info.Dabchy@gmail.com', 'Dabchy');

    //set where we are sending email (recipients)
    $mail->addAddress($_POST['email']);

    //send an email
    $mail->send();
        
    
    
    
?>
