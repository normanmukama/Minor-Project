<?php
    session_start();
    require 'dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Staff details</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
       <?php  include('message.php'); ?>
       <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Child edit
                        <a href="staff3.php" class="btn btn-danger float-right">Back</a>
                    </h3>
                </div>
                <div class="card-body">

                <?php 
                    if(isset($_GET['id'])){
                        $child_id = mysqli_real_escape_string($conn, $_GET['id']);
                        $query = "SELECT * FROM staff WHERE id = '$child_id'";
                        $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run) > 0){
                            $child = mysqli_fetch_array($query_run);

                            ?>
                                <form action="staff4.php" method="post">
                                    <input type="hidden" name="child_id" value= "<?= $child['id']; ?>">
                                    <div class="m-2">
                                        <label for="Name">First Name</label>
                                        <input type="text" class="form-control" value = "<?= $child['first_name']; ?>" name="first_name" required>
                                    </div>
                                    <div class="m-2">
                                        <label for="name">Last Name</label>
                                        <input type="text" class="form-control" value = "<?= $child['lastname']; ?>" name="last_name" required>
                                    </div>
                                    <div class="m-2">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" value = "<?= $child['email']; ?>" name="email" required>
                                    </div>
                                    <div class="m-2">
                                        <label for="role">Role</label>
                                        <input type="text" class="form-control" value = "<?= $child['role']; ?>" name="role" required>
                                    </div>
                            
                                    <div class="m-2">
                                        <label for="Contact">Contact</label>
                                        <input type="text" class="form-control" value = "<?= $child['contact']; ?>" name="contact" required>
                                    </div>
                                    <div class="m-2">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" value = "<?= $child['password']; ?>" name="password" required>
                                    </div>

                                    <button type="submit" name="update_staff" class="btn btn-primary">
                                        Update staff
                                    </button>
                                </form>

                            <?php
                        }else{
                            echo "<h4>No data found</h4>";
                        }
                    }
                ?>   
                </div>
            </div>
          </div>
       </div>
   </div> 


<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>