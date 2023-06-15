<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "adminnorman";
$dbname = "minor_project";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if there is an existing record for today
$date = date("Y-m-d");
$sql = "SELECT id FROM TimeRecorder WHERE DATE(datetime_in) = '$date'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // A record already exists for today, so update the datetime_in field
    $row = $result->fetch_assoc();
    $recordId = $row["id"];
    $sql = "UPDATE TimeRecorder SET datetime_in = NOW(), status = 'Working' WHERE id = $recordId";
    $conn->query($sql);
} else {
    // No record for today, so insert a new record
    $sql = "INSERT INTO TimeRecorder (datetime_in, status) VALUES (NOW(), 'Working')";
    $conn->query($sql);
}




// time out
// Connect to the database (same as above)
$conn = mysqli_connect("localhost", "root","adminnorman", "minor_project");
// Check if there is an open record for today
$date = date("Y-m-d");
$sql = "SELECT id, datetime_in FROM TimeRecorder WHERE DATE(datetime_in) = '$date' AND datetime_out IS NULL";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // An open record exists, so update the datetime_out and timeworked fields
    $row = $result->fetch_assoc();
    $recordId = $row["id"];
    $datetimeIn = $row["datetime_in"];
    $datetimeOut = date("Y-m-d H:i:s");
    
    // Calculate the work duration
    $datetime1 = new DateTime($datetimeIn);
    $datetime2 = new DateTime($datetimeOut);
    $workDuration = $datetime1->diff($datetime2)->format('%H:%I:%S');
    
    $sql = "UPDATE TimeRecorder SET datetime_out = '$datetimeOut', timeworked = '$workDuration', status = 'Not at work' WHERE id = $recordId";
    $conn->query($sql);
}

$conn->close();




?>
