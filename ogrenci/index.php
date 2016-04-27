<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/mainFooter.css">
<link rel="stylesheet" type="text/css" href="css/solMenuContent.css">
<link rel="stylesheet" type="text/css" href="css/mainHeader.css">
<link rel="stylesheet" type="text/css" href="css/mainStyle.css">
<link rel="stylesheet" type="text/css" href="css/profil.css">
</head>
<body>
	<div id="header">
		<?php 
		include_once("/include/mainHeader.php");
		include_once("/include/function.php");
		?>
	</div>
	<div id="main">
		<div id="left"><?php include_once("/include/solMenuContent.php");?></div>
		<div id="right">
			<?php sayfa_getir(); ?>
		</div>
		<div class="clear"></div>
	</div>
	<div id="footer">
		<?php include_once("../include/mainFooter.php");?>
	</div>
</body>
</html>