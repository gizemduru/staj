<?php
	require_once("../include/config.php");
	
	function AkademisyenGuncelle($akademisyen)
	{
		global $conn;
		$query ="";
		$result =mysql_query($query,$conn);
		if ($result) {
			//kaydedildi.
		}else
		{
			//Kaydedilemedi
		}
	}

	function sayfa_getir()
	{
		$sayfa_adi=@$_GET["sayfa"];
		if($sayfa_adi=="Duyuru"){
			include_once("duyuru.php");
		}
		
	}
?>