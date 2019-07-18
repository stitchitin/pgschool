<?php
    $servername = "localhost";
    $username = "root";
    $password = "startman";
    $dbname = "pg_school";

    if (isset($_POST['full_name'])) {
        $full_name = $_POST['full_name'];
    }
    if (isset($_POST['phone_number'])) {
        $phone_number = $_POST['phone_number'];
    }
    if (isset($_POST['eamil'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['permanent_address'])) {
        $permanent_address = $_POST['permanent_address'];
    }
    if (isset($_POST['correspondence_address'])) {
        $correspondence_address = $_POST['correspondence_address'];
    }
    if (isset($_POST['date_of_birth'])) {
        $date_of_birth = $_POST['date_of_birth'];
    }
    if (isset($_POST['Name_Sponsor'])) {
        $Name_Sponsor = $_Post['Name_Sponsor'];
    }
    if (isset($_POST['Address_Sponsor'])) {
        $Address_Sponsor = $_POST['Address_Sponsor'];
    }
    if (isset($_POST['University'])) {
        $University = $_POST['University'];
    }
    if (isset($_POST['Degree'])) {
        $Degree = $_POST['Degree'];
    }
    if (isset($_POST['Course'])) {
        $Course = $_POST['Course'];
    }
    if (isset($_POST['date_sch'])) {
        $date_sch = $_POST['date_sch'];
    }
    if (isset($_POST['Institutions'])) {
        $Institutions = $_POST['Institutions'];
    }
    if (isset($_POST['certificate'])) {
        $certificate = $_POST['certificate'];
    }
    if (isset($_POST['area_special'])) {
        $area_special = $_POST['area_special'];
    }
    if (isset($_POST['date_inst'])) {
        $date_inst = $_POST['date_inst'];
    }
    if (isset($_POST['date_first'])) {
        $date_first = $_POST['date_first'];
    }
    if (isset($_POST['higher_degree'])) {
        $higher_degree = $_POST['higher_degree'];
    }
    if (isset($_POST['mode_study'])) {
        $mode_study = $_POST['mode_study'];
    }

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO form004 (
            full_name, phone_number, email, permanent_address, 
            correspondence_address, date_of_birth, Name_Sponsor,
            Address_Sponsor, University, Degree, Course, date_sch,
            Institutions, Certificate_Obtained, area_special, date_inst,
            date_first, higher_degree, mode_study
        ) 
        VALUES (
            '$full_name', '$phone_number', '$email', '$permanent_address',
            '$correspondence_address', '$date_of_birth', '$Name_Sponsor', 
            '$Address_Sponsor', '$University', '$Degree', '$Course', 
            '$date_sch', '$Institutions', '$certificate', '$area_special',
            '$date_inst', '$date_first', '$higher_degree', '$mode_study' 
        )";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>