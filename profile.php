<?php
$user = mysqli_connect('localhost','root','');
mysqli_select_db($user,'library_portal');
session_start();

$query = "SELECT * FROM `users`";
$query_run = mysqli_query($user,$query);
$row = mysqli_num_rows($query_run);
if ($fetch = mysqli_fetch_assoc($query_run)){
	$name = $fetch['surname'] + $fetch['firstname'];
	$level = $fetch[''];
	$college = $fetch['college'];
	$department = $fetch['department'];
	 
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
			<div class="col-lg-2"></div>
			<div class="col-lg-8" style="padding-top: 200px;">
			<h3>Student Profile</h3>
			<?php
			error_reporting(0);
				echo "<table style='text-align:center; table-border: 1px solid black;' class='table table-normal'>
							<tr>
								<th>Name</th>
								<th>Level</th>
								<th>College</th>
								<th>Department</th>
								<th>Library Card</th>
							</tr>";

							for ($i = 0; $i <= $row; $i++){
							echo "
							<tr>
								<td>".$name."</td>
								<td></td>
								<td>".$college."</td>
								<td>".$department."</td>
								<td></td>
								
							</tr>
							
						</table>";

					};



			?>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>

</body>
</html>