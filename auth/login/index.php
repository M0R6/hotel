<!DOCTYPE html>
<html>
<head>
	<title> Login page </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel|Acme|Playfair+Display">
</head>
<body>
 
	<h1> MORG Homestay<br>Log-in</h1>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
		}
	}
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="berhasil-regist"){
			echo "<div class='success'>registrasi berhasil, silakan login!</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Please log-in</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="/hotel/">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>