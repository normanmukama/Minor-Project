<?php
// Assuming you have already established a database connection
$conn = mysqli_connect("localhost","root", "adminnorman","minor_project");
// Check if the form was submitted
if(isset($_POST['submit'])) {
    // Retrieve the values from the form
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $day = mysqli_real_escape_string($conn, $_POST['day']);

    // Prepare and execute the INSERT query
    $sql = "INSERT INTO `Time-manager` (`Time-in`, `Date`,`Day`) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sss', $time, $date, $day);
    mysqli_stmt_execute($stmt);

    // Check if the insertion was successful
    if(mysqli_stmt_affected_rows($stmt) > 0) {
        // echo "Data inserted successfully.";
        header("location: ../Dashboard\child.php");
    } else {
        echo "Failed to insert data.";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the connection
mysqli_close($conn);
?>
