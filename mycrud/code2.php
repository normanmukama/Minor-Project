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
    <title>Dta retrieve</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">

</head>
<body>
   <div class=" mt-4">
       <?php require 'message.php' ?>
       <div class="row">
          <div class="col-md-12">
            <div class="card">
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
                                            <!-- <td><?= $child['original_country']; ?></td> -->
                                            <td><?= $child['current_country']; ?></td>
                                            <td><?= $child['current_district']; ?></td>
                                            <td><?= $child['guardian']; ?></td>
                                            <td  style="display:flex;flex-direction:row; gap:3px;">
                                                <a href="../mycrud/student_view.php?id= <?= $child['id']; ?>" class="btn btn-primary btn-sm">View</a>
                                                
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

<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
