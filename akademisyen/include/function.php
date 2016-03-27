<?php
	require_once("../../include/config.php");
	
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

?>