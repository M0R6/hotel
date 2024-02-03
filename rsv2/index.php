<?php
session_start();
if (!isset($_SESSION['nama']) || empty($_SESSION['nama'])) {
	header("location: ../index.php"); // Ganti "index.php" dengan halaman login Anda
	exit();
 } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Make your reservation, <?php echo $_SESSION['nama']?> </h1>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque
								ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi.
								Perspiciatis.
							</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form method="post" action="input-reservasi.php">
							<div class="row">
									<!-- <div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">NIK</span>
											<input class="form-control" type="text" required name="nik">
										</div>
									</div> -->
								</div>
								<div class="form-group">
									<span class="form-label">Nomor Induk Kependudukan (NIK)</span>
									<input class="form-control" type="text" required name="nik">
								</div>
								<div class="form-group">
									<span class="form-label">Nama Sesuai KTP</span>
									<input class="form-control" type="text" required name="namaktp">
								</div>
								<div class="form-group">
									<span class="form-label">Select unit</span>
									<select class="form-control" name="unit">
										<!-- Replace the following options with your actual options -->
										<option value="REGULAR">REGULAR</option>
										<option value="DELUXE">DELUXE</option>
									</select>
									<span class="select-arrow"></span>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check In</span>
											<input class="form-control" type="date" required name="cidate">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check out</span>
											<input class="form-control" type="date" required name="codate">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Rooms</span>
											<select class="form-control" name="rooms">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Adults</span>
											<select class="form-control" name="adults">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Children</span>
											<select class="form-control" name="children">
												<option>0</option>
												<option>1</option>
												<option>2</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button type="submit" class="submit-btn">RESERVE NOW</button>
								</div>
							</form>
							<br>
							<form method="post" action="logout.php">
								<div class="form-btn">
									<button type="submit" class="submit-btn2">Logout</button>
								</div>
							</form>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>