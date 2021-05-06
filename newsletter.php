<?php

if(isset($_POST['submit'])) {
    $mailFrom = $_POST['email'];
    
    $mailTo = "rodrigoida1@hotmail.com";

    $headers = "From:".$mailFrom;
    $subject = 'email para newsletter';
    $txt = "email para newsletter: " . $mailFrom;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: https://remind.otimaideia.com.br/");
};