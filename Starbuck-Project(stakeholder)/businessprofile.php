<!DOCTYPE html>
<?php
include 'dbconnection.php';
$conn = OpenCon();
$userid = "csc318";
?>
<html>
	<title>BusinessProfile</title>
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
    	<li><a href="../group10/index.php">Planning</a></li>
		<li><a class="active"href"#businessprofile.php">Profile</a></li>
		<li><a href="../group10/financeplan.php">Plan</a></li>
		<li><a href="../group10/timeline.php">Timeline</a></li>
      <li><a href="../login/logout.php?to=https://sit.ahri.in.th/group10/businessprofile.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
	</ul>
	</head>
<body style = "background : #555">
    <div style="margin-left:10%; margin-right:10%; padding: 10px 16px; height:600px; background-color:#ffffff; color: #000000 ;
	 margin-top : 5%; margin-bottom : 5%;">
	<h1>Business Profile</h1>
	
	<?php
        $res = $conn->query("SELECT * FROM BusinessProfile ");
		while(($row = $res->fetch_assoc()) != null) {
       			echo "Name : ".$row["Name"]."<br>";
			echo "\nRegisteration Number : ".$row["RegisterationNumber"]."<br>";
			echo "\nDate of Registeration : ".$row["DateOfRegister"]."<br>";
			echo "\nType of Company : ".$row["Type"]."<br>";
			echo "\nMain Office Address : ".$row["OfficeAddress"]."<br>";
            		echo "\nStatus : ".$row["Status"]."<br>";
			echo "\nVision :".$row["Vision"]."<br>";
			echo "\nMission :".$row["Mission"]."<br>";
			echo "\nGoal :".$row["Goal"]."<br>";
		}?>
</body>
</html>