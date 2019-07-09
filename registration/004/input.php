<?php
	$full_name = $_POST['full_name'];
	$phone_number = $_POST['phone_number'];
	$email= $_POST['email'];
	$permanent_address= $_POST['permanent_address'];
    $correspondence_address = $_POST['correspondence address'];
	$date_of_birth = $_POST['date_of_birth'];
	$Name_Sponsor = $_POST['Name_Sponsor'];
	$permanent_address= $_POST['permanent_address'];
    $Address_Sponsor = $_POST['Address_Sponsor'];
	$University = $_POST['University'];
	$Degree = $_POST['Degree'];
	$Course = $_POST['Course'];
    $date_sch = $_POST['date_sch'];
	$Certificate_Obtained = $_POST['Certificate_Obtained'];
	$area_special = $_POST['area_special'];
    $date_inst = $_POST['date_inst'];
    $date_first= $_POST['date_first'];
    $Hdegreet = $_POST['higher_degree'];
    $Mstudy = $_POST['mode_study'];

if((isset($_POST['full_name']) && !empty($_POST['full_name']))
&& (isset($_POST['phone_number']) && !empty($_POST['phone_number']))
&& (isset($_POST['email']) && !empty($_POST['email']))
&& (isset($_POST['permanent_address']) && !empty($_POST['permanent_address']))
&& (isset($_POST['correspondence_address']) && !empty($_POST['correspondence_address']))
&& (isset($_POST['date_of_birth']) && !empty($_POST['date_of_birth']))
&& (isset($_POST['Name_Sponsor']) && !empty($_POST['Name_Sponsor']))
&& (isset($_POST['Address_Sponsor']) && !empty($_POST['Address_Sponsor']))
&& (isset($_POST['University']) && !empty($_POST['University']))
&& (isset($_POST['Degree']) && !empty($_POST['Degree']))
&& (isset($_POST['Course']) && !empty($_POST['Course']))

&& (isset($_POST['date_sch']) && !empty($_POST['date_sch']))
&& (isset($_POST['Institutions']) && !empty($_POST['Institutions']))
&& (isset($_POST['Certificate_Obtained']) && !empty($_POST['Certificate_Obtained']))
&& (isset($_POST['area_specail']) && !empty($_POST['area_specail']))
&& (isset($_POST['date_inst']) && !empty($_POST['date_inst']))
&& (isset($_POST['date_first']) && !empty($_POST['date_first']))
&& (isset($_POST['higher_degree']) && !empty($_POST['higher_degree']))
&& (isset($_POST['mode_study']) && !empty($_POST['mode_study']))){


	
    


	$to = "vivek@codingcyber.com";
	$headers = "From : " . $email;
	
	if( mail($to, $subject, $message, $headers)){
		echo "E-Mail Sent successfully, we will get back to you soon.";
	}
}

$connection = mysqli_connect('localhost', 'root', 'startman');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'pg_school');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}






$query = "INSERT INTO `form004` 
(full_name,
phone_number,
email,
permanent_address,
correspondence_address,
date_of_birth,
Name_Sponsor,
Address_Sponsor,
University,
Degree,
Course,
date_sch,
Institutions,
Certificate_Obtained,
area_special,
date_inst,
date_first,
higher_degree,
mode_study) 

VALUES 
('$full_name',
'$phone_number',
'$email',
'$permanent_address',
'$correspondence_address',
'$date_of_birth',
'$Name_Sponsor',
'$Address_Sponsor',
'$University',
'$Degree',
'$Course',
'$date_sch',
'$Institutions',
'$Certificate_Obtained'
'$area_special',
'$date_inst',
'$date_first',
'$Hdegree',
'$Mstudy')";

$result = mysqli_query($connection, $query);

?>