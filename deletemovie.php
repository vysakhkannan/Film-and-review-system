<?php
include("conn.php");
$title=$_GET['title'];

$sql="delete from movies where title='$title'";
$res=mysqli_query($conn,$sql);

header("location:updatedeletemovies.php");
?>