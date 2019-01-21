<html>
<body>
<table>

<tr><th>#</th><th>Ad-Soyad</th><th>Telefon</th><th>E-posta</th></tr>
<?php
	include 'baglan3.php';
	session_start();
	$sorgu=mysqli_query($vt,'SELECT * FROM liste where userid='.$_SESSION['userid']);
			$sira=1;
			if(mysqli_num_rows($sorgu)>0)
				while($satir=mysqli_fetch_assoc($sorgu))
				{
					echo '<form action="update3.php" method="get"><tr>
					<td>'.($sira++).'</td>
					<td><input type="text" name="isim" value="'.$satir['isim'].'"></td>
					<td><input type="text" name="soyad" value="'.$satir['soyad'].'"</td>
					<td><input  type="text" name="telefon" value="'.$satir['telefon'].'"</td>	
					<td><input style="display:none" type="text" name="id" value="'.$satir['id'].'"</td>					
					<td><a href="sil3.php">Sil</a></td>
					<td><a href="update3.php"><button type="submit">Güncelle</a></td>
					<td><a href="mesajlar3.php">Mesaj Yaz</a></td>
					</tr>
</form>';
					
				}
				
?>

<a href="iletisim3.php">Kayıt Sayfası<a/>
</table></body></html>