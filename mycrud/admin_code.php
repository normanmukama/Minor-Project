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
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <!-- Link Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- link the datatables here -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    
    

</head>
<body>

   <div class=" mt-4">
       <?php require 'message.php' ?>
       <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header text-primary">
                    <h3>CHILD INFORMATION
                        <a href="../dashboard/main_dash.php" class="btn btn-danger float-right">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table id="dataTable" width="100%" cellspacing="0" class=" table table-striped table-bordered">
                        <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>First name</th>
                                <th>Last name</th>
                                <!-- <th>D.O.B</th> -->
                                <!-- <th>Former country</th> -->
                                <th>Country</th>
                                <th>District</th>
                                <!-- <th>Guardian_name</th> -->
                                <!-- <th>Actions</th> -->
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
                                            <!-- <td><?= $child['date_of_birth']; ?></td> -->
                                            <!-- <td><?= $child['original_country']; ?></td> -->
                                            <td><?= $child['current_country']; ?></td>
                                            <td><?= $child['current_district']; ?></td>
                                            <!-- <td><?= $child['guardian']; ?></td> -->
                                            <!-- <td  style="display:flex;flex-direction:row; gap:3px;">
                                                <a href="../mycrud/student_view.php?id= <?= $child['id']; ?>" class="btn btn-primary btn-sm">View</a>
                                            </td> -->
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
   <script>
    $(document).ready(function(){
        $("#dataTable").DataTable();
    })
</script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>
