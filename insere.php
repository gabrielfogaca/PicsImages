<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pics!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	



	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet"> -->

		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<!-- animatedresponsiveImagegrid  -->
		<link rel="stylesheet" href="css/animatedresponsiveImagegrid.css">
		<!-- Magnifoc Popup  -->
		<link rel="stylesheet" href="css/magnific-popup.css">

		<link rel="stylesheet" href="css/style.css">


		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>

	<nav id="fh5co-main-nav" role="navigation">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
		<div class="js-fullheight fh5co-table">
			<div class="fh5co-table-cell js-fullheight">
				<ul>
					<li class="active"><a href="index.php">Inicio</a></li>
					<li><a href="gallery.php">Galeria</a></li>
					<li><a href="about.php">Sobre</a></li>
					<li><a href="contact.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="fh5co-page">
		<header>
			<div class="container">
				<div class="fh5co-navbar-brand">
					<h1 class="text-center"><a class="fh5co-logo" href="index.php"><i class="icon-camera2"></i></a></h1>
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				</div>
			</div>
		</header>
		<div id="fh5co-intro-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box text-center">
						<h2 class="intro-heading"><span class="corverde"><strong>Pics</strong></span>! Seu portfólio de fotos</h2>
						<p><span>Use o nosso banco de imagens, um mundo diverso.</span></p>

						<br>

						<?php

						include('conecta.php');

						$nome		= $_POST['nome'];
						$email		= $_POST['email'];
						$menssagem	= $_POST['menssagem'];

						$sql = "INSERT INTO pessoas (nome, email, menssagem) VALUES (?,?,?)";


						if ($stmt = mysqli_prepare($id_conexao, $sql)) {

							/* bind parametros for markers */
							mysqli_stmt_bind_param($stmt, 'sss', $nome, $email, $menssagem);

							/* executa query */
							if(mysqli_stmt_execute($stmt)){
								echo "Operação realizada com sucesso!";
								header('location: contact.php');	
							}
							else{
								echo "Ocorreu um erro na operação!<br/>";
								header('location: contact.php');
								// mostra o erro do banco
								echo mysqli_error($id_conexao);
							}


							/* close statement */
							mysqli_stmt_close($stmt);
						}
						echo "<a href='contact.php'>Voltar</a>";
							
						?>
						<p>Sua mensagem foi enviada com sucesso!</p>
						<br>
						<a href="contact.php">Voltar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h3 class="section-title">Fotos</h3>
						<ul class="float">
							<li><a href="Natureza.php">Naturezas</a></li>
							<li><a href="Paisagem.php">Paisagem</a></li>
							<li><a href="PlanodeFundo.php">Planos de Fundo</a></li>
							<li><a href="Motos.php">Motos</a></li>
							<li><a href="Animais.php">Animal</a></li>
							<li><a href="Carros.php">Carros</a></li>
						</ul>
						<ul class="float">
							<li><a href="Setups.php">Setups</a></li>
							<li><a href="Tatuagens.php">Tatuagens</a></li>
							<li><a href="Decoracoes.php">Decorações</a></li>

						</ul>
					</div>
					<div class="col-md-2">
						<h3 class="section-title">Informação</h3>
						<ul>
							<li><a href="#">Termos &amp; Condições</a></li>
							<li><a href="#">Licensa</a></li>
							<li><a href="#">Privacidade &amp; Política</a></li>
							<li><a href="contact.php">Entre em Contato</a></li>
						</ul>
					</div>
				</div>
				<div class="row copy-right">
					<div class="col-md-6 col-md-offset-3 text-center">
						<p class="fh5co-social-icon">
							<a href="#"><i class="icon-twitter2"></i></a>
							<a href="#"><i class="icon-facebook2"></i></a>
							<a href="#"><i class="icon-instagram"></i></a>
							<a href="#"><i class="icon-dribbble2"></i></a>
							<a href="#"><i class="icon-youtube"></i></a>
						</p>
						<p>Copyright 2020 Projeto Web</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Counters -->
<script src="js/jquery.countTo.js"></script>
<!-- gridrotator -->
<script type="text/javascript" src="js/jquery.gridrotator.js"></script>
<!-- Magnific Popup -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

<!-- Main JS (Do not remove) -->
<script src="js/main.js"></script>

<script type="text/javascript">	
	$(function() {
		
		$( '#ri-grid' ).gridrotator( {
			rows : 3,
				// number of columns 
				columns : 6,
				w1024 : { rows : 3, columns : 5 },
				w768 : {rows : 3,columns : 4 },
				w480 : {rows : 3,columns : 3 },
				w320 : {rows : 2,columns : 2 },
				w240 : {rows : 1,columns : 1 },
				preventClick : false
			} );
		
	});
</script>

</body>
</html>