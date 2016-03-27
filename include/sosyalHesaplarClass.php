<?php
class sosyalHesap {
   public $id;
   public $loginId;
   public $facebook;
   public $gmail;
   public $github;
   public $website;
   public $twitter;
   
   function __construct()
	{ 	
		$this->baglan= mysqli_connect("localhost","root","","ogrenci");
 
		// Bağlantı Kontrol
		if (mysqli_connect_errno())
		  {
		  echo "Bağlantı sırasında hata oluştu: " . mysqli_connect_error();
	  }
	}
   function sosyalHesapEkle() {
   

			echo $this->loginId;
			$query = "INSERT INTO sosyal_hesaplar   (id,loginId,facebook,gmail,github,website,twitter) VALUES ('NULL','$this->loginId','$this->facebook','$this->gmail','$this->github','$this->website','$this->twitter')";
			$sonuc=mysqli_query($this->baglan,$query);
			echo $sonuc ;
	
		
   }
 
   function sosyalHesapDuzenle() {
		$sql = "UPDATE sosyal_hesaplar SET id='$this->id',  loginId='$this->loginId', facebook='$this->facebook', gmail='$this->gmail', github='$this->github', website='$this->website',twitter='$this->twitter'   WHERE id='$this->id'";
		$sonuc= mysqli_query($this->baglan,$sql);
		if($sonuc>0) 
		{ 
			echo 'İşlem başarılı bir şekilde gerçekleşti';
		}
		else
			echo "İşlem başarısız";
		   
   }
 
   function sosyalHesapSil() {
    $sonuc=mysqli_query($this->baglan,"DELETE FROM sosyal_hesaplar  where id=".$this->id);
	if($sonuc>0){
		echo "Başarıyla silindi";
		}
	else
		echo "Bir sorun oluştu silinemedi";
 
   } 
   
   function sosyalHesapListele() {
   $sorgu = mysqli_query($this->baglan,"SELECT * FROM sosyal_hesaplar");
 
		while($kayit=mysqli_fetch_array($sorgu)){
			echo '</br>'.'<form action="sosyalHesapAnaView.php" method="post">
			<input name="id" type="text" value="'.$kayit['id'].'"/>
			<input name="loginId" type="text" value="'.$kayit['loginId'].'"/>
			<input name="facebook" type="text" value="'.$kayit['facebook'].'"/>
			<input name="gmail" type="text" value="'.$kayit['gmail'].'"/>
			<input name="github" type="text" value="'.$kayit['github'].'"/>
			<input name="website" type="text" value="'.$kayit['website'].'"/>
			<input name="twitter" type="text" value="'.$kayit['twitter'].'"/>
			<input  type="submit" name="sil" id="sil" value="Sil" />
			<input  type="submit" name="duzenle" id="duzenle" value="Duzenlemeyi Kaydet" />
			</form>';
		}
    }

   
}

?>