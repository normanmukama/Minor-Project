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
    <title>Edit child details</title>
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
                        <a href="code.php" class="btn btn-danger float-right">Back</a>
                    </h3>
                </div>
                <div class="card-body">

                <?php 
                    if(isset($_GET['id'])){
                        $child_id = mysqli_real_escape_string($conn, $_GET['id']);
                        $query = "SELECT * FROM orphans WHERE id = '$child_id'";
                        $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run) > 0){
                            $child = mysqli_fetch_array($query_run);

                            ?>
                                <form action="getdata.php" method="post">
                                    <input type="hidden" name="child_id" value= "<?= $child['id']; ?>">
                                    <div class="m-2">
                                        <label for="Name">First Name</label>
                                        <input type="text" class="form-control" value = "<?= $child['first_name']; ?>" name="first_name" required>
                                    </div>
                                    <div class="m-2">
                                        <label for="name">Last Name</label>
                                        <input type="text" class="form-control" value = "<?= $child['last_name']; ?>" name="last_name" required>
                                    </div>
                                    <div class="m-2">
                                        <label for="date of birth">D.O.B</label>
                                        <input type="text" class="form-control" value = "<?= $child['date_of_birth']; ?>" name="date_of_birth" required>
                                    </div>
                                    <!-- <div class="m-2">
                                        <label for="country of origin">Country of origin</label>
                                        <input type="text" class="form-control" value = "<?= $child['original_country']; ?>" name="original_country" required>
                                    </div> -->
                                    <div class="m-2">
                                        <label for="current country">Current country</label>
                                        <input type="text" class="form-control" value = "<?= $child['current_country']; ?>" name="current_country" required>
                                    </div>
                                    <div class="m-2">
                                        <label for="date of birth">District</label>
                                        <input type="text" class="form-control" value = "<?= $child['current_district']; ?>" name="current_district" required>
                                    </div>
                                    <div class="m-2">
                                        <label for="date of birth">Guardian</label>
                                        <input type="text" class="form-control" value = "<?= $child['guardian']; ?>" name="guardian" required>
                                    </div>

                                    <button type="submit" name="update_child" class="btn btn-primary">
                                        Update child
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