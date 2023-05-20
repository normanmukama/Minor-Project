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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

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
                    <!-- <a href="staff.php" class="btn btn-danger float-right ml-3">Add Account</a> -->
                    <button type="button" class="btn btn-danger float-right ml-4" data-toggle="modal" data-target="#exampleModal">
                      Add Staff
                    </button>
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

   <!-- staff registration modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add child</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="user"   method="post" action="staff2.php">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="ruser_firstname" class="form-control" id="exampleFirstName"
                                                placeholder="First Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="ruser_lastname" class="form-control" id="exampleLastName"
                                                placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="ruser_email" class="form-control" id="exampleInputEmail"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="role" name="role" class="form-control" id="exampleInputEmail"
                                            placeholder="Role">
                                    </div>
                                    <div class="form-group">
                                        <input type="contact" name="contact" class="form-control" id="exampleInputEmail"
                                            placeholder="Contact">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                            <input type="password" name="ruser_password" class="form-control "
                                                id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    
                                    <div class="d-flex">
                                        <button name="register" class="btn btn-primary  mr-4">
                                            Register Account
                                        </button>
                                        <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
                                    </div>
                                    <hr>
                                    <!-- <a href="index.html" class="btn btn-google  btn-block">
                                        <i class="fab fa-google fa-fw"></i> Register with Google
                                    </a> -->
                                    <!-- <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                    </a> -->
                                </form>
      </div>
    </div>
  </div>
</div>


   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

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
