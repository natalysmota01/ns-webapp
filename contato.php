<?php
	$title = "NS WebApp | Contato";

	$msg=0;
	@$msg=$_REQUEST['msg'];
?>

<?php
	include "header.php";
?>

<?php 
	if($msg=="enviado") {
		echo"<script type='text/javascript'>";
		echo "alert('Sua mensagem foi enviada! Logo entraremos em contato. Agradecemos a preferência!');";
		echo "</script>";
	}
?>
	<div class="contentContato">
		<h1>Contato</h1>
		
		<h2>
			Mande uma mensagem para nós. Teremos prazer em tirar suas dúvidas e ajudá-lo a decidir sobre qual dos nossos serviços é ideal para você.
		</h2>

		<form name="contatoForm" action="envia-email.php" method="post" class="formulario">
			<input type="text" name="nome" size="20" maxlength="30" placeholder="Nome*" required="true" />
			<input type="mail" name="email" maxlength="40" placeholder="E-mail*" required="true" />
			<input type="text" name="empresa" maxlength="40" placeholder="Empresa" />
			<input type="text" name="telefone" size="20" maxlength="30" placeholder="Telefone"/>
			<textarea name="mensagem" cols="45" rows="5" placeholder="Deixe aqui sua mensagem*" required="true"></textarea>

			<div class="btn-enviar">
				<input type="submit" value="Enviar" />
			</div>
		</form>
	</div>

	<?php
		include "footer.php";
	?>