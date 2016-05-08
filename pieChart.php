<!doctype html>
<html lang="">

<head>
	<script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
	<style>
		.legend{
			font-size: 20px;
		}
		rect{
			stroke-width: 2;
		}

		#piechart{
			margin: 0 auto;
			position: relative;
			padding: 50px;
		}
	</style>

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
    <title>Data Viz</title>
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
          <li><a href="edu-employ.php">Employers</a></li>
          <li class="active"><a href="pieChart.php">Data Viz</a></li>
      </ul>


<?php
	require "../finalProject/config/db.conf";
        $mysqli = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
	
	require "../finalProject/classes/Login.php";

	$login = new Login();

	if ($login->isUserLoggedIn() === FALSE) {
	    die(header("Location: index.php"));
	}


        $query ="SELECT highestEd, COUNT(*) FROM education WHERE highestEd = 'Other'";
        $result = mysqli_query($mysqli, $query);
        $row = mysqli_fetch_array($result);
        $result->free();
        $other = $row['COUNT(*)'];

        $sql = "SELECT COUNT(*) FROM education WHERE highestEd = 'High_school_diploma'";
        $result2 = mysqli_query($mysqli, $sql);
        $row2 = mysqli_fetch_array($result2);
        $result2->free();
        $hSchool = $row2['COUNT(*)'];

        $query3 = "SELECT COUNT(*) FROM education WHERE highestEd = 'Bachelors_Degree'";
        $result3 = mysqli_query($mysqli, $query3);
        $row3 = mysqli_fetch_array($result3);
        $result3->free();
        $bDegree = $row3['COUNT(*)'];

        $query4 = "SELECT COUNT(*) FROM education WHERE highestEd = 'Masters_Degree'";
        $result4 = mysqli_query($mysqli, $query4);
        $row4 = mysqli_fetch_array($result4);
        $result4->free();
        $mDegree = $row4['COUNT(*)'];

        mysqli_close($mysqli);

 ?>
<div id="piechart">
        <script>

        var other = <?php Print($other); ?>;
        var hSchool = <?php Print($hSchool); ?>;
        var bDegree = <?php Print($bDegree); ?>;
        var mDegree = <?php Print($mDegree); ?>;

        var data = [
        { label: 'Other', count: other},
        { label: 'Bachelors Degree', count: bDegree},
        { label: 'High school dipoloma', count: hSchool},
        { label: 'Masters Degree', count: mDegree}
        ];//new

        var radius = 300;

        var color = d3.scale.ordinal()
                .range(["red", "blue", "yellow", "green"]);


        var canvas = d3.select("#piechart").append("svg")
                .attr("width", 1500)
                .attr("height", 1500);

        var group = canvas.append("g")
                .attr("transform", "translate(300, 300)");

        var arc = d3.svg.arc()
                .innerRadius(200)
                .outerRadius(radius);
        var arc = d3.svg.arc()
                .innerRadius(200)
                .outerRadius(radius);

        var pie = d3.layout.pie()
                .value(function (d) { return d.count; })
                .sort(null);//new

        var arcs = group.selectAll(".arc")
                .data(pie(data))
                .enter()
                .append("g")
                .attr("class", "arc")


        arcs.append("path")
                .attr("d", arc)
                .attr("fill", function (d) { return color(d.data.label); });

        arcs.append("text")
                .attr("transform", function (d) { return "translate(" + arc.centroid(d) + ")"; })
                .attr("text-anchor", "middle")
                .attr("font-size", "1.5em")
                //.text("Masters Degree", "Other");
                .text(function (d) { return d.data.count; });




                var box = 36;
                var spacing = 8;

                var legend = group.selectAll('.legend')
                        .data(color.domain())
                        .enter()
                        .append('g')
                        .attr('class', 'legend')
                        .attr('transform', function(d, i) {
                                var height = box + spacing;
                                var offset = height * color.domain().length/2;
                                var horz = -2*box;
                                var vert = i * height - offset;
                                return 'translate(' + horz + ',' + vert +')';
                        });

                        legend.append('rect')
                                .attr('width', box)
                                .attr('height', box)
                                .style('fill', color)
                                .style('stroke', color);

                        legend.append('text')
                                .attr('x', box + spacing)
                                .attr('y', box - spacing)
                                .text(function (d) { return d; });

        </script>
</div>
</div>


</body>
</html>
