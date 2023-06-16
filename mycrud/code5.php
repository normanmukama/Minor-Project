<!DOCTYPE html>
<html>
<head>
    <title>Child Records</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
</head>
<body>

<!-- Table -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Child Records</h2>
            <table id="dataTable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Current Country</th>
                    <th>Current District</th>
                    <th>Guardian Name</th>
                </tr>
                </thead>
                <tbody>
                <!-- Data rows go here -->
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add Child
            </button>
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
    $(document).ready(function() {
        $('#dataTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

</body>
</html>
