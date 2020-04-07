<?php
# alterar a variavel abaixo colocando o seu email
$destinatario = "fabiocipriano@outlook.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensagem'];
$assunto = $_REQUEST['assunto'];
$wpp = $_REQUEST['whatsapp'];

// monta o e-mail na variavel $body
$body = "===================================" . "\n";
$body = $body . "Solicitação de Contato" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "WhatsApp: " . $wpp . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

?>