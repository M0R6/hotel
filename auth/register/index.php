 <?php
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<title> Regist page </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel|Acme">
</head>
<body>
 
	<h1> MORG Homestay<br>Register </h1>
 
	<div class="kotak_login">
		<p class="tulisan_login">Please register first<br>before you make a reservation</p>
 
		<form action="regist.php" method="post">
			<label>Name</label>
			<input type="text" name="nama" class="form_login" placeholder="Name .." required="required">

			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="REGISTER">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="/hotel/auth/login">Click here if you're already having an account!</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>