<?php
function authenticateUser($username, $password) {
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "databaseofumc";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM communitty WHERE user_id='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        return true;
    } else {
        return false;
    }

    $conn->close();
}
?>
