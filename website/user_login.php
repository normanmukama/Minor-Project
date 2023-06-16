<?php
session_start();

?>

<?php

$conn = mysqli_connect("127.0.0.1","root","adminnorman","minor_project");
if(isset($_POST['user_login']))
{
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
	
    $check_user="select * from staff WHERE email='$user_email' AND password='$user_password'";
    $run=mysqli_query($conn,$check_user);
    
    if($run === false) {
        // handle the error here, for example:
        echo "Error: " . mysqli_error($conn);
        exit();
    }
    
    if(mysqli_num_rows($run))
    {
        echo "<script>alert('You\'re successfully login!')</script>";
        header("location: ../Dashboard\child.php");
        // header("location:timing.php");
        $_SESSION['email']=$user_email;
    
    }
    else
    {
        // handle the case when no rows are returned
        exit();	
    }
    

}

//retrieving admin credentials
if(isset($_POST['admin_login']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_String($conn, $_POST['password']);
	
    $check_user="select * from admin WHERE username='$username' AND password='$password'";
    $run=mysqli_query($conn,$check_user);
    
    if($run === false) {
        // handle the error here, for example:
        echo "Error: " . mysqli_error($conn);
        exit();
    }
    
    if(mysqli_num_rows($run))
    {
        echo "<script>alert('You\'re successfully login!')</script>";
        header("location: ../Dashboard\main_dash.php");
    }
    else
    {
        // handle the case when no rows are returned
        exit();	
    }
    
}

?>