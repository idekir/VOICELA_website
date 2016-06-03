<?php
$titlePage = 'caracteristique';
$title = 'Caracteristique des films';


ob_start();
?>
	
	<form action="index.php?page=caracteristique" method='post'>
		<table class="filtre">
		
			<tr>
				
				<td><input class="form" placeholder="Titre" type="text" name="leTitre" maxlength="100" ></td>
				<td><input class="form" placeholder="Numero Visa" type="text"name="numVisa" maxlength="100" ></td>
				<td><input class="btnrech" type="submit"name="btnValide" value="Rechercher" maxlength="10" ></td>
			
			</tr>
			
			
			
			<tr>
				<td>
				<?php 
					$i=0;
					while($i<sizeof($arrayCaract))
					{
						echo '<div class="divfilm"></div>';
						$i++;
					}
					?>
				</td>
			</tr>		
		</table>
	</form> 
	
	
	
<?php

$content = ob_get_clean();

include("Views/layout.php");

?>
