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
          
              <h4 class="fw-bold py-3 mb-4"> Admin Enroll </h4>

              <!-- Basic Layout -->
              <form method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Admin Detail</h5>
                      <small class="text-muted float-end"></small>
                    </div>

                    <div class="card-body">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">ADMIN ID</label>
                          <input type="text" class="form-control" id="basic-default-fullname" name="t1" placeholder="Admin id" required>
                        </div>
                        <?php
$id=$_GET['id'];
$mquery=mysqli_query($con,"select * from admin_recorde where a_id='$id'");
while($row=mysqli_fetch_array($mquery)){
?>  
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Admin Name</label>
                          <input type="text" class="form-control" id="basic-default-fullname" value="<?php echo $row['name'] ?>"  name="t2" placeholder="Student Name" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Email Id</label>
                          <input type="text" class="form-control" id="basic-default-fullname" value="<?php echo $row['email_id'] ?>"  name="t3" placeholder=" Name" required>
                        </div>
                        <?php
}
?>
                       
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Select Year</label>
                          <div class="input-group input-group-merge">
                          <select id="defaultSelect" required name="t4" class="form-select">
                          <option value="">select</option>
                          <option value="2015">2015</option>
                          <option value="2016">2016</option>
                          <option value="2017">2017</option>
                          <option value="2018">2018</option>
                          <option value="2019">2019</option>
                          <option value="2020">2020</option>
                          <option value="2021">2021</option>
                          <option value="2022">2022</option>

                        </select>
                          </div>
                        </div>

                        
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Select Type</label>
                          <div class="input-group input-group-merge">
                          <select id="defaultSelect" required name="t5" class="form-select">
                          <option value="">select</option>
                          <option value="Admin">Admin</option>
                          <option value="Student">Student</option>
                          <option value="Teacher">Teacher</option>
                        </select>
                          </div>
                        </div>
                        <div class="mb-3">
                       <a href="view_admin_list.php?id=<?php echo$id;?>"> <button type="submit" class="btn btn-primary" name="sbt" >Submit</button></a>
                        </div>

                    </div>
                    
                  </div>
                </div>
                
              </div>
              </form>
            </div>

<?php
if(isset($_POST['sbt']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    $t5=$_POST['t5'];
    $added_on=date("Y/m/d H:i:s");
    mysqli_query($con,"insert into stu_enroll(enroll_no,name,email_id,year,type,status,admin_id,added_on)values('$t1','$t2','$t3','$t4','$t5','0','$id','$added_on')");
    echo"<script>alert('Recorde Added Successfully');
    window.location = 'view_admin_list.php';
    </script>
    ";
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

    <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div>

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
