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
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<h2 class="intro-heading">Paisagens</h2>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-photos-section">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-4 animate-box">
						<a href="images/Paisagem/ps1.jpg" class="grid-photo img-popup" style="background-image: url(images/Paisagem/ps1.jpg);">
							<div class="desc">		
							</div>
						</a>
					</div>
					<div class="col-md-4 animate-box">
						<a href="images/Paisagem/ps2.jpg" class="grid-photo img-popup" style="background-image: url(images/Paisagem/ps2.jpg);">
							<div class="desc">
							</div>
						</a>
					</div>
					<div class="col-md-4 animate-box">
						<a href="images/Paisagem/ps3.jpg" class="grid-photo img-popup" style="background-image: url(images/Paisagem/ps3.jpg);">
							<div class="desc">
							</div>
						</a>
					</div>
					<div class="col-md-6 animate-box">
						<a href="images/Paisagem/ps4.jpg" class="grid-photo img-popup" style="background-image: url(images/Paisagem/ps4.jpg);">
							<div class="desc">
							</div>
						</a>
					</div>
					<div class="col-md-3 animate-box">
						<a href="images/Paisagem/ps5.jpg" class="grid-photo img-popup" style="background-image: url(images/Paisagem/ps5.jpg);">
							<div class="desc">
							</div>
						</a>
					</div>
					<div class="col-md-3 animate-box">
						<a href="images/Paisagem/ps6.jpg" class="grid-photo img-popup" style="background-image: url(images/Paisagem/ps6.jpg);">
							<div class="desc">
							</div>
						</a>
					</div>
				</div>
			</div>

			<br>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box ">
						<div class="heading-section">
							<div class="services">
								<span><i class="icon-camera2"></i></span>
								<h2>Upload</h2>
								<p>Envie sua foto diretamente de acordo com a categoria.</p>
								<div class="cold-md-12 text-center">
									<form method='post' action='upload.php' enctype='multipart/form-data'>
										<fieldset>
											<input type='file' name='file[]' id='file' multiple required><br><br>
											<input type="hidden" id="paisagem" name="paisagem" value="2">
											<input type='submit' name='submit' value='Envie sua foto!'>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
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
<!-- Magnific Popup -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

<!-- Main JS (Do not remove) -->
<script src="js/main.js"></script>

</body>
</html>

