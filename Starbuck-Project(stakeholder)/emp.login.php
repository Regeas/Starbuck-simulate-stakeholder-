<?php
$db = 'csc318';
 $host = "localhost";
 $username = "csc318";
 $password = "n2E9g9VGbVRv";
 
 try{
     $connection = new mysqli($host,$username,$password,$db);
 }
 catch(Exception $e){
     die('failed');
 }
?>

<html>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
    <title>Marketing Admin</title>
    </head>

    <body>
    <div style="width:100%;text-align:center;">
	<div class="container">
		<div class="card" style="width: 50%; margin-left: auto; margin-right: auto;">
		<?php
			if($fail == 1) {
				echo('
				<div class="alert alert-danger">
				  <strong>Error</strong> Log-in failed.
				</div>
				');
			} else if($fail == 2) {
				echo('
				<div class="alert alert-danger">
				  <strong>Error</strong> Please fill both forms.
				</div>
				');
			}
		?>
			<h1>Employee Log-In</h1>
			<form method="POST" action="https://sit.ahri.in.th/login/do_login_emp.php">
			  <div class="form-group">
				<label for="username">Email:</label>
				<input type="text" class="form-control" id="username" name="username">
			  </div>
			  <div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd" name="pwd">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
 </div>

    </body>
</html>
