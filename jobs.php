<?php

//require db.conf, Login.php
require "../finalProject/config/db.conf";
require "../finalProject/classes/Login.php";

//create login object
$login = new Login();

//check if user not logged in, redirect them to login page
if ($login->isUserLoggedIn() === FALSE) {
    die(header("Location: index.php"));
}

//define $errors() array
$errors = array();

//if database connection fails, call printErrors()
if (!$mysqli = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME)) {
    array_push($errors, "Connection Error (create_post.php): ".$mysqli->error);
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
        
        .topDiv {
            width: auto;
            height: 200px;
            margin-left: 0px;
            margin-right: 0px;   
        }
        
        #leftDiv {
            float: left;
            width: 450px;
            height: 500px;
            margin-left: 0px;
            margin-top: 25px;
            margin-bottom: 0px;
        }
        
        #postJobDiv {
            float: right;
            width: 500px;
            height: 200px;
            margin-right: 0px;
            margin-top: 25px;
            
        }
        
        #jobsDiv {
            float: right;
            margin-right: 0px;
            margin-top: 25px;
            width: 500px;
            height: 275px;
        }
        
        #borders, .borders {
            margin-top:0px;
            border: #cdcdcd medium solid;
            border-radius: 10px;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            padding: 5px;
            width: auto;
        }
        
        #box {
            height: auto;
        }
        
        .container, .container-fluid {
            margin-top: 0px;
            margin-bottom: 0px;
            overflow: auto;
        }
        
    </style>
    
    <title>Jobs</title>
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
          <li class="active"><a href="jobs.php">Jobs</a></li>
          <li><a href="interests.php">Interests</a></li>
        </ul>
        <ul class ="nav navbar-nav navbar-right"><li><a href="/finalProject/index.php?logout">Logout</a></li></ul>
        </div>
    </nav>


    
    <div class="container">
        <div class="jumbotron container-fluid">
            <div id="box" class="row">
               <div class="col-md-12">
    
                    <div class="col-xs-12">
                        <div id="borders">
                            <p>Search by Job Title</p>
                            <form role="form" method="post" action="jobs.php?go" id="searchform">
                              <input type="text" name="Search" id="Search"><input type="submit" name="Submit" id="Submit" value="Submit">
                            </form>
                            
                            <?php
                            
                                if (isset($_POST['Submit'])) {
                                    if (!empty($_POST['Search']) && $_POST['Search'] != '') {
                                        if (isset($_GET['go'])) {
                                            $input = $_POST['Search'];
                                            $query = "SELECT * FROM job_posting WHERE job_title LIKE '%$input%' ORDER BY companyID ASC, job_title ASC";
                                            $result = mysqli_query($mysqli, $query);
                                            //alert user if query failed
                                            if (FALSE === $result) {
                                                array_push($errors, "Search Query Failed. ");
                                                echo "Error: ".mysqli_error($mysqli);
                                            }
                                            //else if no jobs found
                                            else if (mysqli_num_rows($result) === 0) {
                                                echo "<div><p>No results found.</p></div>";
                                            }
                                            //else query succeeds/jobs found
                                            else {
                                                echo "<div><p>Results: </p>";
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    //find companyName from companyID
                                                    $nameQuery = "SELECT companyName FROM company WHERE companyID='".$row['companyID']."'";
                                                    $nameResult = mysqli_query($mysqli, $nameQuery);
                                                    //alert user if query failed
                                                    if (FALSE === $nameResult) {
                                                        array_push($errors, "Company Name Query1 Failed. ");
                                                        echo " Error: ".mysqli_error($mysqli);
                                                    }
                                                    //else query worked, print job post
                                                    else {
                                                        $companyName = mysqli_fetch_assoc($nameResult);
                                                        echo "<div class='borders'>";
                                                        echo "<font><b>Company Name: </font></b>".$companyName['companyName']."<br>"
                                                            . "<font><b>Job Title: </font></b>".$row['job_title']."<br>"
                                                            . "<font><b>Industry: </font></b>".$row['industry']."<br>"
                                                            . "<font><b>Experience Level: </font></b>".$row['experience']."<br>"
                                                            . "<font><b>Employment Type: </font></b>".$row['employment_type']."<br>"
                                                            . "<font><b>Location: </font></b>".$row['location']."<br>"
                                                            . "<font><b>Description: </font></b>".$row['description']."<br>"
                                                            . "<font><b>ApplicationURL: </font></b><a>".urldecode($row['applicationURL'])."</a><br>";
                                                        echo "</div><br>";
                                                        mysqli_free_result($nameResult);
                                                    }
                                                }//end while
                                                echo "</div>";
                                            }//end else query succeeds
                                            mysqli_free_result($result);
                                        }//end if isset go
                                    }//end if !empty Search
                                    //else prompt for search query
                                    else {
                                        echo "<font size=2 color='red'><b>Please enter a search query.</font></b>";
                                    }
                                }//end if isset Submit
                            ?>
                            
                        </div>
                    </div>
                    <div class="col-xs-5" id="leftDiv">
                        <h4>Jobs you may be interested in....</h4>
                            <?php
                            
                                $query = "SELECT * FROM job_posting ORDER BY companyID ASC, job_title ASC";
                                $result = mysqli_query($mysqli, $query);
                                //alert user if query failed
                                if (FALSE === $result) {
                                    array_push($errors, "Query Failed. ");
                                }
                                //else query succeeds
                                else {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        //find companyName from companyID
                                        $nameQuery = "SELECT companyName FROM company WHERE companyID='".$row['companyID']."'";
                                        $nameResult = mysqli_query($mysqli, $nameQuery);
                                        //alert user if query failed
                                        if (FALSE === $nameResult) {
                                            array_push($errors, "Company Name Query2 Failed. ");
                                            echo " Error: ".mysqli_error($mysqli);
                                        }
                                        //else query worked, print job post
                                        else {
                                            $companyName = mysqli_fetch_assoc($nameResult);
                                            echo "<div class='borders'>";
                                            echo "<font><b>Company Name: </font></b>".$companyName['companyName']."<br>"
                                                    . "<font><b>Job Title: </font></b>".$row['job_title']."<br>"
                                                    . "<font><b>Industry: </font></b>".$row['industry']."<br>"
                                                    . "<font><b>Experience Level: </font></b>".$row['experience']."<br>"
                                                    . "<font><b>Employment Type: </font></b>".$row['employment_type']."<br>"
                                                    . "<font><b>Location: </font></b>".$row['location']."<br>"
                                                    . "<font><b>Description: </font></b>".$row['description']."<br>"
                                                    . "<font><b>ApplicationURL: </font></b><a>".urldecode($row['applicationURL'])."</a><br>";
                                            echo "</div><br>";
                                            mysqli_free_result($nameResult);
                                        }
                                    }//end while
                    
                                }//end else query succeeds
                                
                                //print errors if any
                                if (!empty($errors)) {
                                    
                                    //initiate printErrors() function
                                    function printErrors() {
                                        //reference global array: errors
                                        global $errors;
                                        echo ("<div id='error_container'><br>");
                                        foreach ($errors as $error) {
                                            echo ("<font size='2' color='red'><b>".$error."</font></b><br>");
                                        }
                                        echo ("</div>");
                                    }//end printErrors() function
                
                                    //call printErrors() function
                                    printErrors(); 
                                    
                                }//end empty
                            
                                //close connection
                                mysqli_close($mysqli);
                            ?>
                    </div>
                    <div class="col-xs-6 col-md-offset-0" id="postJobDiv">
                            <div id="borders">
                            <p>Are you hiring?</p>
                            <a href="../finalProject/post.php">Post an Application!</a>
                        </div>
                    </div>
                    <div id="jobsDiv">
                        <div id="borders">
                            <p>Saved jobs..</p>
                            <br>
                            <br>
                            <br>
                            <p>Job Alerts...</p>
                            <br>
                            <br>
                            <br>
                            <p>Applied Jobs...</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
