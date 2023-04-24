<?php
session_start();
require 'dbconnection.php';

if(isset($_POST['delete_account'])){
    $account_id = mysqli_real_escape_string($conn, $_POST['delete_account']);
    $query = "DELETE FROM staff  WHERE id = '$account_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['message'] = "Account deleted";
        header('Location: staff3.php');
        exit(0);
    }
    else{
        $_SESSION['message'] = "Account not deleted";
        header('Location: staff3.php');
        exit(0);
    }
}

?>