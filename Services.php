<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVICES</title>
    <link rel="icon" href="images\logo.png">
    <link rel="stylesheet" href="style.css">
    <style></style>
    <script src="javaScript.js"></script>
</head>
    <body>
		<?php
		 	include("php/Header.php");
		 ?> 
		<p align="center">
		<div class="scontent">
			<div class="shead">
				<p align="center">
					<img src="images/Services/2.png" alt="Services" width="250" height="250">
					<br><span class="sheadtext">OUR SERVICES</span>
				</p>
			</div>
			
			<div class="servielist"> 
				<div class="Service"><img src="images/Services/3.png" alt="Services" id="img3" width="250" height="250" border="0" style="margin-top: 5px;">
					<br><span class="stexthead">FREE CHECKUPS</span>
					<br>
					<span class="stext">"Get your health on track with our free checkups! No cost, no worries. Book now!"</span>
					<br>
					<button id="seeMoreButton" onclick="">SEE MORE</button>
				</div>
				
				<div class="Service"><img src="images/Services/4.png" alt="Services" id="img4" width="250" height="250" border="0" style="margin-top: 20px;">
					<br><span class="stexthead">24/7 AMBULANCE</span>
					<br><span class="stext">"Emergency help on standby! Our 24/7 ambulance service is just a call away."</span>
					<br>
					<button id="seeMoreButton" onclick="" style="margin-top: 27px; margin-bottom:102px;">SEE MORE</button>
				</div>
				
				<div class="Service"><img src="images/Services/5.png" alt="Services" id="img5" width="250" height="250" border="0" style="margin-top: 20px;">
					<br><span class="stexthead">EXPERT DOCTORS</span>
					<br><span class="stext">"Meet our expert doctors - your trusted partners in health and wellness."</span>
					<br>
					<button id="seeMoreButton" onclick="loadDoc()" style="margin-top: 27px; margin-bottom:102px;">SEE MORE</button>
				</div>
				
				<div class="Service"><img src="images/Services/6.png" alt="Services" id="img6" width="250" height="250" border="0" style="margin-top: -60px;">
					<br><span class="stexthead" style="border: none; margin-top: 30px;">MEDICINE</span>
					<hr color="maroon" width="100%">
					<br><span class="stext">"Top - notch meds for you. Your health, our priority."</span>
					<br>
					<button id="seeMoreButton" onclick="" style="margin-top: 50px; margin-bottom:20px;">SEE MORE</button>
				</div>
			</div>
		</div>
		
		<?php
		 	include("php/Footer.php");
		 ?>
</html>