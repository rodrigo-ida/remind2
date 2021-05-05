<?php

if(isset($_POST['submit'])) {
    $name = $_POST['nome'];
    $mailFrom = $_POST['email'];
    $telefone = $_POST['telefone'];
    $horario = $_POST['horario'];
    $subject = 'mensagem advinda do site remind';
    $message = $_POST['message'];

    $mailTo = "jamil@rdmais.com";


    $headers = "From:".$mailFrom;

    $txt = "email de ".$name."\n\n".$message . "\n\n" . 
    'telefone para contato: ' . $telefone . "\n\n" .
    'melhor hora para contato: ' . $horario;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: https://remind.otimaideia.com.br/");
};