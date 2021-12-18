<?php
include("conn.php");
if(isset($_POST['submit']))
{
$time=$_POST['submit'];
$sql="select tvseriestitle from tvseriesreview where time='$time'";
$res=mysqli_query($conn,$sql);
$r=mysqli_fetch_array($res);
$title=$r['tvseriestitle'];
$sql3="select report from tvseriesreview where time='$time'";
$res3=mysqli_query($conn,$sql3);
$r3=mysqli_fetch_array($res3);
if($r3['report'] >= 10)
{
    $sql4="delete from  tvseriesreview where time='$time'";
$res4=mysqli_query($conn,$sql4);

header("location:tvseriesinfo.php?title=$title");
}
else
{
    $sql2 = "UPDATE `tvseriesreview` SET `report` = `report` + 1 WHERE `time`='$time'";
$res2=mysqli_query($conn,$sql2);
echo "Record updated successfully"; 

     header("location:tvseriesinfo.php?title=$title");

    
}
}





?>