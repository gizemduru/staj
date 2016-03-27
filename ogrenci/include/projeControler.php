<?php
	include"projeClass.php";
	
	$proje =new proje();
	
	$loginId=$proje->loginId=@$_POST["loginId"] ;
	 $projeId=$proje->projeId=@$_POST["projeId"] ;
     $projeAdi=$proje->projeAdi=@$_POST["projeAdi"] ;
     $projeTarih=$proje->projeTarih=@$_POST["tarih"] ;
     $projeIcerik=$proje->projeIcerik=@$_POST["projeIcerik"] ;
	 $diller=$proje->diller=@$_POST["diller"] ;
	 
	 
	 if(@$_POST["kaydet"]==true)
	 {
			$proje->projeEkle();
			echo"tamm";
			
	}
			
	if(@$_POST["listele"]==true)
					$proje->projeListele();
					
	if(@$_POST["sil"]==true)
					$proje->projeSil();	
					
	if(@$_POST["duzenle"]==true)
					$proje->projeDuzenle();							
	

?>