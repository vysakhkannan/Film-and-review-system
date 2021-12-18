<?php
include("conn.php");
include("session.php");
if(isset($_POST['submit']))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    

    
    $sql = "INSERT INTO login (username,`password`,`role`) VALUES ('$username','$password','admin')";
    if (mysqli_query($conn, $sql))
    {
        header("location:adminsettings.php");
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}