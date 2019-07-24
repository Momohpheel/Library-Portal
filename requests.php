<?php
$user = mysqli_connect('localhost','root','');
mysqli_select_db($user,'library_portal');
session_start();

$query = "SELECT * FROM `requests`";
$query_run = mysqli_query($user,$query);
$row = mysqli_num_rows($query_run);
if ($fetch = mysqli_fetch_assoc($query_run)){
	$name = $fetch['name'];
	$requests = $fetch['req'];
	
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
			<h3>Requests/Complaints</h3>
			<?php
				echo "<table style='text-align:center;' class='table table-hover'>
						
							<tr>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
							</tr>
						</table>";



			?>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>

</body>
</html>