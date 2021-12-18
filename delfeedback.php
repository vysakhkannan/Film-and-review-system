<?php
include("conn.php");
$name=$_GET['name'];


$sql="delete from feedback where name='$name'";
$res=mysqli_query($conn,$sql);

header("location:viewfeedback.php");
?>