<?php 
	$title = "NS WebApp | Home Page";
?>

<?php 
	include "header.php";
?>

	<div class="contentIndex">
		<div class="banner">
			<h1>ns webapp</h1>
			<h2>Crie -> Reinvente -> Inove -> Experimente</h2>
		</div>

		<div class="bemVindo">
			<h1>
				Seja <span>bem vindo</span>
			</h1>
		</div>

		<main class="servicos">
			<article class="servico">
				<a href="websites">SERVIÇOS
					<hr>
					<h1>Conheça nossos serviços. Um deles atende suas necessidades.</h1>
				</a>
			</article>

			<article class="servico">
				<a href="contato">CONTATE-NOS
					<hr>
					<h1>Entre em contato conosco e tire suas dúvidas.</h1>
				</a>
			</article>
		</main>

		<div class="quemSomos">
			<h1>Quem somos</h1>
			<hr>
			<h2>A NS WebApp é uma empresa especializada em desenvolvimento web, onde abrange Lojas Virtuais (E-Commerce), Sites Institucionais, Portfólios e muito mais. Ao compreender o seu mercado, seu processo de trabalho e claro, seus clientes, apresentamos as melhores sugestões para estrutura de navegação.<br/><br/>Somos uma empresa que visa agregar valor aos negócios de seus clientes por meio da aplicação das soluções mais adequadas às suas necessidades e à sua estratégia de atuação, dentro dos princípios éticos e níveis de qualidade diferenciados necessários à criação de relacionamentos de longo prazo.<br/><br/>Nossa missão é oferecer soluções completas de processamento de informações aos nossos clientes, proporcionando-lhes competitividade em suas respectivas áreas de atuação.</h2>
		</div>

		<?php
			include "servicos-diversos.php";
		?>

		<div class="interesse">
			<h1>Entre em contato</h1>
			<hr>
			<h2>Para saber mais sobre nossos serviços, entre em contato conosco.</h2>

			<hgroup>
				<a href="websites" >Nossos serviços</a>
				<a href="contato">Contate-nos</a>
			</hgroup>
		</div>

		<?php
			include "footer.php";
		?>