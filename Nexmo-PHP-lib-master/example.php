<?php



	include ( "NexmoMessage.php" );


	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('a8fd3ec4', 'uIlKrLs4f37IdFOp');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( '+2348168252201', 'Momoh Philip', 'Hello! I am you, you are me! How are we?' );

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);

	// Done!

?>