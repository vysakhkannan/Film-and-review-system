<?php
include("conn.php");
if(isset($_POST['submit']))
{
$time=$_POST['submit'];
$sql="select movietitle from moviesreview where time='$time'";
$res=mysqli_query($conn,$sql);
$r=mysqli_fetch_array($res);
$title=$r['movietitle'];
$sql3="select report from moviesreview where time='$time'";
$res3=mysqli_query($conn,$sql3);
$r3=mysqli_fetch_array($res3);
if($r3['report'] >= 10)
{
    $sql4="delete from  moviesreview where time='$time'";
$res4=mysqli_query($conn,$sql4);

header("location:moviesinfo.php?title=$title");
}
else
{
    $sql2 = "UPDATE `moviesreview` SET `report` = `report` + 1 WHERE `time`='$time'";
$res2=mysqli_query($conn,$sql2);
echo "Record updated successfully"; 

     header("location:moviesinfo.php?title=$title");

    
}
}





?>