<?php
$user = mysqli_connect('localhost','root','');
mysqli_select_db($user,'library_portal');
session_start();
if ((isset($_POST['surname'])) && (isset($_POST['firstname']))&& (isset($_POST['college']))&& (isset($_POST['department']))&& (isset($_POST['email']))&& (isset($_POST['phone']))&& (isset($_POST['user']))&& (isset($_POST['password']))){
	if ((!empty($_POST['surname'])) || (!empty($_POST['firstname'])) || (!empty($_POST['college']))|| (!empty($_POST['department']))|| (!empty($_POST['email']))|| (!empty($_POST['phone']))|| (!empty($_POST['user']))|| (!empty($_POST['passwrod']))){
	
	$surname = $_POST['surname'];
	$firstname = $_POST['firstname'];
	$college = $_POST['college'];
	$department = $_POST['department'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$user = $_POST['user'];
	$password = $_POST['password'];
	
		$query = "INSERT INTO `users`(`surname`, `firstname`, `college`, `department`, `email`, `phone`, `matric`, `password`) VALUES ($surname','$firstname','$college','$department','$email','$phone','$user','$password')";
		
		if (mysqli_query($user,$query)){
			Header("Location:index.php");
		}else{
			echo "<script> 
					alert('Sorry, We Couldn't get your inputs! Kindly Enter the Informatin again!')

			</script>";
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
			<strong style="padding-left: 56px;">McPherson University Library</strong>
				<form action="Reg_page.php" method="post">
					Surname:</br>
						<input type="text" name="surname" class="form-control" required>
					First Name: </br>
						<input type="text" name="firstname" class="form-control" required></br>
					College:</br>
						<input type="text" name="college" class="form-control" required>
					Department: </br>
						<input type="text" name="department" class="form-control" required></br>
					E-Mail: </br>
						<input type="email" name="email" class="form-control" required></br>
					Phone Number: </br>
						<input type="number" name="phone" class="form-control" required></br>
					Matriculation Number:</br>
						<input type="number" name="user" class="form-control" required>
					Password: </br>
						<input type="password" name="password" class="form-control" required></br>
						<input type="submit" class="btn btn-info" value="Login"></br>
						| <a href="Admin Log-in.php"><em>Admin Log-in?</em></a> |
						
				</form>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>

</body>
</html>