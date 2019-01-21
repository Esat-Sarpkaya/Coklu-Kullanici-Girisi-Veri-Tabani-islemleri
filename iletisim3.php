<form action='liste3.php' method='GET'>
		<table>
			<tr>
				<td>İsim:</td>
				<td><input type='text' name='isim' /></td>
			</tr>
			<tr>
				<td>soyad:</td>
				<td><input type='text' name='soyad' /></td>
			</tr>
			<tr>
				<td>Telefon:</td>
				<td><input type='text' name='telefon' /></td>
			</tr>
			
			
			<tr>
				<td>Doğrulama Kodu:</td>
				<td>
				<?php
					session_start();
					$guvenliknum=rand(1,9);
					$guvenliknum2=rand(1,9);
					$toplam=$guvenliknum+$guvenliknum2;
					$_SESSION['guvenlik_kodu']="$toplam";
					echo $guvenliknum .'+'.$guvenliknum2.'='."<input type='text' name='guvenlik_kodu' />";
					
				?></td>
			</tr>
			<tr>
				<td> </td>
				<td style='text-align:right;'><button type='submit'>Kaydet</button> </td>
			</tr>
				<td>
					<a href="kisiler3.php">Kişiler<a/>
					<a href="mesajlar3.php">Mesajyaz<a/>
					<a href="mesajgoster.php">Mesajgoster<a/>
				</td>
			<tr>
			</tr>
		</table>
		</form>
		