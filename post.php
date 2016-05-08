<?php

//require db.comf, Login.php
require "../finalProject/config/db.conf";
require "../finalProject/classes/Login.php";

//create login object
$login = new Login();

//check if user not logged in, redirect them to login page
if ($login->isUserLoggedIn() === FALSE) {
    die(header("Location: index.php"));
}

//define $errors array
$errors = array();

//if database connection fails, call printErrors()
if (!$mysqli = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME)) {
    array_push($errors, "Connection Error (post.php): ".$mysqli->error);
}

//process form when it is submitted
if (isset($_POST["create_job_button"])) {
    
    //check for companyID erors
    if (empty($_POST["companyID"])) {
        array_push($errors,"Please enter a company name.");
    }
    //check for job_title errors
    elseif (empty($_POST["job_title"])) {
        array_push($errors, "Please enter a job title.");
    }elseif (strlen($_POST["job_title"]) > 30) {
        array_push($errors, "Job title is too long. Maximum length is 30 characters.");
    }
    //check for industry errors
    elseif (empty($_POST["industry"])) {
        array_push($errors, "Please enter an industry.");
    }elseif (strlen($_POST["industry"]) > 40) {
        array_push($errors, "Industry listed is too long. Maximum length is 40 characters.");
    }
    //check for experience errors
    elseif (empty($_POST["experience"])) {
        array_push($errors, "Please enter a required experience level.");
    }elseif (strlen($_POST["experience"]) > 50) {
        array_push($errors, "Experience level listed is too long. Maximum length is 50 characters.");
    }
    //check for employment_type errors
    elseif (empty($_POST["employment_type"])) {
        array_push($errors, "Please enter an employment type.");
    }elseif (strlen($_POST["employment_type"]) > 50) {
        array_push($errors, "Employment type listed is too long. Maximum length is 50 characters.");
    }
    //check for location erros
    elseif (empty($_POST["location"])) {
        array_push($errors, "Please enter a location.");
    }
    //check for description errors
    elseif (empty($_POST["description"])) {
        array_push($errors, "Please enter a description");
    }
    //check for applicationURL errors
    elseif (empty($_POST["applicationURL"])) {
        array_push($errors, "Please enter an application URL.");
    }elseif (strlen($_POST["applicationURL"]) > 100) {
        array_push($errors, "Application URL too long. Maximum length is 100 characters.");
    }
        
    //if no errors create post, else call printErrors()
    if (empty($errors)) {
            
        $appURL = mysqli_escape_string($mysqli, urlencode($_POST["applicationURL"]));
        $query = "SELECT applicationURL FROM job_posting WHERE applicationURL='$appURL'";
        $result = mysqli_query($mysqli, $query);
        //if mysqli_query failed, report error
        if (FALSE === $result) {
            array_push($errors, "Query Failed. ");
        }
        //elseif query worked but URL is duplicate, report error
        elseif (mysqli_num_rows($result) > 0) {
            array_push($errors, "Sorry, a job application under this url has already been posted. ");
            mysqli_free_result($result);
        }
        //else not a duplicate URL, insert into job_listing table
        else {
            //Initiate variables for prepared statement
            $query2 = "INSERT INTO job_posting(industry, experience, employment_type, location, description, job_title, applicationURL, companyID) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
            $ind = htmlspecialchars($_POST["industry"]);
            $exp = htmlspecialchars($_POST["experience"]);
            $emp_type = htmlspecialchars($_POST["employment_type"]);
            $loc = htmlspecialchars($_POST["location"]);
            $des = htmlspecialchars($_POST["description"]);
            $title = htmlspecialchars($_POST["job_title"]);
            $ID = htmlspecialchars($_POST["companyID"]);
            
            //INSERT prepared statement
            if ($stmt2 = $mysqli->prepare($query2)) {
                if ($stmt2->bind_param("ssssssss", $ind, $exp, $emp_type, $loc, $des, $title, $appURL, $ID)) {     
                    if (!$stmt2->execute()) {
                        array_push($errors, "INSERT Execution Failed: ".$query2->error);
                    }
                }else {
                    array_push($errors, "INSERT Bind Error.");
                }
            }else {
                array_push($errors, "INSERT Prepare Failed.");
            }
        }//end else not a duplicate
            
        //if no errors alert user to success, else call printErrors()
        //if (TRUE === empty($errors)) {
        if (empty($errors)) {
            echo "<div id='success_container'><br>";
            echo "<font size='6' color='#00CD00'><b>Success! You have posted a job application.</font></b><br></div>";
        }
        //else initiate/call function printErrors()
        else {
            
            //initiate printErrors() function
            function printErrors() {
                //reference global array: errors
                global $errors;
                echo ("<div id='error_container'><br>");
                foreach ($errors as $error) {
                    echo ("<font size='6' color='red'><b>".$error."</font></b><br>");
                }
                echo ("</div>");
            }//end printErrors() function
                
            //call printErrors() function
            printErrors(); 
            
        }//end initiate/call else
         
    }//end outer empty if
    
    //else initiate/call printErrors() function
    else { 
        
        //initiate printErrors() function
        function printErrors() {
            //reference global array: errors
            global $errors;
            echo ("<div id='error_container'><br>");
            foreach ($errors as $error) {
                echo ("<font size='6' color='red'><b>".$error."</font></b><br>");
            }
            echo ("</div>");
        }//end printErrors() function
        
        //call printErrors() function
        printErrors(); 
        
    }//end outer initiate/call else

}//end isset if

//close connection
mysqli_close($mysqli);

?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>New Job Posting</title>
</head>

<body>
    
     <nav class="navbar navbar-inverse" style="background-color: #222">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="timeline.html">LinkedIn 2.0</a>
        </div>
         </div>
    </nav>
    
    <h2>New Post Form</h2>
    
    <form role="form" method="POST" action="post.php" name="jobPostForm">
        
        <div class="form-group">
            <label for="companyID">Company Name (Company must be registered with LinkedIn 2.0)</label>
            <?php
                //connect to database
                if (!$mysqli = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME)) {
                    echo "Connection Error (post.php)";
                    echo "Debugging errno: ".mysqli_connect_errno();
                    echo "Debugging error: ".mysqli_connect_error();
                }
                //sql query for company names
                $sql = mysqli_query($mysqli, "SELECT companyName, companyID FROM company ORDER BY companyName");
                //print select tag
                echo "<select name='companyID' class='form-control' id='companyID' required>";
                echo "<option value=''></option>";
                //loop through database to get options
                while ($row = mysqli_fetch_array($sql)) {
                    echo "<option value='".($row["companyID"])."'>".$row['companyName']."</option>";
                }
                //end select
                echo "</select>";
                
                //close connection
                mysqli_close($mysqli);
            ?>
        </div>
        
        <div class="form-group">
            <label for="job_title">Job Title</label>
            <input name="job_title" maxlength="30" type="text" class="form-control" id="job_title" required>
        </div>
      
        <div class="form-group">
            <label for="industry">Industry</label>
            <input name="industry" maxlength="40" type="text" class="form-control" id="industry" required>
        </div>
        
        <div class="form-group">
            <label for="experience">Experience Level</label>
            <select name="experience" class="form-control" id="experience" required>
                <option value=""></option>
                <option value="Entry Level: 2 years or less">Entry Level: 2 years of experience or less</option>
                <option value="First-Level Management: 2-15 years">Professional and/or First-Level Management: 2-15 years of experience</option>
                <option value="Mid-Level Management: 10-20 years">Mid-Level Management: 10-20 years of experience</option>
                <option value="Technical/Engineering: 5-20 years">Technical and/or Engineering: 5-20 years of experience</option>
                <option value="Executive/Senior-Level Management: 15-30+ years">Executive and/or Senior-Level Management: 15-30+ years of experience</option>
                <option value="Varies">Varies</option>
                <option value="Other (Specified on Application)">Other (Specified on Application)</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="employment_type">Employment Type</label>
            <select name="employment_type" class="form-control" id="employment_type" required>
                <option value=""></option>
                <option value="Part-Time (Regular)">Part-Time (Regular)</option>
                <option value="Full-Time (Regular)">Full-Time (Regular)</option>
                <option value="Part-Time (Temporary)">Part-Time (Temporary)</option>
                <option value="Full-Time (Temporary)">Full-Time (Temporary)</option>
                <option value="Varies">Varies</option>
                <option value="Other (Specified on Application)">Other (Specified on Application)</option>
                
            </select>
        </div>
        
        <div class="form-group">
            <label for="location">Location</label>
            <input name="location" type="text" class="form-control" id="location" required>
        </div>
        
        <div class="form-group">
            <label for="description">Description</label>
            <input name="description" type="text" class="form-control" id="description" required>
        </div>
        
        <div class="form-group">
            <label for="applicationURL">Application URL (http://www.example.com)</label>
            <input name="applicationURL" type="url" class="form-control" id="applicationURL" required>
        </div>

        <input value="Submit" name="create_job_button" id="create_job_button" type="submit" class="btn btn-default">
        
    </form>
    
    <a href="../finalProject/jobs.php">Cancel</a>
    
</body>
</html>