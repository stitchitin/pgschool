<?php include '../../include/header.php'; ?>

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
    (isset($_POST['department'])){
    $department = $_POST['department'];
    
}
if (isset($_POST['faculty'])){
$faculty = $_POST['faculty'];

}

  if (isset($_POST['session'])){
    $session = $_POST['session'];
  } 

   if (isset($_POST['semester'])){
    $semester = $_POST['semester'];
   }

   if (isset($_POST['name'])){
    $name = $_POST['name'];
   }

   if (isset($_POST['sex'])){
    $sex = $_POST['sex'];
   }


      if (isset($_POST['campus_address'])){
        $campus_address = $_Post['campus_address'];
      }

if (isset($_POST['permanent_address'])){
    $permanent_address = $_POST['permanent_address'];
}

   if (isset($_POST['degree'])){
    $degree = $_POST['degree'];
   }


   if (isset($_POST['mode'])){
    $mode = $_POST['mode'];
   }
    
    if (isset($_POST['expectedYOG'])){
        $expectedYOG = $_POST['expectedYOG'];
    }


     if (isset($_POST['dept1'])){
        $dept1 = $_POST['dept1'];
     }
   
     if (isset($_POST['course_code1'])){
        $course_code1 = $_POST['course_code1'];
     }

       if (isset($_POST['course title1'])){
        $course_title1 = $_POST['course title1'];
       }

       if (isset($_POST['Credit1'])){
        $Credit1 = $_POST['Credit1'];
       }

       if (isset($_POST['Remark1'])){
        $Remark1 = $_POST['Remark1'];
       }


       if (isset($_POST['dept2'])){
        $dept2 = $_POST['dept2'];
     }
   
     if (isset($_POST['course_code2'])){
        $course_code2 = $_POST['course_code2'];
     }

       if (isset($_POST['course title2'])){
        $course_title2 = $_POST['course title2'];
       }

       if (isset($_POST['Credit2'])){
        $Credit2 = $_POST['Credit2'];
       }

       if (isset($_POST['Remark2'])){
        $Remark2 = $_POST['Remark2'];
       }


       if (isset($_POST['dept3'])){
        $dept3 = $_POST['dept3'];
     }
   
     if (isset($_POST['course_code3'])){
        $course_code3 = $_POST['course_code3'];
     }

       if (isset($_POST['course title3'])){
        $course_title3 = $_POST['course title3'];
       }

       if (isset($_POST['Credit3'])){
        $Credit3 = $_POST['Credit3'];
       }

       if (isset($_POST['Remark3'])){
        $Remark3 = $_POST['Remark3'];
       }

       if (isset($_POST['dept4'])){
        $dept4 = $_POST['dept4'];
     }
   
     if (isset($_POST['course_code4'])){
        $course_code4 = $_POST['course_code4'];
     }

       if (isset($_POST['course title4'])){
        $course_title4 = $_POST['course title4'];
       }

       if (isset($_POST['Credit4'])){
        $Credit4 = $_POST['Credit4'];
       }

       if (isset($_POST['Remark4'])){
        $Remark4 = $_POST['Remark4'];
       }


       if (isset($_POST['dept5'])){
        $dept5 = $_POST['dept5'];
     }
   
     if (isset($_POST['course_code5'])){
        $course_code5 = $_POST['course_code5'];
     }

       if (isset($_POST['course title5'])){
        $course_title5 = $_POST['course title5'];
       }

       if (isset($_POST['Credit5'])){
        $Credit5 = $_POST['Credit5'];
       }

       if (isset($_POST['Remark5'])){
        $Remark5 = $_POST['Remark5'];
       }

       if (isset($_POST['dept6'])){
        $dept6 = $_POST['dept6'];
     }
   
     if (isset($_POST['course_code6'])){
        $course_code6 = $_POST['course_code6'];
     }

       if (isset($_POST['course title6'])){
        $course_title6 = $_POST['course title6'];
       }

       if (isset($_POST['Credit6'])){
        $Credit6 = $_POST['Credit6'];
       }

       if (isset($_POST['Remark6'])){
        $Remark6 = $_POST['Remark6'];
       }
      

       if (isset($_POST['dept7'])){
        $dept7 = $_POST['dept7'];
     }
   
     if (isset($_POST['course_code7'])){
        $course_code7 = $_POST['course_code7'];
     }

       if (isset($_POST['course title7'])){
        $course_title7 = $_POST['course title7'];
       }

       if (isset($_POST['Credit7'])){
        $Credit7 = $_POST['Credit7'];
       }

       if (isset($_POST['Remark7'])){
        $Remark7 = $_POST['Remark7'];
       }


       if (isset($_POST['dept8'])){
        $dept8 = $_POST['dept8'];
     }
   
     if (isset($_POST['course_code8'])){
        $course_code8 = $_POST['course_code8'];
     }

       if (isset($_POST['course title8'])){
        $course_title8 = $_POST['course title8'];
       }

       if (isset($_POST['Credit8'])){
        $Credit8 = $_POST['Credit8'];
       }

       if (isset($_POST['Remark8'])){
        $Remark8 = $_POST['Remark8'];
       }

       if (isset($_POST['dept9'])){
        $dept9 = $_POST['dept9'];
     }
   
     if (isset($_POST['course_code9'])){
        $course_code9 = $_POST['course_code9'];
     }

       if (isset($_POST['course title9'])){
        $course_title9 = $_POST['course title9'];
       }

       if (isset($_POST['Credit9'])){
        $Credit9 = $_POST['Credit9'];
       }

       if (isset($_POST['Remark9'])){
        $Remark9 = $_POST['Remark9'];
       }

       if (isset($_POST['dept10'])){
        $dept10 = $_POST['dept10'];
     }
   
     if (isset($_POST['course_code10'])){
        $course_code10 = $_POST['course_code10'];
     }

       if (isset($_POST['course title10'])){
        $course_title10 = $_POST['course title10'];
       }

       if (isset($_POST['Credit10'])){
        $Credit10 = $_POST['Credit10'];
       }

       if (isset($_POST['Remark10'])){
        $Remark10 = $_POST['Remark10'];
       }
      




     if (isset($_POST['dept21'])){
      $dept21 = $_POST['dept21'];
   }
 
   if (isset($_POST['course_code21'])){
      $course_code21 = $_POST['course_code21'];
   }

     if (isset($_POST['course title21'])){
      $course_title21 = $_POST['course title21'];
     }

     if (isset($_POST['Credit21'])){
      $Credit21 = $_POST['Credit21'];
     }

     if (isset($_POST['Remark21'])){
      $Remark21 = $_POST['Remark21'];
     }


     if (isset($_POST['dept22'])){
      $dept22 = $_POST['dept22'];
   }
 
   if (isset($_POST['course_code22'])){
      $course_code22 = $_POST['course_code22'];
   }

     if (isset($_POST['course title22'])){
      $course_title22 = $_POST['course title22'];
     }

     if (isset($_POST['Credit22'])){
      $Credit22 = $_POST['Credit22'];
     }

     if (isset($_POST['Remark22'])){
      $Remark22 = $_POST['Remark22'];
     }


     if (isset($_POST['dept23'])){
      $dept23 = $_POST['dept23'];
   }
 
   if (isset($_POST['course_code23'])){
      $course_code23 = $_POST['course_code23'];
   }

     if (isset($_POST['course title23'])){
      $course_title23 = $_POST['course title23'];
     }

     if (isset($_POST['Credit23'])){
      $Credit23 = $_POST['Credit23'];
     }

     if (isset($_POST['Remark23'])){
      $Remark23 = $_POST['Remark23'];
     }

     if (isset($_POST['dept24'])){
      $dept24 = $_POST['dept24'];
   }
 
   if (isset($_POST['course_code24'])){
      $course_code24 = $_POST['course_code24'];
   }

     if (isset($_POST['course title24'])){
      $course_title24 = $_POST['course title24'];
     }

     if (isset($_POST['Credit24'])){
      $area_special = $_POST['Credit24'];
     }

     if (isset($_POST['Remark24'])){
      $date_inst = $_POST['Remark24'];
     }


     if (isset($_POST['dept25'])){
      $dept25 = $_POST['dept25'];
   }
 
   if (isset($_POST['course_code25'])){
      $course_code25 = $_POST['course_code25'];
   }

     if (isset($_POST['course title25'])){
      $course_title25 = $_POST['course title25'];
     }

     if (isset($_POST['Credit25'])){
      $Credit25 = $_POST['Credit25'];
     }

     if (isset($_POST['Remark25'])){
      $Remark25 = $_POST['Remark25'];
     }

     if (isset($_POST['dept26'])){
      $dept26 = $_POST['dept26'];
   }
 
   if (isset($_POST['course_code26'])){
      $course_code26 = $_POST['course_code26'];
   }

     if (isset($_POST['course title26'])){
      $course_title26 = $_POST['course title26'];
     }

     if (isset($_POST['Credit26'])){
      $Credit26 = $_POST['Credit26'];
     }

     if (isset($_POST['Remark26'])){
      $Remark26 = $_POST['Remark26'];
     }
    

     if (isset($_POST['dept27'])){
      $dept27 = $_POST['dept27'];
   }
 
   if (isset($_POST['course_code27'])){
      $course_code27 = $_POST['course_code27'];
   }

     if (isset($_POST['course title27'])){
      $certificate = $_POST['course title27'];
     }

     if (isset($_POST['Credit27'])){
      $area_special = $_POST['Credit27'];
     }

     if (isset($_POST['Remark27'])){
      $date_inst = $_POST['Remark27'];
     }


     if (isset($_POST['dept28'])){
      $date_sch = $_POST['dept28'];
   }
 
   if (isset($_POST['course_code28'])){
      $course_code28 = $_POST['course_code28'];
   }

     if (isset($_POST['course title28'])){
      $course_title28 = $_POST['course title28'];
     }

     if (isset($_POST['Credit28'])){
      $Credit28 = $_POST['Credit28'];
     }

     if (isset($_POST['Remark28'])){
      $date_inst = $_POST['Remark28'];
     }

     if (isset($_POST['dept29'])){
      $dept29 = $_POST['dept29'];
   }
 
   if (isset($_POST['course_code29'])){
      $course_code29 = $_POST['course_code29'];
   }

     if (isset($_POST['course title29'])){
      $course_title29 = $_POST['course title29'];
     }

     if (isset($_POST['Credit29'])){
      $Credit29 = $_POST['Credit29'];
     }

     if (isset($_POST['Remark29'])){
      $Remark29 = $_POST['Remark29'];
     }

     if (isset($_POST['dept210'])){
      $dept210 = $_POST['dept210'];
   }
 
   if (isset($_POST['course_code210'])){
      $course_code210 = $_POST['course_code210'];
   }

     if (isset($_POST['course title210'])){
      $course_title210 = $_POST['course title210'];
     }

     if (isset($_POST['Credit210'])){
      $Credit210 = $_POST['Credit210'];
     }

     if (isset($_POST['Remark210'])){
      $Remark210 = $_POST['Remark210'];
     }
    
      
      
      





// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





$sql = "INSERT INTO form008 (
department,
faculty,
session,
semester,
name,
sex,
campus_address,
permanent_address,
degree,
mode,
expectedYOG,
dept1,
course_code1,
course_title1,
Credit1,
Remark1,
dept2,
course_code2,
course title2,
Credit2,
Remark2,
dept3,
course_code3,
course title3,
Credit3,
Remark3,
dept4,
course_code4,
course title4,
Credit4,
Remark4,
dept5,
course_code5,
course title5,
Credit5,
Remark5,
dept6,
course_code6,
course title6,
Credit6,
Remark6,
dept7,
course_code7,
course title7,
Credit7,
Remark7,
dept8,
course_code8,
course title8,
Credit8,
Remark8,
dept9,
course_code9,
course title9,
Credit9,
Remark9,
dept10,
course_code10,
course title10,
Credit10,
Remark10,
dept20,
course_code20,
course title20,
Credit20,
Remark20,
dept21,
course_code21,
course title21,
Credit21,
Remark21,
dept22,
course_code22,
course title22,
Credit22,
Remark22,
dept23,
course_code23,
course title23,
Credit23,
Remark23,
dept24,
course_code24,
course title24,
Credit24,
Remark24,
dept25,
course_code25,
course title25,
Credit25,
Remark25,
dept26,
course_code26,
course title26,
Credit26,
Remark26,
dept27,
course_code27,
course title27,
Credit27,
Remark27,
dept28,
course_code28,
course title28,
Credit28,
Remark28,
dept29,
course_code29,
course title29,
Credit29,
Remark29,
dept210,
course_code210,
course title210,
Credit210,
Remark210)
VALUES (
  '$department',
'$faculty',
'$session',
'$semester,
'$name',
'$sex',
'$campus_address',
'$permanent_address',
'$degree',
'$mode',
'$expectedYOG',
'$dept1',
'$course_code1',
'$course_title1',
'$Credit1',
'$Remark1',
'$dept2',
'$course_code2',
'$course_title2',
'$Credit2',
'$Remark2',
'$dept3',
'$course_code3',
'$course_title3',
'$Credit3',
'$Remark3',
'$dept4',
'$course_code4',
'$course_title4',
'$Credit4',
'$Remark4',
'$dept5',
'$course_code5',
'$course_title5',
'$Credit5',
'$Remark5',
'$dept6',
'$course_code6',
'$course_title6',
'$Credit6',
'$Remark6',
'$dept7',
'$course_code7',
'$course_title7',
'$Credit7',
'$Remark7',
'$dept8',
'$course_code8',
'$course_title8
'$Credit8',
'$Remark8',
'$dept9',
'$course_code9',
'$course_title9',
'$Credit9',
'$Remark9',
'$dept10',
'$course_code10',
'$course_title10',
'$Credit10',
'$Remark10',
'$dept20',
'$course_code20',
'$course_title20',
'$Credit20',
'$Remark20',
'$dept21',
'$course_code21',
'$course_title21',
'$Credit21',
'$Remark21',
'$dept22',
'$course_code22',
'$course_title22',
'$Credit22',
'$Remark22',
'$dept23',
'$course_code23',
'$course_title23',
'$Credit23',
'$Remark23',
'$dept24',
'$course_code24',
'$course_title24',
'$Credit24',
'$Remark24',
'$dept25',
'$course_code25',
'$course_title25',
'$Credit25',
'$Remark25',
'$dept26',
'$course_code26',
'$course_title26',
'$Credit26',
'$Remark26',
'$dept27',
'$course_code27',
'$course_title27',
'$Credit27',
'$Remark27',
'$dept28',
'$course_code28',
'$course_title28',
'$Credit28',
'$Remark28',
'$dept29',
'$course_code29',
'$course_title29'
'$Credit29',
'$Remark29'
'$dept210',
'$course_code210',
'$course_title210',
'$Credit210',
'$Remark210' )";

if (mysqli_query($conn, $sql)) {
    echo"<b style='color:green'>";
  
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



<?php include '../../include/footer.php'; ?>




</html>