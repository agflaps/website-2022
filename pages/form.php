<?php
$destinatario = "contato@newflaps.com";

$nome = $_REQUEST['name'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['celular'];
$assunto = $_REQUEST['service'];
$mensagem = $_REQUEST['message'];

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $name . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Telefone: " . $celular . "\n";
$body = $body . "Serviço: " . $service . "\n";
$body = $body . "Mensagem: " . $message . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $service , $body, "From: $email\r\n");
