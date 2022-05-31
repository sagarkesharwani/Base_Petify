<?php

session_start();
if(!isset($_SESSION["username"])){
    header("Location:loginF.php");
}
include 'dbconn.php';
$loginname=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM admin_details WHERE username = '$loginname';";  
$querys = mysqli_query($con,$sql);
$result = mysqli_num_rows($querys);
if($result>0){
    $row = mysqli_fetch_assoc($querys);
    if($password == $row['password']){
        $_SESSION["username"] = $row['username'];
        header('Location: index.php'); 
    }
    else{
       header('Location:Loginf.php');
       echo "wrong password";
       ?>
       <script>
       alert('wrong password'); 
      </script>
      <?php
    }
}
else{
    header('location: Loginf.php');  
}

?>