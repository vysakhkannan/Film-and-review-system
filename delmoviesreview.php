<?php
include("conn.php");
$time=$_GET['time'];


$sql="delete from moviesreview where time='$time'";
$res=mysqli_query($conn,$sql);

header("location:viewmoviesreview.php");
?>