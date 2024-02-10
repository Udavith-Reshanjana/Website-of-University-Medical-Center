<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>DOCTORS</title>
		<link rel="icon" href="images\logo.png">
		<link rel="stylesheet" href="style.css">
		<style>
			body
			{
				background-color:aliceblue;
			}
		</style>
		<script src="javaScript.js"></script>
	</head>
    <body> 
		<?php
		 	include("php/Header.php");
		 ?>
		<div class="dcontent">
			<div class="dhead">
				<p align="center">
					<img src="images/doctors/2.png" alt="Services" width="250" height="250">
					<br><span class="dheadtext">DOCTORS</span>
				</p>
			</div>
			
			<div class="doctorlist"> 
				<div class="doctors"><img src="images/doctors/d1.jpg" alt="Services" width="250" height="250" border="0">
					<br><span class="dtexthead">Dr. Chinthaka Rathnayake</span>
					<span class="dtext">Telephone:<br> 94112 903 150 <br>Email <br>cmo@kln.ac.lk</span>
				</div>
				
				<div class="doctors"><img src="images/doctors/d2.jpg" alt="Services" width="250" height="250" border="0">
					<br><span class="dtexthead">Dr. N. Thivanka De Silva</span>
					<span class="dtext">MBBS ( Colombo), MCGP (SL), MNS (LSU, USA)<br>Telephone<br>94112 903 155<br>Email<br>nthivanka@kln.ac.lk</span>
				</div>
				
			</div>
		</div>
		
		<?php
		 	include("php/Footer.php");
		 ?>
    </body>
</html>