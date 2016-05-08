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
    ul {
        margin: 22px;
        padding-bottom: 15px;
    }
    </style>
    
    <title>Employers</title>

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
          <li class="active"><a href="education.php">Education</a></li>
          <li><a href="jobs.php">Jobs</a></li>
          <li><a href="interests.php">Interests</a></li>
        </ul>
        <ul class ="nav navbar-nav navbar-right"><li><a href="/finalProject/index.php?logout">Logout</a></li></ul>
        </div>
    </nav>
    
     <div class="container">
      <h3>Universities</h3>
      <ul class="nav nav-tabs">
          <li><a href="education.php">Home</a></li>
          <li><a href="edu-pros.php">Prospective Students</a></li>
          <li><a href="edu-students.php">Students</a></li>
          <li><a href="edu-alum.php">Alumni</a></li>
          <li><a href="edu-uni.php">Universities</a></li>
          <li class="active"><a href="edu-employ.php">Employers</a></li>
          <li><a href="pieChart.php">Data Viz</a></li>
      </ul>
    </div>
    
</body>
</html>

