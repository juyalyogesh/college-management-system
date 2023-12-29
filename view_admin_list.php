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
          
            <div class="card">
                <h5 class="card-header">Ragister Teacher List !</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                         <th>ADMIN Id</th>
                         <th>Username</th>
                         <th>ADMIN NAME</th>
                         <th>Status</th>
                         <th>Email_ID</th>
                         <th>Photo</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

<?php
$mquery=mysqli_query($con,"select * from  stu_enroll");
while($row=mysqli_fetch_array($mquery))
{
    $user_role=$row['type'];
// echo$user_role;

    $count=mysqli_num_rows($mquery);
    
    $en_no=$row['enroll_no'];
    $fetch_user_query=mysqli_query($con,"select * from userdetail where roll_number='$en_no'");
    //username='$en_no' iska matlb ki pehle wale table ko dusre wale se connect karwya
    $master_fetch=mysqli_fetch_assoc($fetch_user_query);


if($user_role=="Admin"){
 


?>

                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $row['enroll_no'];?></strong></td>
                    
                              <td>
           <?php echo $master_fetch['username']?>
                              </td>
                              <td><?php echo $row['name'] ?></td>
                    
                        
                        <td>
                        <?php 
                        $stu_status=$row['status'];
                        if ($stu_status=="0")
                        {
                            echo'<p style="color:red">Not Active</p>';
                        }
                        else{
                            echo'<p style="color:green">Active</p>';

                        }
                        ?>
                        
                         </td>
                         <td>
                        <?php echo $row['email_id'];?>

                         </td>
                         <td>
                       <img src="<?php echo $master_fetch['photo'];?>" style="height:30px; width:30px; border-radies:100px;">
                         </td>

                      </tr>
                     
                        
                          </div>
                        </td>
                      </tr>
                      <?php
}else{
  echo"";
} 

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
