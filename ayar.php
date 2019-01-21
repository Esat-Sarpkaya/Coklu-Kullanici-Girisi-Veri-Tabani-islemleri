<?php
$host="localhost";
$db="vt";
$user="root";
$pass="12345";
$conn=mysqli_connect($host,$user,$pass) or die("Mysql Baglanamadi");
mysql_select_db($db,$conn) or die("Veritabanina Baglanilamadi");
?>