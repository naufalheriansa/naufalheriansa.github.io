<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $iq = $_POST['iq'];

    $email_from = 'wayneheriansa@gmail.com';

    $email_subject = "Hello Naufal";

    $email_body =   $name.
                    $email.
                    $phone.
                    $subject.
                    $iq ;

    $to = "naufalheriansa13@gmail.com";

    $headers = "From : $email_from \r \n";

    $headers = "Reply-To : $email \r \n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location : index.html");
    
?>
