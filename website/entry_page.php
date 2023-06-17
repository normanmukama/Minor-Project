<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
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
                            <h5>
                              <!-- <a href="../mycrud/code.php">log in</a> -->
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                 STAFF LOGIN
                              </button>
                            </h5>
                            <p>
                               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                   ADMIN LOGIN
                               </button>
                            </p>
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



  
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" method="post" action="user_login.php">
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
				    <!-- <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button> -->
				  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Understood</button> -->
      </div>
    </div>
  </div>
</div>


<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" method="post" action="user_login.php">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="Username" name="username" type="username" required>
							</div>
							
							<div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" required>
							</div>
					  </fieldset>

            </div>
              <div class="modal-footer d-flex">
                <button class="btn btn-md btn-warning btn-block" name="admin_login">Sign In</button>
				    <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
				  </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>



<!-- <script>
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script> -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>