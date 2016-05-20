<?php
class vipManager extends Model 
{
	
	
	
	public function getVip($typeParam,$param=0)
	{
		if($typeParam=='nom')
		{
			$sql = "select * from VIP where nomVip = ? ";
			$req = $this->executerRequete($sql,array($param));
		}
		
		if($typeParam=='prenom')
		{
			$sql = "select * from VIP where prenomVip = ? ";
			$req = $this->executerRequete($sql,array($param));
		}
		if($typeParam=='all')
		{
			$sql = "select * from VIP";
			$req = $this->executerRequete($sql);
		}
		
		$data = $req->fetchAll();
		return $data;	
	}
	
	
}

?>