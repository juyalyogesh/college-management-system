<?php
$id=$_GET['id'];
$con=mysqli_connect('localhost','root','','form');
$query=mysqli_query($con,"delete from student_record where stu_id='$id'");
header('location:student_recorde.php');
?>