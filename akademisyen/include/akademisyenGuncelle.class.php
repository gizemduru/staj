<?php
	class AkademisyenGuncelle
	{
		private $id;
		private $adi;
		private $soyadi;
		private $tc;
		private $unvan;
		
		function getId(){
			return $this->id;
		}
		function setId($id){
			$this->id=$id;
		}
		
		function getAdi(){
			return $this->adi;
		}
		function setAdi($adi){
			$this->adi=$adi;
		}
		
		function getSoyadi(){
			return $this->soyadi;
		}
		function setSoyadi($soyadi){
			$this->soyadi=$soyadi;
		}

		function getTc(){
			return $this->tc;
		}
		function setTc($tc){
			$this->tc=$tc;
		}

		function getUnvan(){
			return $this->unvan;
		}
		function setUnvan($unvan){
			$this->unvan=$unvan;
		}
	}

	/*
	$a =new AkademisyenGuncelle();
	$a->setId(2);
	$a->setAdi("Ali");
	$a->setSoyadi("QW");
	$a->setTc(12345678901);
	$a->setUnvan("Doc");
	echo "ID:".$a->getId().
	"<br/>Adı:".$a->getAdi().
	"<br/>Soyadı:".$a->getSoyadi().
	"<br/>Tc:".$a->getTc().
	"<br/>Unvan:".$a->getUnvan();
	*/

?>