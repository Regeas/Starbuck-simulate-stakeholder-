<!DOCTYPE html>
<?php
include 'dbconnection.php';
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
        <li><a class="active"href"#index.php">Planning</a></li>
		<li><a href="../group10/businessprofile.php">Profile</a></li>
		<li><a href="../group10/financeplan.php">Plan</a></li>
		<li><a href="../group10/stakeholder.php">Stakeholder</a></li>
		<li><a href="../group10/timeline.php">Timeline</a></li>
	</ul>
	</head>
<body style = "background : #555">
    <div style="margin-left:10%; margin-right:10%; padding: 10px 16px; height:600px; background-color:#ffffff; color: #000000 ;
	 margin-top : 5%; margin-bottom : 5%;">
<?php
	$sql = "UPDATE Plan SET
	Plname = '".$_POST["name"]."',
	Startdate = '".$_POST["start"]."',
	Enddate = '".$_POST["end"]."',
	Budget = '".$_POST["budget"]."',
	Status = '".$_POST["succ"]."',
	Notice = '".$_POST["note"]."' 
	WHERE FPno = '".$_POST["flno"]."' ";
	$query = mysqli_query($conn,$sql);
	if($query) {
	echo "Record update successfully";
	}else{
		echo "Fail to update";
	}
?>
</body>
</html>