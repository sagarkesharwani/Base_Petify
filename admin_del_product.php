<?php

$database_name = "petify";
$con = mysqli_connect("localhost", "root", "", $database_name);
if(isset($_POST['dog_food_add_item'])){

    $select = mysqli_real_escape_string($con,$_POST['dog_food_name']);
    
    $sl="select PName from product_details where PName = '$select'";


    $exec=mysqli_query($con,$sl);
    $execount=mysqli_num_rows($exec);

    if($execount>0){

        $sql="CALL deletion('".$_POST["dog_food_name"]."')";

if(mysqli_query($con,$sql))
{
  ?>
  <script>
    alert('Deleted using Procedure');
    </script>
  <?php
}
else{
    ?>
    <script>alert("Product Not Found")</script>
    <?php
}
  }
    }

?>

