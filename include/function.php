<?php

	require_once("config.php");

	function sayfa_getir()
	{
		$sayfa_adi=@$_GET["sayfa"];
		if($sayfa_adi=="uyeol"){
			include_once("uyeol.php");
		}
		else if($sayfa_adi=="giris"){
			include_once("giris.php");
		}
		else
		{
			include_once("slider.php");
		}
	}

	function temizle($text)
	{
		$text =htmlspecialchars($text);
		//...diğer temizleme işlemleri
		return $text;
	}

	function OgrenciKayit($ogr)
	{
		global $conn;
		$query ="";
		$result =mysqli_query($query,$conn);
		if ($result) {
			//kaydedildi.
		}else
		{
			//Kaydedilemedi
		}
	}
	function girisYap($mail,$sifre){
		$mail=temizle($mail);
		$sifre=MD5($sifre);
		global $conn;
		$query ="select * from  uyeol_login where mail='$mail' and sifre='$";
		$result =mysqli_query($query,$conn);
		if ($result) {
			//kaydedildi.
		}else
		{
			//Kaydedilemedi
		}
	}
	

?>