<?php ob_start();

	if(isset($_POST['submit'])){

		

		$to = "pter@tertechconsulting.com";
		$subject = $_POST['name'];
		$message = $_POST['message'];
		$from = $_POST['email'];

		mail(to, subject, message,'from');
		mail('paulter17@gmail.com', subject, message,'from');

		echo "Thanks for submitting";

		header("Location: contact.html");

	}



?>