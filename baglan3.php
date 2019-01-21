<?php
	$vt=mysqli_connect('localhost','root','','liste2');
	mysqli_set_charset($vt,'utf8');
	mysqli_query($vt,'CREATE DATABASE IF NOT EXISTS Liste2');
	mysqli_select_db($vt,'Liste2');
	mysqli_query($vt,'CREATE TABLE IF NOT EXISTS Liste(	id 
	INT AUTO_INCREMENT PRIMARY KEY, isim TEXT, soyad TEXT, telefon CHAR(11),userid int)');
	mysqli_query($vt,'CREATE TABLE IF NOT EXISTS usertable(	id 
	INT AUTO_INCREMENT PRIMARY KEY, username TEXT, sifre TEXT)');
	mysqli_query($vt,'CREATE TABLE IF NOT EXISTS mesajtable(	id 
	INT AUTO_INCREMENT PRIMARY KEY, fromid INT, toid INT, mesaj TEXT)');
?>