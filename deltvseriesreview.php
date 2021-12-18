<?php
include("conn.php");
$time=$_GET['time'];

$sql="delete from tvseriesreview where time='$time'";
$res=mysqli_query($conn,$sql);

header("location:viewtvseriesreview.php");
?>