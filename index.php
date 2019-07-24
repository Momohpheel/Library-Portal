<?php
$user = mysqli_connect('localhost','root','');
mysqli_select_db($user,'library_portal');
session_start();


?>
<html>
<head>
	<title>Library Portal</title>
	<link href="bootstrap.min.css" rel="stylesheet"></link>
</head>
<body>
	
	<div class = "container" >
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4" style="padding-top: 200px;">
			<strong style="padding-left: 56px;">McPherson University Library</strong>
				<form>
					Matriculation Number:</br>
						<input type="number" name="user" class="form-control">
					Password: </br>
						<input type="password" name="password" class="form-control"></br>
						<input type="submit" class="btn btn-info" value="Login"></br>
						<a href="forget_password.php"><em>Forgot your Password?</em></a> | <a href="Reg_page.php"><em >You're new here?</em></a> | <a href="Admin Log-in.php"><em>Admin Log-in?</em></a>
						
				</form>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>

</body>
</html>