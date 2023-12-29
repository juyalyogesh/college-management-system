<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form method="post">
<table border="1px">
    <tr> 
                        <th>STUDENT NAME</th>
                        <th>FATHER NAME</th>                   
                        <th>MOTHER NAME</th>
                        <th>PHONE NUMBER</th>
                        <th>EMAIL ADDRESS</th>
                        <th>DATE OFF BIRTH</th>
                        <th>OFFICE ADDRESS</th>
                        <th>DEPARTMENT</th>
    </tr>

    <?php
    
    $con=mysqli_connect("localhost","root","","form");
    $id=$_GET['id'];
    $mquery=mysqli_query($con,"select * from teacher_recorde where T_id='$id'");

    while($row=mysqli_fetch_array($mquery))
    {
        ?>
<tr>
    
    <td><input type="text" name="t1" value="<?php echo $row['name'];?>"></td>
    <td><input type="text" name="t2" value="<?php echo $row['father_name'];?>"></td>
    <td><input type="text" name="t3" value="<?php echo $row['mother_name'];?>"></td>
    <td><input type="text" name="t4" value="<?php echo $row['mobile_number'];?>"></td>
    <td><input type="text" name="t5" value="<?php echo $row['email_id'];?>"></td>
    <td><input type="text" name="t6" value="<?php echo $row['Date_of_birth'];?>"></td>
    <td><input type="text" name="t7" value="<?php echo $row['address'];?>"></td>
    <td><input type="text" name="t9" value="<?php echo $row['department'];?>"></td>

</tr>
        <?php
    }
    ?>

</table>
<button name="sbt" type="submit" >update</button>

        </form>
    </center>

    <?php
if(isset($_POST['sbt']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    $t5=$_POST['t5'];
    $t6=$_POST['t6'];
    $t7=$_POST['t7'];

    $t9=$_POST['t9'];

    mysqli_query($con,"update teacher_recorde set name='$t1',father_name='$t2',mother_name='$t3',mobile_number='$t4',email_id='$t5',Date_of_birth='$t6',address='$t7',department='$t9' where T_id='$id'");
    echo" data update";
    header('location:Teacher_Recorde.php');
}
    ?>
</body>
</html>