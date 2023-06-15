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

    $UsertimeIn = date("Y-m-d H:i:s");
    ?>
    
    <form action="db-timing.php" method="POST">
        <div class="form-group">
            <label for="login_time">Login Time:</label>
            <h4><?php echo $UsertimeIn; ?></h4> 
            <input type="hidden" name="login_time" id="login_time" value="<?php echo $UsertimeIn ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
