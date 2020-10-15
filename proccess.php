<?php

    session_start();

    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];
    $headers = 'From: msmrobin@robin.adovasoft.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    if(mail($to,$subject,$msg,$headers)){
        
        $_SESSION['message'] = "Mail sent sucessfully !!!";
        $_SESSION['msg_type'] = "success";
        header("location: index.php");
    }

?>
