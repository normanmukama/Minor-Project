<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Recorder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Time Recorder</h1>
        <?php

            $UsertimeOut = date("Y-m-d H:i:s");
       ?>
        <form action="db-timing.php" method="POST">
            <!-- <div class="form-group">
                <label for="worker_name">Worker Name:</label>
                <input type="text" name="worker_name" id="worker_name" class="form-control" required>
            </div> -->
            <div class="form-group">
                <label for="logout_time">Logout Time:</label>
                <p> <?php echo $UsertimeOut; ?> </p>
                <input type="hidden" name="logout_time" id="logout_time" class="form-control" value="<?php echo $UsertimeOut; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
