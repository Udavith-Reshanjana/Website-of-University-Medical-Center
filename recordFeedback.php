<?php
// Database connection details
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "databaseofumc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['Name'];
$personId = $_POST['personid'];
$date = $_POST['date'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$suggestions = $_POST['Suggesstions'];
$doctorKnowledge = $_POST['DoctorKnowledge'];
$doctorKindness = $_POST['DoctorKindness'];
$waitingTime = $_POST['WaitingTime'];
$hygiene = $_POST['Hygene'];

// Get the next feedback ID
$sql = "SELECT MAX(feedback_no) AS max_id FROM feedback";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nextFeedbackId = $row['max_id'] + 1;
} else {
    $nextFeedbackId = 1;
}

// Insert data into the feedback table
$insertSql = "INSERT INTO feedback (feedback_no, com_id, feedback_date, waiting_time, doctor_knowladege, doctor_kindness, hygene, suggesstions)
              VALUES ($nextFeedbackId, '$personId', '$date', $waitingTime, $doctorKnowledge, $doctorKindness, $hygiene, '$suggestions')";

if ($conn->query($insertSql) === TRUE) {
    exit('<script>alert("Your feedback recorded successfully."); window.location.href = "Feedback.php";</script>');
} else {
    echo "Error: " . $insertSql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
