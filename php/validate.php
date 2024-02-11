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

// Get the person ID from the request parameters
$personID = $_GET['personID'];

// Prepare SQL statement to check if the person ID exists
$sql = "SELECT com_id FROM communitty WHERE com_id = '$personID'";

// Execute SQL statement
$result = $conn->query($sql);

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Person ID exists
    echo 'true';
} else {
    // Person ID does not exist
    echo 'false';
}

// Close database connection
$conn->close();
?>
