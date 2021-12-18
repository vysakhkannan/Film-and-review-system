<?php
include("conn.php");
include("session.php");

$username=$_POST["username"];
$password=$_POST["password"];

$sql=mysqli_query($conn,"select * from `login` where username='$username' and password='$password'");
if ($sql->num_rows>0) {
	while($rows = $sql-> fetch_assoc())
	{  
			$role=$rows['role'];
			$name=$rows['username'];
			$val=1;



	}
	}
			
			$_SESSION['username']="$name";//set name to session - This will be needed to restricted pages pertaining to other unregistered persons.
		if($role == 'admin')
			{
 			  header("location:dashboard.php");
			}
		else if($role == 'user')
			{
				// ADDING NEW VISITORS DATA
					$query = "INSERT INTO counter_table(username) VALUES('$username')";
					$result = mysqli_query($conn, $query);
							 header("location:homee.php");
			}

		else{
	// echo "ENTER VALID USERNAME AND PASSWORD";
		$message = "Enter valid USERNAME or PASSWORD";
			echo "<script type='text/javascript'>setTimeout(\"location.href = 'login.php';\",1500); alert('$message');</script>";
	//header("location:homee.php");

}
?>