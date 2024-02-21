<?php
// Include PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "databaseofumc";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get the next appointment ID
$sql_next_id = "SELECT MAX(appoinment_no) AS max_id FROM appoinment";
$result_next_id = $conn->query($sql_next_id);
$row = $result_next_id->fetch_assoc();
$next_appointment_id = $row["max_id"] + 1;

// Collect data from the form
$person_id = $_POST['personid'];
$email = $_POST['universityMail'];
$dob = $_POST['dob'];
$date = $_POST['date'];
$time = $_POST['time'];
$gender = $_POST['gender'];
$contact_no = $_POST['contactno'];
$symptoms = isset($_POST['symptom']) ? $_POST['symptom'] : null;

// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO appoinment (appoinment_no, com_id, appoinment_date, appoinment_time, geder, email, symptoms) 
        VALUES ('$next_appointment_id', '$person_id', '$date', '$time', '$gender', '$email', '$symptoms')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    // Create a new PHPMailer instance
    $mail = new PHPMailer;

    // SMTP configuration (This one is set only for gmail config)
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
	$mail->Username = 'your_email@example.com';
    $mail->Password = 'your_password';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Set From, To, Subject, and Body
    $mail->setFrom('university_medical_center@example.com', 'University Medical Center');
    $mail->addAddress($email, $person_id);
    $mail->Subject = "Appointment booking Confirmation";
    $mail->Body = "Your appointment has been successfully booked. Appointment ID is: $next_appointment_id\n";
    $mail->Body .= "Appointment Date: $date\n";
    $mail->Body .= "Appointment Time: $time\n";
    $mail->Body .= "Gender: $gender\n";
    $mail->Body .= "Contact Number: $contact_no\n";
    $mail->Body .= "Symptoms: " . ($symptoms ? $symptoms : "None provided") . "\n";

    // Send email
    if ($mail->send()) {
        exit('<script>alert("Appointment made successfully. Appointment ID is: ' . $next_appointment_id . '"); window.location.href = "Appoinment.php";</script>');
    } else {
        echo 'Email could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
