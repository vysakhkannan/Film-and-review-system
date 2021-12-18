<?php
include("conn.php");
include("session.php");

session_start();
{

    
    $username=$_SESSION["username"];

    $title=$_GET['tit'];

    $query = "delete from tvserieswishlist WHERE title='$title'";
	if (mysqli_query($conn, $query))
    {
      header("location: mytvserieswishlist.php?username=$username" ); 
     }
       else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
