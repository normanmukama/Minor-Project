<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oms</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min-reboot.css">
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- <link rel="stylesheet" href="../style-css/index.css"> -->
</head>
<body>
    <!-- -------------------------header start------------------------------------------- -->
    <div class="">
        <nav class="navbar navbar-expand-sm navbar-light pb-3" style="background-color:orange;">
            <!-- <a class="navbar-brand text-light" href="#">CHARITY</a> -->
            <button class="navbar-toggler d-lg-none bg-danger" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="#home">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  text-light" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CAUSES</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FEATURES</a>
                    </li>
                    <li class="nav-item dropdown mydrop">
                        <a class="nav-link text-light" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GALLERY</a>
                        <div class="dropdown-menu bg-primary" aria-labelledby="dropdownId">
                    </li>
                
                    <li class="nav-item dropdown mydrop">
                        <a class="nav-link text-light" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../mail/contact.php">CONTACT US</a>
                    </li>  
                </ul>
                <form class="form-inline my-2 my-lg-0 mr-auto">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            
            </div>
        </nav>
    </div>  
    <!-- -------------------------------------header ends----------------------------------- -->
    <!-- login modal starts -->
     
    <!-- login modal ends -->

    <div class="container">
        <div class="row">
            <div id="my-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#my-carousel" data-slide-to="0" aria-current="location"></li>
                    <li data-target="#my-carousel" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../images/slide1.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Title</h5>
                            <p>Text</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="" alt="./images/slide2.jpg">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Title</h5>
                            <p>Text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="mx-auto my-4">
                <div class="card-body">
                    <h3 class="card-title" data-scroll-reveal="enter from the bottom after 0.4s">Help maltifarious people with your little donation.
                     <a href="#">Go Through Our Causes</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p>Get Girl Educated To Help Them Earn Reputed Position</p>
                <img src="../images/sp4.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-4">
                <p>Help European Children Get Their Own Homes And Care</p>
                <img src="../images/img3.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-4">
                <p>Help Us Send Vegetables And Matooke To Europe</p>
                <img src="../images/img3.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <div class="contain py-3 px-3" style="background-color:orange;">
        <div class="row m-auto">
            <div class="col-md-4">
                <h3>We are the world</h3>
                <p>Here comes the time when we hear the same call,
                    when the world must come together as one to save one another 
                    in the hard  times.
                </p>
            </div>
            <div class="col-md-3 m-auto" style="text-style:none;">
                <ul>
                    <li>Donate</li>
                    <li>Contact us</li>
                    <li>News and letters</li>
                    <li>Targeted Countries</li>
                </ul>
            </div>
            <div class="col-md-3 m-auto" style="text-style:none;">
                <ul>
                    <li>Donate</li>
                    <li>Our gallery</li>
                    <li>Affected Countries</li>
                    <li>Head Offices</li>
                </ul>
            </div>
        </div>
        <div class="footer text-center">
            <a href=""  class="text-light text-center">All copy rights reserved by Ntm health organisation. @2023</a>
        </div>
    </div>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>