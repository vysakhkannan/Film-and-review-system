<?php
include("conn.php");

if(isset($_POST['submit']))
{
    
    $nplatform=$_POST['nplatform'];
    $ncategory=$_POST['ncategory'];
    $nyear=$_POST['nyear'];
    $nlanguage=$_POST['nlanguage'];
    $ndirector=$_POST['ndirector'];
    $nwriter=$_POST['nwriter'];
    $nmaleactor=$_POST['nmaleactor'];
    $nfemaleactor=$_POST['nfemaleactor'];
    $ncover=$_POST['ncover'];
    $ntrailer=$_POST['ntrailer'];
    $nstoryline=$_POST['nstoryline'];
    $title=$_POST['ntitle'];




    $sql2 = "UPDATE `movies` SET `platform`='$nplatform', `category`='$ncategory', `year`='$nyear',`language`='$nlanguage', `director`='$ndirector', `writer`='$nwriter', `maleactor`='$nmaleactor', `femaleactor`='$nfemaleactor', `cover`='$ncover', `trailer`='$ntrailer', `storyline`='$nstoryline' WHERE title='$title'";
$res2=mysqli_query($conn,$sql2);


echo "Record updated successfully"; 

     header("location:updatedeletemovies.php");

    
}
else
{
    header("location:usfggfsdg.php");
}


?>
    

