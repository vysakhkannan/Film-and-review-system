<?php
include("conn.php");
include("session.php");
$name=$_POST["name"];
$email=$_POST["email"];
$msg=$_POST["message"];
if(strlen($msg)>0 && strlen($msg)<=100 )
    {
        $sql="INSERT INTO feedback VALUES('$name','$email','$msg')";
        if($res=mysqli_query($conn,$sql))

        echo "added";
        header("location:homee.php");

    }
