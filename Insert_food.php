<?php
$database_name = "petify";
$con = mysqli_connect("localhost", "root", "", $database_name);
if(isset($_POST['dog_food_add_item'])){
    $img = $_FILES["dog_food_img"]["name"];
    $name = $_POST['dog_food_name'];
    $price = $_POST['dog_food_price'];
    

    $sl="select PName from product_details where PName = '$name'";


    $exec=mysqli_query($con,$sl);
    $execount=mysqli_num_rows($exec);

    if($execount>=1){
?>
<script>alert('Item already Exists!');</script>
<?php
    }
else{
    $Insert_query = "INSERT INTO product_details(PName,Image,Price) VALUES ('$name','$img','$price')";
    $insert_dog_query = mysqli_query($con,$Insert_query);
    if($insert_dog_query){
        move_uploaded_file($_FILES['dog_food_img']['tmp_name'], "images/Product/$img");
        ?>
            <script>
                alert('INSERTED');
            </script>
        <?php
    }else{
        ?>
            <script>alert('error');</script>
        <?php
    }
}
}else{
    ?>
        <script>console.log('error in queryy');</script>
    <?php
}

?>

