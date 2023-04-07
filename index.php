<?php

// include "footer.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

    <div id="tobpar"></div>

    <div id="nav">
        <div class="container">
            <div class="logo">
                <img src="logo.jpg" />
                <h1>ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
            </div>

            <div class="para">
                <h3>JAYARAJ ANNAPACKIAM CSI COLLEGE OF <br />ENGINEERING<br />NAZARETH</h3>
            </div>
            <?php
                if(isset($_SESSION["login_user"])) 

                {
                    ?>
            <ul>

                <li><a href="home.php">HOME</a></li>
                <li><a href="books.php">BOOKS</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
                <li><a href="admin.php">ADMIN-LOGIN</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
            </ul>
            <?php
                }
                else
                {
                    ?>
            <ul>

                <li><a href="home.php">HOME</a></li>
                <li><a href="books.php">BOOKS</a></li>
                <li><a href="student-login.php">STUDENT-LOGIN</a></li>
                <li><a href="admin.php">ADMIN-LOGIN</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
            </ul>

            <?php
                }
                
                ?>


        </div>
        <section style="background-image: url(background.jpg)">
            <div>
                <br /><br /><br /><br /><br /><br />
                <div class="bgimg">
                    <h1 style="font-size: 20px;" class="welcome"><b>WELCOME TO OUR CLG LIBRARY</b></h1>
                    <h1 style="font-size: 15px;">OPENS AT:09:00AM</h1>
                    <h1 style="font-size: 15px;">CLOSES AT:05:00PM</h1>
                </div>
            </div>
        </section>
        <div class="sec">
            <div class="bottom1">
                <h1>SAMPLE WEBPAGE CREATION</h1>
                <p class="para1">The online library management system is help us to reduce the manual workk.The purpose
                    of a library management system is to operate a library with efficiency and at reduced costs. The
                    system being entirel automated streamlines all the taskes involved in operations of the library. The
                    activities of book purchasing, cataloging, indexing, circulation recording and stock checking.</p>

            </div>
            <div class="bottom2">
                <h1>SAMPLE WEBPAGE CREATION</h1>
                <p class="para2">The online library management system is help us to reduce the manual workk.The purpose
                    of a library management system is to operate a library with efficiency and at reduced costs. </p>
            </div>
        </div>
        <?php
           include "footer.php";
        ?>

        <footer class="footer1">

            <div id="container1">
                <div class="row">
                    <div class="footer-col">
                        <h4>Product</h4>
                        <ul>
                            <li><a href="#">Icon Design</a></li>
                            <li><a href="#">Logo Design</a></li>
                            <li><a href="#">UI/Ux Design</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">NewRegistration</a></li>
                            <li><a href="#">Newuser</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Community</h4>
                        <ul>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Stack</a></li>
                            <li><a href="#">Dribble</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Help & Support</a></li>
                            <li><a href="#">Contact Us</a></li>



                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Follow us</h4>
                        <ul>
                            <li><a href="#">facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">linkedin</a></li>
                            <li><a href="#">Twitter</a></li>
                        </ul>
                    </div>

                </div>
            </div>
    </div>
    </footer>




    </div>








</body>

</html>