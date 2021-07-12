<?php
	$to = "natalysmota@gmail.com";
	$assunto = "Contato pelo site";
	$nome = $_REQUEST['nome'];
	$email = $_REQUEST['email'];
	$empresa = $_REQUEST['empresa'];
	$telefone = $_REQUEST['telefone'];
	$mensagem = $_REQUEST['mensagem'];

	$message = "<strong>Mensagem de Contato</strong><br><br>";
	$message .=	"<strong> Nome: </strong> $nome";
	$message .=	"<br><strong> E-mail: </strong> $email";
	$message .=	"<br><strong> Empresa: </strong> $empresa";
	$message .=	"<br><strong> Telefone: </strong> $telefone";
	$message .=	"<br><strong> Mensagem: </strong> $mensagem";

	$header .= "Content-type: text/html; charset=utf-8\n";
	$header .= "From: $email Reply-to: $email";

	mail($to, $assunto, $message, $header);

	header("location:contato.php?msg=enviado");
?>