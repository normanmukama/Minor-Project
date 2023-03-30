<?php 
session_start();
require 'dbconnection.php';

if(isset($_POST['delete_child'])){
    $child_id = mysqli_real_escape_string($conn, $_POST['delete_child']);
    $query = "DELETE FROM orphans  WHERE id = '$child_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['message'] = "Child deleted successfully";
        header('Location:  ../dashboard/child.php');
        exit(0);
    }
    else{
        $_SESSION['message'] = "child not deleted";
        header('Location:  ../dashboard/child.php');
        exit(0);
    }
}

if(isset($_POST['update_child'])){
    $child_id = $_POST['child_id'];

    $fname =  $_POST['first_name'];
    $lname = $_POST['last_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $original_country = $_POST['original_country'];
    $current_country = $_POST['current_country'];
    $district = $_POST['current_district'];
    $guardian = $_POST['guardian'];

    $query = "UPDATE orphans SET first_name='$fname', last_name='$lname', date_of_birth='$date_of_birth',original_country='$original_country',current_country='  $current_country',current_district='$district',guardian='$guardian' WHERE id='$child_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['message'] = "Student updated successfully...";
        header('Location:  ../dashboard/child.php');
        exit(0);
    }
    else{
        $_SESSION['message'] = "Student not updated";
        header('Location:  ../dashboard/child.php');
        exit(0);
    }
}

if(isset($_POST['add_child'])){
   $fname =  $_POST['fname'];
   $lname =  $_POST['lname'];
   $date_of_birth =  $_POST['date_of_birth'];
   $country_of_origin =  $_POST['country_of_origin'];
   $current_country =  $_POST['current_country'];
    $district = $_POST['district'];
    $guardian = $_POST['guardian'];

    $query = "INSERT INTO orphans(first_name, last_name, date_of_birth, original_country, current_country ,current_district ,guardian) VALUES
     ('$fname', '$lname','$date_of_birth','$country_of_origin','$current_country',' $district','$guardian')";
    $query_run = mysqli_query($conn, $query);
    if($query_run){
        $_SESSION['message'] = "Child created successfully";
        header('Location:  ../dashboard/child.php');
        exit(0);
    }else{
        $_SESSION['message'] = "Child not created.";
        header('Location:  ../dashboard/child.php');
        exit(0);
    }
}

// header('Location: index2.php');
?>