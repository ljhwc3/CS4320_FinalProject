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
            margin-right: 10px;
        }
    </style>
    
    <title>Home</title>
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
          <li><a href="interests.php">Interests</a></li>
        </ul>
        <ul class ="nav navbar-nav navbar-right"><li><a href="/finalProject/index.php?logout">Logout</a></li></ul>
        </div>
    </nav>

    
    <div class="container">
        <div class="jumbotron container-fluid">
            <div id="box">
               <div class="col-md-15">
    
                    <a href="profilePage.html"><img src="flipoff.jpg" alt="Profile Picture" style="width:150px;height:145px;"></a>
                   <a href="profilePage.html"><h3>Person Name</h3></a>

                    <div>
                        <p>Some post..with an article/video link... <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"> Important Software Engineering Video</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="jumbotron container-fluid">
            <div id="box">
               <div class="col-md-15">
    
                    <a href="profilePage.html"><img src="interest2.jpg" alt="Profile Picture" style="width:150px;height:145px;"></a>
                   <a href="profilePage.html"><h3>Topic of Interest Title</h3></a>

                    <div>
                        <p>Some post..with an article/video link... <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"> Important Software Engineering Video</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="jumbotron container-fluid">
            <div id="box">
               <div class="col-md-15">
    
                    <a href="profilePage.html"><img src="interest3.jpg" alt="Profile Picture" style="width:150px;height:145px;"></a>
                   <a href="profilePage.html"><h3>Company name</h3></a>

                    <div>
                        <p>Some post..with an article/video link... <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"> Important Software Engineering Video</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    
    
</body>
</html>