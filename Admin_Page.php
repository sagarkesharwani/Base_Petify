<?php
    Session_start();
    if(!isset($_SESSION["username"])){
      header("Location:loginF.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/dog_food.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

  <!-- Bootstrap core CSS -->

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

  <!-- Material Design Bootstrap -->

  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">


  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">


</head>

<body class="doggy">
  <nav class="navbar navbar-expand-lg navbar-red-green bg-dark">
    <a class="navbar-brand" href="Admin_page.php">PETIFY </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

      <li class="nav-item active">
          <a class="nav-link" href="Triggers.php">SYSTEM LOGS <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="Admin_page.php">ADMIN <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-light text-primary" style="border-radius: 7px;" href="logout.php">LOGOUT</a>
        </li>


      </ul>

    </div>
  </nav>




  <h1 class="text-center"> Admin Panel</h1><br><br>
  <section class="my-2">
    <div class="py-4">

    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <img src="images/dabb.jpg" class="img-fluid">
        </div><br>

        <div class="col-lg-4 col-md-6 col-12">
          <h1> Petify Admin here.!</h1>
          <h3> Here U can Add or Del food products of pets!</h3>
          <p>Love for One, Love for All
            Looking for some ways to really take care of your pet? Start with a simple one: Shower them with affection.
            Give your pet endless hugs and kisses. They have unconditional love for you. Go ahead and return the favor!!
          </p>

        </div>
        <div class="col-lg-4 col-md-6 col-12"><img src="images/group.jpg  " class="img-fluid"></div>
      </div>
    </div>
  </section><br>
  <div class="container-fluid" enctype="multipart/form-data">
    <form action="" class="text-center">
      <div class="row">

        <div class="col-md-4 my-4">
          <div class="card">
            <div class="card-footer">
              <p class="lead bg-light">Add New Product</p>
            </div>

            <div class="card-body">
              <div class="dropdown ">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">choose where you
                  want to add product
                  <span class="caret"></span></button>
                <ul class="dropdown-menu bg-dark">
                  <li class="bg-light"><a href="Admin_Food.php">ADD Product</a></li>

                </ul>
              </div>
            </div>



          </div>
        </div>

        <div class="col-md-4 my-4">
          <div class="card">
            <div class="card-footer">
              <p class="lead bg-light">Update Product</p>
            </div>

            <div class="card-body">
              <div class="dropdown ">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">choose where u want
                  to update product
                  <span class="caret"></span></button>
                <ul class="dropdown-menu bg-dark ">
                  <li class="bg-light"><a href="admin_update_f.php">Update Product</a></li>

                </ul>
              </div>
            </div>



          </div>
        </div>
        <div class="col-md-4 my-4">
          <div class="card">
            <div class="card-footer">
              <p class="lead bg-light">Delete Product</p>
            </div>

            <div class="card-body">
              <div class="dropdown ">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">choose where u want
                  to delete product
                  <span class="caret"></span></button>
                <ul class="dropdown-menu bg-dark ">
                  <li class="bg-light"><a href="admin_delete_F.php">Delete Product</a></li>

                </ul>
              </div>
            </div>



          </div>
        </div>
        <!-- <div class="col-md-4"></div> -->
      </div>
    </form>
  </div>

  <script src="js/addons/rating.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="scripts.js"></script>

</body>

</html>