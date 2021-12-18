<?php
include("conn.php");
$title=$_GET['title'];

$sql="delete from tvseries where title='$title'";
$res=mysqli_query($conn,$sql);

header("location:updatedeletetvseries.php");
?>