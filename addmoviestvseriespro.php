<?php
include("conn.php");
if(isset($_POST['submit']))
{   
    $multimedia=$_POST['multimedia'];
    $title=$_POST['title'];
    $platform=$_POST['platform'];
    $category=$_POST['category'];



    $year=$_POST['year'];
    $language=$_POST['language'];

    $director=$_POST['director'];
    $writer=$_POST['writer'];
    $maleactor=$_POST['maleactor'];
    $femaleactor=$_POST['femaleactor'];
    $cover=$_POST['cover'];
    $trailer=$_POST['trailer'];
    $storyline=$_POST['storyline'];
    
    if($multimedia== 'movie')
    {
        $sql="INSERT INTO movies VALUES('$title','$platform','$category','$year','$language','$director','$writer','$maleactor','$femaleactor','$cover','$trailer','$storyline')";
        if($res=mysqli_query($conn,$sql))
        echo"<script>alert('Movie Added Successfull..');window.location='addmoviestvseries.php';</script>";

    }
    else
    {
        $sql1="INSERT INTO tvseries VALUES('$title','$platform','$category','$year','$language','$director','$writer','$maleactor','$femaleactor','$cover','$trailer','$storyline')";
        if($res=mysqli_query($conn,$sql1))
        echo"<script>alert('TV Series Added Successfull..');window.location='addmoviestvseries.php';</script>";

    }

}
?>
    
    
