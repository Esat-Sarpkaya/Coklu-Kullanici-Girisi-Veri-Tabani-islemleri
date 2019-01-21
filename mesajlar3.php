<html>
<body>
<a style="display:block" href="iletisim3.php">Kayıt Sayfası</a>
<form method="POST">
<div style="vertical-align:top;display:inline-block">
<table>
<tr><th>#</th><th>Ad-Soyad</th>

<?php
session_start();
	include 'baglan3.php';
	
	
	
		if($_POST){
			$mesaj=$_POST["mesaj"];
			$id=$_POST["kisiid"];
			$sql="INSERT INTO mesajtable(fromid,toid,mesaj) values(".$_SESSION["userid"].",".$id.",'$mesaj') ";
			$guncelle=mysqli_query($vt,$sql);
				if($guncelle)
					echo "güncelleme tamamlandı";
				else
					echo "güncellemede hata oluştu";
				
			}	
	

?>
			</table></div>
			
			<div>
			<select  name="kisiid" >
				 <?php
				 $sorgu=mysqli_query($vt,"SELECT * FROM liste where userid='".$_SESSION["userid"]."'");
			
			
			if(mysqli_num_rows($sorgu)>0)
				while($satir=mysqli_fetch_assoc($sorgu))
				{	
					
					echo "<option value=".$satir["id"].">".$satir["isim"]." ".$satir["soyad"]."</option>";
					
				}
				 
				 ?>

				 </select>

			<textarea rows="4" name="mesaj" cols="50"></textarea><br>
			<input  type="submit" value="Mesajı kaydet">
			</div>
			
			</form>