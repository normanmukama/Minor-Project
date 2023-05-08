<?php  

$conn = mysqli_connect("localhost","root","adminnorman","minor_project");
$user_email = mysqli_real_escape_string($conn, $_POST['user_login']);
$user_password = mysqli_real_escape_string($conn, $_POST['user_password']);

$check_user = "select *  from staff WHERE email = '$user_email' AND password ='$user_password'";

$run = mysqli_query($conn, $check_user);

if(mysqli_num_rows($run)>0){
  // echo "<script>open.window('../mycrud/code.php')";
  // echo '<script>open("../mycrud/code.php")</script>';
  header('location: index.php');;

}
else{
  exit();
}

?>