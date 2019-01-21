<?php
include("baglan3.php"); //verilerin db den alındıgı dosya
session_start();
?>
<form method="GET">
Kullanıcı Adı:
<input type="text" name="kul">
<br>
Şifre :
<input type="password" name="sfr">
<br>
<input type="submit" value="Giriş">
</form>
<button onclick="window.location.href='kullaniciolustur.php'">Kayıt oluştur</button>

<?php

if($_GET)
{
	$user=$_GET["kul"];
	$pass=$_GET["sfr"];
	$sorgu=mysqli_query($vt,"SELECT id FROM usertable where username='$user' and sifre='$pass'");
	while($row = mysqli_fetch_assoc($sorgu))
	{
		$userid = $row['id'];
	}
	
	$result =mysqli_query($vt,"SELECT * FROM usertable where username='$user' and sifre='$pass'");
	
		if(mysqli_num_rows($sorgu)>0)
				while($satir=mysqli_fetch_assoc($result))
				{
					//eğer bilgiler doğruysa login ismi verdiğimiz session kaydını yapıyoruz.ve
					//session kaydını kullanıcı adıyla şifremize eşitliyoruz. Ve admin sayfasına
					//yonlendiriyoruz.
					$_SESSION["oturum"] = "true";
					$_SESSION["kul"] = $user;
					$_SESSION["sfr"] = $pass;
					$_SESSION["userid"]=$userid;
					header("Location:iletisim3.php");
				}

				}else
		{
					echo "Kullanıcı adı veya Şifre Yanlış.";
		}

?>
