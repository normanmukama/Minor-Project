<div class="modal fade" id="ln" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:white" class="modal-title" id="myModalLabel">Customer Login</h4>
              </div>
              <div class="modal-body">
            
				
				 <form role="form" method="post" action="userlogin.php">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="Email" name="user_email" type="email" required>
							</div>
							
							<div class="form-group">
                <input class="form-control" placeholder="Password" name="user_password" type="password" required>
							</div>
					  </fieldset>

            </div>
              <div class="modal-footer">
                <button class="btn btn-md btn-warning btn-block" name="user_login">Sign In</button>
				    <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
				  </form>
              </div>
            </div>
          </div>
        </div>