<?php
if(isset($_POST['email'])) {

$nome = addslashes($_POST['Nome']);
$sobrenome = addslashes($_POST['Sobrenome']);
$número = addslashes($_POST['Número']);
$email = addslashes($_POST['Email']);
$CNPJ = addslashes($_POST['Possui CNPJ?']);

$to = "atendimento@ativossc.com.br";
$subject = "Contato - Landing Page Ativos";
$body = "Nome:".$nome. "\r\n".
        "Sobrenome:".$sobrenome. "\r\n".
        "Email:".$email. "\r\n".
        "Número:".$numero. "\r\n".
        "Possui CNPJ:".$CNPJ. "\r\n";

$header = "From:atendimento@ativossc.com.br"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

mail($to, $subject, $body, $header);
        
if (mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
} else{
    echo("Email não pode ser enviado");
}

}
 
