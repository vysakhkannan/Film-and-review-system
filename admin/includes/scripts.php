  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>


  <?php

$servername="localhost";
$username="root";
$password="";
$dbname="filmreview";
$conn= new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die ("connection fail:" . $conn->connect_error);
  }
 

if(isset($_POST['registerbtn']))
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

    if(strlen($username)>=4 && strlen($username)<=12 )
    {
        $query = "INSERT INTO register VALUES('$name','$age','$dob','$gender','$address','$email','$phno','$username','$password')";
        $query_run = mysqli_query($conn, $query);
    
        if($query_run)
        {
            echo "done";
            $_SESSION['success'] =  "Admin is Added Successfully";
            header('Location: register.php');
        }
        else 
        {
            echo "not done";
            $_SESSION['status'] =  "Admin is Not Added";
            header('Location: register.php');
        }
    }
    else 
    {
        echo "pass no match";
        $_SESSION['status'] =  "Password and Confirm Password Does not Match";
        header('Location: register.php');
    }

}

?>