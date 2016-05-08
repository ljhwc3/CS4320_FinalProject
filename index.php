<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <title>Login</title>
    
    </head>
    <body>
      
	    <nav class="navbar navbar-inverse" style="background-color = crimson;">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="timeline.html">LinkedIn 2.0</a>
        </div>
        <ul class="nav navbar-nav">
	  <li class="active"><a href="/finalProject/index.php">Home</a></li>
          <!--<li><a href="timeline.html">Home</a></li>-->
          <li><a href="/finalProject/profile.php">Profile</a></li>
          <li><a href="networks.html">Network</a></li>
          <li><a href="education.html">Education</a></li>
          <li><a href="jobs.php">Jobs</a></li>
          <li><a href="interests.html">Interests</a></li>
        </ul>
	<ul class ="nav navbar-nav navbar-right"><li><a href="/finalProject/index.php?logout">Logout</a></li></ul>
        </div>
    </nav>

 
<?php

/**
 * Art Martin - CS3380 Login Lab
 */


// HTTPS redirect
/*if ($_SERVER['HTTPS'] !== 'on') {
	$redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header("Location: $redirectURL");
	exit;
}*/  //login is going to work on HTTP, username and stuff is not encrypted

// make sure the user has minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // adds the PHP 5.5 password hashing functions to older PHP versions
    require_once("libraries/password_compatibility_library.php");
}

// includes database contraints
require_once("config/db.php");

// calls the login class
require_once("classes/Login.php");

// creates a login object that will handle the entire login/out process
$login = new Login();

// check to see if the user is already logged in
if ($login->isUserLoggedIn() == true) {
    // if the user is logged in, I just redirect them to their account page
    include("views/logged_in.php");

} else {
    // if the user isn't logged in... give them the login page
    include("views/not_logged_in.php");
}
//echo "test7";

?>
    </body>
</html>
