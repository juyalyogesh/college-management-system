<?php
error_reporting(0);
?>
                                                         
<?php
//project
include('data-con.php');
session_start();
$roll_number=$_SESSION['username'];
$query=mysqli_query($con,"select * from userdetail where username='$roll_number'");
$count=mysqli_num_rows($query);
if($count==1){ 
$myquery=mysqli_fetch_assoc($query);
$full_name=$myquery['username'];
$count_query=mysqli_query($con,"select * from userdetail");
$num_staff=mysqli_num_rows($count_query);
$photo=$myquery['photo'];
$user_roll=$myquery['user_roll)'];
// count Teacher total
$teacher_query=mysqli_query($con,"select * from teacher_recorde");
$teacher_count=mysqli_num_rows($teacher_query);
//Count Active Teacher List
$teacher_queryA=mysqli_query($con,"select * from stu_enroll where status='1' AND type='Teacher'");
$teacher_queryA=mysqli_num_rows($teacher_queryA);
// count student total List
$student_query=mysqli_query($con,"select * from student_record");
$student_n_count=mysqli_num_rows($student_query);
//Count Active Student List
$student_queryw=mysqli_query($con,"select * from stu_enroll where status='1' AND type='Student'");
$student_n_countA=mysqli_num_rows($student_queryw);
$student_queryQ=mysqli_query($con,"select * from appointment");
$appointment=mysqli_num_rows($student_queryQ);
$stu_query=mysqli_query($con,"select * from stu_enroll where enroll_no='$roll_number'");
$fetch_date=mysqli_fetch_assoc($stu_query);
$course=$fetch_data['course'];
$sem=$fetch_data['sem'];

}
else{
    header('location:singup.php');
}
?>
