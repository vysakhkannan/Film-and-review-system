<?php
include("conn.php");
session_start();

$un=$_POST['un'];
$old_pass=$_POST['old_pass'];
$newpass=$_POST['new_pass'];
$re_pass=$_POST['re_pass'];



$sql = "UPDATE register SET `password`='$newpass' WHERE username='$un'";
$sql1 = "UPDATE login SET `password`='$newpass' WHERE username='$un'";


//$sqli = "UPDATE tbl_doc SET pw='$newpass' WHERE un='$un'";
$res=mysqli_query($conn,$sql);
$res=mysqli_query($conn,$sql1);
//$resu=mysqli_query($con,$sqli);
$no=mysqli_num_rows($res);
echo "Record updated successfully"; 
if($no==1)
{
	$_SESSION["un"]=$un;
	header("location:homee.php");
}

else
    echo "There was no matching record for that item " .$_SESSION["un"]=$un;
	header("location:homee.php");;
?>