<html>
<body>
<table>
<?php
include 'baglan3.php';
if($_GET){
$id= $_GET['id'];
$isim=$_GET['isim'];
$soyad=$_GET['soyad'];
$telefon=$_GET['telefon'];
$guncelle=mysqli_query($vt,"update liste SET isim='".$isim."', soyad='".$soyad."', 
telefon='".$telefon."' where id='".$id."'");}
 
   header( "refresh:0;url=kisiler3.php" );
 ?>
 
</table></body></html>