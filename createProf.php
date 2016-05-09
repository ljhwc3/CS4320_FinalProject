<?php
        session_start();
        $conn = new mysqli('us-cdbr-azure-central-a.cloudapp.net','b7d79c39134ad9', '23ac7b68', 'group13');

        
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
            
            $test = $_SESSION['user_id'];
            $test2 = $_SESSION['user_name'];           
//$test3 = $_SESSION['skills'];

// --------------------------------------------------------------------------------- 

        $sql = "SELECT skills FROM profile WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);
            //echo($skills);
                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $skills = $row["skills"];
                //echo($sql);
            }
            } else {
                echo "0 results";
                
                }

// --------------------------------------------------------------------------------- 

        $sql = "SELECT profile_pic FROM profile WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);

                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $profile_pic = $row["profile_pic"];
            }
            } else {
                echo "0 results";
                }

// --------------------------------------------------------------------------------- 

        $sql = "SELECT res FROM profile WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);

                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $res = $row["res"];
            }
            } else {
                echo "0 results";
                }



// --------------------------------------------------------------------------------- 

        $sql = "SELECT user_email FROM profile WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);

                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $user_email = $row["user_email"];
            }
            } else {
                echo "0 results";
                }

// --------------------------------------------------------------------------------- 

        $sql = "SELECT languages FROM profile WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);

                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $languages = $row["languages"];
            }
            } else {
                echo "0 results";
                }

// --------------------------------------------------------------------------------- 

        $sql = "SELECT awards FROM profile WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);

                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $awards = $row["awards"];
            }
            } else {
                echo "0 results";
                }
// --------------------------------------------------------------------------------- 

    $sql = "SELECT highestEd FROM education WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);
            //echo($skills);
                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $highestEd = $row["highestEd"];
		echo($highestEd);
                echo($sql);
            }
            } else {
                echo "0 results";

                }

// --------------------------------------------------------------------------------- 

    $sql = "SELECT school FROM education WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);
            //echo($skills);
                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $school = $row["school"];
                //echo($sql);
            }
            } else {
                echo "0 results";
                
                }

// --------------------------------------------------------------------------------- 

    $sql = "SELECT dates_attended FROM education WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);
            //echo($skills);
                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $dates_attended = $row["dates_attended"];
                //echo($sql);
            }
            } else {
                echo "0 results";
                
                }

// --------------------------------------------------------------------------------- 

    $sql = "SELECT degree FROM education WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);
            //echo($skills);
                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $degree = $row["degree"];
                //echo($sql);
            }
            } else {
                echo "0 results";
                
                }

// --------------------------------------------------------------------------------- 

    $sql = "SELECT field_of_study FROM education WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);
            //echo($skills);
                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $field_of_study = $row["field_of_study"];
                //echo($sql);
            }
            } else {
                echo "0 results";
                
                }

// --------------------------------------------------------------------------------- 

    $sql = "SELECT grade FROM education WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);
            //echo($skills);
                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $grade = $row["grade"];
                //echo($sql);
            }
            } else {
                echo "0 results";
                
                }

// --------------------------------------------------------------------------------- 

    $sql = "SELECT organization FROM education WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);
            //echo($skills);
                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $organization = $row["organization"];
                //echo($sql);
            }
            } else {
                echo "0 results";
                
                }


// --------------------------------------------------------------------------------- 

    $sql = "SELECT phone FROM contactInfo WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);
            //echo($skills);
                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $phone = $row["phone"];
                //echo($sql);
            }
            } else {
                echo "0 results";
                
                }


// --------------------------------------------------------------------------------- 

    $sql = "SELECT website FROM contactInfo WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);
            //echo($skills);
                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $website = $row["website"];
                //echo($sql);
            }
            } else {
                echo "0 results";
                
                }

// --------------------------------------------------------------------------------- 

    $sql = "SELECT address FROM contactInfo WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);
            //echo($skills);
                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $address = $row["address"];
                //echo($sql);
            }
            } else {
                echo "0 results";
                
                }


// --------------------------------------------------------------------------------- 

    $sql = "SELECT isCurrent FROM workExperience WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);
            //echo($skills);
                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $isCurrent = $row["isCurrent"];
                //echo($sql);
            }
            } else {
                echo "0 results";
                
                }

// --------------------------------------------------------------------------------- 

    $sql = "SELECT companyName FROM workExperience WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);
            //echo($skills);
                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $companyName = $row["companyName"];
                //echo($sql);
            }
            } else {
                echo "0 results";
                
                }

// --------------------------------------------------------------------------------- 

    $sql = "SELECT dates_worked FROM workExperience WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);
            //echo($skills);
                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $dates_worked = $row["dates_worked"];
                //echo($sql);
            }
            } else {
                echo "0 results";
                
                }

// --------------------------------------------------------------------------------- 

    $sql = "SELECT location FROM workExperience WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);
            //echo($skills);
                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $location = $row["location"];
                //echo($sql);
            }
            } else {
                echo "0 results";
                
                }

// --------------------------------------------------------------------------------- 

    $sql = "SELECT jobTitle FROM workExperience WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);
            //echo($skills);
                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $jobTitle = $row["jobTitle"];
                //echo($sql);
            }
            } else {
                echo "0 results";
                
                }

// --------------------------------------------------------------------------------- 

    $sql = "SELECT job_description FROM workExperience WHERE user_id = '" . $test . "';";
                    $result = $conn->query($sql);
            //echo($skills);
                if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $job_description = $row["job_description"];
                //echo($sql);
            }
            } else {
                echo "0 results";
                
                }
$conn->close();
          


?>






<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    
    <script>
    
    $(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Browser market shares January, 2015 to May, 2015'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Microsoft Internet Explorer',
                y: 56.33
            }, {
                name: 'Chrome',
                y: 24.03,
                sliced: true,
                selected: true
            }, {
                name: 'Firefox',
                y: 10.38
            }, {
                name: 'Safari',
                y: 4.77
            }, {
                name: 'Opera',
                y: 0.91
            }, {
                name: 'Proprietary or Undetectable',
                y: 0.2
            }]
        }]
    });
});

    </script>
	<meta charset="utf-8"> 
	<title>               
        <?php echo $test2 ?>
    </title> <!-- b_name -->
	<link media="all" rel="stylesheet" href="/css/all.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,700,800,600,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=News+Cycle:400,700' rel='stylesheet' type='text/css'>
    
    
    <style>
      /*  #butt{
            text-align: center;
            padding-bottom: 10px;
        }*/
        #backToLogin {
            text-align: center;
            padding-top: 5px;            
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">LinkedIn 2.0 Create Profile</a>
        </div>
      </div>
    </nav>

    <div id="backToLogin">
        <form method= "post" action = "/finalProject/index.php">
        <button id="datbtn" class="btn-large btn-warning" type="submit" >Home Page</button>
        </form>
    </div>       
	<div class="container">
        <div class="jumbotron">
                <h1><?php echo $test2 ?></h1>
				<header class="header">
					<h2>About</h2> <!-- TABLE profile -->
				</header>
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Skills</h3> <!-- skills -->
                                <p><?php echo $skills ?></p>
                            </div>
                            <div class="col-md-6">
                                <h3>Email</h3> <!-- email -->
                                <p><?php echo $user_email ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Resume</h3> <!-- email -->
                                <p><?php echo $res ?></p>
                            </div>
                        
                            <div class="col-md-6">
                                <h3>Languages</h3> <!-- sol -->
                                <p><?php echo $languages ?></p>

                                <h3>Awards</h3> <!-- status_sol -->
                                <p><?php echo $awards ?></p>
                            </div>
                        </div>
                <header class="header">
					<h2>Education</h2> <!-- TABLE profile -->
				</header>
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Highest Education</h3>
                                <p><?php echo $highestEd ?></p>
                            </div>
                            <div class="col-md-6">
                                <h3>School</h3> <!-- skills -->
                                <p><?php echo $school ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Degree</h3> <!-- email -->
                                <p><?php echo $degree ?></p>
                            </div>
                            <div class="col-md-6">
                                <h3>Field of Study</h3> <!-- sol -->
                                <p><?php echo $field_of_study ?></p>

                                <h3>Grade</h3> <!-- status_sol -->
                                <p><?php echo $grade ?></p>
                            </div>
                        </div>
                    <div class="row">
						<div class="col-md-6">
							<h3>Organizations</h3> <!-- skills -->
							<p><?php echo $organization ?></p>
						</div>
                    </div>
                <header class="header">
					<h2>Contact</h2> <!-- TABLE profile -->
				</header>
                    <div class="row">
						<div class="col-md-6">
							<h3>Phone Number</h3> <!-- skills -->
							<p><?php echo $phone ?></p>
						</div>
						<div class="col-md-6">
							<h3>Website</h3> <!-- email -->
                            <p><?php echo $website ?></p>
						</div>
					</div>
                    <div class="row">
						<div class="col-md-6">
							<h3>Address</h3> <!-- skills -->
							<p><?php echo $address ?></p>
                        </div>
					</div>   
                <header class="header">
					<h2>Work Experience</h2> <!-- TABLE profile -->
				</header>
					<div class="row">
						<div class="col-md-6">
							<h3>Currently Employed</h3> <!-- skills -->
							<p><?php echo $isCurrent ?></p>
						</div>
						<div class="co-md-6">
							<h3>Company Name</h3> <!-- email -->
                            <p><?php echo $companyName ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h3>Dates Worked</h3> <!-- skills -->
							<p><?php echo $dates_worked ?></p>
						</div>
						<div class="col-md-6">
							<h3>Location</h3> <!-- email -->
                            <p><?php echo $location ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h3>Job Title</h3> <!-- skills -->
							<p><?php echo $jobTitle ?></p>
						</div>
						<div class="col-md-6">
							<h3>Job Description</h3> <!-- email -->
                            <p><?php echo $job_description ?></p>
						</div>
					</div>     
	   </div>  
    </div>
</body>
</html>

