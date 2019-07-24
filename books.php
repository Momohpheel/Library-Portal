<?php
$user = mysqli_connect('localhost','root','');
mysqli_select_db($user,'library_portal');
session_start();
$target = "uploads/";
$targetfile = $target.basename($_FILE['book']['name']);
$targetinfo = pathinfo($targetfile, PATHINFO_EXTENSION);
$uploadok = 1;

if ((isset($_POST['title'])) && (isset($_POST['author']))&& (isset($_POST['dop']))&& (isset($_POST['college']))&& (isset($_POST['department']))&& (isset($_POST['book']))){
		if ((!empty($_POST['title'])) && (!empty($_POST['author'])) && (!empty($_POST['dop']))&& (!empty($_POST['college']))&& (!empty($_POST['department']))&& (!empty($_POST['book']))){
	

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
	if (move_uploaded_file(basename($_FILE['book']['tmp_name']))){
		if ((isset($_POST['title'])) && (isset($_POST['author']))&& (isset($_POST['dop']))&& (isset($_POST['college']))&& (isset($_POST['department']))&& (isset($_POST['book']))){
		if ((!empty($_POST['title'])) && (!empty($_POST['author'])) && (!empty($_POST['dop']))&& (!empty($_POST['college']))&& (!empty($_POST['department']))&& (!empty($_POST['book']))){
	
		$title = $_POST['title'];
		$author = $_POST['author'];
		$dop = $_POST['dop'];
		$college = $_POST['college'];
		$dept = $_POST['department'];
		$book = $_POST['book'];
		
			$query = "INSERT INTO `books`(`title`, `author`, `dop`, `college`, `department`, `book`) VALUES ('$title','$author','$dop','$college','$dept','$targetfile')";
			
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
			<h3>Book Information</h3>
				<form action="books.php" method="post">
					Title:</br>
						<input type="text" name="title" class="form-control" required>
					Author: </br>
						<input type="text" name="author" class="form-control" required>
					Date of Publication:</br>
						<input type="text" name="dop" class="form-control" required>
					College: </br>
						<input type="text" name="college" class="form-control" required>
					Department: </br>
						<input type="text" name="department" class="form-control" required>
					Book: </br>
						<input type="file" name="book" class="form-control" required></br>
						<input type="submit" class="btn btn-info" value="Upload">
						
				</form>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>

</body>
</html>