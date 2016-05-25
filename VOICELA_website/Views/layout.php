<!DOCTYPE HTML>

<html>
	<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?php echo $titlePage ?></title>
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="landing">

		
			<header id="header" class="alt">
				<a href="#nav">Menu</a>
			</header>

			<nav id="nav">
				<ul class="links">
					<li><a href="index.php?">Accueil</a></li>
					<li><a href="index.php?page=caracteristique">Films</a></li>
					<li><a href="index.php?page=vip">Vip</a></li>
					<li><a href="index.php?page=mariage">Mariage</a></li>
				</ul>
			</nav>

			
			
			<section id="banner">
				<a href="index.php?">
				<i class="icon fa-diamond" ></i>
				</a>
				<h2>VOICELA</h2>
				<p><?php echo '<h1>'.$title.'</h1>' ?></p>
				
				<ul class="actions">
					<li><a href="#" class="button big special">Plus d'infos</a></li>
				</ul>
			</section>

			<div id="contenu">
				<?php echo $content ?>
			</div>
			
			
		

		

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

	<footer> </footer>
    </body>
</html>