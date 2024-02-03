<?php
session_start();
if (!isset($_SESSION['nama']) || empty($_SESSION['nama'])) {
	header("location: ../index.php"); // Ganti "index.php" dengan halaman login Anda
	exit();
 } 
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    <title> MORG Homestay </title>
    </head>
    <body> 
        <div class="wrapper"> 
            <nav class="navbar"> 
                <img class="logo" src="logo.svg">
                <ul> 
                    <li> <a href="#"> Home </a> </li>
                    <li> <a href="room.php"> Units </a> </li>
                    <li> <a href="guests.php"> Guest Datas </a> </li>
                    <li> <a href="employees.php"> Employees </a> </li>
                    <li> <a href="logout.php"> Logout </a> </li>
                </ul>
            </nav>
            <div class="center">
                <h1> MORG Homestay's <h1>
                <h3 style="color: darkblue"> cashier & receptionist's tool </h3> <br>
                <a href="room.php" class="centerButton"> Units availability check </a>
                <a href="employees.php" class="centerButton"> Employees check </a> <br> <br>
                <a href="guests.php" class="centerButton"> Guest check </a> <br> <br>
                <a href="tel:911" class="centerButtonSOS"> Emergency button </a>
            </div>
        </div>
    <!-- <h1 class="titleIndex">MORG Homestay</h1> 
    <h2 class="subtitleIndex"> for cashier & receptionist </h2>
    <a href="room.php"> <h2 class="buttonIndex"> Cek & Edit Ketersediaan Kamar </h2> </a>
    <table>
        <tr>
            <td>  </td>
        </tr>
    </table>
    -->
    </body>
    </html>