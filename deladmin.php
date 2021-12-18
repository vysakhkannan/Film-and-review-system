<?php
include("conn.php");
$username=$_GET['username'];

$sql="delete from login where username='$username' AND role='admin'";
$res=mysqli_query($conn,$sql);

header("location:adminsettings.php");
?>