<?php
	class OgrenciUyeOl
	{
		private $loginId;
		private $adi;
		private $soyadi;
		private $cinsiyet;
		private $d_tarihi;
		private $il;
		private $ilce;
		
		
		function getloginId(){
			return $this->loginId;
		}
		function setloginId($id){
			$this->loginId=$id;
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
		
		function getCinsiyet(){
			return $this->cinsiyet;
		}
		function setCinsiyet($cinsiyet){
			$this->cinsiyet=$cinsiyet;
		}
		
		function getDogumTarihi(){
			return $this->cinsiyet;
		}
		function setDogumTarihi($tarih){
			$this->d_tarihi=$tarih;
		}
		function getIl(){
			return $this->il;
		}
		function setIl($il){
			$this->il=$il;
		}

		function getIlce(){
			return $this->ilce;
		}
		function setIlce($ilce){
			$this->ilce=$ilce;
		}

	}
	/*
	$ogr =new OgrenciUyeOl();
	$ogr->setAdi("Zeyit");
	$ogr->setSoyadi("Başar");
	echo "Adi:".$ogr->getAdi().
	"<br/>Soyadı:".$ogr->getSoyadi();
	*/
?>