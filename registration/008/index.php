

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>WELCOME TO PG FORMS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">





<link rel="stylesheet" href="../../css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="../../css/animate.css">
<link rel="stylesheet" href="../../css/owl.carousel.min.css">
<link rel="stylesheet" href="../../css/owl.theme.default.min.css">
<link rel="stylesheet" href="../../css/magnific-popup.css">
<link rel="stylesheet" href="../../css/aos.css">
<link rel="stylesheet" href="../../css/ionicons.min.css">
<link rel="stylesheet" href="../../css/bootstrap-datepicker.css">
<link rel="stylesheet" href="../../css/jquery.timepicker.css">
<link rel="stylesheet" href="../../css/flaticon.css">
<link rel="stylesheet" href="../../css/icomoon.css">
<link rel="stylesheet" href="../../css/style.css">
</head>

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: inherit;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 100%;
  min-width: 300px;
  max-width:1100px
  box-align: center;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

hr{
    background-color:green;
    height:5px;
}
</style>



<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
<a class="navbar-brand" href="http://localhost/pgschool/"><img src="https://unizik.edu.ng/wp-content/uploads/2017/02/nauweblogo1.png"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>
<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav ml-auto">

<li class="nav-item cta"><a href="contact.html" class="nav-link"><span>Map</span></a>
</li>
</ul>
</div>
</div>
</nav>

<br>
<section class="ftco-section contact-section ftco-degree-bg">
<div class="container">
<div class="row d-flex mb-5 contact-info">
<div class="col-md-12 mb-4">
<h2 class="h4">SCHOOL OF POSTGRADUATE STUDIES</h2>
</div>
<div class="w-100"></div>
<div class="col-md-3">
<p><span>Registration of Courses (Subsequent Years))</span></p>
</div>
<div class="col-md-3">
<p><span>Form NO:</span> <a href="004">SPGS Form 008</a></p>
</div>
<div class="col-md-3">
<p><span>Support:</span> <a href="https://support.unizik.edu.ng"><span class="__cf_email__" data-cfemail="8fe6e1e9e0cff6e0fafdfce6fbeaa1ece0e2">[email&#160;protected]</span></a></p>
</div>
<div class="col-md-3">
<p><span>Website</span> <a href="https://pg.unizik.edu.ng">PG School</a></p>
</div>
</div>
<hr />
<b style="color:green">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
include '../../include/config.php';



if
    (isset($_POST['full_name'])){
    $full_name = $_POST['full_name'];
    
}
if (isset($_POST['phone_number'])){
$phone_number = $_POST['phone_number'];

}

  if (isset($_POST['email'])){
    $email = $_POST['email'];
  } 

   if (isset($_POST['permanent_address'])){
    $permanent_address = $_POST['permanent_address'];
   }

   if (isset($_POST['correspondence_address'])){
    $correspondence_address = $_POST['correspondence_address'];
   }

   if (isset($_POST['date_of_birth'])){
    $date_of_birth = $_POST['date_of_birth'];
   }


      if (isset($_POST['Name_Sponsor'])){
        $Name_Sponsor = $_Post['Name_Sponsor'];
      }

if (isset($_POST['Address_Sponsor'])){
    $Address_Sponsor = $_POST['Address_Sponsor'];
}

   if (isset($_POST['University'])){
    $University = $_POST['University'];
   }


   if (isset($_POST['Degree'])){
    $Degree = $_POST['Degree'];
   }
    
    if (isset($_POST['Course'])){
        $Course = $_POST['Course'];
    }


     if (isset($_POST['date_sch'])){
        $date_sch = $_POST['date_sch'];
     }
   
     if (isset($_POST['Institutions'])){
        $Institutions = $_POST['Institutions'];
     }

       if (isset($_POST['certificate'])){
        $certificate = $_POST['certificate'];
       }

       if (isset($_POST['area_special'])){
        $area_special = $_POST['area_special'];
       }

       if (isset($_POST['date_inst'])){
        $date_inst = $_POST['date_inst'];
       }

       if (isset($_POST['date_first'])){
        $date_first = $_POST['date_first'];
       }

       if (isset($_POST['higher_degree'])){
        $higher_degree = $_POST['higher_degree'];
       }
       
       if (isset($_POST['mode_study'])){
        $mode_study = $_POST['mode_study'];
       }





// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





$sql = "INSERT INTO form004 (
    full_name,
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
VALUES (
    '$full_name',
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
'$certificate',
'$area_special',
'$date_inst',
'$date_first',
'$higher_degree',
'$mode_study' )";

if (mysqli_query($conn, $sql)) {
    echo"<b style='color:green'>";
    echo $full_name; 
    echo" you form has been created successfully ";
    echo"</b>";
} else {
    echo"<b style='color:red'> ";
    echo "Error: " .mysqli_error($conn); 
    echo "<b>";
}

mysqli_close($conn);

}
?>




<!-- Begining of the form --> 
<form id="regForm" style="margin-top:-30px"  action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<div class="tab">
<div style="text-align:center">
<h3>REGISTRATION OF COURSES</h3>
</div>
<div class="row block-9">

<div class="col-md-6 pr-md-5">

<div class="form-group">
<input type="text" class="form-control" oninput="this.className = ''" required='required' name="department"  placeholder="Department:">
</div>


<div class="form-group">
<input type="text" class="form-control" oninput="this.className = ''" name="faculty" placeholder="Faculty:">
</div>




</div>
<div class="col-md-6">

<div class="form-group">
<input type="text" class="form-control"  oninput="this.className = ''" name="session" placeholder="Session:">
</div>



<div class="form-group">
<input type="text" oninput="this.className = ''" class="form-control" name="semester" placeholder="Semester:">
</div>



</div>
</div>
</div>
<!-- Seconed face -->

<div class="tab">
<div style="text-align:center">
<h3>Personal Details</h3>
</div>
<div class="row block-9">
<div class="col-md-6 pr-md-5">

<div class="form-group">
<input type="text" oninput="this.className = ''" class="form-control" name="name" placeholder="Name:  ">
</div>

<div class="form-group">

<select class="browser-default custom-select" oninput="this.className = ''" name="sex" searchable="Search here.." require>
  <option value="" disabled selected>Choose your Sex</option>
  <option value="male">Male  </option>
            <option value="female">Female</option>
</select></div>


<div class="form-group">
<input type="text" oninput="this.className = ''" class="form-control" name="campus_address" placeholder="Campus Address:  ">
</div>





<div class="form-group">
<input type="text" oninput="this.className = ''" class="form-control" name="permanent_address" placeholder="Permanent Address:  ">
</div>


</div>

<div class="col-md-6 pr-md-5">

<div class="form-group">
<input type="text" oninput="this.className = ''" class="form-control" name="degree" placeholder="Degree or Diploma in View: ">
</div>

<div class="form-group">

<select class="browser-default custom-select" oninput="this.className = ''" name="mode" searchable="Search here.." require>
  <option value="" disabled selected>Choose your Mode of Study</option>
  <option value="Part Time">Part Time </option>
            <option value="Full Time">Full Time</option>
</select></div>

<div class="form-group">
<input type="text" oninput="this.className = ''" class="form-control" name="expectedYOG" placeholder="Expected Year of Graduation: ">
</div>

</div>

</div>
</div>

<!-- Third face -->


<div class="tab">
<div style="text-align:center">
<h3>FIRST SEMESTER</h3>
</div>
<div class="row block-9">

<div class="col-md-12 pr-md-12">

<table class="table-responsive table-bordered ">
<tr>
<th>S/N</th>
<th>Dept.</th>
<th>Course Code</th>
<th>Course Title</th>
<th>Credit</th>
<th>Remark  </th>

</tr>

<tr>
<td>1</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept1" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code1" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title1" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit1" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark1" placeholder="Remark ">
</div></td>

</tr>

<tr>
<td>2</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept2" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code2" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title2" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit2" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark2" placeholder="Remark ">
</div></td>

</tr>

<tr>
<td>3</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept3" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code3" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title3" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit3" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark3" placeholder="Remark ">
</div></td>

</tr>

<tr>
<td>4</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept4" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code4" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title4" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit4" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark4" placeholder="Remark ">
</div></td>

</tr>


<tr>
<td>5</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept5" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code5" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title5" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit5" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark5" placeholder="Remark ">
</div></td>

</tr>

<tr>
<td>6</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept6" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code6" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title5" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit6" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark6" placeholder="Remark ">
</div></td>

</tr>

<tr>
<td>7</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept7" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code7" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title7" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit7" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark7" placeholder="Remark ">
</div></td>

</tr>

<tr>
<td>8</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept8" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code8" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title8" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit8" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark8" placeholder="Remark ">
</div></td>

</tr>

<tr>
<td>9</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept9" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code9" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title9" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit9" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark9" placeholder="Remark ">
</div></td>

</tr>

<tr>
<td>10</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept10" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code10" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title10" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit10" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark10" placeholder="Remark ">
</div></td>

</tr>


</table>


</div>
</div>
</div>

<!-- Fourth face -->
<div class="tab">
<div style="text-align:center">
<h3>SECOND SEMESTER</h3>
</div>
<div class="row block-9">
<div class="col-md-12 pr-md-12">


<table class="table-responsive table-bordered ">
<tr>
<th>S/N</th>
<th>Dept.</th>
<th>Course Code</th>
<th>Course Title</th>
<th>Credit</th>
<th>Remark  </th>

</tr>

<tr>
<td>1</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept21" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code21" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title21" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit21" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark21" placeholder="Remark ">
</div></td>

</tr>

<tr>
<td>2</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept22" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code22" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title22" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit22" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark22" placeholder="Remark ">
</div></td>

</tr>

<tr>
<td>3</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept23" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code23" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title23" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit23" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark23" placeholder="Remark ">
</div></td>

</tr>

<tr>
<td>4</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept24" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code24" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title24" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit24" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark24" placeholder="Remark ">
</div></td>

</tr>


<tr>
<td>5</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept25" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code25" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title25" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit25" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark25" placeholder="Remark ">
</div></td>

</tr>

<tr>
<td>6</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept26" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code26" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title25" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit26" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark26" placeholder="Remark ">
</div></td>

</tr>

<tr>
<td>7</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept27" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code27" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title27" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit27" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark27" placeholder="Remark ">
</div></td>

</tr>

<tr>
<td>8</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept28" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code28" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title28" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit28" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark28" placeholder="Remark ">
</div></td>

</tr>

<tr>
<td>9</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept29" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code29" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title29" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit29" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark29" placeholder="Remark ">
</div></td>

</tr>

<tr>
<td>10</td>
<td >
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="dept210" placeholder="Dept.">
</div>
</td>
<td>
<div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course_code210" placeholder="Course Code ">
</div>
</td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="course title210" placeholder="Course Title ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Credit210" placeholder="Credit ">
</div></td>
<td><div class="form-group">
<input style="width:200px" type="text" oninput="this.className = ''" class="form-control" name="Remark210" placeholder="Remark ">
</div></td>

</tr>


</table>


</div>


</div>
</div>



<div class="row block-9">
<div class="col-md-9 pr-md-9">
  <button type="button" class="btn btn-primary py-3 px-5" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="submit" class="btn btn-primary py-3 px-5" id="nextBtn" onclick="nextPrev(1)">Next</button>

</div>
</div>


<div style="overflow:auto" class="row block-9">
<div style="float:right" class="col-md-9 pr-md-9" >

  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</div>
</div>


</form>

</div>



</section>
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
<script src="../../js/jquery.min.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
<script src="../../js/jquery-migrate-3.0.1.min.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
<script src="../../js/popper.min.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
<script src="../../js/bootstrap.min.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
<script src="../../js/jquery.easing.1.3.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
<script src="../../js/jquery.waypoints.min.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
<script src="../../js/jquery.stellar.min.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
<script src="../../js/owl.carousel.min.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
<script src="../../js/jquery.magnific-popup.min.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
<script src="../../js/aos.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
<script src="../../js/jquery.animateNumber.min.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
<script src="../../js/bootstrap-datepicker.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
<script src="../../js/jquery.timepicker.min.html" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
<script src="../../js/scrollax.min.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
<script src="../../js/google-map.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
<script src="../../js/main.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
<!--<script type="20b60bcd3cfe9b2f912c55b7-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script> -->
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="20b60bcd3cfe9b2f912c55b7-|49" defer=""></script></body>

<!-- Mirrored from colorlib.com/preview/theme/pgschool/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jul 2019 14:26:18 GMT -->
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script> 



</html>