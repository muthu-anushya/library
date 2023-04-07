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
    <title>Student-registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcd.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- <div id="tobpar"></div>


    <nav class="nav navbar-inverse">
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
                <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>

            </ul>
        </div>
    </nav> -->


    <!-- <div id="nav">
    
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
                <li><a href="student-login.html">STUDENT-LOGIN</a></li>
                <li><a href="#">ADMIN-LOGIN</a></li>
                <li><a href="#">FEEDBACK</a></li>
            </ul>
        </div> -->
    <header style=" background-image: url(stubg.jpg);">
        <div class="bg">
            <div>
                <form class="regform" action="" method="post">
                    <div>
                        <h4>LIBRARY MANAGEMENT SYSTEM</h4>
                        <h4>User Registration Form</h4>
                    </div>
                    <div class="input">
                        <label class="textlabel" for="firstname">First Name</label>
                        <input class="form-control" type="text" id="firstname" name="firstname" required="">
                    </div>
                    <div class="input">
                        <label class="textlabel" for="lastname">Last Name</label>
                        <input class="form-control" type="text" id="lastname" name="lastname" required="">
                    </div>
                    <div class="input">
                        <label class="textlabel" for="username">Username</label>
                        <input class="form-control" type="text" id="username" name="username" required="">
                    </div>
                    <div class="input">
                        <label class="textlabel" for="password">Password</label>
                        <input class="form-control" type="password" id="password" name="password" required="">
                    </div>
                    <div class="input">
                        <label class="textlabel" for="email">Email</label>
                        <input class="form-control" type="email" id="email" name="email" required="">
                    </div>
                    <div class="input">
                        <label class="textlabel" for="rollno">Rollno</label>
                        <input class="form-control" type="text" id="rollno" name="rollno" required="">
                    </div>
                    <div class="radio">

                        <input type="radio" id="male" name="gender" value="m">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="f">
                        <label for="Female">Female</label>
                        <input type="radio" id="others" name="gender" value="o">
                        <label for="others">others</label>
                    </div>
                    <div class="btn">
                        <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style=" background-color: #cf0e85;
                            font-size: 20px;
                            color: white;
                            margin: 10px 10px;
                            padding: 10px;
                            border-radius: 8px;
                            border: 2px solid #cf0e0e;">

                    </div>
                </form>
            </div>
        </div>
    </header>


    </form>


    </div>
    </div>
    <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT username from  `registration`";
        $res=mysqli_query($conn,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($conn,"INSERT INTO `REGISTRATION` VALUES('$_POST[firstname]', '$_POST[lastname]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[rollno]', '$_POST[gender]');");
        ?>
    <script type="text/javascript">
    alert("Registration successful");
    </script>
    <?php
        }
        else
        {

          ?>
    <script type="text/javascript">
    alert("The username already exist.");
    </script>
    <?php

        }

      }

    ?>




</body>


</html>