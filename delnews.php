<?php
include("conn.php");
$time=$_GET['timestamp'];

$sql="delete from news where timestamp='$time'";
$res=mysqli_query($conn,$sql);

header("location:updateanddeletenews.php");
?>