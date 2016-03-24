
<form name="form1" method="post" action="">
<div id="genel">
<div class="aciklama">
Üyeol<br />açıklama<br /><br />bölümü
</div>
<div class="uyeol">
	<div class="satir">
    	<div class="sol">Mail:</div>
        <div class="sag">
              <input type="text" name="mail" >
        </div>
    </div>
   <div class="satir">
    	<div class="sol">Parola:</div>
        <div class="sag">
            
              <input type="password" name="parola">
            
        </div>
    </div>
     <div class="satir">
    	<div class="sol">Parola Tekrar:</div>
        <div class="sag">
           
              <input type="password" name="parolatekrar">
             
        </div>
    </div>
     <div class="satir">
    	<div class="sol">Yetki:</div>
        <div class="sag">
            <select name="yetki" id="yetki" size="1">
			<option value="yetki">Öğrenci</option>
            <option value="yetki">Akademisyen</option>
			<option value="yetki">İşveren</option></select>

        </div>
    </div>
    <div class="orta">
   <?php include_once("/include/isyeriuyeol.php");?>
    </div><div id="gonder">
<input name="kaydol" type="button" value="Kaydol" />
</div>
</div>
</div>

</form>




