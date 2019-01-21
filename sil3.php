<html>
<body>
<table>
<?php
include 'baglan3.php';
$silinecekID= $_GET['id'];
$sonuc=mysqli_query($vt,"DELETE from Liste where id='$silinecekID'");
 
if($sonuc)
{
   echo "Başarıyla silindi<br>";
   header( "refresh:2;url=kisiler3.php" );
   
   
}
else
    echo "Bir sorun oluştu silinemedi";
?>
</table></body></html>