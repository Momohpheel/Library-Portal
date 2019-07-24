<?php
$user = mysqli_connect('localhost','root','');
mysqli_select_db($user,'library_portal');
session_start();

$tok = rand();


$tokenter = "INSERT INTO `token`('token') VALUES ('$tok')";
mysqli_query($user,$tokenter);

include ( "C:\wamp64\www\Library\Nexmo-PHP-lib-master\NexmoMessage.php" );


	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('a8fd3ec4', 'uIlKrLs4f37IdFOp');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText('+2348168252201', 'McULibrary', "'$tok'");

	// Step 3: Display an overview of the message
	// Done!

/**require_once "vendor/autoload.php";



$basic = new \Nexmo\Client\Credentials\Basic('a8fd3ec4', 'uIlKrLs4f37IdFOp'); 
$client = new \Nexmo\Client($basic); 
$message = $client->message()->send([ 'to' => '2348168252201', 'from' => 'McU Library', 'text' => "Hello Momoh Philip, We are glad that you registered '$tok'" ]);*/


//if (($time5minsafter - $timenow) != 0){
if (isset($_POST['verify'])){

if ((isset($_POST['token'])) && (!empty($_POST['token']))){
	$token = $_POST['token'];

	$query = "SELECT * FROM `token` where `token` = '$token' ";
	$query_run = mysqli_query($user,$query);

	if ($fetch = mysqli_fetch_assoc($query_run)){
		$pass = $fetch['token'];

		if ($tok == $pass){
			Header("Location:new_password.php");
		}else{
			echo "<script> 
					alert('Sorry, We Couldn't get your inputs! Kindly Enter the Informatin again!')

			</script>";
		}
	}

}
}
//}

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
			<strong>A token will be sent to your phone number, input the token to verify your account!</strong>
				<form action="forget_password.php" method="post">
					Token: </br>
						<input type="number" name="token" class="form-control"></br>
						<input type="submit" class="btn btn-info" name = "verify" value="Verify"></br>
						
				</form>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>

</body>
</html>