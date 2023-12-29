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
          
              <h4 class="fw-bold py-3 mb-4"> Faculty Details !  </h4>

              <!-- Basic Layout -->
              <form method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-xl-12">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Update Faculty Details </h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                    <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Full Name</label>
                          <input type="text" class="form-control" id="basic-default-fullname" name="t1" placeholder="Full Name" required>
                        </div>
                      
                        
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Subject</label>
                          <input type="text" class="form-control" id="basic-default-fullname" name="t2" placeholder="Subject" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Instagram Link</label>
                          <input type="text" class="form-control" id="basic-default-fullname" name="t3" placeholder="Instagram Link" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Facebook Link</label>
                          <input type="text" class="form-control" id="basic-default-fullname" name="t4" placeholder="Facebook Link" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Twitter Link</label>
                          <input type="text" class="form-control" id="basic-default-fullname" name="t5" placeholder="Twitter Link" required>
                        </div>
                        <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Select Photo</label>
                          <div class="input-group input-group-merge">
                        <input class="form-control" type="file" id="fileToUpload" name="fileToUpload" >
                          </div>
                        </div>
                        
                        <div class="mb-3">
                        <button type="submit" class="btn btn-primary" name="sbt" >Update</button>
                        </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Show Update Teacher List</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    
                <h5 class="card-header">List</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>  
                          <th>TEACHER NAME</th>
                          <th>SUBJECT</th>
                          <th>INSTAGRAM LINK</th>
                          <TH>FACEBOOK LINK</TH>
                          <TH>TWITTER LINK</TH>
                          <TH>PHOTO</TH>
                          <th>added on</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
<?php  
$mquery=mysqli_query($con,"select * from website_teacher");
while($row=mysqli_fetch_array($mquery))
{
    ?>
<tr>

<td>
    <?php echo $row['name']; ?>
    
</td>
<td>
    <?php echo $row['subject']; ?>
</td>

<td>
    <?php echo $row['instagram_link']; ?>
</td>
<td>
    <?php echo $row['facebook_link']; ?>
</td>
<td>
    <?php echo $row['twetter_link']; ?>
</td>
<td>
   <a href="<?php echo $row['photo'];?>"> <img src="<?php echo $row['photo'];?>" style="height:40px; width:40px;"></a>
    
</td>
<td>
    <?php echo $row['added_on']; ?>
</td>

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
            

<?php
if(isset($_POST['sbt']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    $t5=$_POST['t5'];
    $added_on=date("Y/m/d H:i:s");
}
date_default_timezone_set("Asia/Kolkata");
//randam varibule 
$file_name=date("dmY-His");

$target_dir = "website_image/";
// add this file $file_name or ap isme kuch bhi add kr skte ho .$t1 jese kiya hai
$target_file = $target_dir.$file_name.$t1.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;


if ($uploadOk == 0) {
  echo "something went wrong !!!";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
  
  {
    mysqli_query($con,"insert into website_teacher(name,subject,instagram_link,facebook_link,twetter_link,photo,added_on)values('$t1','$t2','$t3','$t4','$t5','$target_file','$added_on')");
    echo"Student Added Successfully!!!";
  } else {
    echo "valid deatils";
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
