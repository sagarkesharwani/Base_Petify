<?php

session_start();

include 'dbconn.php';
$loginname=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM  admin_details WHERE username = '$loginname';";  
$querys = mysqli_query($con,$sql);
$result = mysqli_num_rows($querys);
if($result>0){
    $row = mysqli_fetch_assoc($querys);
    if($password == $row['password']){
        $_SESSION["username"] = $row['username'];
        header('Location: admin_page.php'); 
    }
    else{
       ?>
       <script>
       window.alert('wrong password'); 
      </script>
      <?php
      header('Location:adminLoginf.php');
    }
}
else{
    ?>
    <script>
        alert('error')
        </script>
    <?php
    header('location: adminloginf.php');  
}

?>