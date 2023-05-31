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
    <title>Data insertion</title>
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
   <div class=" mt-4">
       <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>CHILD DETAILS
                        <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#exampleModal">
                           Add Child
                        </button>
                    </h3>

                </div>
                <div class="card-body">
                    <table id="dataTable" width="100%" cellspacing="0" class=" table table-striped table-bordered">
                        <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>First name</th>
                                <th>Last name</th>
                                <th>D.O.B</th>
                                <!-- <th>Former country</th> -->
                                <th>Current country</th>
                                <th>District</th>
                                <th>Guardian_name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php   
                              $query = "SELECT * FROM orphans";
                              $query_run = mysqli_query($conn, $query);

                              if(mysqli_num_rows($query_run) > 0){
                                  foreach($query_run as $child){
                                    //   echo $student['name'];
                                    ?>
                                        <tr>
                                            <!-- <td><?= $child['id']; ?></td> -->
                                            <td><?= $child['first_name']; ?></td>
                                            <td><?= $child['last_name']; ?></td>
                                            <td><?= $child['date_of_birth']; ?></td>
                                            <td><?= $child['current_country']; ?></td>
                                            <td><?= $child['current_district']; ?></td>
                                            <td><?= $child['guardian']; ?></td>
                                            <td  style="display:flex;flex-direction:row; gap:3px;">
                                                <a href="../mycrud/student_view.php?id= <?= $child['id']; ?> " class="btn btn-primary float-right btn-sm">View
                                                    <!-- <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal-1">
                                                        View
                                                    </button> -->
                                                </a>
                                                <a href="../mycrud/student_edit.php?id= <?= $child['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                <form action="../mycrud/getdata.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_child" value="<?= $child['id']; ?>" class="btn btn-danger"><i class="fa fa-use"></i>Delete</button>
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


<!-- ---Add child details modal -->
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
      <form action="../mycrud/getdata.php" method="post">
                      <div class="m-2">
                          <label for="fname">First Name</label>
                          <input type="text" class="form-control" name="fname" required>
                      </div>
                      <div class="m-2">
                          <label for="lname">Last Name</label>
                          <input type="text" class="form-control" name="lname" required>
                      </div>
                      <div class="m-2">
                          <label for="date_of_bith">Date of Bith</label>
                          <!-- changed from course to original contry -->
                          <input type="text" class="form-control" name="date_of_birth" required>
                      </div>
                      
                      <div class="m-2">
                          <label for="country"> Country</label>
                          <!-- changed from course to original contry -->
                          <input type="text" class="form-control" name="current_country" required>
                      </div>
                      <div class="m-2">
                          <label for="district">Current District</label>
                          <!-- changed from course to original contry -->
                          <input type="text" class="form-control" name="district" required>
                      </div>
                      <div class="m-2">
                          <label for="guardian">Guardian name</label>
                          <input type="text" class="form-control" name="guardian" required>
                      </div>

                      <input type="submit" name="add_child" class="btn btn-primary">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
      </div>
    </div>
  </div>
</div>


<!-- ---view child details modal -->
<!-- its not yet over -->
<div class="modal fade" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View child details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2>Are you sure there is nothing??</h2>
      <?php 
                    require 'dbconnection.php';
                    if(isset($_GET['id'])){
                        $child_id = mysqli_real_escape_string($conn, $_GET['id']);
                        $query = "SELECT * FROM orphans WHERE id = '$child_id'";
                        $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run) > 0){
                            $child = mysqli_fetch_array($query_run);

                            ?>
                                <div class="m-2">
                                    <label for="Name">First Name</label>
                                    <p class="form-control">
                                        <?= $child['first_name']; ?>
                                    </p>
                                </div>
                                <div class="m-2">
                                    <label for="course">Last Name</label>
                                    <p class="form-control">
                                        <?= $child['last_name']; ?>
                                    </p>
                                </div>
                                <div class="m-2">
                                    <label for="email">D.O.B</label>
                                    <p class="form-control">
                                        <?= $child['date_of_birth']; ?>
                                    </p>
                                </div>
                               
                                <div class="m-2">
                                    <label for="email">Current country</label>
                                    <p class="form-control">
                                        <?= $child['current_country']; ?>
                                    </p>
                                </div>
                                <div class="m-2">
                                    <label for="email">District</label>
                                    <p class="form-control">
                                        <?= $child['current_district']; ?>
                                    </p>
                                </div>
                                <div class="m-2">
                                    <label for="email">Guardian</label>
                                    <p class="form-control">
                                        <?= $child['guardian']; ?>
                                    </p>
                                </div>
                            <?php
                        }else{
                            echo "<h4>No data found</h4>";
                        }
                    }
                ?> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<!-- <script src="assets/js/bootstrap.min.js"></script> -->
</body>
</html>
