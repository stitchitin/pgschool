<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        <title>WELCOME TO PG School Attendance Form 009</title>
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
                max-width: 1100px;
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

            hr {
                background-color: green;
                height: 5px;
            }

            .imageBox {
                height: 205px;
                width: 183px;
                max-height: 205px;
                max-width: 183px;
                display: inline-block;
                background: lightgray;
            }

            #fileBox {
                width: 260px;
                display: inline-block;
                float: right;
            }

            .raddiiomale {
                margin-left: 4rem;
            }

            /* .student-entry {
                display: block;
            } */
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="http://localhost/pgschool/"><img
                        src="https://unizik.edu.ng/wp-content/uploads/2017/02/nauweblogo1.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <p><span>ATTENDANCE</span></p>
                    </div>
                    <div class="col-md-3">
                        <p><span>Form NO:</span> <a href="009">SPGS FORM 009</a></p>
                    </div>
                    <div class="col-md-3">
                        <p><span>Support:</span> <a href="https://support.unizik.edu.ng"><span class="__cf_email__"
                                    data-cfemail="8fe6e1e9e0cff6e0fafdfce6fbeaa1ece0e2">[email&#160;protected]</span></a>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p><span>Website</span> <a href="https://pg.unizik.edu.ng">PG School</a></p>
                    </div>
                </div>
                <hr />
                <b style="color:green">
                <?php
                    error_reporting(0);
                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                        include '../../include/config.php';
                        if (isset($_POST['department'])) {
                            $department = $_POST['department'];
                        }
                        if (isset($_POST['faculty'])) {
                            $faculty = $_POST['faculty'];
                        }
                        if (isset($_POST['academic_session'])) {
                            $academic_session = $_POST['academic_session'];
                        }
                        if (isset($_POST['semester'])) {
                            $semester = $_POST['semester'];
                        }
                        if (isset($_POST['course_code'])) {
                            $course_code = $_POST['course_code'];
                        }
                        if (isset($_POST['course_title'])) {
                            $course_title = $_POST['course_title'];
                        }
                        if (isset($_POST['student_reg_number'])) {
                            $student_reg_number = $_POST['student_reg_number'];
                        }
                        if (isset($_POST['student_name'])) {
                            $student_name = $_POST['student_name'];
                        }
                        if (isset($_POST['lecture_date'])) {
                            $lecture_date = $_POST['lecture_date'];
                        }
                        if (isset($_POST['course_lecturer'])) {
                            $course_lecturer = $_POST['course_lecturer'];
                        }
                        
                        try{
                            $dbh = new PDO("mysql:host=localhost;dbname=".$dbname, $username, $password);
                        } catch (PDOException $e) {
                            print "Error!: ". $e->getMessage(). "<br />";
                            die();
                        }
                            
                        $stmt = $dbh->prepare("INSERT INTO form009 (department, faculty, academic_session, semester, course_code, course_title, student_reg_number, student_name, lecture_date, course_lecturer) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                        
                        $stmt->bindParam(1, $department);
                        $stmt->bindParam(2, $faculty);
                        $stmt->bindParam(3, $academic_session);
                        $stmt->bindParam(4, $semester);
                        $stmt->bindParam(5, $course_code);
                        $stmt->bindParam(6, $course_title);
                        $stmt->bindParam(7, $student_reg_number);
                        $stmt->bindParam(8, $student_name);
                        $stmt->bindParam(9, $lecture_date);
                        $stmt->bindParam(10, $course_lecturer);
                            
                        $arr = $_POST;
                        try {
                            for ($i = 0; $i <= count($arr['student_name'])-1; $i++) {
                                $student_name = $arr['student_name'][$i];
                                $student_reg_number = $arr['student_reg_number'][$i];
                                $department = $arr['department'];
                                $faculty = $arr['faculty'];
                                $academic_session = $arr['academic_session'];
                                $semester = $arr['semester'];
                                $course_code = $arr['course_code'];
                                $course_title = $arr['course_title'];
                                $lecture_date = $arr['lecture_date'];
                                $course_lecturer = $arr['course_lecturer'];
                                $stmt->execute();
                            }
                            
                                echo "<b style='color:green'>";
                                echo "Form submitted successfully";
                                echo "</b>";

                        } catch (PDOExecption $e) {
                            echo "<b style='color:red'> ";
                            echo "Error: " . $e->getMessage();
                            echo "<b>";
                        }



                        // // Create connection
                        // $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // // Create SQL query
                        // $sql = "INSERT INTO form009 (
                        //     department, faculty, academic_session, semester, course_code, course_title, student_reg_number, student_name, lecture_date, course_lecturer
                        //     )
                        //     VALUES (
                        //     '$department', '$faculty', '$academic_session', '$semester', '$course_code', '$course_title', '$student_reg_number', '$student_name', '$lecture_date', '$course_lecturer'
                        // )";
                        // if (!$conn) {
                        //     die("Connection failed: " . mysqli_connect_error());
                        // } else {
                        //     //$arr = $_POST;
                        //     for($i = 0; $i <= count($_POST['student_name'])-1; $i++){
                        //         $student_name = $_POST['student_name'][$i];
                        //         $student_reg_number = $_POST['student_reg_number'][$i];
                        //         // $department = $_POST['department'];
                        //         // $faculty = $_POST['faculty'];
                        //         // $academic_session = $_POST['academic_session'];
                        //         // $semester = $_POST['semester'];
                        //         // $course_code = $_POST['course_code'];
                        //         // $course_title = $_POST['course_title'];
                        //         // $lecture_date = $_POST['lecture_date'];
                        //         // $course_lecturer = $_POST['course_lecturer'];
                                
                        //         mysqli_query($conn, $sql);
                        //         // };  else {
                        //         //     if (mysqli_query($conn, $sql)) {
                        //         //         echo "<b style='color:green'>";
                        //         //         echo "Form submitted successfully";
                        //         //         echo "</b>";
                        //         //         // TODO: Refresh the page or redirect to specific page
                        //         //     } else {
                        //         //         echo "<b style='color:red'> ";
                        //         //         echo "Error: " . mysqli_error($conn);
                        //         //         echo "<b>";
                        //         //     }
                        //         mysqli_close($conn);
                    }
                ?>

                <!-- Begining of the form -->
                <form id="form009" style="margin-top:-30px" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="tab">
                        <div style="text-align:center">
                            <h3>Attendance Form Information</h3>
                        </div>
                        <!-- Div content for default form values start -->
                        <!-- <div> -->
                            <div class="row block-12">
                                <div class="col-md-6 pr-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="department" placeholder="Department:" >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="faculty" placeholder="Faculty:" >
                                    </div>
                                </div>
                                <div class="col-md-6 pr-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="academic_session" placeholder="Academic Session:" >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="semester" placeholder="Semester:" >
                                    </div>
                                </div>
                            </div>
                            <div class="row block-12">
                                <div class="col-md-3 pr-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="course_code" placeholder="Course Code:" >
                                    </div>
                                </div>
                                <div class="col-md-9 pr-md-9">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="course_title" placeholder="Course Title:" >
                                    </div>
                                </div>
                            </div>
                            <div class="row block-12">
                                <div class="col-md-3 pr-md-3">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="lecture_date" >
                                    </div>
                                </div>
                                <div class="col-md-9 pr-md-9">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="course_lecturer" placeholder="Course Lecturer:" >
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->
                        <!-- Div content for default form values end -->
                        <!-- Div content for dynamic student form values start -->
                        <div class="row block-12" id="dynamicStudentEntry">
                            <div class="col-md-12 pr-md-12">
                                <div class="form-group">
                                    <button type="button" id="btnAdd" class="btn btn-primary">Add Student Attendance</button>
                                </div>
                            </div>
                            <!-- <div class="row group block-12 form-group"> -->
                            <div class="col-md-12 pr-md-12 student-entry">
                                <div class="col-md-3 pr-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="student_reg_number[]" placeholder="Student Reg Number:" >
                                    </div>
                                </div>
                                <div class="col-md-5 pr-md-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="student_name[]" placeholder="Student Name:" >
                                    </div>
                                </div>
                                <div class="col-md-2 pr-md-2">
                                    <button type="button" class="btn btn-danger btnRemove">Remove</button>
                                </div>
                            </div>
                        </div>
                        <!-- Div content for dynamic student form values end -->
                    </div>
                    <!-- I did not implement the form wizard fxn, felt no UX need -->
                    <button class="btn btn-primary py-3 px-5" type="submit">Submit</button>
                </form>
            </div>
        </section>

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
        <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="20b60bcd3cfe9b2f912c55b7-|49" defer=""></script>
        <script src="../../js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="../../js/jquery.multifield.min.js" type="text/javascript"></script>        
        <script>
            $('#dynamicStudentEntry').multifield({
                section: '.student-entry',
                btnAdd:'#btnAdd',
                btnRemove:'.btnRemove',
            });
        </script> 
    </body>   
</html>