<?php
include 'dbconn.php';
    if(isset($_POST['signup'])){
        $username=mysqli_real_escape_string($con, $_POST['username']);
        $email=mysqli_real_escape_string($con, $_POST['emailid']);
        $mobileno=mysqli_real_escape_string($con, $_POST['mobile']);
        $password=mysqli_real_escape_string($con, $_POST['password']);
        $password2=mysqli_real_escape_string($con, $_POST['password2']);
        $gmailquery="select * from registerdetails where emailid= '$email'";
        $query=mysqli_query($con,$gmailquery);
        $emailcount=mysqli_num_rows($query);
    if($emailcount>= 1)
    {   ?>
        <script>
            alert("EMAIL EXITED");
        </script>
        <?php
    }
    else{
         if($password == $password2){
                $insertquery= "insert into admin_details(username,emailid,mobileno,password,password2) values('$username','$email','$mobileno','$password','$password2')";
                $iquery=mysqli_query($con,$insertquery);
                if($iquery){
                    ?>
                    <?php
                    header("Location: adminlogin.php?login=success");
                    exit();
                    ?>
                        <script>
                            alert("Admin Register");
                        </script>
                        <?php
                }
                else{
                        ?>
                        <script>
                            alert("error");
                        </script>
                        <?php
                }       
        }
        else{
            ?>
            <script>
                alert("password doesn't match each other");
            </script>
            <?php    
       }
    } 

    }

 ?>