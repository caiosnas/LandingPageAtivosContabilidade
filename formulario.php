<?php
if(isset($_POST['email']) && !empty($_POST['email'])) {

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$numero = addslashes($_POST['numero']);
$CNPJ = addslashes($_POST['Você possui CNPJ?']);

$to = "contato.caiosantosnascimento@gmail.com";
$subject = "Contato - Landing Page Ativos";
$body = "Nome:".$nome. "\r\n".
        "Email:".$email. "\r\n".
        "Número:".$numero. "\r\n".
        "Possui CNPJ:".$CNPJ. "\r\n";

$header = "From:atendimento@ativossc.com.br"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

if (mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
} else{
    echo("Email não pode ser enviado");
}

}
 
