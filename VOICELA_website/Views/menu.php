<?php
$titlePage = 'menu';
$title = 'BIENVENUE CHEZ VOICELA';


ob_start();
?>
	<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="assets/images/nicky.jpg" alt="" /></span>
						<div class="content">
							<h2>NICKY HILTON S'EST MARIÉE À KENSINGTON PALACE !</h2>
							<p>Un peu moins d'un an après ses fiançailles, la soeur de Paris Hilton s'est unie avec son compagnon depuis 2011, 
							James Rotschild. Pour l'occasion, le couple avait trouvé le lieu idéal : Kensington Palace, à Londres !</p>
						</div>
					</article>
					
				</div>
			</section>
	
	
<?php

$content = ob_get_clean();

include("Views/layout.php");

?>
