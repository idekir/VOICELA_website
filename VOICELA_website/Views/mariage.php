<?php
$titlePage = 'Mariages';
$title = 'Informations sur les mariages';


ob_start();
?>
	
	<form action="index.php?page=mariage" method='post'>
		<table>
		
			<tr>
				
				<td>Nom:<input type="text" name="nom" maxlength="250" ></td><td>Prenom:<input type="text"name="prenom" maxlength="10" ></td>
				
			</tr>
			<tr>
				<td><input class="btnrech" type="submit"name="btnValide" value="Rechercher" maxlength="10" ></td>
			</tr>
			
			<tr>
				<td>Mariage</td>
				<td>Divorce</td>
				<td>Lieu</td>
				<td>Nom Vip</td>
				<td>Prenom Vip</td>
				
				<td>Nom conjoint</td>
				<td>Prenom conjoint</td>
					
			</tr>
			
			<tr>
				<td>
				<?php 
					$i=0;
					while($i<sizeof($arrayMari))
					{
						echo '<tr><td>'.$arrayMari[$i]['dateMariage'].'</td><td>'.$arrayMari[$i]['dateDivorce'].'</td>
						<td>'.$arrayMari[$i]['lieuMariage'].'</td><td>'.$arrayMari[$i]['nomVip'].'</td>
						<td>'.$arrayMari[$i]['prenomVip'].'</td><td>'.$arrayConj[$i]['nomVip'].'</td>
						<td>'.$arrayConj[$i]['prenomVip'].'</td>
						</tr>';
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
