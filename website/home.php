<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orphanage/Home</title>
    <link rel="stylesheet" href="swiper.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Link Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <head>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>


    <!-- link the datatables here -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
</head>
<body style="background-color:rgb(11, 68, 11);">
<div class="contain">
         <nav class="navbar navbar-expand-sm navbar-light bg-primary ">
             <!-- <a class="navbar-brand" href="#">Navbar</a> -->
             <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                 aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="collapsibleNavId">
                 <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                     <li class="nav-item active ml-5">
                         <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="Web_home.php">BLOG</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="web_home.php">Contact Us</a>
                     </li>
                     <div class="vertical-line" style=" border-left: 1px solid black;height: 30px;"></div>
                     <li class="nav-item">
                         <a class="nav-link" href="#">LOGIN</a>
                     </li>
                 </ul>
                 <form class="form-inline my-2 my-lg-0">
                     <input class="form-control mr-sm-2" type="text" placeholder="Search">
                     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                 </form>
             </div>
         </nav>
     </div>
      <div class="">
            <div class="swiper-container" style="padding-top:2rem; padding-bottom:2rem;">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="" style="padding-top:6rem;">
                      <h1 class="text-success">WELCOME TO GOOD HOPE ORPHANAGE SYSTEM</h1>
                      <h6>We live and serve for the betterment of the future</h6>
                    </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-top:-15rem;">
                        ADMIN LOGIN
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" style="margin-top:-15rem;">
                        STAFF LOGIN
                    </button>
                </div>
                <!-- <div class="swiper-slide">ADVERT SLIDES</div>
                <div class="swiper-slide">ADVERT SLIDES</div> -->
                </div>
            </div>
      </div>

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
                <button class="btn btn-md btn-success btn-block" name="admin_login">Sign In</button>
                
				    <button type="button" class="btn mt-4 btn-primary" data-dismiss="modal">Close</button>
				  </form>
           
    </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Staff Login</h5>
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
                <button class="btn btn-md btn-success btn-block" name="user_login">Sign In</button>
				    <!-- <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button> -->
				  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Understood</button> -->
      </div>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

     <script src="swiper.js"></script>

     <!-- <script src="assets/js/bootstrap.min.js"></script> -->
</body>
</html>