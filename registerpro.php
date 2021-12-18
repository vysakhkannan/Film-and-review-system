<?php
include("conn.php");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $year=$_POST['yearOfBirth'];
    $month=$_POST['monthOfBirth'];
    $date=$_POST['dateOfBirth'];
    if($year !='' && $month != '' && $date !='')
    {
        $dob = $year.'-'.$month.'-'.$date;
    }



    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(strlen($username)<5)
    {    echo "\n username should contain atleat 12 char";
    }
    if(strlen($username)>12)
    {
        echo "\n username should be less than 12";
    }
    if(strlen($username)>=4 && strlen($username)<=12 )
    {
        $sql="INSERT INTO register VALUES('$name','$age','$dob','$gender','$address','$email','$phno','$username','$password')";
        if($res=mysqli_query($conn,$sql))
        {
            $sql1="INSERT INTO `login` VALUES('$username','$password','user')";
            $res2=mysqli_query($conn,$sql1);
            echo "added";
        }
        echo "added";
        header("location:login.php");

    }

}
?>
    
    
