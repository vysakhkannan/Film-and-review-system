<?php
include("conn.php");
include("session.php");



if(isset($_POST['submit']))
{
    $nname=$_POST['nname'];

    $nage=$_POST['nage'];


    $ndob=$_POST['ndob'];
 





     $ngender=$_POST['gender'];

   

    $nemail=$_POST['nemail'];

    $npnumber=$_POST['nphno'];
    $naddress=$_POST['naddress'];

   $username=$_POST['username'];



$sql = "UPDATE register SET `name`='$nname', age='$nage', gender='$ngender', dob='$ndob', `address`='$naddress', email='$nemail', phno='$npnumber' WHERE username='$username'";
$res=mysqli_query($conn,$sql);
$no=mysqli_num_rows($res);

echo "Record updated successfully"; 

     header("location:homee.php");

    
}


?>
    
}


?>