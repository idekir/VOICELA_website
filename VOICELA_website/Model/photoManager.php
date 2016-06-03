<?php
class photoManager extends Model 
{
	
	public function getPhotosVip($typeParam,$param=0)
	{
		if($typeParam=='nom')
		{
			$sql = "Select * from PHOTO,VIP where VIP.numVip=PHOTO.numVip and nomVip = ?";
			$req = $this->executerRequete($sql,array($param));
			
		}
		
		if($typeParam=='prenom')
		{
			$sql = "Select * from PHOTO,VIP where VIP.numVip=PHOTO.numVip and prenomVip = ?";
			$req = $this->executerRequete($sql,array($param));
		}
		if($typeParam=='all')
		{
			$sql = "Select * from PHOTO";
			$req = $this->executerRequete($sql);
		}
		
		
		$photos = $req->fetchAll();
		return $photos;
	}
	
	public function getPhotosFilm($numFilm)
	{
	
			$sql = "Select * from AFFICHE where numFilm = ?";
			$req = $this->executerRequete($sql,array($numFilm));
		
		$photos = $req->fetchAll();
		return $photos;
	}
	
	
	
	
	
	
}

?>