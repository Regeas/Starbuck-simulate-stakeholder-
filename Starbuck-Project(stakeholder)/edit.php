<!DOCTYPE html>
<?php
include 'dbconnection.php';
$conn = OpenCon();
include_once('../login/emp.login.php');
emp_ensure_login('https://sit.ahri.in.th/group10/index.php');
$userid = "csc318";
?>
<html>
	<title>Edit</title>
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
	$flno = null;
	if(isset($_GET['FPno'])) {
		$flno = $_GET['FPno'];
	}
		$sql = "SELECT FPno, Plname, Dname,Startdate , Enddate , Budget, Notice , Status FROM Plan,EmployeeDepartment where FPno = '".$flno."' AND Dep_no=Deptno";
		$query = mysqli_query($conn,$sql);
		$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
		?>
		   <form method = "post" action = "save.php">
			  <table width = "400" border =" 0">
				 <tr>
					<td width = "100">Plan number</td>
					<td><input name = "flno" type = "hidden" value = "<?php echo $result["FPno"];?>"><?php echo $result["FPno"];?></td>
				 </tr>
				 <tr>
					<td width = "100">Plan name</td>
					<td><input class="form-control" name = "name" type = "text" value="<?php echo $result["Plname"];?>" required></td>
				 </tr>
				 <tr>
					<td width = "100">Department name</td>
					<td><input class="form-control" name = "dept" type = "hidden" value="<?php echo $result["Deptno"];?>"><?php echo $result["Dname"];?></td>
				 </tr>
					<td width = "100">Start date</td>
					<td><input class="form-control" name = "start" type = "date" value="<?php echo $result["Startdate"];?>" required></td>
				 </tr>
				 <tr>
					<td width = "100">End date</td>
					<td><input class="form-control" name = "end" type = "date" value="<?php echo $result["Enddate"];?>" required></td>
				 </tr>
				 <tr>
					<td width = "100">Budget</td>
					<td><input class="form-control" name = "budget" type = "number" value="<?php echo $result["Budget"];?>" required></td>
				 </tr>
				 <tr>
					<td width = "100">Notice</td>
					<td>
					
					<p>
					<select class="form-control" name="note" value="<?php echo $result["Notice"];?>">
					<option value="Approve">Approve</option>
					<option value="Reject">Reject</option>
					</select>
					</p>
					
					</td>

				 </tr>
				 <tr>
					<td width = "100">Status</td>
					<td><input class="form-control" name = "succ"  type = "text" value="<?php echo $result["Status"];?>" required></td>
				 </tr>
				 <center>
				 <tr>
					<td width = "100"> </td>
					<td><input class="w3-button w3-green" name = "update" type = "submit" value = "Update" required></td>
				 </tr>
				 </center>
			  </table>
		   </form>
	</body>
</html>