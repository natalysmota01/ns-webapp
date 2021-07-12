<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="NS WebApp">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Empresa especializada em desenvolvimento web">
	<meta name="keywords" content="Websites, folder, loja virtual">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
	<header class="header">
		<a href="index">
			<h1 class="logomarca">
				Empresa especializada em desenvolvimento de aplicações web.
			</h1>
			<h2 class="nome-logo">ns webapp</h2>
		</a>

		<!-- JQUERY ROLAGEM MENU SCREEN -->
		<script type="text/javascript">
			jQuery(document).ready(function($) { 
				$('.scroll').click(function(event) {        
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top}, 1400);
				});
			});
		</script>

		<button class="btn-menu">
			<i class="fa fa-bars fa-lg"></i>
		</button>

		<nav class="menu">
			<ul>
				<li>
					<a href="index">
						<img src="images/seta-menu.png">
						Início
					</a>
				</li>
				<div class="traco-separa"></div>
				<li>
					<a href="websites">
						<img src="images/seta-menu.png">
						Serviços
					</a>
				</li>
				<div class="traco-separa"></div>
				<li>
					<a href="contato">
						<img src="images/seta-menu.png">
						Contato
					</a>
				</li>
			</ul>
		</nav>

		<!-- JQUERY MENU MOBILE-->
		<script>
			$(".btn-menu").click(function() {
				$(".menu").toggle(400);
			});
		</script>
	</header>