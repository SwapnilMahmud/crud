<?php
$stu_i=$_POST['sid'];
$stu_n=$_POST['fname'];
$stu_a=$_POST['address'];
$stu_cc=$_POST['ccls'];
$stu_p=$_POST['phone'];

$coon=mysqli_connect("localhost","root","","crud") or die("connection faield");
$sqli="UPDATE student SET sname='{$stu_n}',saddress='{$stu_a}',sclass='{$stu_cc}',sphone='{$stu_p}' WHERE  sid='{$stu_i}'";
$result=mysqli_query($coon,$sqli) or die("query unsuccesful");
header("Location: http://localhost/curd/crud.php");
mysqli_close($coon);



?>
