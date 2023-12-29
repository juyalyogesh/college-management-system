<?php
error_reporting(0);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>

    <form method="post">  
<div class="pannel">
        <div class="textfirst">
            <h3>Login</h3>
        </div>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="t1" id="username" placeholder="">
          </div>
          <div class="input-group">
            <label for="Password">Password</label>
            <input type="text" name="t2" id="Password" placeholder="">
          </div>
          <div class="forgetpassword">
             <a href="#">Forget Password?</a>
          </div>
          <div class="buttonpannel">
            <button name="btn" type="submit" >Login</button>
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
            <p class="text">Don't have an account?
                <a  href="student_signup.php">Sign up</a>
              </p>
          </div>
    </div>
</form>

<?php
if(isset($_POST['btn']))
{
    include('data-con.php');
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
    $enc_password=md5($t2);
    $query=mysqli_query($con,"select * from userdetail where username='$t1' and password='$enc_password'");
    $mcheck=mysqli_fetch_assoc($query);
    $user_role=$mcheck['user_roll'];
    $count=mysqli_num_rows($query);
    if($count==1)
    {
       session_start();
        $_SESSION['username']=$t1;
        if($user_role=="admin"){
            header('location:dashbord.php');
        }
        else if($user_role=="teacher"){
            header('location:teacher_pannel.php');
        }
        else {           
            header('location:student_portal.php');
        }
    }
    else{
        echo"<script>alert('Invalid Username And Password')</script>";
    }
}
?>

 
</body>
</html>


