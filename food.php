<?php
session_start();
$database_name = "petify";
$con = mysqli_connect("localhost", "root", "", $database_name);

?>

<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  <link rel="stylesheet" href="css/d_g.css">

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
  <title>Shopping Cart</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--  cart icon link-->
  <!-- <a href="https://icons8.com/icon/119113/buying">Buying icon by Icons8</a> -->



</head>

<body class="dog_food">

  <script src="js/addons/rating.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="scripts.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>




  <nav class="navbar navbar-expand-lg navbar-red-green bg-dark">
    <a class="navbar-brand  bg-white px-4 py-4" style="border-radius: 8px;" href="index.php">PETIFY </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">


        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>




        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="food.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            foods
          </a>
          <ul class="dropdown-menu multi-level bg-dark" role="menu" aria-labelledby="dropdownMenu">


        </li>
    
        </li>
      </ul> 

      <li class="nav-item px-3">
          <a class="nav-link  bg-light text-primary" style="border-radius: 7px;" href="logout.php">LOGOUT</a>
        </li>

    </div>










    </ul>

    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12  py-2  ">

        <img src="images/PUG.jpg" class="img-fluid imkg">

      </div>

      <div class="col-lg-6 col-md-6 col-12 ">
        <h2 class="xop py-1">The benefits of mixing wet and dry foods</h2>
        <h4 class="xop">1.Additional moisture content<br>
          2.Ehchance taste<br>
          3.adequate meat content<br> Take care of your pet? Start with a simple one: Shower them with affection.
          Give your pet endless hugs and kisses. They have unconditional love for you. Go ahead and return the favor!!
        </h4>
        <a href="about1.php">Wanna Know more!</a>
      </div>

    </div>

  </div>


  <div class="container-fluid" >
    <a  style="vertical-align:middle;margin:0px 1100px" href="add_to_cart_details.php " ><img src="https://img.icons8.com/cute-clipart/64/000000/shopping-cart-loaded.png" class="shadow border-rounded" /></a>
    <h2 class="text-center">dog foods</h2>
    <?php
    $query = "SELECT * FROM product_details ORDER BY id ASC ";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {

      while ($row = mysqli_fetch_array($result)) {

    ?>
        
          
            <div class=" col-ld-4 col-md-2  col-xs-4">

              <form method="post" action="food.php?action=add&id=<?php echo $row["id"]; ?>">

                
                <div class="product" style="width: 100%; height:40rem;margin:2rem;margin-top:4px; " >
  <img class="card-img-top" src="images/Product/<?php echo $row["Image"]; ?>" class="img-responsive" style="height:60%;width:80%;" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row["PName"]; ?></h5>
    <p class="card-text"><?php echo $row["Price"]; ?></p>
    <input type="text" name="quantity" class="form-control" value="1">
  
    <input type="submit" name="add"  class="btn btn-success img-fluid" value="Add to Cart"><br>
  
</div>
                </div>
              </form>
              


         
    </div>
      
    <?php
      }
    }
    ?>
  </div>
</body>

</html>