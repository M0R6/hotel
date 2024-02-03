
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
        echo "<div class='success'>Registrasi berhasil, silakan login!</div>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        $dbh = new PDO("mysql:host=localhost;dbname=your_database_name", "your_username", "your_password");

        // Use prepared statement to prevent SQL injection
        $stmt = $dbh->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        $stmt->execute();

        // Check if a row is returned
        if ($stmt->fetch()) {
            // Authentication successful
            header("Location: cek_login.php?username=" . urlencode($username) . "&password=" . urlencode($password));
            exit();
        } else {
            // Authentication failed
            echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
        }
    } catch (PDOException $e) {
        // Handle database connection errors
        echo "Error: " . $e->getMessage();
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
				<a class="link" href="../register/">Register</a> <br> 
				<a class="link" href="#">or</a> <br>
				<a class="link" href="/hotel/">Home</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>