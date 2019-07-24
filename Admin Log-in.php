<?php
$user = mysqli_connect('localhost','root','');
mysqli_select_db($user,'library_portal');
session_start();

if ((isset($_POST['password'])) && (!empty($_POST['password']))){
	$pass = $_POST['password'];

	$check = "SELECT `pass` FROM `admin`";
	$check_run = mysqli_query($user,$check);

			if ($id = mysqli_fetch_assoc($check_run)){
				$user = $id['pass'];
				$idn = $id['id'];
				$_SESSION['id'] = $idn;
				$_SESSION['human'] = $user;
			if ($user == $pass){	
				Header("Location:Administrator.php");
			}else{
				echo 'pass not correct';
			}
		}
		else{
			echo mysql_error();
		}

}
?>
<html>
<head>
	<title>Admin(Library Portal)</title>
	<link href="bootstrap.min.css" rel="stylesheet"></link>
</head>
<body>
	
	<div class = "container" >
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4" style="padding-top: 200px;">
			<strong style="padding-left: 56px;">McPherson University Library</strong>
				<form action="Admin Log-in.php" method="POST">
					Password: </br>
						<input type="password" name="password" class="form-control"></br>
						<input type="submit" class="btn btn-info" value="Login"></br>
						
						
				</form>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>

</body>
</html>