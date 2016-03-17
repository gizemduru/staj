<html>
<head>
<meta charset="UTF-8">
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>$(function() {$( "#dogumtarihi" ).datepicker();});</script>
  <script>$(function() {$( "#ilkokulgiris" ).datepicker();});</script>
  <script>$(function() {$( "#ilkokulmezun" ).datepicker();});</script>
  <script>$(function() {$( "#lisegiris" ).datepicker();});</script>
  <script>$(function() {$( "#lisemezun" ).datepicker();});</script>
  <script>$(function() {$( "#universitegiris" ).datepicker();});</script>
  <script>$(function() {$( "#universitemezun" ).datepicker();});</script>
  </head>
<body>
<div style="height:100%; width:100%;">
<fieldset><legend>Öğrenci Profil</legend>
<fieldset>
<legend>Öğrenci Bilgileri</legend>
<form method="" action="" >
  <table width="460" border="0" align="center">
  <tr>
  <td>Profil Resmi</td>
  <td><input type="file" name="profilresmi" size="20"></td>
  </tr>
    <tr>
      <td width="130">Adı:</td>
      <td width="257"><input type="text" name="kullaniciadi" id="kullaniciadi" /></td>
    </tr>
    <tr>
      <td>Soyadı:</td>
      <td><input type="text" name="kullanicisoyad" id="kullanicisoyad" /></td>
    </tr>
     <tr>
      <td>E-mail:</td>
      <td><input type="text" name="mail" id="mail" /></td>
    </tr>
    <tr>
      <td>Okul No:</td>
      <td><input type="text" name="okulno" id="okulno" /></td>
    </tr>
    <tr>
      <td>Telefon:</td>
      <td><input type="text" name="telefon" id="telefon" /></td>
    </tr>
    <tr>
      <td>Cinsiyet</td>
      <td> 	<select name="cinsiyet" id="cinsiyet" size="1">
			<option value="cinsiyet">Bay</option>
			<option value="cinsiyet">Bayan</option></select>      </td>
    </tr>
    <tr>
    <td>Doğum Tarihi</td>
    <td> <input type="text" id="dogumtarihi"></td>
    </tr>
    <tr>
      <td>Adres:</td>
      <td><textarea id="adres" name="adres" cols="40" rows="10"></textarea></td>
      </tr>
      </table>
</form>
</fieldset>
<fieldset><legend>Okul Bilgileri</legend>
<form method="" action="" >
    <table width="620" border="0" align="center">
      <tr>
        <td width="227">İlkokul:</td>
        <td width="189"><input type="text" name="ilkokul" id="ilkokul" /></td>
      </tr>
      <tr>
        <td>İlkokul Başlangıç Tarihi:</td>
        <td><input type="text" id="ilkokulgiris" /></td>
        </tr>
        <tr>
        <td>İlkokul Bitiş Tarihi</td>
        <td width="190"><input type="text" id="ilkokulmezun" /></td>
      </tr>
      <tr>
        <td>İlkokul Not Ortalaması</td>
   	  <td><input type="text" name="ilkokulnotort" id="ilkokulnotort" /></td>
      </tr>
      <tr>
        <td>Lise</td>
        <td><input type="text" name="lise" id="lise" /></td>
      </tr>
      <tr>
        <td>Lise Başlangıç Tarihi:</td>
        <td><input type="text" id="lisegiris" /></td>
        </tr>
        <tr>
        <td>Lise Bitiş Tarihi</td>
        <td><input type="text" id="lisemezun" /></td>
      </tr>
      <tr>
        <td>Lise Not Ortalaması</td>
   	  <td><input type="text" name="lisenotort" id="lisenotort" /></td>
      </tr>
      <tr>
        <td>Üniversite</td>
        <td><input type="text" name="universite" id="universite" /></td>
      </tr>
      <tr>
      <td>Fakülte</td>
        <td><input type="text" name="fakulteadi" id="fakulteadi"/></td>
        </tr>
        <tr>
        <td>Bölüm</td>
        <td><input type="text" name="bolumadi" id="bolumadi"/></td>
        </tr>
      <tr>
        <td>Üniversite Başlangıç Tarihi:</td>
        <td><input type="text" id="universitegiris" /></td>
        </tr>
        <tr>
        <td>Üniversite Bitiş Tarihi</td>
        <td><input type="text" id="universitemezun" /></td>
      </tr>
      <tr>
        <td>Üniversite Not Ortalaması</td>
   	  <td><input type="text" name="universitenotort" id="universitenotort" /></td>
      </tr>
      
        </table>
  </form>
</fieldset>
<fieldset><legend>Staj Bilgileri</legend>

</fieldset>
<center><input type="submit" value="Gönder" name="Profilonay"> </center>
</fieldset>
</div>
</body>
</html>