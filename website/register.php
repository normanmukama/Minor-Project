
<?php include 'dbcon.php'; ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>create account</title>
        <!-- Custom fonts for this template-->
        <link href="../assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="../assets2/css/sb-admin-2.min.css" rel="stylesheet">
    </head>
    <body class="bg-gradient-dark">
        <div class="container">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 ">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!-- <div class="col-md-5 d-lg-block"> -->
                            <!-- <img class="img-fluid img-center m-3 rounded" src="../IMAGES/1.jpg" alt="">
                            <div class="container">
                                <p>
                                    <a class="btn bg-primary mt-1 text-light" href="#">upload photo</a>
                                </p> -->
                                <!-- <label class="text-dark" for="description">Short description</label><br>
                                <textarea name="" id="" cols="30" rows="2"></textarea> -->
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="p-4">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form class="user"   method="post" action="reg_to_db.php">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="ruser_firstname" class="form-control" id="exampleFirstName"
                                                placeholder="First Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="ruser_lastname" class="form-control" id="exampleLastName"
                                                placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="ruser_email" class="form-control" id="exampleInputEmail"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" name="ruser_password" class="form-control "
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                    <select id="my-select" name="ruser_address" class="form-control" name="">
                                                        <option>Donor</option>
                                                        <option>Guardian</option>
                                                    </select>
                                                </div>
                                        </div>
                                    </div>
                                    <button name="register" class="btn btn-primary  btn-block">
                                        Register Account
                                    </button>
                                    <hr>
                                    <!-- <a href="index.html" class="btn btn-google  btn-block">
                                        <i class="fab fa-google fa-fw"></i> Register with Google
                                    </a> -->
                                    <!-- <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                    </a> -->
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="login.html">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../assets2/vendor/jquery/jquery.min.js"></script>
        <script src="../assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../assets2/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../assets2/js/sb-admin-2.min.js"></script>

    </body>
</html>