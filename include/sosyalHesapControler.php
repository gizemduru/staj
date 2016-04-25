<?php
	include"sosyalHesaplarClass.php";
	
	$sosyalHesap =new sosyalHesap();
	
	 $id=$sosyalHesap->id=@$_POST["id"] ;
	 $loginId=$sosyalHesap->loginId=@$_POST["loginId"] ;
     $facebook=$sosyalHesap->facebook=@$_POST["facebook"] ;
     $gmail=$sosyalHesap->gmail=@$_POST["gmail"] ;
     $github=$sosyalHesap->github=@$_POST["github"] ;
	 $website=$sosyalHesap->website=@$_POST["website"] ;
	 $twitter=$sosyalHesap->twitter=@$_POST["twitter"] ;
	 
	
	 if(@$_POST["kaydet"]==true)
		{
			$sosyalHesap->sosyalHesapEkle();
			echo"tamm";	
		}
			
	if(@$_POST["listele"]==true)
					$sosyalHesap->sosyalHesapListele();
					
	if(@$_POST["sil"]==true)
					$sosyalHesap->sosyalHesapSil();	
					
	if(@$_POST["duzenle"]==true)
					$sosyalHesap->sosyalHesapDuzenle();							
	

?>