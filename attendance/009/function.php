<?php
//Signup function
function registration()
{
	if ($_SERVER["REQUEST_METHOD"] == "POST") { //If a post action is recorded, then start running script
		$dbhost = 'localhost'; //mysql.rolaaz.com
		$dbuser = 'root'; //rolaaz
		$dbpass = 'startman'; //Rol@2017aaz.
		$dbname = 'pg_school';
		$gconnect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		//Set all variables to empty values.
		$full_nameerror = $phone_numbererror = $emailerror = $permanent_addresserror = $correspondence_addresserror = $date_of_birtherror = $Name_Sponsorerror = $Address_Sponsorerror = $Universityerror = $Degreeerror = $Courseverror = $passwordmatch = $date_scherror = $Institutionserror = $Certificate_Obtainederror = $area_specialerror = $date_insterror = $date_firsterror = $higher_degreeerror = $mode_studyerror = "";
		$full_name = $phone_number = $email = $permanent_address = $phone = $data_of_birth = $Name_Sponsor = $Address_Sponsor = $University = $Degree = $Course = $data_sch = $Institutions = $Certificate_Obtained = $area_special = $date_inst = $date_first = $higher_degree = $higher_degree = $mode_study = "";
		//Set error messages

		if (empty($_POST['full_name'])) {
			$full_nameerror = "Enter your Full Name.<br>";
		} else {
			$full_name = mysqli_real_escape_string($gconnect, galaxy_sanitize($_POST['full_name']));
		}

		if (empty($_POST['full_name'])) { }
		if (empty($_POST['phone_number'])) {
			$phone_numbererror = "Please enter your Phone_number.<br>";
		} else {
			$phone_number = mysqli_real_escape_string($gconnect, galaxy_sanitize(ucwords($_POST['phone_number'])));
		} { //Display errors
			$errors = array($full_nameerror);
			foreach ($errors as $formerror) {
				echo '<p style="color:red">' . $formerror . '</p>';
			}
		} //End Display errors

		//Confirm no other errors and continue running script
		if (empty($emailerror)) {
			//Check if email already exists
			$emailexists = mysqli_query($gconnect, "SELECT email FROM form004 where email='$email'");
			$emailcheck = mysqli_num_rows($emailexists);
			$checkemail = mysqli_fetch_array($emailexists);
			if (($emailcheck >= 1) && (($checkemail['ustatus']) != 2)) {
				$email_exists = "This email has been used. We do not support multiple accounts.";
				echo '<p style="color:red">' . $email_exists . '</p>';
			} elseif (($emailcheck >= 1) && (($checkemail['ustatus']) == 2)) {
				$user_blacklisted = "This email has been blacklisted and cannot be registered again.";
				echo '<p style="color:red">' . $user_blacklisted . '</p>';
			} else {
				//Insert user into database if no further errors
				$ip = $_SERVER['REMOTE_ADDR'];

				$reg_query = "INSERT INTO form004 (full_name,phone_number,email,permanent_address,correspondence_address,date_of_birth,Name_Sponsor,Address_Sponsor,University,Degree,Course,date_sch,Institutions,Certificate_Obtained,area_special,date_inst,date_first,higher_degree,mode_study)
				VALUES (
				'" . $full_name . "', '" . $phone_number . "', '" . $email . "' ,'" . $permanent_address . "','" . $correspondence_address . "', '" . $date_of_birth . "', '" . $Name_Sponsor . "' , '" . $Address_Sponsor . "' , '" . $University . "' , '" . $Degree . "' , '" . $Course . "', '" . $date_sch . "' , '" . $Institutions . "' , '" . $Certificate_Obtained . "' , '" . $area_special . "' , '" . $date_inst . "' , '" . $date_first . "' , '" . $higher_degree . "' , '" . $mode_study . "')";
				$reg_insert = mysqli_query($gconnect, $reg_query) or die(galaxyError());
				if (mysqli_affected_rows($gconnect)) {
					$success = '<p style="color:green">You have been registered successfully. <a href="login.' . SITE_EXTENSION . '">Login here.</a></p>';
					$subject = 'Welcome to ' . SITENAME;
					$message = "Dear " . $nickname . ", <br><br>"
						. "Welcome to " . SITENAME . ". Your registration was successful. Remember to update your bank details on your dashboard."
						. "<br><br>Your current plan is " . getPlan($plan) . "."
						. "<br><br><b>" . SITENAME . " Admin</b>";
					sendEmail($emailv, $subject, $message, $sender, $success, $cc, $bcc);
					unset($_POST);
				}
			} //End database Insert
		} //End Confirm no other errors
	} //End Post action check
	mysqli_close($gconnect);
}

//Sanitizes all form values and strings
function galaxy_sanitize($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

//Sanitizes all form values and strings
function galaxy_html_decode($data)
{
	$data = html_entity_decode($data);
	$data = htmlspecialchars_decode($data);
	return $data;
}

//Declare error message if a script fails
function galaxyError()
{
	//include 'dbconnect.php';
	//return mysqli_error($gconnect);
	$galaxyErrormsg = "Ooops! This is an unknown error. That is all I can say for now. Try again later or contact support.";
	return '<p style="color:red">' . $galaxyErrormsg . '</p>';
}

//Send Email with given parameters
