<?php include '../../../include/header.php'    ?>
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



<br>
<section class="ftco-section contact-section ftco-degree-bg">
<div class="container">
<div class="row d-flex mb-5 contact-info">
<div class="col-md-12 mb-4">
<h2 class="h4">SCHOOL OF POSTGRADUATE STUDIES</h2>
</div>
<div class="w-100"></div>
<div class="col-md-3">
<p><span><strong>Add and Drop Form</strong></span></p>
</div>
<div class="col-md-3">
<p><span>Form NO:</span> <a href="004">SPGS Form 012</a></p>
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
<h3>Personal Details</h3>
</div>
<div class="row block-9">

<div class="col-md-6 pr-md-5">

<div class="form-group">
<input type="text" class="form-control" oninput="this.className = ''" name="full_name" required="required" placeholder="NAME IN FULL (SURNAME FIRST):">
</div>


<div class="form-group">
<input type="text" class="form-control" oninput="this.className = ''" ="phone_number" placeholder="PHONE NUMBER:">
</div>
<div class="form-group">
<input type="text" class="form-control"  oninput="this.className = ''" name="email" placeholder="EMAIL:">
</div>



</div>
<div class="col-md-6">

<div class="form-group">
<input type="text" oninput="this.className = ''" class="form-control" name="permanent_address" placeholder="PERMANENT HOME ADDRESS:">
</div>



<div class="form-group">
<input type="text" oninput="this.className = ''" class="form-control" name="correspondence_address" placeholder="CORRESPONDENCE ADDRESS:">
</div>

<div class="form-group">

<input type="date" oninput="this.className = ''" class="form-control" name="date_of_birth" placeholder="Date of Birth" required="required">

</div>

</div>
</div>
</div>
<!-- Seconed face -->

<div class="tab">
<div style="text-align:center">
<h3>Sponsor Details</h3>
</div>
<div class="row block-9">
<div class="col-md-9 pr-md-9">

<div class="form-group">
<input type="text" oninput="this.className = ''" class="form-control" name="Name_Sponsor" placeholder="Name of Sponsor:">
</div>

<div class="form-group">
<input type="text" oninput="this.className = ''" class="form-control" name="Address_Sponsor" placeholder="Address of Sponsor:">
</div>

</div>
</div>
</div>

<!-- Third face -->


<div class="tab">
<div style="text-align:center">
<h3>Degree/Qualification Obtained</h3>
</div>
<div class="row block-9">
<div class="col-md-6 pr-md-5">

<div class="form-group">
<input type="text" oninput="this.className = ''" class="form-control" name="University" placeholder="University:">
</div>

<div class="form-group">
<input type="text" oninput="this.className = ''" class="form-control" name="Degree" placeholder="Degree:">
</div>

</div>

<div class="col-md-6 pr-md-5">

<div class="form-group">
<input type="text" oninput="this.className = ''" class="form-control" name="Course" placeholder="Course:">
</div>

<div class="form-group">

<input type="date" oninput="this.className = ''" class="form-control" name="date_sch" placeholder="Date" required="required">

</div>

</div>
</div>
</div>

<!-- Fourth face -->
<div class="tab">
<div style="text-align:center">
<h3>OTHER QUALIFICATION(S)</h3>
</div>
<div class="row block-9">
<div class="col-md-6 pr-md-5">

<div class="form-group">
<input type="text" oninput="this.className = ''" class="form-control" name="Institutions" placeholder="Institutions:">
</div>

<div class="form-group">
<input type="text" oninput="this.className = ''" class="form-control" name="certificate" placeholder="Certificate Obtained:">
</div>

</div>

<div class="col-md-6 pr-md-5">

<div class="form-group">
<input type="text" oninput="this.className = ''" class="form-control" name="area_special" placeholder="Course/Subject
Area of Specialization:">
</div>

<div class="form-group">

<input type="date" oninput="this.className = ''" class="form-control" name="date_inst" placeholder="Date" required="required">

</div>

</div>
</div>
</div>

<!-- Fifth Area -->

<div class="tab">
<div style="text-align:center">
<h3> OTHER INFO'S</h3>
</div>
<div class="row block-9">
<div class="col-md-6 pr-md-5">

<div class="form-group">
<label>DATE OF FIRST REGISTRATION FOR HIGHER DEGREE COURSE.</label>
<input type="date" oninput="this.className = ''" class="form-control" name="date_first" placeholder="Date" required="required">

</div>

<div class="form-group">
<input type="text" oninput="this.className = ''" class="form-control" name="higher_degree" placeholder="HIGHER DEGREE IN VIEW:">
</div>

</div>

<div class="col-md-6 pr-md-5">

<div class="form-group">
<label for="mode_study"><strong>MODE OF STUDY</strong></label>
<select class="browser-default custom-select" oninput="this.className = ''" name="mode_study" searchable="Search here.." require>
  <option value="" disabled selected>Choose your Mode of Study</option>
  <option value="Full Time">FULL TIME  </option>
            <option value="Part Time">PART TIME</option>
</select>
</div>


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





<?php include '../../../include/footer.php'    ?>