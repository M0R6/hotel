<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){ 
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
		$_SESSION['nama'] = $data['nama'];
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:/hotel/admin/");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="user"){
		$_SESSION['nama'] = $data['nama'];
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";
		// alihkan ke halaman dashboard pegawai
		header("location:/hotel/rsv2"); 

	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>
  <script>
        function validateLogin() {
            // Get input values
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            // Regular expression to check for symbols
            var symbolRegex = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/;

            // Check for symbols in username and password
            if (symbolRegex.test(username) || symbolRegex.test(password)) {
                // Display error message
                document.getElementById('error-message').innerText = "Error: Symbols are not allowed in the username or password.";
            } else {
                // Clear error message and proceed with login logic
                document.getElementById('error-message').innerText = "";
                // Add your login logic here
                alert("Login successful!");
            }
        }
    </script>