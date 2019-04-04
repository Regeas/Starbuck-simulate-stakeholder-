<!DOCTYPE html>
<?php
include 'dbconnection.php';
$conn = OpenCon();
$userid = "csc318";
?>
<html>
<meta charset = "UTF-8">
	<title>Insert Plan</title>
	<head>
		<style>
			ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;   
				background-color: black;
				position: fixed;
				top: 0;
				width: 100%;
				}
				li {
				float: left;
				}
				li a {
				display: block;
				color: white;
				text-align: center;
				padding: 20px 25px;
				text-decoration: none;
				}
				li a:hover:not(.active) {
				background-color: #4caf50;
				}
				.active {
				background-color: #367c39;
				}
				mn{
				float: left;
				display: block;
				color: white;
				text-align: center;
				padding: 20px 25px;
				text-decoration: none;
			}
		</style>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<ul>
        <li><a href="../group2/index.php">Starbuck</a></li>
        <li><a class="active"href="../group10/index.php">Planning</a></li>
		<li><a href="../group10/businessprofile.php">Profile</a></li>
		<li><a href="../group10/financeplan.php">Plan</a></li>
		<li><a href="../group10/timeline.php">Timeline</a></li>
      <li><a href="../login/logout.php?to=https://sit.ahri.in.th/group10/financeplan.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

	</ul>
	</head>
<body style = "background : #555">
    <div style="margin-left:10%; margin-right:10%; padding: 10px 16px; height:600px; background-color:#ffffff; color: #000000 ;
	 margin-top : 5%; margin-bottom : 5%;">
	<form action = "insert.php" method="post">
	<div class="col-md-6" style="margin-left:25%">
	<p>
		<label for = "plname">Plan Name</label>
		<input class="form-control" type="text" name="Plname" id="plname" required>
	</p>
	<p>
		<label for = "deptno">Department name</label>
		<select class="form-control" name="Deptno" required>
			<option value="1">Human Resource</option>
			<option value="2">Finance</option>
			<option value="3">Customer service</option>
			<option value="4">Manufacture</option>
			<option value="5">Marketing</option>
			<option value="6">Public Relation</option>
			<option value="7">Production</option>
			<option value="8">Purchase</option>
			<option value="9">Sales</option>
		</select>
	</p>
	<p>
		<label for = "startdate">Start date</label>
		<input class="form-control" type="date" name="Startdate" id="startdate" required>

		<label for = "enddate">End date</label>
		<input class="form-control" type="date" name="Enddate" id="enddate" required>
	</p>
	<p>
		<label for = "budget">Budget</label>
		<input class="form-control" type="text" name="Budget" id="budget" required>
	</p>
	<center>
	<input class="w3-button w3-green" type="submit" value="Submit" >
	</center>
	</div>
</form>
</body>
</html>