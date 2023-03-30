<! DOCTYPE html>  
<html lang="en">  
<head>  
  <title> Orphanage</title>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min-reboot.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">  
</head>  
<style>  
html {  
    position: relative;  
    min-height: 100%;  
}  
body {  
    padding-top: 4.5rem;  
    margin-bottom: 4.5rem;  
}  
.footer {  
  position: absolute;  
  bottom: 0;  
  width: 100%;  
  height: 3.5rem;  
  line-height: 3.5rem;  
  background-color: #ccc;  
}  
/* .bg-dark {  
    background-color: #6a9aca!important;  
}   */
.nav-link:hover {  
  transition: all 0.4s;  
}  
.nav-link-collapse:after {  
  float: right;  
  content: '\f067';  
  font-family: 'FontAwesome';  
}  
.nav-link-show:after {  
  float: right;  
  content: '\f068';  
  font-family: 'FontAwesome';  
}  
.nav-item ul.nav-second-level {  
  padding-left: 0;  
}  
.nav-item ul.nav-second-level > .nav-item {  
  padding-left: 20px;  
}  
@media (min-width: 992px) {  
  .sidenav {  
    position: absolute;  
    top: 0;  
    left: 0;  
    width: 230px;  
    height: calc(100vh - 3.5rem);  
    /* margin-top: 4.3rem;   */
    /* background: blue;   */
    box-sizing: border-box;  
    border-top: 1px solid rgba(0, 0, 0, 0.3);  
  }  
  .navbar-expand-lg .sidenav {  
    flex-direction: column;  
  }  
  .content-wrapper {  
    margin-left: 230px;  
  }  
  .footer {  
    /* width: calc(100% - 230px);   */
    /* margin-left: 230px;   */
  }  
}  
</style>  
<body>  
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">  
  <a class="navbar-brand" href="#" style="margin-left:14rem;"><h3> Orphanage</h3> </a>  
  <button  
    class="navbar-toggler"  
    type="button"  
    data-toggle="collapse"  
    data-target="#navbarCollapse"  
    aria-controls="navbarCollapse"  
    aria-expanded="false"  
    aria-label="Toggle navigation">  
    <span class="navbar-toggler-icon"> </span>  
  </button>  
  <div class="collapse navbar-collapse" id="navbarCollapse">  
    <ul class="navbar-nav mr-auto h-100% sidenav bg-primary" id="navAccordion">  
      <a class="navbar-brand text-light" href="#">Orphanage </a>  
      <li class="nav-item active">  
        <a class="nav-link text-light" href="#"> Home  </a>  
      </li>  
      <li class="nav-item">  
        <a class="nav-link text-light" href="#"> About </a>  
      </li>  
      <li class="nav-item">  
        <a  
          class="nav-link nav-link-collapse text-light"  
          href="#"  
          id="hasSubItems"  
          data-toggle="collapse"  
          data-target="#collapseSubItems2"  
          aria-controls="collapseSubItems2"  
          aria-expanded="false"> Services </a>  
        <ul class="nav-second-level collapse" id="collapseSubItems2" data-parent="#navAccordion">  
          <li class="nav-item">  
            <a class="nav-link" href="#">  
              <span class="nav-link-text">Item 2.1</span>  
            </a>  
          </li>  
          <li class="nav-item">  
            <a class="nav-link" href="#">  
              <span class="nav-link-text">Item 2.2</span>  
            </a>  
          </li>  
        </ul>  
      </li>  
      <li class="nav-item">  
        <a class="nav-link text-light" href="#"> Gallery </a>  
      </li>  
      <li class="nav-item">  
        <a  
          class="nav-link nav-link-collapse text-light"  
          href="#"  
          id="hasSubItems"  
          data-toggle="collapse"  
          data-target="#collapseSubItems4"  
          aria-controls="collapseSubItems4"  
          aria-expanded="false"> Contact us </a>  
        <ul class="nav-second-level collapse" id="collapseSubItems4" data-parent="#navAccordion">  
          <li class="nav-item">  
            <a class="nav-link" href="#">  
              <span class="nav-link-text">Item 4.1</span>  
            </a>  
          </li>  
          <li class="nav-item">  
            <a class="nav-link" href="#">  
              <span class="nav-link-text">Item 4.2</span>  
            </a>  
          </li>  
          <li class="nav-item">  
            <a class="nav-link" href="#">  
              <span class="nav-link-text">Item 4.2</span>  
            </a>  
          </li>  
        </ul>  
      </li>  
       
    </ul>  
    <form class="form-inline ml-auto mt-2 mt-md-0">  
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">  
      <button class="btn  my-2 my-sm-0" type="submit">Search</button>  
    </form>  
  </div>  
</nav>  
<main class="content-wrapper">  
  <div class="container-fluid">  
    <h1> Orphanage Management System </h1>  
  </div> 
  
</main>  
<footer class="footer">  
  <div class="c">  
      <div class="text-center">  
          <h1> Footer </h1>  
      </div>  
  </div>  
</footer>  
<script>  
$(document).ready(function() {  
  $('.nav-link-collapse').on('click', function() {  
    $('.nav-link-collapse').not(this).removeClass('nav-link-show');  
    $(this).toggleClass('nav-link-show');  
  });  
});  
</script>  
<script src="../js/bootstrap.min.js"></script>
</body>  
</html> 