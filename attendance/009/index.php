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
                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                        include '../../include/config.php';
                        if (isset($_POST['full_name'])) {
                            $full_name = $_POST['full_name'];
                        }
                        if (isset($_POST['phone_number'])) {
                            $phone_number = $_POST['phone_number'];
                        }
                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        $sql = "INSERT INTO form004 (
                                full_name
                            )
                            VALUES (
                                '$full_name'
                            )";

                        if (mysqli_query($conn, $sql)) {
                            echo "<b style='color:green'>";
                            echo $full_name;
                            echo " you form has been created successfully ";
                            echo "</b>";
                        } else {
                            echo "<b style='color:red'> ";
                            echo "Error: " . mysqli_error($conn);
                            echo "<b>";
                        }
                        mysqli_close($conn);
                    }
                ?>

                <!-- Begining of the form -->
                <form id="form009" style="margin-top:-30px" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="tab">
                        <div style="text-align:center">
                            <h3>Attendance Form Information</h3>
                        </div>
                        <div class="row block-12">
                            <div class="col-md-6 pr-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="department" placeholder="Department:">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="faculty" placeholder="Faculty:">
                                </div>
                            </div>
                            <div class="col-md-6 pr-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="academic_session" placeholder="Academic Session:">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="semester"
                                        placeholder="Semester:">
                                </div>
                            </div>
                        </div>
                        <div class="row block-12">
                            <div class="col-md-3 pr-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="course_code" placeholder="Course Code:">
                                </div>
                            </div>
                            <div class="col-md-9 pr-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="course_title"
                                        placeholder="Course Title:">
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
                                    <input type="text" class="form-control" name="course_lecturer"
                                        placeholder="Course Lecturer:">
                                </div>
                            </div>
                        </div>
                        <div class="row block-12">
                            <div class="col-md-3 pr-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="student_reg_number" placeholder="Student Reg Number:" >
                                </div>
                            </div>
                            <div class="col-md-9 pr-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="student_name"
                                        placeholder="Student Name:">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- I did not implement the form wizard fxn, felt no UX need -->
                    <button class="btn btn-primary py-3 px-5" id="nextBtn" type="button">Submit</button>
                    <!-- <button class="btn btn-primary py-3 px--55" id="nextBtn" type="button">Add Record</button> -->
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"
            type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
        <script src="../../js/google-map.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
        <script src="../../js/main.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
        <script src="../../js/form.js" type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
            type="20b60bcd3cfe9b2f912c55b7-text/javascript"></script>
        <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js"
            data-cf-settings="20b60bcd3cfe9b2f912c55b7-|49" defer=""></script>
    </body>
    <script>
        function previewFile() {
            var preview = document.querySelector('#passportImg');
            var file = document.querySelector('#passportFile').files[0];
            var reader = new FileReader();

            reader.addEventListener("load", function() {
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
</html>