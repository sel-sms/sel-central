<?php
include('conn.php');
session_start();
if (!isset($_SESSION['username'])) {
    
} else {

    $email = $_SESSION['username'];
    $user = $_SESSION['user'];
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Student Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
            <link rel="stylesheet" href="css/bootstrap.css">
                <link rel="stylesheet" href="css/style.css"> 
<script type="text/javascript" src="js/jquery.min.js"></script>
                    <style>

                        .nav { }
                        .nav li {
                            float: left;
                            margin-right: 10px;
                            position: relative;
                        }
                        .nav a {
                            display: block;
                            padding: 5px;
                            text-decoration: none;
                        }
                        .nav a:hover {
                            text-decoration: underline;
                        }

                        /*--- DROPDOWN ---*/
                        .nav ul {
                            list-style: none;
                            position: absolute;
                            left: -9999px; /* Hide off-screen when not needed (this is more accessible than display: none;) */
                        }
                        .nav ul li {
                            padding-top: 1px; /* Introducing a padding between the li and the a give the illusion spaced items */
                            float: none;
                        }
                        .nav ul a {
                            white-space: nowrap; /* Stop text wrapping and creating multi-line dropdown items */
                        }
                        .nav li:hover ul {
                            color: gray;
							padding-left:15px;
                            left: 0; /* Bring back on-screen when needed */
                        }
                        .nav li:hover a {
                            text-decoration: underline;
                        }
                        .nav li:hover ul a { 
                            text-decoration: none;
                        }
                        .nav li:hover ul li a:hover {
                            background-color: #333;
                        }
                    </style>

                    </head>
                    <body>
                        <nav class="navbar navbar-inverse menu-header"   data-offset-top="197">
                            <div class="container-fluid" style="background: #fff;">
                                <div class="container">

                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span> 
                                        </button>
                                        <a class="navbar-brand" href="index.php" ><img src="images/LogoSEL.png" style="width: 258px;margin-top: -6px;" /></a>
                                    </div>
                                    <div class="collapse navbar-collapse" id="myNavbar">
                                        <ul class="nav navbar-nav navbar-right" style="padding: 27px;font-size: 15px;">
                                            <li class=""><a href="index.php">Home</a></li>
                                            <li class=""><a href="aboutus.php">About us</a></li>
                                            <li class=""><a href="help.php">Help</a></li>
                                            <?php if (!isset($_SESSION['username'])) { ?>
                                                <li><a data-toggle="modal" data-target="#myModal">Post your Project now</a></li>
                                                <li><a data-toggle="modal" data-target="#myModal"><i class="fa  fa-sign-in mar-rig-3"></i> Log In</a></li>
                                                <li class="line-bor hidden-xs"></li>
                                                <li><a data-toggle="modal" data-target="#signin"><i class="fa fa-plus"></i> Sign Up</a></li>
                                                <?php
                                            } else {
                                                if ($user == 'employer') {
                                                    ?>
                                                    <li>
                                                        <a href="#">Projects</a>
                                                        <ul>
                                                            <li><a href="myprojects.php">My Projects</a></li>
                                                            <li><a href="project_post.php">Post your Project now</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Profile</a>
                                                        <ul>
                                                            <li><a href="profile.php"> Profile</a></li>
                                                            <li><a href="edit_profile1.php"> Edit Profile</a></li>
                                                        </ul>
                                                    </li>

                                                <?php } else {
                                                    ?>
                                                    <li><a href="#">Profile</a>
                                                        <ul >
                                                            <li><a href="pro.php"> Profile</a></li>
                                                            <li><a href="edit_profile.php"> Edit Profile</a></li>
                                                        </ul>
                                                    </li>
                                                <?php } ?>
                                                <li><a href="logout.php"> Logout</a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <div style="position:relative;">
