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
        .interestName {
            font-size: 20pt;
            font-weight: 550;
        }
        
        img {
            float: left;   
        }
        
      
    </style>
    
    <title>Interests</title>
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
          <li><a href="networks.php">Network</a></li>
          <li><a href="education.php">Education</a></li>
          <li><a href="jobs.php">Jobs</a></li>
          <li class="active"><a href="interests.php">Interests</a></li>
        </ul>
        <ul class ="nav navbar-nav navbar-right"><li><a href="/finalProject/index.php?logout">Logout</a></li></ul>
        </div>
    </nav>
    
    <div class="container">
        <div class="jumbotron container-fluid">
            <div id="box">
                <div class="">
                    <img src="interest1.jpg" alt="Profile Picture" style="width:125px;height:100px; padding:0px 25px 0px 0px"> 
                    
                    <div class="col-md-8">
                        <a class="interestName" href="profilePage.html">Interest Name</a>
                    </div>
                    <div class="col-md-4">
                        <p>About this interest...</p>
                    </div>
                    <div class="col-md-8">
                        <form>
                            <input id="followButton" type="button" value="Follow" onclick="followClicked">
                        </form>
                    </div>
                    </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="jumbotron container-fluid">
            <div id="box">
                <div class="">
                    <img src="interest2.jpg" alt="Profile Picture" style="width:125px;height:100px; padding:0px 25px 0px 0px"> 
                    
                    <div class="col-md-8">
                        <a class="interestName" href="profilePage.html">Interest Name</a>
                    </div>
                    <div class="col-md-4">
                        <p>About this interest...</p>
                    </div>
                    <div class="col-md-8">
                        <form>
                            <input id="followButton" type="button" value="Follow" onclick="followClicked">
                        </form>
                    </div>
                    </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="jumbotron container-fluid">
            <div id="box">
                <div class="">
                    <img src="interest3.jpg" alt="Profile Picture" style="width:125px;height:100px; padding:0px 25px 0px 0px"> 
                    
                    <div class="col-md-8">
                        <a class="interestName" href="profilePage.html">Interest Name</a>
                    </div>
                    <div class="col-md-4">
                        <p>About this interest...</p>
                    </div>
                    <div class="col-md-8">
                        <form>
                            <input id="followButton" type="button" value="Follow" onclick="followClicked">
                        </form>
                    </div>
                    </div>
            </div>
        </div>
    </div>
    
    
    
</body>
</html>

