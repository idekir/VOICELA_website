<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title><?php echo $titlePage ?></title>
        <link rel="stylesheet" type="text/css" href="assets/CSS/style.css">
		
    </head>
    <body>
	
			
				
	
        
			<div id="header">
				<?php echo '<h1>'.$title.'</h1>' ?>
				<nav>
					<ul>
						<li><a href="index.php?">Accueil</a></li>
						<li><a href="index.php?page=caracteristique">Films</a></li>
						<li><a href="index.php?page=vip">Vip</a></li>
					</ul>
				</nav>
				
			</div>
			
			<div id="contenu">
				<?php echo $content ?>
			</div>
			

	<footer> </footer>
    </body>
</html>