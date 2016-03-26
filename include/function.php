<?php
function sayfa_getir(){
	$sayfa_adi=@$_GET["sayfa"];
	if($sayfa_adi=="uyeol"){
		include_once("uyeol.php");
	}
	else if($sayfa_adi=="giris"){
		include_once("giris.php");
	}
	else{
		//slaydır çağırılacak
	}
}


?>