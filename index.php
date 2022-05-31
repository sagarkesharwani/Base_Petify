<?php
session_start();
  if(!isset($_SESSION["username"])){
      header("Location:loginF.php");
  }
?>

<!DOCTYPE html>
<html>



<head>
  <titile> </titile>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" >
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" >




</head>

<body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-red-green bg-dark">
    <a class="navbar-brand bg-white px-4 py-2"  style="border-radius: 7px;" href="index.php">PETIFY </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">


        <li class="nav-item active">
          <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
        </li>
        <div class="dropdown ">
        <a class="nav-link dropdown-toggle" href="PAGES.HTML" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            PAGES
          </a>
            <ul class="dropdown-menu multi-level bg-dark" role="menu" aria-labelledby="dropdownMenu">
               
                <li class="dropdown-submenu bg-dark">
                <a class="dropdown-item bg-light" href="food.php"> Foods </a>
                  </li>     

                </li>
              

             


               
               </li>
              </ul>
        </div>





        <li class="nav-item px-3">
          <a class="nav-link  bg-light text-primary" style="border-radius: 7px;" href="logout.php">LOGOUT</a>
        </li>



      </ul>
      
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="IMAGES/D5.jpg" alt="pets" >
    <div class="carousel-caption">
      <h1>You can't buy happiness, but you can rescue it.</h1>
      
    </div>

  </div>
  <div class="carousel-item">
    <img src="images/lucy.jpg" alt="catty">
  </div>

  <div class="carousel-item">
    <img src="IMAGES/p2.jfif" alt="doggo" >
    <div class="carousel-caption">
      <h1>I will always woof you!</h1>
    </div>

  </div>
  <div class="carousel-item">
    <img src="images/d3.jpg" alt="catty" >
  </div>
  <div class="carousel-item">
    <img src="images/sb2.jpg" alt="catty">
  </div>
  

 

  <div class="carousel-item">
    <img src="images/D6.jpg" alt="catty" >
  </div>
  <div class="carousel-item">
    <img src="images/pug.jpg" alt="catty">
  </div>

</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>
  <section class="my-2">
    <div class="py-3">
      <h2 class="text-center" style="background-color:black;height:35%" >About us</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/dabb.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h1>Welcome To Petify!!</h1>
          <p>Love for One, Love for All
            Looking for some ways to really take care of your pet? Start with a simple one: Shower them with affection.
            Give your pet endless hugs and kisses. They have unconditional love for you. Go ahead and return the favor!!
          </p>
          <a href="about1.php">Wanna Know more!</a>
        </div>
      </div>
    </div>
  </section>
  <section class="my-2">
    <div class="py-3">
      <h2 class="text-center">Services</h2>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 md-4 col-12">

            <div class="card" style="width:400px">
              <img class="card-img-top" src="IMAGES/PUG.jpg" alt="DOOGGII">
              <div class="card-body">
                <h4 class="card-title">I M PUG</h4>
                <p class="card-text">HEYYY!.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
              </div>
            </div>

          </div>
          <div class="col-lg-4 md-4 col-12">
            <div class="card" style="width:400px">
              <img class="card-img-top" src="IMAGES/gogo.jpg" alt="DOOGGII">
              <div class="card-body">
                <h4 class="card-title">I M GoGo</h4>
                <p class="card-text">HEYYY!.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
              </div>
            </div>

          </div>
          <div class="col-lg-4 md-4 col-12">
            <div class="card" style="width:400px">
              <img class="card-img-top" src="IMAGES/SB.jpg" alt="DOOGGII" height="265">
              <div class="card-body">
                <h4 class="card-title">Lucy Here.</h4>
                <p class="card-text">Hiii...</p>
                <a href="https://kittysites.com/" class="btn btn-primary">See Profile</a>
              </div>
            </div>

          </div>


        </div>
      </div>
    </div>
  </section>




  <footer>
    <p class="p-2 bg-dark text-white text-center ">@PETIFY@</p>
  </footer>

</body>

</html>