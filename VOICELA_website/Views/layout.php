<!DOCTYPE HTML>

<html>
	<head>
		
		<meta charset="utf-8" />
		
		<title><?php echo $titlePage ?></title>
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href='https://fonts.googleapis.com/css?family=Lobster|Quicksand' rel='stylesheet' type='text/css'>	
	</head>
	<body>

		<header id="menu">
			
			<div id="titre"><h1>VOICELA</h1></div>
			
			<nav id="nav">
				<ul>
					<li><a href="index.php?">Accueil</a></li>
					<li><a href="index.php?page=caracteristique">Films</a></li>
					<li><a href="index.php?page=vip">Vip</a></li>
					<li><a href="index.php?page=mariage">Mariages</a></li>
				</ul>
			</nav>

		</header>
			
			
			
			
				
			

			<div id="contenu">
				<?php echo '<h1 id="titrepage">'.$title.'</h1>' ?>
				<?php echo $content ?>
			</div>
			
			
		

		

	

	</body>
</html>

	
 