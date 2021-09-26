<?php

session_start();
// error_reporting(0);
include "dbcon.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/style1.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
        integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
            <?php
				$Email = $_SESSION['Email'];
				
				$Username_search = "SELECT * FROM `portfolio` WHERE  `Email` = '$Email' ";
				$query = mysqli_query($con,$Username_search) or die(mysqli_error($con));
				$row = mysqli_fetch_assoc($query);
 				
 			?>
    <div id="Home">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="#Home">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#qualification">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Skills">Knowledge</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contact Me</a>
                    </li>
                </ul>

            </div>
        </nav>

        <div class="background">
            <img src="./IMAGES/portfolio1.png" class="img-fluid center " width="100%" height="1000px">
        </div>
        <div class="heading-content text-center">
            <h5>Name of Students</h5>
            <p><?php  echo $row['Name']   ?></p>
        </div>
    </div>

    <div id="about" class="container mt-3 mb-5">
        <div class="post-heading text-center">
            <h3 class="display-4 font-weight-bold">About</h3>
            <hr class="w-50 mx-auto pb-5">
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="IMAGES/Portfolio.jpg" class="img-fluid" height="200px" width="400px">
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <h2>Wanna Know about the topics to be covered</h2>
                <hr>
                <p><?php  echo $row['About']   ?></p>
                <button class="btn w-50">
                    <a href="#footer">Know More</a>
                </button>
            </div>
        </div>
    </div>

    <!-- Educational Qualification -->
    <div id="qualification" class="container mt-3 mb-5">
        <div class="post-heading text-center">
            <h3 class="display-4 font-weight-bold">Education</h3>
            <hr class="w-50 mx-auto pb-5">
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <h2>Class  Subject  No.of Students</h2>
                <hr>
                <p><?php  echo $row['Secondary']   ?></p>
                <h2>Class Overall Percentage</h2>
                <hr>
                <p><?php  echo $row['H_Secondary']   ?></p>
                <h2>Qualification of Teacher</h2>
                <hr>
                <p><?php  echo $row['O_qualification']   ?></p>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <img src="./IMAGES/study.jpg" class="img-fluid" >
            </div>

        </div>
    </div>
    <!-- skills -->
    <div id="Skills" class="container mt-3 mb-5">
        <div class="post-heading text-center">
            <h3 class="display-4 font-weight-bold">Knowledge that student will get</h3>
            <hr class="w-50 mx-auto pb-5">
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="./IMAGES/Skills.jpg" class="img-fluid" >
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2>Skills the students will learn</h2>
                <hr>
                <p><?php  echo $row['Skills']   ?></p>
                <h2>Homework Place</h2>
                <hr>
                <p><?php  echo $row['Hobbies']   ?></p>
                <h2>Class The Teacher is assigned</h2>
                <hr>
                <p><?php  echo $row['Domain']   ?></p>
            </div>

        </div>
    </div>
    <!-- footer -->
    <div class="container">
        <footer class="page-footer font-small cyan darken-3" id="footer">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 py-5">
                        <div class="mb-5 flex-center">
                            <a href="https://www.facebook.com/" class="fb-ic">
                                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <a href="https://www.linkedin.com/" class="li-ic">
                                <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <a href="https://www.instagram.com/" class="ins-ic">
                                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <a href="https://github.com/" class="git-ic">
                                <i class="fab fa-github-square fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

            <div class="footer-copyright text-center py-3">© Copyright:
                <a href="https://mdbootstrap.com/"> Aatish Kumar Moharana</a>
            </div>

        </footer>
    </div>






    <div class="icon-bar">
        <a href="https://www.facebook.com/" class="facebook" target="_aatish">
            Click here to visit <i class="fab fa-facebook-square"></i>
        </a>
        <a href="https://github.com/" class="github" target="_aatish">
            Click here to visit <i class="fab fa-github-square"></i>
        </a>
        <a href="https://www.instagram.com/" class="instagram" target="_aatish">
            Click here to visit <i class="fab fa-instagram-square"></i>
        </a>
        <a href="https://www.linkedin.com/" class="linkedin" target="_aatish">
            Click here to visit <i class="fab fa-linkedin"></i>
        </a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>