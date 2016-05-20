<?php
$titlePage = 'caracteristique';
$title = 'Caracteristique des films';


ob_start();
?>
	
	<form action="index.php?page=caracteristique" method='post'>
		<table>
		
			<tr>
				
				<td>Titre:<input type="text" name="leTitre" maxlength="250" ></td>
			</tr>
			<tr>
				
				<td>Numero de Visa<input type="text"name="numVisa" maxlength="10" ></td>
			</tr>
			<tr>
				
				<td><input  type="submit"name="btnValide" value="Rechercher" maxlength="10" ></td>
			</tr>
			<tr>
				<td>Visa</td>
				<td>Titre</td>
				<td>Genre</td>
				<td>Année</td>
			</tr>
			
			<tr>
				<td>
				<?php 
					$i=0;
					while($i<sizeof($arrayCaract))
					{
						echo '<tr><td>'.$arrayCaract[$i]['numVisa'].'</td><td>'.$arrayCaract[$i]['titreFilm'].'</td><td>'.$arrayCaract[$i]['libelleGenre'].'</td><td>'.$arrayCaract[$i]['anneeFilm'].'</td></tr>';
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
