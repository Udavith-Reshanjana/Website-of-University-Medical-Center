<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEEDBACK</title>
    <link rel="icon" href="images\logo.png">
    <link rel="stylesheet" href="style.css">
    <style></style>
    <script src="javaScript.js"></script>
</head>
    <body>
		<?php
		 	include("php/Header.php");
		 ?>

        <div class="feedbackmain">
			<p class="Pfheadtext"><span class="fheadtext">FEEDBACK FORM</span></p>
        	<form action="recordFeedback.php" name="feedbackForm" onsubmit="return validateSubmitInFeedback()" method="post">
				<div class="formImg"><img src="images\Feedback\7.png" alt="Feedback Image" id="leftImg"></div>
	        	<div class="feedbackContContainer">
					<table class="feedbackCont1">
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
								<table style="width: 20%; margin-top: 10px;">
									<tr>
										<td>MALE</td>
										<td><input type="radio" name="gender" id="male" value="Male"></td>
									</tr>
									<tr>
										<td>FEMALE</td>
										<td><input type="radio" name="gender" id="female" value="Female"></td>
									</tr>
								</table>	
							</td>
						</tr>
						<tr>
							<th id="feedbackTopic">SUGGESTIONS</th>
							<td><textarea name="Suggesstions" id="Suggesstions" rows="10" cols="50" style="background-color: rgba(0, 0, 0, 0.1);"></textarea></td>
						</tr>
					</table>
				</div>
				<div class="formImg"><img src="images\Feedback\7.png" alt="Feedback Image" id="rightImg"></div>
				<div class="feedbackContContainer2">
					<table class="feedbackCont2">
						<tr>
							<td>&nbsp;</td>
							<td colspan="5">
								<span id="notSatis">Not Satisfied</span>
								<span id="verySatis">VerySatisfied</span>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><span id="rating">1</span></td>
							<td><span id="rating">2</span></td>
							<td><span id="rating">3</span></td>
							<td><span id="rating">4</span></td>
							<td><span id="rating">5</span></td>
						</tr>
						<tr>
							<td class="feedbackT">Doctor Knowledge</td>
							<td>
								<input type="radio" name="DoctorKnowledge" id="dknow" value="1">
							</td>
							<td>
								<input type="radio" name="DoctorKnowledge" id="dknow" value="2">
							</td>
							<td>
								<input type="radio" name="DoctorKnowledge" id="dknow" value="3">
							</td>
							<td>
								<input type="radio" name="DoctorKnowledge" id="dknow" value="4">
							</td>
							<td>
								<input type="radio" name="DoctorKnowledge" id="dknow" value="5">
							</td>
						</tr>

						<tr>
							<td class="feedbackT">Doctor Kindness</td>
							<td>
								<input type="radio" name="DoctorKindness" id="dkind" value="1">
							</td>
							<td>
								<input type="radio" name="DoctorKindness" id="dkind" value="2">
							</td>
							<td>
								<input type="radio" name="DoctorKindness" id="dkind" value="3">
							</td>
							<td>
								<input type="radio" name="DoctorKindness" id="dkind" value="4">
							</td>
							<td>
								<input type="radio" name="DoctorKindness" id="dkind" value="5">
							</td>
						</tr>

						<tr>
							<td class="feedbackT">Waiting Time</td>
							<td>
								<input type="radio" name="WaitingTime" id="wtime" value="1">
							</td>
							<td>
								<input type="radio" name="WaitingTime" id="wtime" value="2">
							</td>
							<td>
								<input type="radio" name="WaitingTime" id="wtime" value="3">
							</td>
							<td>
								<input type="radio" name="WaitingTime" id="wtime" value="4">
							</td>
							<td>
								<input type="radio" name="WaitingTime" id="wtime" value="5">
							</td>
						</tr>
						<tr>
							<td class="feedbackT">Hygene</td>
							<td>
								<input type="radio" name="Hygene" id="hygenee" value="1">
							</td>
							<td>
								<input type="radio" name="Hygene" id="hygenee" value="2">
							</td>
							<td>
								<input type="radio" name="Hygene" id="hygenee" value="3">
							</td>
							<td>
								<input type="radio" name="Hygene" id="hygenee" value="4">
							</td>
							<td>
								<input type="radio" name="Hygene" id="hygenee" value="5">
							</td>
						</tr>
					</table>
				</div>
				<div class="buttons">
					<button type="button" id="clearButton" onclick="return clearMeInFeedback()">CLEAR</button>
					<button type="submit" id="submitButton">SUBMIT</button>
				</div>
        	</form>
        </div> 
        <?php
		 	include("php/Footer.php");
		 ?>
        
    </body>
</html>