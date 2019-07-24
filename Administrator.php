<?php
$user = mysqli_connect('localhost','root','');
mysqli_select_db($user,'library_portal');
session_start();
if (isset($_POST['books'])){
	Header("Location:books.php");
}
if (isset($_POST['questions'])){
	Header("Location:questions.php");
}
if (isset($_POST['students'])){
	Header("Location:profile.php");
}
if (isset($_POST['requests'])){
	Header("Location:requests.php");
}

?>
<html>
<head>
	<title>Library Portal</title>
	<link href="bootstrap.min.css" rel="stylesheet"></link>
</head>
<body >
	
	<div class = "container" style="padding-top: 270px; ">
		<h2 style="text-align: center; padding-bottom: 20px; ">Welcome Admin!</h2>
		<form action="Administrator.php" method="post">
		<input type="submit" class="btn btn-primary" style="padding: 50px;" name="books" value="UPLOAD BOOKS">
		<input type="submit" class="btn btn-primary" name="questions" style="padding: 50px;" value="UPLOAD PAST QUEST.">
		<input type="submit" class="btn btn-primary" name="students" style="padding: 50px;" value="CHECK STUDENT'S PROFILE">
		<input type="submit" class="btn btn-primary" name="requests" style="padding: 50px;" value="COMPLAINTS/REQUESTS">
		</form>
	</div>

</body>
</html>