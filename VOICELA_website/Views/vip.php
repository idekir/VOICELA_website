<?php
$titlePage = 'vip';
$title = 'Informations sur les VIP';


ob_start();
?>
	
	<form action="index.php?page=vip" method='post'>
		<table>
		
			<tr>
				
				<td>Nom:<input type="text" name="nom" maxlength="250" ></td><td>Prenom<input type="text"name="prenom" maxlength="10" ></td>
				
			</tr>
			<tr>
				<td><input class="btnrech" type="submit"name="btnValide" value="Rechercher" maxlength="10" ></td>
			</tr>
			
			<tr>
				<td>Numero</td>
				<td>Nom</td>
				<td>Prenom</td>
				<td>Civilité</td>
				<td>Naissance</td>
				<td>Pays</td>
			</tr>
			
			<tr>
				<td>
				<?php 
					$i=0;
					while($i<sizeof($arrayVip))
					{
						echo '<tr><td>'.$arrayVip[$i]['numVip'].'</td><td>'.$arrayVip[$i]['nomVip'].'</td><td>'.$arrayVip[$i]['prenomVip'].'</td><td>'.$arrayVip[$i]['civilite'].'</td><td>'.$arrayVip[$i]['dateNaissance'].'</td><td>'.$arrayVip[$i]['nomPays'].'</td></tr>';
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
