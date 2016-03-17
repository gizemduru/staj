<?php
	class Mesaj
	{
		private $mesaj_id;
		private $alici_id;
		private $gonderen_id;
		private $alici_adi;
		private $gonderen_adi;

		function setID($id)
		{
			$this.$mesaj_id =$id;
		}

		function getID()
		{
			return $mesaj_id ;
		}

		function setAliciID($id)
		{
			$this.$alici_id =$id;
		}

		function getAliciID()
		{
			return $alici_id ;
		}

		function setGonderenID($id)
		{
			$this.$gonderen_id =$id;
		}

		function getGonderenID()
		{
			return $gonderen_id ;
		}
		
		function setAliciAdi($ad)
		{
			$this.$alici_adi =$ad;
		}

		function getAliciAdi()
		{
			return $alici_adi ;
		}
		
		function setGonderenAdi($ad)
		{
			$this.$alici_adi =$ad;
		}

		function getGonderenAdi()
		{
			return $alici_adi ;
		}
	}

	$msg =new Mesaj();
	
?>
<!doctype html>
<html>
<head>
<style type="text/css">
	body{
		width: 100%;
	}
	#mesajlar{
		width: 40%;
		background-color: #752;
		margin-left: auto;
		margin-right: auto;
	}
	.mesaj{
		width: 90%;
		background-color: #156;
		margin-left: auto;
		margin-right: auto;
		padding: 5px;

	}
	.mesaj-img{
		border-radius: 50%;
		width: 50px;
		height: 50px;
		float: left;
	}
	.left{
		width: 70%;
		height: 50px;
		background-color: #485;
	}
	.right: {
		width: 9%;
		height: 50px;
		float: right;
		background-color: #485;
	}
	.mesaj-icerik{
		width: 90%;
		margin-left: auto;
		margin-right: auto;
	}

	.okunmadi{
		color: #856;
	}

</style>
</hea>
<body>
	<div id="mesajlar">
	<div class="mesaj">
		<img class="mesaj-img" src="">
		<div class="left">
			<div class="kisi-adi"></div>
			<div class="mesaj-icerik"></div>
		</div>
		<div class="right">
			<div class="tarih"></div>
			<div class="okunmadi">8</div>
		</div>
	</div>
	</div>

</body>
</html>