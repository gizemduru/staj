<?php
class akademisyen{
	private $akademisyen_id;
	private $akademisyen_adi;
	private $akademisyen_soyadi;
	private $akademisyen_tc;
	private $akademisyen_unvan;
	
	function getId(){
		return $this->akademisyen_id;
	}
	function setId($id){
		$this->akademisyen_id=$id;
	}
	
	function getAdi(){
		return $this->akademisyen_adi;
	}
	function setAdi($adi){
		$this->akademisyen_adi=$adi;
	}
	
	function getSoyadi(){
		return $this->akademisyen_soyadi;
	}
	function setSoyadi($soyadi){
		$this->akademisyen_soyadi=$soyadi;
	}
	
	function getTc(){
		return $this->akademisyen_tc;
	}
	function setTc($tc){
		$this->akademisyen_tc=$tc;
	}
	
		function getUnvan(){
		return $this->akademisyen_unvan;
	}
	function setUnvan($unvan){
		$this->akademisyen_unvan=$unvan;
	}
}


?>