<?php
include('session.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School ID Card</title>
    <link rel="stylesheet" href="card.css">
   
   
<style>
    
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.id-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 300px;
    height: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 0px;
}
.line{
    height: 10px;
    width: 300px;
    background: blue;
}
.line2{
    height: 10px;
    width: 300px;
    background: blue;
}
.img1{
    width: 150px;
    height: auto;
    padding-top:5px;
}

.id-card .img2 {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 5px solid blue;
    margin-bottom: 10px;
    padding-top: 10px;
    padding: 8px;
    
}

.id-card h2, .id-card p {
    margin: 0;
}

.id-card h2 {
    font-size: 18px;
    margin-bottom: 5px;
}

.id-card p {
    font-size: 14px;
    color: #666;
}
.carddetails{
    text-align: center;
    text-align: justify;
    margin: 10px;
    text-decoration: #666;
    z-index: 100;
}

.link{
    background:  blue;
    width: 100%;
    text-align: center;
}
.link a{
    text-decoration: none;
    color: white;

    }
    .singnature{
        padding-left: 200px;
      
    }
    .img-3{
        height: 60px;
        width: 60px;
        padding-left: 7px;
    }

</style>
<body>
<button onclick="dw()" > 
    Download Image
</button>
<?php
$mquery=mysqli_query($con,"select * from stu_enroll");
while($row=mysqli_fetch_assoc($mquery))
{
  $user_role=$row['type'];
  $count=mysqli_num_rows($mquery);
  $en_no=$row['enroll_no'];
  
$fetch_user_query=mysqli_query($con,"select * from userdetail where roll_number='$en_no'");
$master_fetch=mysqli_fetch_assoc($fetch_user_query);

if($user_role=="Student"){
  

?>

<div class="id-card">
        <div class="line"></div>
 <div class="logo">
    <img src="assets/img/card/uu-logo (1).svg" class="img-fluid img1" alt="">
 </div>
 <div class="line2"></div>
        <img class="img-fluid img2" src="<?php echo $master_fetch['photo']?>" alt="Student Photo">
        <div class="carddetails">
      <span><b> Name</b> - <span><?php echo $row['name']?></span><br><br>
      <span> <b>Enrollnumber No.</b>  - <span><?php echo $row['enroll_no']?></span> <br><br>
      <span> <b>Course</b> - <span><?php echo $row['course']?></span> <br><br>
      <span> <b>Admission Date</b> - <span><?php echo $row['year']?></span><br><br>
      <span> <b>Semster</b> - <span><?php echo $row['sem']?></span></span>
    </div>
    <div class="singnature">
        <img class="img-fluid img-3" src="assets/img/card/images.jpeg" alt="">
        <b>Principal</b>
    </div>
        <div class="link">
           <a href="#">www.uttarnchaluniversity.com</a>
        </div>
</div>
<?php
}
else{
    echo"";
}

}
?>


</body>
</html>
