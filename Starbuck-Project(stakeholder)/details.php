<!DOCTYPE html>
<?php
error_reporting(E_ERROR);
include 'dbconnection.php';
include_once('../login/emp.login.php');
emp_ensure_login('https://sit.ahri.in.th/group10/index.php');
$conn = OpenCon();
$userid = "csc318";
?>
<html>
<title>Details</title>
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <ul>
        <li><a href="../group2/index.php">Starbuck</a></li>
        <li><a href="../group10/index.php">Planning</a></li>
        <li><a href="../group10/businessprofile.php">Profile</a></li>
        <li><a href="../group10/financeplan.php">Plan</a></li>
        <li><a href="../group10/timeline.php">Timeline</a></li>
      <li><a href="../login/logout.php?to=https://sit.ahri.in.th/group10/financeplan.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
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
<table id="project">
			<?php
	$fpno = null;
	if(isset($_GET['FPno'])) {
		$fpno = $_GET['FPno'];
	}
		$sql = "SELECT ProjectNo,ProjectName,Dname,Details,Plan.StartDate,Plan.EndDate,BudgetNo,ExpandTime,Plan.Status FROM Plan,Project,EmployeeDepartment where $fpno=Project.Plan and EmployeeDepartment.Dep_no=Plan.Deptno and FPno = '".$fpno."'";
		$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		$result=mysqli_fetch_array($query);
		?>
		   <form method = "post" action = "timeline.php">
			  <table width = "800" border =" 0">
				 <tr>
					<td width = "100">Project number</td>
					<td class="form-control"><?php echo $result["ProjectNo"];?>				 
				</tr>
				 <tr>
					<td width = "100">Project name</td>
					<td class="form-control"><?php echo $result["ProjectName"];?></td>
				 </tr>
				 <tr>
					<td width = "100">Department name</td>
					<td class="form-control"><?php echo $result["Dname"];?></td>
				 </tr>
				 <tr>
					<td width = "100">Details</td>
					<td class="form-control"><?php echo $result["Details"];?></td>
				 </tr>

				 <tr>
					<td width = "100">Start date</td>
					<td class="form-control"><?php echo $result["StartDate"];?></td>
				 </tr>
				 <tr>
					<td width = "100">End date</td>
					<td class="form-control"><?php echo $result["EndDate"];?></td>
				 </tr>
				 <tr>
					<td width = "100">Budget</td>
					<td class="form-control"> <?php echo $result["BudgetNo"];?></td>
				 </tr>
<tr>
					<td width = "100">Expand Time</td>
					<td class="form-control"> <?php echo $result["ExpandTime"];?></td>
				 </tr>

				 <tr>
					<td width = "100">Status</td>
					<td class="form-control"><?php echo $result["Status"];?></td>
				 </tr>
				 <tr>
					<td width = "100"> </td>
					<td><input class="w3-button w3-green" name = "update" type = "submit" value = "Back"></td>
				 </tr>
			  </table>

		   </form>

	</body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>
</html>