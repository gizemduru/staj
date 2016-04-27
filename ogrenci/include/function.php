<?php


	function sayfa_getir()
	{
		$sayfa_adi=@$_GET["sayfa"];
		if($sayfa_adi=="Profil"){
			include_once("profil.php");
		}
		
	}
?>