<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_account'])){
    $account_id = mysqli_real_escape_string($conn, $_POST['delete_account']);
    $query = "DELETE FROM accounts  WHERE id = '$account_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['message'] = "Account deleted";
        header('Location: reg_retrieve.php');
        exit(0);
    }
    else{
        $_SESSION['message'] = "Account not deleted";
        header('Location: reg_retrieve.php');
        exit(0);
    }
}

?>