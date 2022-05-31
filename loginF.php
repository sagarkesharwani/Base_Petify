<?php
    Session_start();
    
?>
<!DOCTYPE html>
<html>

<head>
    <titile> </titile>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="images/style_LOGIN.css">
</head>


<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <nav class="navbar navbar-expand-lg navbar-red-green bg-dark">
        <a class="navbar-brand" href="signup.php">PETIFY </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="AdminLogin.php">Admin</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="signupf.php">SIGN UP</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Loginf.php">LOGIN</a>
                </li>


            </ul>

        </div>
    </nav>


    <div id="login-box">
        <div class="login-left">

            <h1>Login</h1>

            <form action="login_checkb.php" class="LG" method="POST">
                <span><input class="form-control" type="text" name="username" placeholder="Enter Username"
                        required></span>


                <input class="form-control" type="password" name="password" placeholder="Enter Password" required>
                <div class="container">
                    <input class="btn btn-success" type="submit" name="login" value="LOGIN">
                    <a href="signupf.php"><input class="btn btn-success signup" name="signup" value="SIGNUP"></a>
                </div>
            </form>


        </div>
        <div class="login-right">

            <span class="signin"> Social Network </span>

            <button class="social facebook" href="https://www.facebook.com/">Log in with Facebook</button>
            <button class="social Google" href="">Log in with Google</button>

        </div>
    </div>
    <footer>
        <p class="p-2 bg-dark text-white text-center ">@PETIFY@</p>
    </footer>