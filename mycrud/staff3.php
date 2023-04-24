<?php 
require 'dbconnection.php';
// session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managing Accounts</title>
    <!-- <link rel="stylesheet" href="../mycrud/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../mycrud/assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../mycrud/assets/fontawesome/css/all.min.css"> -->

    <link href="../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../admin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
   <div class=" mt-4">
       
       <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-primary">STAFF ACCOUNTS
                    <a href="staff.php" class="btn btn-danger float-right ml-3">Add Account</a>
                    <a href="../dashboard/main_dash.php" class="btn btn-primary float-right ">Home</a>
                        
                    </h4>
                </div>
                <div class="card-body">
                    <table id="dataTable" width="100%" cellspacing="0" class=" table table-striped table-bordered">
                        <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Contact</th>
                                <th>Password</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php   
                              $query = "SELECT * FROM staff";
                              $query_run = mysqli_query($conn, $query);

                              if(mysqli_num_rows($query_run) > 0){
                                  foreach($query_run as $child){
                                    //   echo $student['name'];
                                    ?>
                                        <tr>
                                            <td><?= $child['first_name']; ?></td>
                                            <td><?= $child['lastname']; ?></td>
                                            <td><?= $child['email']; ?></td>
                                            <td><?= $child['role']; ?></td>
                                            <td><?= $child['contact']; ?></td>
                                            <td><?= $child['password']; ?></td>
                                            <td  style="display:flex;flex-direction:row; gap:3px;">
                                                <!-- <a href="student_view.php?id= <?= $child['id']; ?>" class="btn btn-info btn-sm"><i class="fa fa-eye mr-2"></i>View</a> -->
                                                <a href="staff_update.php?id= <?= $child['id']; ?>"  class="btn btn-sm btn-primary"><i class="fa fa-wrench mr-2"></i>Update Account</a>
                                                <form action="staff_del.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_account" value="<?= $child['id']; ?>" class="btn btn-danger"><i class="fa fa-trash-alt mr-2"></i>Remove Account</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                                  }
                              }else{
                                  echo "<h4>No records found</h4>";
                              }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
       </div>
   </div> 

<!-- <script src="../mycrud/assets/js/bootstrap.min.js"></script> -->
            <!-- Bootstrap core JavaScript-->
            <script src="../admin/vendor/jquery/jquery.min.js"></script>
    <script src="../admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../admin/js/demo/datatables-demo.js"></script>
</body>
</html>
