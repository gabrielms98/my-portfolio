<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/Users/gabrielsilva/composer/vendor/autoload.php';

echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n";

$nome = "Gabriel M Silva";
$email = "gmbiel1@gmail.com";
$telefone = "983238957";
$mensagem = "Mensagem enviada pelo terminal \n" . $telefone . "\n";

if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
}

if(isset($_POST['email'])){
    $email = $_POST['email'];
}

if(isset($_POST['telefone'])){
    $telefone = $_POST['telefone'];
}

if(isset($_POST['mensagem'])){
    $mensagem = $_POST['mensagem'];
}
 
// Instância do objeto PHPMailer
$mail = new PHPMailer;
 
// Configura para envio de e-mails usando SMTP
$mail->isSMTP();
$mail->SMTPAutoTLS = false;

// Servidor SMTP
$mail->Host = 'smtp.gmail.com';

$mail->SMTPSecure = 'ssl'; 
// Usar autenticação SMTP
$mail->SMTPAuth = true;

$mail->SMTPDebug  = 4;

$mail->Port = 587;

// Usuário da conta
$mail->Username = 'dreammerz98@gmail.com';
 
// Senha da conta
$mail->Password = 'bee3c4f5';

// Informa se vamos enviar mensagens usando HTML
//$mail->IsHTML(true);
 
// Email do Remetente
$mail->From = $email;
 
// Nome do Remetente
$mail->FromName = $nome;
 
// Endereço do e-mail do destinatário
$mail->addAddress('gmbiel1@gmail.com');
 
// Assunto do e-mail
$mail->Subject = 'E-mail PHPMailer - TESTE';
 
// Mensagem que vai no corpo do e-mail
$mail->Body = $mensagem;

$mail->Send();

echo('Done');
// Envia o e-mail e captura o sucesso ou erro
/*if($mail->Send()):
    header("Location: index.html?success");
else:
    header("Location: index.html?error=". $mail->Debugoutput) ;
endif;*/


?>