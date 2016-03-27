<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="projeKaydetView.php">
  <table width="242" border="1">
    <tbody>
      <tr>
        <td width="73">loginId:</td>
        <td width="146"><input type="number" name="loginId" id="loginId"></td>
      </tr>
      <tr>
        <td>projeAdi</td>
        <td><input type="text" name="projeAdi" id="projeAdi"></td>
      </tr>
      <tr>
        <td>projeTarih</td>
        <td><input type="date" name="tarih" id="tarih" value="<?php echo Date('Y-m-d'); ?>>"></td>
      </tr>
      <tr>
        <td>projeIcerik</td>
        <td><textarea name="projeIcerik" id="projeIcerik">
		</textarea></td>
      </tr>
      <tr>
        <td>diller</td>
        <td><input type="text" name="diller" id="diller"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="kaydet" id="kaydet" value="Kaydet"></td>
      </tr>
    </tbody>
  </table>
</form>

   <?php

include_once("projeControler.php");
?>

</body>
</html>