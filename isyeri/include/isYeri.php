<?php 

class IsYeri
{
	private $id; // kullanici sayi tutulup artan sirada atanacak
	private $adi;
	private $il;
	private $ilce;
	private $adres;
	private $kullaniciadi;
	private $sifre;
	function IsYeri ($kullaniciadi,$sifre)
	{
		$this -> kullaniciadi=$kullaniciadi;
		$this -> sifre=$sifre;
		$this -> id = 61;
		
	}
	function getKullaniciadi() 
	{
        return $this->kullaniciadi;
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
	function setIl($il)
	{  
		$this -> il = $il; 
	}
	function getIl() 
	{
        return $this->il;;
    }
	function setIlce($ilce)
	{  
		$this -> ilce = $ilce; 
	}
	function getIlce() 
	{
        return $this->ilce;;
    }
	function setAdres($adres)
	{  
		$this -> adres = $adres; 
	}
	function getAdres() 
	{
      return  $this -> adres .' '. $this -> ilce.' / '.$this -> il ;
    }
	
	function Kaydet(){
	
	 // veritabani->Kaydol($this) ;
	}
	
}
	// Test 
/*	$s=new IsYeri("buruk61","1234");
	$s->setAd("Buruk Holding");
	$s->setIl("Trabzon ");
	$s->setIlce("Ak�aabat");
	$s->setAdres("Salac�k Mahallesi Serna Caddesi Buruklar Sokak Buruk Aptman� No:1/15 ");
	print_r($s->getAd() );
	print_r("<br/>");
	print_r($s->getIl());
	print_r("<br/>");
	print_r($s->getIlce());
	print_r("<br/>");
	print_r($s->getAdres());
	print_r("<br/>");
	print_r("�D : ");print_r($s->getId());
	print_r("<br/>");
	print_r("Kullaniciadi : ");print_r($s->getKullaniciadi());
	*/
?>