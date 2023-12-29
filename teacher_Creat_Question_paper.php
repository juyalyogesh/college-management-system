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
        <?php include('teacher_pannel_asside.php');?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
        <?php include('teacher_pannel_nav.php');?>
          
  <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
          
              <h4 class="fw-bold py-3 mb-4"> Question Paper !  </h4>

              <!-- Basic Layout -->
              <form method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-xl-6">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Creat Question Paper</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Select Semester</label>
                          <div class="input-group input-group-merge">
                          <select id="defaultSelect" name="t1" class="form-select">
                          <option>Select Semster</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">5</option>
                          <option value="6">6</option>
                        </select>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Select Subject</label>
                          <div class="input-group input-group-merge">
                          <select id="defaultSelect" name="t2" class="form-select">
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
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Select Year</label>
                          <div class="input-group input-group-merge">
                          <select id="defaultSelect" name="t3" class="form-select">
                          <option>Select Year</option>
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
                        <label class="form-label" for="basic-icon-default-company">Select File</label>
                          <div class="input-group input-group-merge">
                        <input class="form-control" type="file" id="fileToUpload" name="fileToUpload" >
                          </div>
                        </div>
                        <div class="mb-3">
                        <button type="submit" class="btn btn-primary" name="sbt" >Show Paper</button>
                        </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Show letas Question Paper</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    
                <h5 class="card-header">Table Basic</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>  
                          <th>PAPER ID</th>
                        <th> COURSE</th>
                        <th>SEMESTER</th>
                        <th>SUBJECT NAME</th>
                        <th>YEAR</th>
                        <th>URL</th>
                        

                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
<?php  
$mquery=mysqli_query($con,"select * from question_paper_pdf order by question_id desc limit 2");
while($row=mysqli_fetch_array($mquery))
{
    ?>
<tr>
<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $row['question_id'];?></strong></td>

<td>
    <?php echo $row['course_name']; ?>
</td>
<td>
    <?php echo $row['sem']; ?>
</td>
<td>
    <?php echo $row['subject']; ?>
</td>
<td>
    <?php echo $row['year']; ?>
</td>
<td>
   <a href="<?php echo $row['pdf_url']; ?>" target="_blank">View paper </a> 
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

}
date_default_timezone_set("Asia/Kolkata");
$file_name=date("dmY-His");

$target_dir = "question_paper_pdf/";
$target_file = $target_dir.$file_name.$t1.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;


if ($uploadOk == 0) {
  echo "something went wrong !!!";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
  
  {
    mysqli_query($con,"insert into question_paper_pdf(sem,subject,year,pdf_url)values('$t1','$t2','$t3','$target_file')");
    echo"<script>alert('Added successfully');
    window.location = 'teacher_Creat_Question_paper.php';
    </script>
    ";
  } else {
    echo"
    ";
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
