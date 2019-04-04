<!DOCTYPE html>
<?php
include 'dbconnection.php';
include_once('../login/emp.login.php');
emp_ensure_login('https://sit.ahri.in.th/group10/index.php');
$conn = OpenCon();
$userid = "csc318";
?>
<html>
	<title>Index</title>
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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<ul>
        <li><a href="../group2/index.php">Starbuck</a></li>
        <li><a href"../group10/index.php">Planning</a></li>
		<li><a href="../group10/businessprofile.php">Profile</a></li>
		<li><a href="../group10/financeplan.php">Plan</a></li>
		<li><a href="../group10/timeline.php">Timeline</a></li>
      <li><a href="../login/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="../login/logout.php?to=https://sit.ahri.in.th/group10/financeplan.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
	</ul>
	</head>
<body style = "background : #555">
    <div style="margin-left:10%; margin-right:10%; padding: 10px 16px; height:600px; background-color:#ffffff; color: #000000 ;
	 margin-top : 5%; margin-bottom : 5%;">
<?php
$Plname = mysqli_real_escape_string($conn, $_REQUEST['Plname']);
$Deptno = mysqli_real_escape_string($conn, $_REQUEST['Deptno']);
$Startdate = mysqli_real_escape_string($conn, $_REQUEST['Startdate']);
$Enddate = mysqli_real_escape_string($conn, $_REQUEST['Enddate']);
$Budget = mysqli_real_escape_string($conn, $_REQUEST['Budget']);
$sql = "INSERT INTO Plan(Plname,Deptno,Startdate,Enddate,Budget,Notice,Status) 
		VALUES ('$Plname','$Deptno','$Startdate','$Enddate','$Budget','Waiting for approve','Incomplete')";
$query = mysqli_query($conn,$sql);
if($query){
	echo "Record added";
}
?>
</body>
</html>