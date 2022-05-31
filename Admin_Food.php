<?php
session_start();
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dog_food.css">
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

<body  class="dog_food">

  <?php
  include "dbconn.php";
  include "insert_food.php";
  ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <nav class="navbar navbar-expand-lg navbar-red-green bg-dark">
    <a class="navbar-brand" href="admin_page.php">PETIFY </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item active">
          <a class="nav-link" href="admin_page.php">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-light text-primary" style="border-radius: 7px;" href="logout.php">LOGOUT</a>
        </li>
      </ul>

    </div>
  </nav>
  <div class="container-fluid">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" class="text-center">
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4 my-5">
          <div class="card">
            <div class="card-footer">
              <p class="lead">ADD NEW FOOD</p>
            </div>
            <div class="card-body">
              <div class="form-group">
                <input type="file" accept="image/*" name="dog_food_img" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="dog_food_name" placeholder="Name of the product" required>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="dog_food_price" placeholder="Price" required>
              </div>
              <div class="form-group">
                <button class="btn btn-primary" type="submit" name="dog_food_add_item">ADD ITEM</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </form>
  </div>

</body>

</html>