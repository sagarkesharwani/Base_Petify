<?php
include 'dbconn.php';
if (isset($_POST['dog_food_update_item'])) {

  $id = mysqli_real_escape_string($con,$_POST['id']);
  $img = mysqli_real_escape_string($con,$_FILES["dog_food_img"]["name"]);
  move_uploaded_file($_FILES['dog_food_img']['tmp_name'], "images/Product/$img");
  if(empty($_POST['dog_food_img'])){
    $sl=mysqli_query($con,"select Image from product_details where id = '$id'");
    $row=mysqli_fetch_assoc($sl);
    $img = $row['Image'];
  }
  
  $pname = mysqli_real_escape_string($con,$_POST['dog_food_name']);
  $price = mysqli_real_escape_string($con,$_POST['dog_food_price']);

  $Insert_query = "UPDATE product_details SET PName = '$pname',Image = '$img',Price = '$price' WHERE id = $id";
    $insert_dog_query = mysqli_query($con,$Insert_query);
var_dump($Insert_query);
    if($insert_dog_query){
        ?>
            <script>
                window.alert('Product Details Updated');
    window.location.href='Admin_Page.php';
            </script>

        <?php

    }else{
        ?>
            <script> //alert('error');</script>
        <?php
    }
}

?>