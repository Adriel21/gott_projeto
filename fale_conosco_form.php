<?php


$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_SPECIAL_CHARS);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);




$to = "siteformulariogott@gmail.com";
$subject = utf8_decode($assunto);
$message = utf8_decode(
   "Nome do contatante: " . $nome . "\r\n" . "Email: " . $email . "\r\n" . "Telefone: " . $telefone. "\r\n" . "Mensagem: " . "\r\n" . $mensagem
);

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
$headers .= "From: comercial@gottconsultoria.com.br\r\n"; // remetente
// E-mail que receberá a resposta quando se clicar no 'Responder' de seu leitor de e-mails
$headers .= "Reply-To:".$email."\r\n";
$headers .= "Return-Path: eu@seudominio.com\r\n"; // return-path
$envio = mail($to , $subject, $message, $headers);
 
if($envio) {
 echo "Mensagem enviada com sucesso";
 header("location:fale_conosco.php?sucesso");
} else {
 echo "A mensagem não pode ser enviada";
}
?>