<?php
session_start();
include("dbcon.php");

if(isset($_POST['update_user'])){
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $firstname = mysqli_real_escape_string($conn, $_POST['ruser_firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['ruser_lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['ruser_email']);
    $password = mysqli_real_escape_string($conn, $_POST['ruser_password']);
    $address = mysqli_real_escape_string($conn, $_POST['ruser_address']);

    $query = "UPDATE accounts set first_name= '$firstname', last_name = '$lastname', email='$email',
    password ='$password', address='$address' WHERE id = '$user_id'";

    $query_run = mysqli_query($conn, $query);
    if($query_run){
        $_SESSION['message']= "Details updated successfully";
        header('Location: reg_retrieve.php');
        exit();
    }
    else{
        $_SESSION['message']= "Details updated successfully";
        header("location: reg_retrieve.php");
        exit();
    }
}
?>

