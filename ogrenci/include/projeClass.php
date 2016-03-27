<?php
class Proje {
   public $projeId;
   public $loginId;
   public $projeAdi;
   public $projeTarih;
   public $projeIcerik;
   public $diller;
   public $baglan;
   
   function __construct()
	{ 	
		$this->baglan= mysqli_connect("localhost","root","","ogrenci");
 
		// Bağlantı Kontrol
		if (mysqli_connect_errno())
		  {
		  echo "Bağlantı sırasında hata oluştu: " . mysqli_connect_error();
	  }
	}
   function projeEkle() {
   

		echo $this->loginId;
			$query = "INSERT INTO proje   (projeId,loginId,projeAdi,projeTarih,projeIcerik,diller) VALUES ('NULL','$this->loginId','$this->projeAdi','$this->projeTarih','$this->projeIcerik','$this->diller')";
			$sonuc=mysqli_query($this->baglan,$query);
			echo $sonuc ;
	
		
   }
 
   function projeDuzenle() {
		$sql = "UPDATE proje SET projeId='$this->projeId',  loginId='$this->loginId', projeAdi='$this->projeAdi', projeTarih='$this->projeTarih', projeIcerik='$this->projeIcerik', diller='$this->diller'   WHERE projeId='$this->projeId'";
		$sonuc= mysqli_query($this->baglan,$sql);
		if($sonuc>0) 
		{ 
			echo 'İşlem başarılı bir şekilde gerçekleşti';
		}
		else
			echo "İşlem başarısız";
		   
   }
 
   function projeSil() {
    $sonuc=mysqli_query($this->baglan,"DELETE FROM proje  where projeId=".$this->projeId);
	if($sonuc>0){
		echo "Başarıyla silindi";
		}
	else
		echo "Bir sorun oluştu silinemedi";
 
   } 
   
   function projeListele() {
   $sorgu = mysqli_query($this->baglan,"SELECT * FROM proje");
 
		while($kayit=mysqli_fetch_array($sorgu)){
			echo '</br>'.'<form action="projeAnaView.php" method="post">
			<input name="projeId" type="text" value="'.$kayit['projeId'].'"/>
			<input name="loginId" type="text" value="'.$kayit['loginId'].'"/>
			<input name="projeAdi" type="text" value="'.$kayit['projeAdi'].'"/>
			<input name="projeTarih" type="text" value="'.$kayit['projeTarih'].'"/>
			<input name="projeIcerik" type="text" value="'.$kayit['projeIcerik'].'"/>
			<input name="diller" type="text" value="'.$kayit['diller'].'"/>
			<input  type="submit" name="sil" id="sil" value="Sil" />
			<input  type="submit" name="duzenle" id="duzenle" value="Duzenlemeyi Kaydet" />
			</form>';
		}
    }

   
}

?>