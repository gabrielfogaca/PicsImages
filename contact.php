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
	
	
	<?php	

if(!isset($id))
	$id 	= isset($_GET["id"]) ? $_GET["id"] : null;
if(!isset($nome))
	$nome 	= isset($_GET["nome"]) ? $_GET["nome"] : null;
if(!isset($email))
	$email 	= isset($_GET["email"]) ? $_GET["email"] : null;
if(!isset($menssagem))
	$menssagem	= isset($_GET["menssagem"]) ? $_GET["menssagem"] : null;
if(!isset($arq))
	$arq 	= isset($_GET["arq"]) ? $_GET["arq"] : "insere.php";

?>
	
	
	
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
						<h2 class="intro-heading">Contate-nos</h2>
						<p><span>Duvidas entre em contato</p>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-contact-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box">
						<h3>Nosso Endereço</h3>
						<ul class="contact-info">
							<li><i class="icon-location-pin"></i>Ijui, centro</li>
							<li><i class="icon-phone2"></i>0800 872 335</li>
							<li><i class="icon-mail"></i><a href="#">Trabalho@web.com.br</a></li>
							<li><i class="icon-globe2"></i><a href="#">www.Trabalho_web.com</a></li>
						</ul>
					</div>
					<form method="post" action="<?php echo $arq; ?>">
						<fieldset>
							<label for="nome">Nome</label>
							<br>
							<input type="text" name="nome" size="40" maxlength="75" id="nome" placeholder="Nome">
							<br>
							<label for="email">Email</label>
							<br>
							<input type="text" name="email" size="40" maxlength="50"  required="@" id="email" placeholder="pics@email.com">
							<br>
							<label for="menssagem">Diga sua menssagem</label>
							<br>
							<input type="text" name="menssagem" size="70" maxlength="750" id="menssagem" placeholder="Digite sua mensagem aqui!">
							<br>
							<br>
							<input type="hidden" name="id" id="id">
							<input type="submit" value="Enviar">
						</fieldset>
					</form>
<br>
<h1>Endereços Cadastrados</h1>
						<hr>
						<?php

						include('conecta.php');

						$sql = "SELECT * FROM pessoas";
						$query = mysqli_query($id_conexao, $sql);

						if(mysqli_num_rows($query) > 0){
							while($row = mysqli_fetch_array($query)){
								echo $row['nome'];
								echo " - <a href='edita.php?id=$row[id]'>Editar</a> |";
								echo " <a href='deleta.php?id=$row[id]'>Deletar</a><br/>";
							}
						}
						else{
							echo "<p>Nenhuma pessoa cadastrada</p>";
						}
						?>
						<hr>

				</div>
			</div>
		</div>
		<!-- End: fh5co-contact-section -->

	
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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

