<?php
session_start();

?>
<?php
include("dbconnection.php");
if(isset($_POST['register']))
{

$user_firstname = $_POST['ruser_firstname'];
$user_lastname = $_POST['ruser_lastname'];
$user_email = $_POST['ruser_email'];
$role = $_POST['role'];
$contact = $_POST['contact'];
$user_password = $_POST['ruser_password'];


$check_user="SELECT * from staff WHERE email='$user_email'";
    $run_query = mysqli_query($conn, $check_user);

    if(mysqli_num_rows($run_query) > 0)
    {
echo "<script>alert('Customer already exists, Please try another one!')</script>";
 echo"<script>window.open('staff3.php')</script>";
exit();
    }

    $saveaccount="INSERT INTO staff (first_name, lastname, email,role, contact, password) VALUES ('$user_firstname','$user_lastname','$user_email', '$role', '$contact', '$user_password')";
    mysqli_query($conn,$saveaccount);
    echo "<script>alert('Data successfully saved, You may now login!')</script>";				
    echo "<script>window.open('staff3.php')</script>";
    
//     $user_firstname = mysqli_real_escape_string($conn, $_POST['first_name']);
// $user_lastname = mysqli_real_escape_string($conn, $_POST['last_name']);
// $user_address = mysqli_real_escape_string($conn, $_POST['address']);
// $user_email = mysqli_real_escape_string($conn, $_POST['email']);
// $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// $saveaccount = "INSERT INTO accounts (first_name, last_name, address, email, password) VALUES (?, ?, ?, ?, ?)";
// $stmt = mysqli_prepare($conn, $saveaccount);
// mysqli_stmt_bind_param($stmt, "sssss", $user_firstname, $user_lastname, $user_address, $user_email, $user_password);

// if (mysqli_stmt_execute($stmt)) {
//   echo "<script>alert('Data successfully saved, You may now login!')</script>";				
//   echo "<script>window.open('registration1.php')</script>";
// } else {
//   echo "Error: " . mysqli_error($conn);
// }

// mysqli_stmt_close($stmt);
// mysqli_close($conn);
}
?>
