<!DOCTYPE html>
<?php
error_reporting(E_ERROR);
include 'dbconnection.php';
$conn = OpenCon();
$userid = "csc318";
?>
<html>
<title>Timeline</title>
<head>
<script type="text/javascript" src="jquery-latest.js"></script>
	<script type="text/javascript" src="jquery.tablesorter.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
  $("#project").tablesorter();
  });
</script>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <ul>
        <li><a href="../group2/index.php">Starbuck</a></li>
        <li><a href="../group10/index.php">Planning</a></li>
        <li><a href="../group10/businessprofile.php">Profile</a></li>
        <li><a href="../group10/financeplan.php">Plan</a></li>
        <li><a class="active"href="#timeline.php">Timeline</a></li>
      <li><a href="../login/logout.php?to=https://sit.ahri.in.th/group10/timeline.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
</head>
<style>
#project {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 80%;
}
#project td, #project th {
    border: 1px solid #ddd;
    padding: 8px;
}
#project tr:hover {background-color: #ddd;}
#project th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<body style = "background : #555">
    <div style="margin-left:10%; margin-right:10%; padding: 10px 16px; background-color:#ffffff; color: #000000">
        <center style = "margin-top : 10%; margin-bottom : 5%;">
<table class = "tablesorter" id="project">
<thead>
			<tr>
				<th>ProjectNo</th>
				<th>ProjectName</th>
				<th>DeptNo</th>
				<th>StartDate</th>
				<th>EndDate</th>
				<th>Budget</th>
				<th>Status</th>				
			</tr>
            </thead>
<tbody>
        <?php
        $res = $conn->query("SELECT FPno,Plname,Dname,Startdate,Enddate,Budget,Status FROM Plan,EmployeeDepartment where  Dep_no = Deptno and Notice = 'Approve'");
        while(($row = $res->fetch_assoc()) != null) {
        ?>
		 <tr>
            	<td><?php echo $row["FPno"];?></td>
				<td><?php echo $row["Plname"];?></td>
				<td><?php echo $row["Dname"];?></td>
				<td><?php echo $row["Startdate"];?></td>
				<td><?php echo $row["Enddate"];?></td>
                      		<td><?php echo $row["Budget"];?></td>
				<td><?php echo $row["Status"];?></td>	
				<td><a href="details.php?FPno=<?php echo $row["FPno"];?>">Details</a></td>
          </tr>
<?php } ?>
 </tbody>
</table>
<script src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>
</body>
</html>