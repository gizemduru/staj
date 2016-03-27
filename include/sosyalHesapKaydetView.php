<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="sosyalHesapKaydetView.php">
  <table width="242" border="1">
    <tbody>
      <tr>
        <td width="73">loginId:</td>
        <td width="146"><input type="number" name="loginId" id="loginId"></td>
      </tr>
      <tr>
        <td>facebook</td>
        <td><input type="text" name="facebook" id="facebook"></td>
      </tr>
      <tr>
        <td>gmail</td>
        <td><input type="text" name="gmail" id="gmail"></td>
      </tr>
      <tr>
        <td>github</td>
        <td><textarea name="github" id="github">
		</textarea></td>
      </tr>
      <tr>
        <td>website</td>
        <td><input type="text" name="website" id="website"></td>
      </tr>
	  <tr>
        <td>twitter</td>
        <td><input type="text" name="twitter" id="twitter"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="kaydet" id="kaydet" value="Kaydet"></td>
      </tr>
    </tbody>
  </table>
</form>

   <?php

include_once("sosyalHesapControler.php");
?>

</body>
</html>