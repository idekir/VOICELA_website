<?php
class mariageManager extends Model 
{
	public function getMari($typeParam,$param=0)
	{
		if($typeParam=='nom')
		{
			
			$sql = "select * from VIP,EVENEMENT where nomVip = ? and VIP.numVip=EVENEMENT.numVip";
			$req = $this->executerRequete($sql,array($param));
		}
		
		if($typeParam=='prenom')
		{
			$sql = "select * from VIP,EVENEMENT where prenomVip = ? and VIP.numVip=EVENEMENT.numVip ";
			$req = $this->executerRequete($sql,array($param));
		}
		if($typeParam=='all')
		{
			$sql = "select * from EVENEMENT,VIP where VIP.numVip=EVENEMENT.numVip";
			$req = $this->executerRequete($sql);
		}
		
		
		$data = $req->fetchAll();
		return $data;	
	}
	
	
	public function getConj($typeParam,$param=0)
	{
		if($typeParam=='nom')
		{
			$sql = "select nomVip,prenomVip from VIP where numVip=(select numVipConjoint from EVENEMENT where numVip = (Select numVip from VIP where nomVip = ?)) ";
			$req = $this->executerRequete($sql,array($param));
		}
		
		if($typeParam=='prenom')
		{
			$sql = "select nomVip,prenomVip from VIP where numVip=(select numVipConjoint from EVENEMENT where numVip = (Select numVip from VIP where prenomVip = ?)) ";
			$req = $this->executerRequete($sql,array($param));
		}
		
		if($typeParam=='all')
		{
			$sql = "select nomVip,prenomVip from VIP where numVip IN(select numVipConjoint from EVENEMENT where numVip IN (Select numVip from VIP)) ";
			$req = $this->executerRequete($sql,array($param));
			
		}
		
		
		
		
		$data = $req->fetchAll();
		return $data;	
	}
	
	
}

?>