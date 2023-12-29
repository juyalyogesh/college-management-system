<?php
include('session.php');
error_reporting(0);
?>
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include('asside.php');?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
        <?php include('nav.php');?>
          
  <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
          
              <h4 class="fw-bold py-3 mb-4"> New Teaher Ragister  </h4>

              <!-- Basic Layout -->
              <form method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Personal Details</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Teacher Name</label>
                          <input type="text" class="form-control" id="basic-default-fullname" name="t1" placeholder="Teacher Name" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Father Name</label>
                          <input type="text" class="form-control" id="basic-default-company" name="t2" placeholder="Father Name" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-text">Mother Name</label>
                          <div class="input-group input-group-merge">
                          <input type="text" class="form-control" id="basic-default-company" name="t3" placeholder="  Mother Name" required>
                         
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-phone">Phone No</label>
                          <input type="Number" id="basic-default-phone" name="t4" class="form-control phone-mask" placeholder="658 799 8941" required>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-phone">Email Address</label>
                          <input type="text" id="basic-default-email" class="form-control" name="t5" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" required>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-phone">Date Off Birth</label>
                          <input class="form-control" type="date" name="t6" value="2021-06-18" id="html5-date-input" required>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-message">Office Address </label>
                          <textarea id="basic-default-message" class="form-control" name="t7" placeholder=" Office Address" required></textarea>
                        </div>
                        
                      
                    </div>
                  </div>
                </div>
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Accadmic Details</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                     
                    
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Select Department</label>
  <select class="form-select" aria-label="Default select example" required name="t8" >
  <option value="">select</option>
  <option value="Physics">Physics</option>
  <option value="Mathematics">Mathematics</option>
  <option value="Chemistry">Chemistry</option>
  <option value="Mechanics">Mechanics</option>
  <option value="English">English</option>
  <option value="Electrical Technology">Electrical Technology</option>
  <option value="Programming"> Programming</option>
  <option value="Data Structures">Data Structures</option>

</select>
                        </div>
                       

                        <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Add Photo</label>
                          <div class="input-group input-group-merge">
                        <input class="form-control" type="file" id="fileToUpload" name="fileToUpload" >
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="sbt" >Send</button>
                    </div>
                  </div>
                </div>
              </div>
              </form>
            </div>


     <?php
    function validateEmail($email) {
      $pattern = '/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/';
      return !preg_match($pattern, $email);
      }

if(isset($_POST['sbt']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    $t5=$_POST['t5'];
    $t6=$_POST['t6'];
    $t7=$_POST['t7'];
    $t8=$_POST['t8'];
    $added_on=date("Y/m/d H:i:s");
    $query=mysqli_query($con,"select * from teacher_recorde where email_id='$t5'");
    $count=mysqli_num_rows($query);

    if($count>0){
echo"<script>alert('Email Already Ragister')</script>";
    }
    if(validateEmail($t5)){
      echo"<script>alert('Enter Valid Email Address !!')</script>";

    }
    else{
$target_dir = "teacher_photo/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

$con=mysqli_connect('localhost','root','','form');
if ($uploadOk == 0) {
  echo "<script>alert('something went wrong !!!')</script>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
  
  {
    mysqli_query($con,"insert into  teacher_recorde(name,father_name,mother_name,mobile_number,email_id,Date_of_birth,address,department,added_on,photo)values('$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$added_on','$target_file')");
    echo"<script>alert('Recorde Added Successfully');
    window.location = 'Teacher_Recorde.php';
    </script>
    ";

  } else {
    echo "<script>alert('Please Enter Valid Details');
    window.location = 'Teacher_Recorde.php';
    </script>";

  }
}
    }
}
?>









     <!-- / Content -->

            <!-- Footer -->
          <?php include('footer.php');?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
