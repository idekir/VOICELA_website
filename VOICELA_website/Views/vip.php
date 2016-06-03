<?php
$titlePage = 'vip';
$title = 'Informations sur les VIP';


ob_start();
?>
	
	<form action="index.php?page=vip" method='post'>
		<table class="filtre">
		
			<tr>
				
				<td><input class="form" type="text" name="nom" maxlength="100" placeholder="Nom" ></td>
				<td><input class="form" type="text"name="prenom" maxlength="100" placeholder="Prenom" ></td>
				<td><input class="btnrech" type="submit"name="btnValide" value="Rechercher"></td>
			</tr>
			
		</table>	
			
			
			
				<?php 
					$i=0;
					while($i<sizeof($arrayPhotosVip))
					{
						echo '<div class="divVip"><img class="imageVip" src="assets/images/VIP/'.$arrayPhotosVip[$i]['numeroSequentiel'].'.jpeg"></br> '.$arrayVip[$i]['prenomVip'].'</br>'.$arrayVip[$i]['nomVip'].'</div>';
						$i++;
					}
					?>
						
		
	</form> 
	
	
	
<?php

$content = ob_get_clean();

include("Views/layout.php");

?>
