<?php
include('session.php');
error_reporting(0);
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query=mysqli_query($con,"delete from admin_recorde where a_id='$id'");
    header('location:admin_recorde.php');
}
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
          
            <div class="card">
                <h5 class="card-header">Teacher Recorde</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>SR. NO.</th>
                        <th>ADMIN ID</th>
                        <th>ADMIN NAME</th>
                        <th>FATHER NAME</th>
                        <th>MOTHER NAME.</th>
                        <th>PHOTO</th>
                        <th>PHONE NUMBER</th>
                        <th>EMAIL ADDRESS</th>
                        <th>DATE OFF BIRTH</th>
                        <th>OFFICE ADDRESS</th>
                        <th>ADDED ON</th>

                      <Th></Th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    <?php
$mquery=mysqli_query($con,"select * from  admin_recorde");
while($row=mysqli_fetch_array($mquery))
{
$username_id=$row['a_id'];  
$fetch_user_query=mysqli_query($con,"select * from stu_enroll where admin_id='$username_id'");
$master_fetch=mysqli_fetch_assoc($fetch_user_query);

?>

                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $row['a_id'];?></strong></td>
                        <td>
                        <?php
$fetch_enroll=$master_fetch['enroll_no'];
if($fetch_enroll){
  echo $fetch_enroll;
}else{
  ?>
  <a href="admin_enroll.php?id=<?php echo $row['a_id'];?>"><button type="submit" class="btn btn-primary" name="sbt">Get Id</button></a>  
  <?php
}

                          ?>
                        
                        </td>
                     

                              <td>
                              <?php echo $row['name'];?>
                              </td>
                              <td>
                              <?php echo $row['father_name'];?>
                              </td>
                              <td>
                        <?php echo $row['mother_name'];?>
                         </td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                              <img src="<?php echo $row['photo'];?>" alt="Avatar" class="rounded-circle">
                            </li>
                          </ul>
                        </td>
                       
                         <td>
                        <?php echo $row['mobile_number'];?>
                         </td>
                         <td>
                        <?php echo $row['email_id'];?>
                         </td>
                         <td>
                        <?php echo $row['Date_of_birth'];?>
                         </td>
                         <td>
                        <?php echo $row['address'];?>
                         </td>
                         <td>
                        <?php echo $row['added_on'];?>
                         </td>
                         <TD>
                         <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" style="">
                              <a class="dropdown-item" href="admin_Recorde_edit.php?id=<?php echo $row['a_id'];?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="admin_recorde.php?id=<?php echo $row['a_id'];?>"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                         </TD>
                      </tr>
                     
                        
                          </div>
                        </td>
                      </tr>
                      <?php

}
?>
                    </tbody>
                  </table>
                </div>
              </div>

              <!-- Basic Layout -->
           

            
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
