<?php
  
  include 'dbcon.php';

  //retrieving data from the form
  $first_name = mysqli_real_escape_string($conn,$_POST['firstname']);
  $last_name = mysqli_real_escape_string($conn,$_POST['lastname']);
  $address = mysqli_real_escape_string($conn,$_POST['address']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = password_hash($conn, $_POST['password'], DEFAULT_PASSWORD);

  $query = "INSERT INTO table_name(first_name, last_name,address,password) VALUES (?,?,?,?)";
  $stmt = mysqli_prepare($conn, $query);
  $exec = mysqli_stmt_bind_param($stmt, "ssss",$first_name,$last_name,$address,$password);
  exec($exec);
?>