<?php
    session_start();
    if(!isset($_SESSION["username"])){
      header("Location:loginF.php");
  }
$database_name = "pETIFY";
$con = mysqli_connect("localhost", "root", "", $database_name);

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

  <style>
        table {
            margin: 0 auto;
            font-size: small;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: small;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>


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

<div class="container">


<?php

 $query = "SELECT * FROM admin_logs ORDER BY id ASC ";
 $result = mysqli_query($con, $query);

 

?>
 <table class="table">
  <thead>
    <tr>
      <th scope="id">id</th>
      <th scope="Product Name">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Date</th>
      <th scope="col">Opeartions</th>
    </tr>
  </thead>
  <tbody>
    <?php
  while($rows=$result->fetch_assoc())
                {
?>
  <tr>
      <th scope="row"><?php echo $rows["id"]; ?></th>
      <td><?php echo $rows["Prod_name"]; ?></td>
      <td><?php echo $rows["Price"]; ?></td>
      <td><?php echo $rows["Date"]; ?></td>
      <td><?php echo $rows["Operations"]; ?></td>
      
    </tr>
  

<?php
 }

?>

      </tbody>
</table>

</div>


</body>