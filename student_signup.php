<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>    
  <form method="post">
  <div class="buttonsignup">
 <a href="student_signup.php"> Student Signup </a>&nbsp;&nbsp;&nbsp;
   <a href="teacher_signup.php"> Teacher Signup </a>
  </div>
<div class="pannel">
        <div class="textfirst">
            <h3>Student Sign up</h3>
        </div>
        
        <div class="input-group">
            <label for="UserId">UserId</label>
            <input type="text" name="roll_number" id="UserId" placeholder="">
          </div>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="t2" id="username" placeholder="">
          </div>

          <div class="input-group">
            <label for="Password">Password</label>
            <input type="text" name="t3" id="Password" placeholder="">
          </div>
          <div class="input-group">
            <label for="Mobile Number">Mobile Number</label>
            <input type="text" name="t4" id="Mobile Number" placeholder="">
          </div>
          <div class="forgetpassword">
             <a href="#">Forget Password?</a>
          </div>
          <div class="buttonpannel">
            <button type="submit" name="sbt" onclick="sbm()" >Login</button>
          </div>
          <div class="social-message">
            <div class="line"></div>
            <p class="message">Login with social accounts</p>
            <div class="line"></div>
          </div>
          <div class="icon">
          <a href="#">  <i class="fa-brands fa-google"></i></a>
          <a href="#"> <i class="fa-brands fa-twitter"></i></a> 
           <a href="#"> <i class="fa-brands fa-github"></i></a>
          </div>
          <div class="textthird">
            <p class="text">Aleardy Login 
                <a  href="login.php" class="">Log in </a>
              </p>
          </div>
    </div>

</form>

<p style="color:red;font-size:8pt">
<?php
function validateEmail($email) {
    $pattern = '/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/';
    return !preg_match($pattern, $email);
    }
    function validatePassword($password) {
        $pattern = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/';
        return !preg_match($pattern, $password);
        }
    function validateMobileNumber($number) {
        $pattern = '/^[0-9]{10}$/';
        return !preg_match($pattern, $number);
      }

if(isset($_POST['sbt']))
{
$roll_number=$_POST['roll_number'];
$t2=$_POST['t2'];
$t3=$_POST['t3'];
$t4=$_POST['t4'];
$added_on=date("Y/m/d H:i:s");
$enc_password=md5($t3);
include('data-con.php');
$query_check=mysqli_query($con,"select * from stu_enroll where enroll_no='$roll_number' and status='0'");
$enroll_count=mysqli_num_rows($query_check);
 $querye=mysqli_query($con,"select * from userdetail where mobile_number='$t4'");
 $counte=mysqli_num_rows($querye);
 $queryeu=mysqli_query($con,"select * from userdetail where username='$t2'");
 $username=mysqli_num_rows($queryeu);
 if($enroll_count!=1){
    echo"<script>alert('Enrollment No. number alerady taken')</script>";
}
else if($username>0){
    echo"<script>alert('Username already Ragister! Please Ragister anthor Username!')</script>";
}
else if($counte>0){
    echo"<script>alert('Mobile_number is already Ragister')</script>";
  }
  else if(validateMobileNumber($t4)){
    echo"<script>alert('Please Enter Valid Number')</script>";
  }
  else if(validatePassword($t3)){
    echo"<script>alert('The password between 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter.')</script>";
  }
else{
 mysqli_query($con,"update stu_enroll set status='1' where enroll_no='$roll_number'");
 mysqli_query($con,"insert into userdetail(roll_number,username,password,mobile_number,user_roll,added_on)values('$roll_number','$t2','$enc_password','$t4','student','$added_on')"); 
 echo"<script>alert('Thank You , Successfully Ragester')</script>";
}

}

?>
</p>


    
   
</body>
</html>