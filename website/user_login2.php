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
        header("location: ../mycrud/code.php");
    }
    else
    {
        // handle the case when no rows are returned
        exit();	
    }
    
}
?>