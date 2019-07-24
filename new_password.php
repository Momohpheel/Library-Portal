<?php
$user = mysqli_connect('localhost','root','');
mysqli_select_db($user,'library_portal');
session_start();

if ((isset($_POST['password'])) && (!empty($_POST['password']))){
	$password = $_POST['password'];

	$query = "UPDATE `users` SET `password` == '$password' WHERE ";
	$query_run = mysqli_query($user,$query);

	if ($query_run){
		echo "<script> 
					alert('Done!')

			</script>";
			Header("Location:index.php");
		}else{
			echo "<script> 
					alert('Try again!')

			</script>";
			Header("Location:new_password.php");
		}
	}

}

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
			<strong >Input your new password!</strong>
				<form action="new_password.php" method="post">
					Input your new password: </br>
						<input type="password" name="password" class="form-control"></br>
						<input type="submit" class="btn btn-info" value="Verify"></br>
						
				</form>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>

</body>
</html>