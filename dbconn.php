<?php
$server= "localhost";
$user= "root";
$password= "";
$db= "petify";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
    ?>
        <script>console.log('Connection success');</script>
    <?php
}
else{
    ?>
    <script>
        alert("no succestion");
    </script>
    <?php
}

?>



