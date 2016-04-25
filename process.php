<?php
	if(strtolower($_SERVER["HTTP_CONNECTION"]) != "xmlhttprequest")
	{
		include_once("/include/function.php");
		if(@$_GET["islem"]=="uyeol")
		{
			$rol =@$_POST["rol"];
			/*
				rol 0 :öğrenci
				rol 1 :Akademisyen
				rol 2 :İşyeri
			*/
			if($rol == 0)
			{
				include_once("/include/ogrenciuyeol.php");
			}else if($rol == 1)
			{
				include_once("/include/akademisyenuyeol.php");
			}else if($rol == 2)
			{
				include_once("/include/isyeriuyeol.php");
			}
		}
	}

?>