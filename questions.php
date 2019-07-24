<?php
$user = mysqli_connect('localhost','root','');
mysqli_select_db($user,'library_portal');
session_start();

if ((isset($_POST['title'])) && (isset($_POST['level']))&& (isset($_POST['session']))&& (isset($_POST['college']))&& (isset($_POST['department']))&& (isset($_POST['question']))){
		if ((!empty($_POST['title'])) && (!empty($_POST['level'])) && (!empty($_POST['session']))&& (!empty($_POST['college']))&& (!empty($_POST['department']))&& (!empty($_POST['question']))){
	
$target = "uploads/";
$targetfile = $target.basename($_FILE['question']['name']);
$targetinfo = pathinfo($targetfile, PATHINFO_EXTENSION);
$uploadok = 1;

if (file_exists($targetfile)){
	$uploadok = 0;
	echo "<script> 
				alert('File exists!')

				</script>";
}
if ($targetinfo != "pdf" || $targetinfo != "docx"){
	$uploadok = 0;
	echo "<script> 
					alert('File must either be in PDF or DOCX format!')

			</script>";
}
if ($uploadok == 1){
	if (move_uploaded_file(basename($_FILE['question']['tmp_name']))){
		if ((isset($_POST['title'])) && (isset($_POST['level']))&& (isset($_POST['session']))&& (isset($_POST['college']))&& (isset($_POST['department']))&& (isset($_POST['question']))){
		if ((!empty($_POST['title'])) && (!empty($_POST['level'])) && (!empty($_POST['session']))&& (!empty($_POST['college']))&& (!empty($_POST['department']))&& (!empty($_POST['question']))){
	
		$title = $_POST['title'];
		$level = $_POST['level'];
		$session = $_POST['session'];
		$college = $_POST['college'];
		$dept = $_POST['department'];
		$question = $_POST['question'];
		
			$query = "INSERT INTO `question`(`title`, `level`, `session`, `college`, `department`, `question`) VALUES ('$title','$level','$session','$college','$dept','$targetfile')";
			
			if (mysqli_query($user,$query)){
				echo "<script> 
						alert('Upload Successful!')

				</script>";
		}
			}else{
				echo "<script> 
						alert('Sorry, We Couldn't get your inputs! Kindly Enter the Informatin again!')

				</script>";
		}
	
}

}
	}else{
		echo "<script> 
						alert('Sorry,Something went wrong, Try uploading again!')

				</script>";
	}


}else{
	echo "<script> 
						alert('File could't be uploaded!')

				</script>";
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
			<div class="col-lg-4" style="padding-top: 160px;">
			<h3>Past Questions</h3>
				<form action="questions.php" method="post">
					Course Title:</br>
						<input type="text" name="title" class="form-control" required>
					Level: </br>
						<input type="text" name="level" class="form-control" required>
					Session:</br>
						<input type="text" name="session" class="form-control" required>
					College: </br>
						<input type="text" name="college" class="form-control" required>
					Department: </br>
						<input type="text" name="department" class="form-control" required>
					Question: </br>
						<input type="file" name="question" class="form-control" required></br>
						<input type="submit" class="btn btn-info" value="Upload">
						
						
				</form>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>

</body>
</html>