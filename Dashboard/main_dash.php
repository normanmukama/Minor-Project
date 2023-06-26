<?php
session_start();
include 'config.php';

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    
    $stmt_edit = $conn->prepare('SELECT * FROM admin WHERE username = :username');
    $stmt_edit->execute(array(':username' => $username));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
   
    if ($edit_row) {
        extract($edit_row);
        // Rest of your code here
    } else {
        // Handle the case when no rows are returned
        echo "No rows found.";
    }

    // var_dump($user_mail);
} else {
    echo "username not found in session.";
}

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Main-dash</title>
     <!--bootstrap v5.2  -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   

        <link rel="stylesheet" href="../style-css/sidenav.css">
        <!-- Custom fonts for this template -->
        <link href="../assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../assets2/css/sb-admin-2.min.css" rel="stylesheet">
        <!-- Custom styles for this page -->
        <link href="../assets2/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>
    <body>
    <?php
        include '../assets2/includes/header.php';
        include '../assets2/includes/sidenavbar.php';
    ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                          

                    <ul class="nav navbar-nav navbar-right navbar-user">
                        <li class="dropdown messages-dropdown">
                            <a href="#"><i class="fa fa-calendar"></i>  <?php
                                $Today=date('y:m:d');
                                $new=date('l, F d, Y',strtotime($Today));
                                echo $new; ?></a>  
                        </li>

                    </ul>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               
                                <img class="img-profile rounded-circle"
                                    src="../IMAGES/1.jpg">
                                    <span class="ml-2 d-none d-lg-inline text-gray-600"><span class="mr-2 d-none d-lg-inline text-gray-600 small"></i> <?php echo $username; ?></span></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                
                                </a> -->
                                
                                    <!-- <a class="dropdown-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                      <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>        
                                      settings
                                    </a>
                                
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-downld fa-sm text-white-50"></i> We Serve</a>
                    </div>

                    <!-- Content Row -->
                   <!-- Content Row -->
                   <div class="row">
                            <!-- Total number of orphans -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    <h6>ORPHANS</h6></div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">1200</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-child fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Total number of staff members -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    <h6>STAFF DETAILS</h6></div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">115</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-people-carry fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Total number of donors -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h6>DONORS</h6>
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">430</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas  fa-dollar-sign fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Total number of guardians -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    <h6>GUARDIANS</h6></div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">300</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- Content Row -->

                   <!-- Content Row -->
                   <div class="row">
                            <!-- Area Chart -->
                            <div class="col-xl-12 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">For administration only</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header">Dropdown Manage Accounts:</div>
                                                <a class="dropdown-item" href="../Website/reg_retrieve.php">Donor accounts</a>
                                                <a class="dropdown-item" href="../mycrud/staff3.php">Staff accounts</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Admin account</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <!-- try to add some  information about orphans -->
                                    <div class="more-content text-primary text-center" style="height:51vh;">
                                   
                                       
                                    <!-- Time manager -->
                                    <div class="">
                                        <!-- <h2>Time Records</h2> -->
                                        <?php include '../charts/index.php'; ?>
                                    </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Pie Chart -->
                            <!-- <div class="col-xl-4 col-lg-5">
                                <div class="card shadow mb-4">
                                    <div class="card-body" style="height:51vh;">
                                            <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                              Link with href
                                            </a>
                                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                            <div class="offcanvas-header">
                                                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Profile Settings</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body">
                                                <div>
                                                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                                                </div>
                                                  <a class="dropdown-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                                   <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>        
                                                   settings
                                                 </a>
                                            </div>
                                            </div>
                                        <div class="mt-4 text-center small">
                                            
                                            <div class="progress my-4">
                                               <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                            </div>
                                            <div class="progress my-4">
                                               <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                            </div>
                                            <div class="progress my-4">
                                               <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                            </div>
                                            <div class="mt-4">
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-primary"></i>Orphans
                                                                                                    </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-success"></i>Donors
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-info"></i>Guardians
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                </div>
                
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->



        

        <script src="../js/bootstrap.min.js"></script>
        <?php include '../assets2/includes/scripts.php'; ?>
        <?php include '../assets2/includes/footer.php'; ?>
    </body>
</html>