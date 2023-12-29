<?php
 include('session.php');
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $query=mysqli_query($con,"delete from  admin_vedio where av_id ='$id'");
  header('location:admin_upload_vedio.php');
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
        
<!-- Navbar -->

<?php include('nav.php');?>
          <!-- / Navbar -->
          
  <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
          
              <h4 class="fw-bold py-3 mb-4"> Upload Video  </h4>

              <form method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Upload Video Details</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                     
                    
                    <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Upload Video Details</label>
                          <input type="text" class="form-control" id="basic-default-fullname" name="t1" placeholder="Upload Video Details" required="">
                        </div>
                        

                        <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Select File</label>
                          <div class="input-group input-group-merge">
                        <input class="form-control" type="file" id="fileToUpload" name="fileToUpload">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="sbt">Send</button>
                     
                    </div>
                  </div>
                </div>
              </div>
              </form>
             
              <div class="col-xl-12">
                  <div class="card mb-4">
                <h5 class="card-header">Show All Question Paper</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>  
                        <th>Video Id</th>
                        <th>Details</th>
                        <th>Video</th>

                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
<?php  
$mquery=mysqli_query($con,"select * from  admin_vedio");
while($row=mysqli_fetch_array($mquery))
{
?>
<tr>
<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $row['av_id'];?></strong></td>

<td>
    <?php echo $row['details']; ?>
</td>
<td>
    <video style="height: 55px;" controls src="<?php echo $row['vedio'];?>"></video>
    
</td>

<TD>
                         <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" style="">
                              <a class="dropdown-item" href="admin_upload_vedio.php?id=<?php echo $row['av_id'];?>"><i class="bx bx-trash me-1"></i> Delete</a>
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
            </div>
            
            <?php
if(isset($_POST['sbt']))
{
    $t1=$_POST['t1'];
   

date_default_timezone_set("Asia/Kolkata");
$file_name=date("dmY-His");

$target_dir = "student_vedio_pdf/";
$target_file = $target_dir.$file_name.$t1.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;


if ($uploadOk == 0) {
  echo "something went wrong !!!";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
  
  {
    mysqli_query($con,"insert into admin_vedio(details,vedio)values('$t1','$target_file')");
    echo"Student Added Successfully!!!";
  } else {
    echo "something went wrong !!!";
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
