<?php
include("conn.php");

if(isset($_POST['submit']))
{
    $headline=$_POST['nheadline'];
    $cover=$_POST['ncover'];
    $newsstory=$_POST['nnewsstory'];
    $name=$_POST['nname'];
    $email=$_POST['nemail'];
    $time=$_POST['ntime'];





    $sql2 = "UPDATE `news` SET `headline`='$headline', `cover`='$cover', `newsstory`='$newsstory',`name`='$name', `email`='$email' WHERE `time`='$time'";
$res2=mysqli_query($conn,$sql2);


echo "Record updated successfully"; 

     header("location:updateanddeletenews.php");

    
}
else
{
    header("location:usfggfsdg.php");
}


?>
    
