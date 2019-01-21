<html>
<head>
	<meta charset="utf-8">
	<title>Liste</title>
</head>
<body>
<table>
<form method="GET">
<?php
session_start();
if($_GET)
{
	if($_SESSION['guvenlik_kodu'] != $_GET['guvenlik_kodu'])
	{
		echo '<span class="hata"><b>Hata:</b> Güvenlik kodunu hatalı girdiniz!
		Lütfen tekrar deneyiniz. <br><a href="javascript:history.go(-1)">Geri dön</a> ';
		die();
	}else
		
	{
		include 'baglan3.php';
			$isim=$_GET['isim'];
			$soyad=$_GET['soyad'];
			$telefon=$_GET['telefon'];
			$userid=$_SESSION['userid'];
			mysqli_query($vt,"INSERT INTO liste(isim,soyad,telefon,userid) VALUES('$isim','$soyad','$telefon','$userid')");
		
			echo "Kayıt yapıldı.";
			header( "refresh:2;url=iletisim3.php" );
	}
	exit();

}
?>
</form>
</table>
</body>
</html>