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
    <title>Child Records</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
</head>
<body>
   <div class=" mt-4">
       <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="d-flex">
                        <div id="printButton"></div>
                        <div id="excelButton"></div>
                        <div id="pdfButton"></div>
                    </div>
                    <div>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                            Add Child
                        </button>
                    </div>
                </div>

                <?php include 'd-table.php'; ?>
                <div class="card-body">
                    <table id="dataTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>D.O.B</th>
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
                                    ?>
                                        <tr>
                                            <td><?= $child['first_name']; ?></td>
                                            <td><?= $child['last_name']; ?></td>
                                            <td><?= $child['date_of_birth']; ?></td>
                                            <td><?= $child['current_country']; ?></td>
                                            <td><?= $child['current_district']; ?></td>
                                            <td><?= $child['guardian']; ?></td>
                                            <td style="display:flex;flex-direction:row; gap:3px;">
                                                <a href="../mycrud/student_view.php?id=<?= $child['id']; ?>" class="btn btn-primary float-right btn-sm">View</a>
                                                <a href="../mycrud/student_edit.php?id=<?= $child['id']; ?>" class="btn btn-success btn-sm">Edit</a>
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
.
</div>
        </div>
    </div>
</div>

<!-- Add Child Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Child</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Child form goes here -->
                <form action="../mycrud/getdata.php" method="POST">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
                    </div>
                    <div class="form-group">
                        <label for="current_country">Current Country</label>
                        <input type="text" class="form-control" id="current_country" name="current_country" required>
                    </div>
                    <div class="form-group">
                        <label for="current_district">Current District</label>
                        <input type="text" class="form-control" id="current_district" name="current_district" required>
                    </div>
                    <div class="form-group">
                        <label for="guardian_name">Guardian Name</label>
                        <input type="text" class="form-control" id="guardian_name" name="guardian_name" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="add_child">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<script>
   
    var table = $('#dataTable').DataTable();

// Print button
new $.fn.dataTable.Buttons(table, {
    buttons: [
        {
            extend: 'print',
            text: 'Print',
            className: 'btn btn-primary',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5]
            }
        }
    ]
}).container().appendTo($('#printButton'));

// Excel button
new $.fn.dataTable.Buttons(table, {
    buttons: [
        {
            extend: 'excel',
            text: 'Excel',
            class: 'btn btn-success',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5]
            }
        }
    ]
}).container().appendTo($('#excelButton'));

// PDF button
new $.fn.dataTable.Buttons(table, {
    buttons: [
        {
            extend: 'pdf',
            text: 'PDF',
            className: 'btn btn-danger',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5]
            }
        }
    ]
}).container().appendTo($('#pdfButton'));

</script>

</body>
</html>
