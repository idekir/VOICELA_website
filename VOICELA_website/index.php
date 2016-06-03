<?php


require_once 'Model/model.php';
require_once 'Model/listeManager.php';
require_once 'Model/vipManager.php';
require_once 'Model/mariageManager.php';
require_once 'Model/photoManager.php';


if(isset($_GET['page']))
{
	
	if($_GET['page']=='caracteristique')
	{	$lm = new listeManager();
		
		
		if(isset($_POST['btnValide']) and $_POST['btnValide']=='Rechercher')
		{
			
			$titre=$_POST['leTitre'];
			$visa = $_POST['numVisa'];
			
			
			
			if(!empty($titre))
			{
				$arrayCaract = $lm->getCaract('titre',$titre);
			}
			elseif(!empty($visa))
			{
				$arrayCaract = $lm->getCaract('numVisa',$visa);
			}
			else
			{
				$arrayCaract = $lm->getCaract('all');
			}
			include ('Views/caracteristique.php');
			
			
		}
		else
		{
			
			$arrayCaract = $lm->getCaract('all');
			include ('Views/caracteristique.php');
		}
		
		
	}
	if($_GET['page']=='vip')
	{	$vm = new vipManager();
		$pm = new photoManager();
		
		if(isset($_POST['btnValide']) and $_POST['btnValide']=='Rechercher')
		{
			
			$nom=$_POST['nom'];
			$prenom = $_POST['prenom'];
			
			
			
			if(!empty($nom))
			{
				$arrayVip = $vm->getVip('nom',$nom);
				$arrayPhotosVip = $pm->getPhotosVip('nom',$nom);
			}
			elseif(!empty($prenom))
			{
				$arrayVip = $vm->getVip('prenom',$prenom);
				$arrayPhotosVip = $pm->getPhotosVip('prenom',$prenom);
			}
			else
			{
				$arrayVip = $vm->getVip('all');
				$arrayPhotosVip = $pm->getPhotosVip('all');
			}
			include ('Views/vip.php');
			
			
		}
		else
		{
			
			$arrayVip = $vm->getVip('all');
			$arrayPhotosVip = $pm->getPhotosVip('all');
			include ('Views/vip.php');
		}
	}
	
	if($_GET['page']=='mariage')
	{	$mm = new mariageManager();
		
		if(isset($_POST['btnValide']) and $_POST['btnValide']=='Rechercher')
		{
			
			$nom=$_POST['nom'];
			$prenom = $_POST['prenom'];
			
			
			
			if(!empty($nom))
			{				
				$arrayMari = $mm->getMari('nom',$nom);
				$arrayConj = $mm->getConj('nom',$nom);
			}
			elseif(!empty($prenom))
			{
				$arrayMari = $mm->getMari('prenom',$prenom);
				$arrayConj = $mm->getConj('prenom',$prenom);
			}
			else
			{
				$arrayMari = $mm->getMari('all');
				$arrayConj = $mm->getConj('all');

			}
			include ('Views/mariage.php');
			
			
		}
		else
		{
			
			$arrayMari = $mm->getMari('all');
			$arrayConj = $mm->getConj('all');
			include ('Views/mariage.php');
		}
	}
	
}
else
{
	include ('Views/menu.php');
}


	
	
	

	


		

	

?>
	