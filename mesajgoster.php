<html>
<body>
<table>
<tr><th>#</th><th>Ad-Soyad</th><th>Mesaj</th></tr>
<?php
	include 'baglan3.php';
	session_start();
	$sorgu=mysqli_query($vt,'SELECT * FROM mesajtable where fromid='.$_SESSION['userid']);
			$sira=1;
			if(mysqli_num_rows($sorgu)>0)
				while($satir=mysqli_fetch_assoc($sorgu))
				{
					$satir2=mysqli_fetch_assoc(mysqli_query($vt,'SELECT isim FROM liste where id="'.$satir['toid'].'"'));
					echo '<tr>
					<td>'.($sira++).'</td>
					<td>'.$satir2['isim'].'</td>
					<td>'.$satir['mesaj'].'</td>
					<td></td>					
					
					</tr>';
				}
				
?>
<a href="iletisim3.php">Kayıt Sayfası<a/>
</table></body></html>