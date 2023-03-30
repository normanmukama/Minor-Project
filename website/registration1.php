<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>registration</title>
      <link rel="stylesheet" href="../mycrud/assets/css/bootstrap.min.css">
  </head>
  <body>
  
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <form role="form" method="post" action="reg_to_db.php">
            <fieldset>
					
							<div class="form-group">
                <input class="form-control" placeholder="Firstname" name="ruser_firstname" type="text" required>
							</div>
							
							<div class="form-group">
                <input class="form-control" placeholder="Lastname" name="ruser_lastname" type="text" required>
							</div>
							
							<div class="form-group">
                <input class="form-control" placeholder="Address" name="ruser_address" type="text" required>
							</div>
							
              <div class="form-group">
                <input class="form-control" placeholder="Email" name="ruser_email" type="email" required>
							</div>
							
							<div class="form-group">
                <input class="form-control" placeholder="Password" name="ruser_password" type="password" required>
							</div>
				   
					  </fieldset>
            <div class="modal-footer"> 
              <button style="width:11rem;" class="btn btn-md btn-warning btn-block" name="register">Sign Up</button>
              <button style="width:11rem;" type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
            </div>
				  </form>
        </div>
      </div>
    </div>
    <div class="container">
      <p>Remember to add in select input for  the category of the account being created</p>
    </div>
    <script src="../mycrud/assets/js/bootstrap.min.js"></script>
  </body>
</html>