<?php 
class Ogrenci
{
	private $id; //sonra bakýlacak
	private $ad;
	private $soyad;
	private $okulNu;
	private $bolum;
	private $fotoraf;
	private $telNu;
	private $cinsiyet;
	private $adres;
	private $tcKimNo;
	private $dogumTarihi;
	private $mail;
	
	function Ogrenci ($tcKimNo,$ad,$soyad,$dogumTarihi,$cinsiyet,$adres,$okulNu,$bolum,$telNu,$mail,$fotoraf)
	{
		$this -> ad=$ad;
		$this -> soyad=$soyad;
		$this -> okulNu=$okulNu;
		$this -> bolum=$bolum;
		$this -> fotoraf=$fotoraf;
		$this -> telNu=$telNu;
		$this -> dogumTarihi=$dogumTarihi;
		$this -> adres=$adres;
		$this -> mail=$mail;
		$this -> tcKimNo=$tcKimNo;
		$this -> cinsiyet=$cinsiyet;
	}
	function getId() 
	{
        return $this->id;
    }
	function setAd($ad)
	{  
		$this -> ad = $ad; 
	}
	function getAd() 
	{
        return $this->ad;
    }
	function setSoyad($soyad)
	{  
		$this -> soyad = $soyad; 
	}
	function getSoyad() 
	{
        return $this->soyad;;
    }
	function setOkulNu($okulNu)
	{  
		$this -> okulNu = $okulNu; 
	}
	function getOkulNu() 
	{
        $this->okulNu;
    }
	function setFotoraf($fotoraf)
	{  
		$this -> fotoraf = $fotoraf; 
	}
	function getFotoraf() 
	{
        $this->fotoraf;
    }
	function setTelNu($telNu)
	{  
		$this -> telNu = $telNu; 
	}
	function getTelNu() 
	{
        $this->telNu;
    }
	function setCinsiyet($cinsiyet)
	{  
		$this -> telNu = $cinsiyet; 
	}
	function getCinsiyet() 
	{
        $this->cinsiyet;
    }
	function setAdres($adres)
	{  
		$this -> adres = $adres; 
	}
	function getAdres() 
	{
        $this->adres;
    }
	function setTcKimNo($tcKimNo)
	{  
		$this -> tcKimNo = $tcKimNo; 
	}
	function getTcKimNo() 
	{
        $this->tcKimNo;
    }
	function setDogumTarihi($dogumTarihi)
	{  
		$this -> dogumTarihi = $dogumTarihi; 
	}
	function getDogumTarihi() 
	{
        $this->dogumTarihi;
    }
	function setMail($mail)
	{  
		$this -> mail = $mail; 
	}
	function getMail() 
	{
        $this->mail;
    }
	
	
}

?>