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
  <style>
   
    .img1{
        width: 20rem;
    }
    .img2{
        display: inline;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 100%;
    }
    .pannelcontainer{
        padding-top: 20px;
    }
    .details{
        padding-top: 1rem;
        display: flex;
        }
       
    p{
        margin-bottom:0rem;
        color: black;
font-weight: 600;

    }
    h6{
        margin-bottom: 0rem;
font-weight: 600;
font-size: 1rem;
    }
    
  </style>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php
include('student_portal_asside.php');
?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
        
<!-- Navbar -->
<?php
include('student_portal_nav.php');

?>
          <!-- / Navbar -->
          
  <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
          
            <h3 class="fw-bold text-center py-3 mb-4"> Lecturer </h3>

              <!-- Basic Layout -->
      
              
              <div class="container">  
                <div class="row">
<?php
$query=mysqli_query($con,"select * from student_vedio");
while($row=mysqli_fetch_array($query)){

$user_role=$row['department'];

$department=$row['department'];
$fetch_user_query=mysqli_query($con,"select * from teacher_recorde where department='$department'");
$master_fetch=mysqli_fetch_assoc($fetch_user_query);

if($user_role=="Programming"){
  

?>

                    <div class="col-sm-4">
                        <div class="pannelcontainer">
                            <div class="vedio_pannel">
                                <video src="<?php echo $row['pdf_url'];?>" controls class="img1"></video>
                            </div>
                        <div class="details">
                            <div class="photo">
                            <img src="<?php echo $master_fetch['photo'];?>" class="img2" alt="">
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div class="write">
                            <p><?php echo $row['details'];?></p>
                            <h5 ><?php echo $master_fetch['name'];?></h5>
                            </div>
                        </div>
                        </div>
                    </div>
                   <?php
                   }
                   else"";
}
                   ?>
                </div>
              </div>
            
            </div>
            










            
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

    <!-- <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div> -->

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
