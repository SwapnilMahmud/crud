<?php
$stu_name = $_POST['sname'];
$stu_address = $_POST['address'];
$stu_cls = $_POST['cls'];
$stu_phone = $_POST['phone'];

$conn=mysqli_connect("localhost","root","","crud") or die("connection faield");
$sql="INSERT INTO student(sname,saddress,sclass,sphone) VALUES( '{$stu_name}','{$stu_address}','{$stu_cls}','{$stu_phone}') ";
$result=mysqli_query($conn,$sql) or die("unsucessful query");
header("Location: http://localhost/curd/crud.php");


?>
