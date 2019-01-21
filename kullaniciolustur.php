<html>
<body><form method="GET">
Kullanıcı Adı:
<input type="text" name="yenikul">
<br>
Şifre :
<input type="password" name="yenisfr">
<br>
Şifre dogrulama :
<input type="password" name="yenisfrd">
<br>
<input type="submit" value="Giriş">
</form>
<?php
include 'baglan3.php';
if($_GET){
	$yenikullanici = $_GET["yenikul"];
	$yenisfr= $_GET["yenisfr"];
	$yenisfrd= $_GET["yenisfrd"];
	if($yenisfr == $yenisfrd){
		$kayitolustur=mysqli_query($vt,"INSERT INTO usertable(username,sifre) VALUES('$yenikullanici','$yenisfr')");
		if($kayitolustur)
		{echo "kayit basarili olusturuldu.";
		header("refresh:2;url=login3.php");}
		else
			echo "Kayit oluşturulamadı.";
	}	
}
?>
</body>