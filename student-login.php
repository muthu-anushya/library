<?php
include "connection1.php";
include "navigation.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student-login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcd.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- <div id="tobpar"></div>


    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">

                <a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM<a>
            </div>

            <ul class="nav navbar-nav">

                <li><a style="margin-top: -30px;" href="home.php">HOME</a></li>
                <li><a href="">BOOKS</a></li>
                <li><a href="#">FEEDBACK</a></li>


            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="student-login.php">
                        <span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
                <li><a href="student-login.php"><span class="glyphicon glyphicon-log-out"> LOGUT</span></a></li>
                <li><a href="registration.php"><span class="glyphicon glyphicon-user">SIGN UP</span></a></li>

            </ul>
        </div>
    </nav> -->

    <!-- <div id="tobpar"></div>
    
    <div id="nav">
    
        <div class="container">
            <div class="logo">
                <img src="/images/logo.jpg" />
                <h1>ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
            </div>
            <div class="para">
                <h3>JAYARAJ ANNAPACKIAM   CSI   COLLEGE   OF <br/>ENGINEERING<br/>NAZARETH</h3>
            </div>
            <ul>
           
                <li><a href="home.html">HOME</a></li>
                <li><a href="">BOOKS</a></li>
                <li><a href="registration.html">STUDENT-LOGIN</a></li>
                <li><a href="#">ADMIN-LOGIN</a></li>
                <li><a href="#">FEEDBACK</a></li>
            </ul>
        </div> -->
    <header style="background-image: url(stubg1.jpg);">
        <div class="bglogin">
            <div>
                <form class="regform1" action="" method="post">
                    <div>
                        <h4>LIBRARY MANAGEMENT SYSTEM</h4>
                        <h4>User Login Form</h4>
                    </div>

                    <div class="input">
                        <label class="textlabel" for="username">Username</label>
                        <input type="text" id="username" name="username" required="">
                    </div>
                    <div class="input">
                        <label class="textlabel" for="email">Email</label>
                        <input type="email" id="email" name="email" required="">
                    </div>
                    <div class="input">
                        <label class="textlabel" for="password">Password</label>
                        <input type="password" id="password" name="password" required="">
                    </div>

                    <div class="btn1">
                        <input class="btn btn-default" type="submit" name="submit" value="Login" style="background-color: #cf0e85;
                            font-size: 20px;
                            color: white;
                            margin: 10px 10px;
                            padding: 10px;
                            border-radius: 8px;
                            border: 2px solid #cf0e0e;">
                    </div>
                </form>
                <p>
                    <a style="color: white; text-decoration: none;" href="">Forgot Password?!</a>
                    <br /><br /><br />
                    New to this Website?-><a style="color: white;text-decoration: none;" href="registration.html">&nbsp
                        signup</a>
                </p>
            </div>
        </div>
    </header>
    <?php

        if(isset($_POST['submit']))
        {
            $count=0;
        
            $res=mysqli_query($conn,"select*from `login` where username='$_POST[username]'&& password='$_POST[password]';");

            $count=mysqli_num_rows($res);
        if($count==0)
        {
            ?>
    <div class="alert alert-warning"
        style="width:700px; margin-left:300px;background-color:#cf0e85; color:white;margin-top:-100px; text-align:center">
        <strong>The username and password doesn't match</strong>
    </div>
    <?php
        }
        else
        {
            $_SESSION['login_user']=$_POST['username'];
            
            ?>
    <script type="text/javascript">
    window.location = "home.php"
    </script>
    <?php
        }
    }
    
    ?>
</body>

</html>