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
        max-width:1100px;
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
      .imageBox{
        height:205px;
        width: 183px;
        max-height:205px;
        max-width: 183px;
        display:inline-block;
        background: lightgray;
      }
      #fileBox{
        width: 260px;
        display:inline-block;
        float:right;
      }
      .raddiiomale {
        margin-left: 4rem;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="http://localhost/pgschool/"><img src="https://unizik.edu.ng/wp-content/uploads/2017/02/nauweblogo1.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item cta"><a href="contact.html" class="nav-link"><span>Map</span></a></li>
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
            <p><span>APPLICATION</span></p>
          </div>
          <div class="col-md-3">
            <p><span>Form NO:</span> <a href="002">SPGS FORM 002</a></p>
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

            if(isset($_POST['full_name'])){
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
            $sql = "INSERT INTO form004 (full_name,phone_number,email,permanent_address,correspondence_address,date_of_birth,Name_Sponsor,Address_Sponsor,
            University,Degree,Course,date_sch,Institutions,Certificate_Obtained,area_special,date_inst,date_first,higher_degree,mode_study)
            VALUES ('$full_name','$phone_number','$email','$permanent_address','$correspondence_address','$date_of_birth','$Name_Sponsor','$Address_Sponsor',
              '$University','$Degree','$Course','$date_sch','$Institutions','$certificate','$area_special','$date_inst','$date_first','$higher_degree','$mode_study' )";

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
              <h3>Application Form Information</h3>
            </div>
            <div class="row block-9">
              <div class="col-md-9 pr-md-9">
                <div class="form-group">
                  <input type="text" class="form-control" name="userName" placeholder="User Name:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="formNumber" placeholder="Form Number:">
                </div>
              </div>
            </div>
          </div>

          <!-- Seconed face -->
          <div class="tab">
            <div style="text-align:center">
              <h3>Personal Information</h3>
            </div>
            <div class="row block-9">
              <div class="col-md-6 pr-md-5">
                <div class="form group">
                  <div class="imageBox">
                    <img src="" id="passportImg" alt="Upload Passport" height="200" width="180px">
                  </div>
                  <div class="custom-file" id="fileBox">
                    <input type="file" class="custom-file-input" onchange="previewFile()" id="passportFile">
                    <label class="custom-file-label" id="passportLabel" for="passportFile">Choose file</label>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <input type="text" class="form-control" name="surname" placeholder="Surname:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="firstname" placeholder="First Name:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="otherNames" placeholder="Other Names:">
                </div>
                <div class="form-group">
                  <label for="dobirth">Date of Birth:
                    <input type="date" class="form-control" name="date_of_birth" placeholder="Date of Birth">
                  </label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  Sex:
                  <div class="custom-control-inline custom-radio raddiiomale">
                    <input type="radio" class="custom-control-input" id="male" name="sex" value="male">
                    <label class="custom-control-label" for="male">Male </label>
                  </div>
                  <div class="custom-control-inline custom-radio">
                    <input type="radio" class="custom-control-input" id="female" name="sex" value="female">
                    <label class="custom-control-label" for="female"> Female</label>
                  </div>
                </div>
                <div class="form-group">
                  <select name="cars" class="custom-select">
                    <option selected>Marital Status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="state" placeholder="State:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="lga" placeholder="L.G.A:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="nationality" placeholder="Nationality:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="residentAddress" placeholder="Residential Address:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="phoneNumber" placeholder="Phone Number:">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email Address:">
                </div>
              </div>
            </div>
          </div>

          <!-- Third face -->
          <div class="tab">
            <div style="text-align:center">
              <h3>Academic Programme of Interest</h3>
            </div>
            <div class="row block-9">
              <div class="col-md-6 pr-md-5">
                <div class="form-group">
                  <input type="text" class="form-control" name="programmenView" placeholder="Programme in View:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="faculty" placeholder="Faculty:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="department" placeholder="Department:">
                </div>
              </div>
              <div class="col-md-6 pr-md-5">
                <div class="form-group">
                  <input type="text" class="form-control" name="courseofStudy" placeholder="Course of Study:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="areaSpecialization" placeholder="Area of Specialization">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="modofStudy" placeholder="Mode of Study:">
                </div>
              </div>
            </div>
          </div>

          <!-- Fourth face -->
          <div class="tab">
            <div style="text-align:center">
              <h3>Next of Kin/Sponsor Information</h3>
            </div>
            <div class="row block-9">
              <div class="col-md-6 pr-md-5">
                <div class="form-group">
                  <input type="text" class="form-control" name="nameNextofKin" placeholder="Name of Next of Kin:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="addressNextofKin" placeholder="Address of Next of Kin:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="phoneNextofKin" placeholder="Phone Number of Next of Kin:">
                </div>
              </div>
              <div class="col-md-6 pr-md-5">
                <div class="form-group">
                  <input type="text" class="form-control" name="nameSponsor" placeholder="Name of Sponsor:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="addressofSponsor" placeholder="Address of Sponsor">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="phoneofSponsor" placeholder="Phone Number of Sponsor:">
                </div>
              </div>
            </div>
          </div>

          <!-- Fifth face -->
          <div class="tab">
            <div style="text-align:center">
              <h3>O LEVEL Results or Equivalents</h3>
            </div>
            <div class="row block-9">
              <div class="col-md-6 pr-md-5">
                <div class="form-group">
                  <h4>Exam 1</h4>
                  <ul>
                    <input type="number" class="form-control" name="examNo" placeholder="Exam Year:">
                    <input type="text" class="form-control" name="examNo" placeholder="Exam Number:">
                    <input type="text" class="form-control" name="examCenter" placeholder="Exam Center:">
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 pr-md-5">
                <div class="form-group">
                  <h4>Exam 2</h4>
                  <ul>
                    <input type="number" class="form-control" name="examNo" placeholder="Exam Year:">
                    <input type="text" class="form-control" name="examNo" placeholder="Exam Number:">
                    <input type="text" class="form-control" name="examCenter" placeholder="Exam Center:">
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                    <li class="input-group mb-3">
                      <input type="text" class="form-control" name="subject" placeholder="Subject:">
                      <select name="grade" id="grade" class="form-control">
                        <option value="-1">Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Sixth Area -->
          <div class="tab">
            <div style="text-align:center">
              <h3>INSTITUTION(S) ATTENDED WITH DATES AND CERTIFICATES</h3>
            </div>
            <div class="row block-9">
              <div class="form-group">
                <ul>
                  <li class="input-group mb-5">
                    <input type="text" class="form-control" name="institution" placeholder="Institutions:">
                    <input type="text" class="form-control" name="certObtained" placeholder="Certificate Obtained:">
                    <input type="text" class="form-control" name="course" placeholder="Course/Subject:">
                    <input type="text" class="form-control" name="classOfCert" placeholder="Class of Certificate:">
                    <input type="text" class="form-control" name="date" placeholder="Date:">
                  </li>
                  <li class="input-group mb-5">
                    <input type="text" class="form-control" name="institution" placeholder="Institutions:">
                    <input type="text" class="form-control" name="certObtained" placeholder="Certificate Obtained:">
                    <input type="text" class="form-control" name="course" placeholder="Course/Subject:">
                    <input type="text" class="form-control" name="classOfCert" placeholder="Class of Certificate:">
                    <input type="text" class="form-control" name="date" placeholder="Date:">
                  </li>
                  <li class="input-group mb-5">
                    <input type="text" class="form-control" name="institution" placeholder="Institutions:">
                    <input type="text" class="form-control" name="certObtained" placeholder="Certificate Obtained:">
                    <input type="text" class="form-control" name="course" placeholder="Course/Subject:">
                    <input type="text" class="form-control" name="classOfCert" placeholder="Class of Certificate:">
                    <input type="text" class="form-control" name="date" placeholder="Date:">
                  </li>
                  <li class="input-group mb-5">
                    <input type="text" class="form-control" name="institution" placeholder="Institutions:">
                    <input type="text" class="form-control" name="certObtained" placeholder="Certificate Obtained:">
                    <input type="text" class="form-control" name="course" placeholder="Course/Subject:">
                    <input type="text" class="form-control" name="classOfCert" placeholder="Class of Certificate:">
                    <input type="text" class="form-control" name="date" placeholder="Date:">
                  </li>
                  <li class="input-group mb-5">
                    <input type="text" class="form-control" name="institution" placeholder="Institutions:">
                    <input type="text" class="form-control" name="certObtained" placeholder="Certificate Obtained:">
                    <input type="text" class="form-control" name="course" placeholder="Course/Subject:">
                    <input type="text" class="form-control" name="classOfCert" placeholder="Class of Certificate:">
                    <input type="text" class="form-control" name="date" placeholder="Date:">
                  </li>
                </ul>
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
    <!-- <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
      </svg>
    </div> -->

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
    <script src="../../js/form.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
    <!--<script type="20b60bcd3cfe9b2f912c55b7-text/javascript">
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script> -->
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="20b60bcd3cfe9b2f912c55b7-|49" defer=""></script></body>
    <script>
      function previewFile() {
        var preview = document.querySelector('#passportImg');
        var file    = document.querySelector('#passportFile').files[0];
        var reader  = new FileReader();

        reader.addEventListener("load", function () {
          preview.src = reader.result;
        }, false);

        if (file) {
          reader.readAsDataURL(file);
        }
      }

      // Add the following code if you want the name of the file appear on select
      document.querySelector("#passportFile").addEventListener("change", function() {
        var fileName = document.querySelector("#passportFile").value.split("\\").pop();
        document.querySelector("#passportLabel").innerText = fileName;
      });
    </script>
  </body>
</html>