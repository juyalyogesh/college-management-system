<?php
include('session.php');
error_reporting(0);
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query=mysqli_query($con,"delete from admin_question_paper where a_qid='$id'");
    header('location:admin_all_question_paper.php');
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
          
              <h4 class="fw-bold py-3 mb-4"> Question Paper !  </h4>

              <!-- Basic Layout -->
              <form method="post" enctype="multipart/form-data">
              <div class="row">
            
                <div class="col-xl-12">
                  <div class="card mb-4">
                <h5 class="card-header">Show All Question Paper</h5>
                <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                      <tr>  
                          <th>PAPER ID</th>
                          <th>SUBJECT</th>
                          <th>PAPER TYPE</th>
                          <TH>DATE</TH>
                          <th>Question Paper</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
<?php  
$mquery=mysqli_query($con,"select * from admin_question_paper order by a_qid desc limit 2");
while($row=mysqli_fetch_array($mquery))
{
    ?>
<tr>
<td>
    <?php echo $row['a_qid']; ?>
</td>
<td>
    <?php echo $row['subject']; ?>
</td>
<td>
    <?php echo $row['paper_type']; ?>
</td>
<td>
    <?php echo $row['added_on']; ?>
</td>
<td>
   <a href="<?php echo $row['photo']; ?>" target="_blank">View paper </a> 
</td>
<TD>
                         <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" style="">
                              <a class="dropdown-item" href="admin_all_question_paper.php?id=<?php echo $row['a_qid'];?>"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                         </TD>
</tr>
    <?php
}
?>
                    </tbody>
                  </table>
                </div>

                </div>
              </div>
              </form>
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
