<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPOINTMENT</title>
    <link rel="icon" href="images\logo.png">
    <link rel="stylesheet" href="style.css">
    <style></style>
    <script src="javaScript.js"></script>
</head>
    <body>
		<?php
		 	include("php/Header.php");
		 ?>

        <div class="appointmentmain">
			<p class="Pfheadtext"><span class="fheadtext">APPOINTMENT</span></p>
			<div class="appointment">
        	<form action="/appointment.php" name="appointmentform" onsubmit="">
	        	
				<div class="appoinmentcontainer">
					<table class="feedbackCont1" >
						<tr>
							<th id="feedbackTopic">NAME</th>
							<td><input type="text" name="Name" id="Name"></td>
						</tr>
						<tr>
							<th id="feedbackTopic">PERSON ID</th>
							<td><input type="text" name="personid" id="personid"></td>
						</tr>
						<tr>
							<th id="feedbackTopic">DATE</th>
							<td><input type="date" name="date" id="date"></td>
						</tr>
						<tr>
							<th id="feedbackTopic">DATE OF BIRTH</th>
							<td><input type="date" name="dob" id="dob"></td>
						</tr>
						<tr>
							<th id="feedbackTopic">GENDER</th>
							<td>
								<table style="width: 20%; margin-top: 10px;" >
									<tr>
										<td><input type="radio" name="gender" id="male" value="Male" required></td>
										<td><div class="gender">MALE</div></td>
										
										<td><input type="radio" name="gender" id="female" value="Female" required></td>
										<td><div class="gender">FEMALE</div></td>
										
									</tr>
								</table>	
							</td>
						</tr>
						<tr>
							<th id="feedbackTopic">CONTACT NO</th>
							<td><input type="text" name="contactno" id="contactno"></td>
						</tr>
						<tr>
							<th id="symptoms">SYMPTOMS</th>
							<td><textarea name="symptom" id="symptom" rows="10"></textarea></td>
						</tr>
					</table>
					
				</div>
				<div class="buttons">
					<button type="button" id="clearButton" onclick="">CLEAR</button>
					<button type="submit" id="bookButton">BOOK</button>
				</div>

				
        	</form>
			</div> 
			<div class="appointmentimg">
				<img src="images\appointment\3.png" alt="appointmentimg" id="appointmentimg" width="100%" height="100%">
			</div>
		</div>
		
        <?php
		 	include("php/Footer.php");
		 ?>

    </body>
</html>