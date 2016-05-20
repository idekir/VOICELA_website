<?php
class listeManager extends Model 
{
	
	
	
	public function getCaract($typeParam,$param=0)
	{
		if($typeParam=='titre')
		{
			$sql = "select * from FILM,GENRE where titreFilm = ? and FILM.numGenre=GENRE.numGenre";
			$req = $this->executerRequete($sql,array($param));
		}
		
		if($typeParam=='numVisa')
		{
			$sql = "select * from FILM,GENRE where numVisa = ? and FILM.numGenre=GENRE.numGenre";
			$req = $this->executerRequete($sql,array($param));
		}
		if($typeParam=='all')
		{
			$sql = "select * from FILM,GENRE where FILM.numGenre=GENRE.numGenre";
			$req = $this->executerRequete($sql);
		}
		
		$data = $req->fetchAll();
		return $data;	
	}
	
	
}

?>