<?php

$nome = "";
$email = "";
$telefone = "";
$mensagem = "";

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

$to      = 'gmbiel1@gmail.com';
$subject = 'Mensagem via Portfolio!';
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$success = mail($to, $subject, $mensagem, $headers);

if (!$success) {
    $errorMessage = error_get_last()['message'];
    header("Location: index.html?error=" .$errorMessage );
} else {
    header("Location: index.html?success");
}


?>