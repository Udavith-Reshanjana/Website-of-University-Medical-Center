<?php
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
$symptoms = isset($_POST['symptom']) ? $_POST['symptom'] : null; // Check if symptoms were provided

// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO appoinment (appoinment_no, com_id, appoinment_date, appoinment_time, geder, email, symptoms) 
        VALUES ('$next_appointment_id', '$person_id', '$date', '$time', '$gender', '$email', '$symptoms')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    exit('<script>alert("Appointment made successfully. Appointment ID is: ' . $next_appointment_id . '"); window.location.href = "Appoinment.php";</script>');

    $_SESSION['login_error'] = true;
        exit('<script>alert("Invalid username or password");window.location.href = "LogIn.html";</script>');
    // Send email
    // $to = $email;
    // $subject = "Appointment Confirmation";
    // $message = "Your appointment has been successfully booked. Appointment ID is: " . $next_appointment_id . "\n";
    // $message .= "Appointment Date: " . $date . "\n";
    // $message .= "Appointment Time: " . $time . "\n";
    // $message .= "Gender: " . $gender . "\n";
    // $message .= "Contact Number: " . $contact_no . "\n";
    // $message .= "Symptoms: " . ($symptoms ? $symptoms : "None provided") . "\n";

    // $headers = "From: your_email@example.com" . "\r\n" .
    //            "CC: another_email@example.com";

    // mail($to, $subject, $message, $headers);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
