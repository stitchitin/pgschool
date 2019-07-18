<?php
	$full_name = $_POST['full_name'];

	if ((isset($_POST['full_name']) && !empty($_POST['full_name']))
		&& (isset($_POST['phone_number']) && !empty($_POST['phone_number']))
		&& (isset($_POST['email']) && !empty($_POST['email']))
	) {
		$to = "vivek@codingcyber.com";
		$headers = "From : " . $email;

		if (mail($to, $subject, $message, $headers)) {
			echo "E-Mail Sent successfully, we will get back to you soon.";
		}
	}

	$connection = mysqli_connect('localhost', 'root', 'startman');
	if (!$connection) {
		die("Database Connection Failed" . mysqli_error($connection));
	}
	$select_db = mysqli_select_db($connection, 'pg_school');
	if (!$select_db) {
		die("Database Selection Failed" . mysqli_error($connection));
	}
	$query = "INSERT INTO 'form009' (
			full_name,
		)
		VALUES (
			'$full_name'
		)";

	$result = mysqli_query($connection, $query);
?>