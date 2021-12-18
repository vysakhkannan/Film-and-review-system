<?php
include("conn.php");
$username=$_GET['username'];

$sql="delete from register where username='$username'";
$res=mysqli_query($conn,$sql);

header("location:viewusers.php");
?>