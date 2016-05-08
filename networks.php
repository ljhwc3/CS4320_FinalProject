<?php

//require Login.php
require "../finalProject/classes/Login.php";

//create login object
$login = new Login();

//check if user not logged in, redirect them to login page
if ($login->isUserLoggedIn() === FALSE) {
    die(header("Location: index.php"));
}

?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <style>
        
        img {
            float: left;   
        }
        
        #box {  
        }
        
        .personName {
            font-size: 20pt;
            font-weight: 550;
        }
  
    </style>
    <title>Networks</title>
</head>

<body>

            <nav class="navbar navbar-inverse" style="background-color = crimson;">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="timeline.php">LinkedIn 2.0</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="/finalProject/index.php">Home</a></li>
          <li><a href="/finalProject/profile.php">Profile</a></li>
          <li class="active"><a href="networks.php">Network</a></li>
          <li><a href="education.php">Education</a></li>
          <li><a href="jobs.php">Jobs</a></li>
          <li><a href="interests.php">Interests</a></li>
        </ul>
        <ul class ="nav navbar-nav navbar-right"><li><a href="/finalProject/index.php?logout">Logout</a></li></ul>
        </div>
    </nav>






    
 <!--   <nav class="navbar navbar-inverse" style="background-color = crimson;">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="timeline.html">LinkedIn 2.0</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="timeline.html">Home</a></li>
            <li><a href="profilePage.html">Profile</a></li>
            <li class="active"><a href="networks.html">Network</a></li> 
            <li><a href="education.html">Education</a></li>
            <li><a href="jobs.html">Jobs</a></li> 
            <li><a href="interests.html">Interests</a></li> 
        </ul>
      </div>
    </nav>
 -->   
    <div class="container">
        <div class="jumbotron container-fluid">
            <div id="box">
                <div class="col-md-6">
                    <p><img src="flipoff.jpg" alt="Profile Picture" style="width:125px;height:100px; padding:0px 25px 0px 0px"> 
                    <div class="col-md-10">
                        <a class="personName" href="profilePage.html">Person Name</a>
                    </div>
                    <div class="col-md-12">
                        <p>Where they work</p>
                    </div>
                    <div class="col-md-12">
                        <p>Work Location</p>
                    </div>
                    </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="jumbotron container-fluid">
            <div id="box">
                <div class="col-md-6">
                    <p><img src="flipoff.jpg" alt="Profile Picture" style="width:125px;height:100px; padding:0px 25px 0px 0px"> 
                    <div class="col-md-10">
                        <a class="personName" href="profilePage.html">Person Name</a>
                    </div>
                    <div class="col-md-12">
                        <p>Where they work</p>
                    </div>
                    <div class="col-md-12">
                        <p>Work Location</p>
                    </div>
                    </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="jumbotron container-fluid">
            <div id="box">
                <div class="col-md-6">
                    <p><img src="flipoff.jpg" alt="Profile Picture" style="width:125px;height:100px; padding:0px 25px 0px 0px"> 
                    <div class="col-md-10">
                        <a class="personName" href="profilePage.html">Person Name</a>
                    </div>
                    <div class="col-md-12">
                        <p>Where they work</p>
                    </div>
                    <div class="col-md-12">
                        <p>Work Location</p>
                    </div>
                    </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>

