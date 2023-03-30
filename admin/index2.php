<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data insertion</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
       <?php  include('message.php'); ?>
       <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>ADD STUDENT DETAILS
                        <a href="code.php" class="btn btn-danger float-right">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="getdata.php" method="post">
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
                          <label for="country">Country of origin</label>
                          <!-- changed from course to original contry -->
                          <input type="text" class="form-control" name="country_of_origin" required>
                      </div>
                      <div class="m-2">
                          <label for="country">Current Country</label>
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
                    </form>
                </div>
            </div>
          </div>
       </div>
   </div> 


<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>