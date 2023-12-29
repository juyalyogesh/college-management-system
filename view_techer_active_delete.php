<?php
$id=$_GET['id'];
$con=mysqli_connect('localhost','root','','form');
$query=mysqli_query($con,"DELETE stu_enroll, userdetail
FROM stu_enroll
JOIN userdetail
ON stu_enroll.enroll_no = userdetail.roll_number
WHERE enroll_no='$id';");
header('location:view_teacher_active.php');
?>