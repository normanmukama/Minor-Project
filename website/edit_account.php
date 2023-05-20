<?php 
session_start();
include 'dbcon.php';
If(isset($_GET['id'])){
    $child_id = mysqli_real_escape_string($conn, $_GET['id']);
    $query = "SELECT * from accounts WHERE id = '$child_id'";
    $query_run = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($query_run)> 0){
        $child = mysqli_fetch_array($query_run);
        ?>
            <form class="user"   method="post" action="update.php">
                <input type="hidden" name="user_id" value="<?=$child['id'] ?>">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="ruser_firstname" class="form-control"
                        value="<?=$child['first_name'] ?>"    placeholder="First Name">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="ruser_lastname" class="form-control"
                        value="<?=$child['last_name'] ?>"    placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" name="ruser_email" class="form-control"
                    value="<?=$child['email'] ?>"    placeholder="Email Address">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="ruser_password" class="form-control "
                        value="<?=$child['password'] ?>" placeholder="Password">
                    </div>
                    <div class="col-sm-6">
                            <div class="form-group">
                                <select id="my-select" value="<?=$child['address'] ?>" name="ruser_address" class="form-control" name="">
                                    <option>Donor</option>
                                    <option>Guardian</option>
                                </select>
                            </div>
                    </div>
                </div>
                <button name="update_user" class="btn btn-primary  btn-block">
                    update
                </button>
                <hr>
            </form>
        <?php
    }
    
}

?>