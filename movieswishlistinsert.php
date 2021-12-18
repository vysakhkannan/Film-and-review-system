<?php
include("conn.php");
session_start();

if(isset($_POST['wishlist']))
{
  
    $username=$_SESSION['username'];
    $title=$_POST['tit'];
    $cover=$_POST['cov'];

    $check=mysqli_query($conn,"select * from movieswishlist where username='$username' and title='$title'");
    $checkrows=mysqli_num_rows($check);
    if($checkrows>0) {
        echo "Movie Already Added";
     }
     else
     {

    $sql1 = "INSERT INTO movieswishlist (`username`,`title`,`cover`) VALUES('$username','$title','$cover')";
    mysqli_query($conn, $sql1);
    echo"<script>alert('Wishlisted Successfull..');window.location='moviesinfo.php?title=$title';</script>";
  
     }

    mysqli_close($conn);
}


?>
    
