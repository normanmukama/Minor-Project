<?php  

session_start();
include 'dbcon.php';
$user_email = mysqli_real_escape_string($conn, $_POST['user_login']);
$user_password = mysqli_real_escape_string($conn, $_POST['user_password']);

$check_user = "select *  from staff WHERE email = '$user_email' AND password ='$user_password'";

$run = mysqli_query($conn, $check_user);

// $results = $conn2->prepare($check_user);
// $results->execute();

// if($results->rowCount() > 0){
//   header("Location: ../mycrud/code.php");
// }





if(mysqli_num_rows($run)>0){
  // echo "<script>open.window('../mycrud/code.php')";
  // echo '<script>open("../mycrud/code.php")</script>';
  header('location:../mycrud/code.php');
  header("Location: ../mycrud/code.php");

}
else{
  exit();
}

?>