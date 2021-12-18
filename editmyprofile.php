
<?php
include("session.php");
include("header.php");
include("conn.php");
  session_start();
if( $username=$_SESSION['username']) 
  echo $username;
  $sql = "SELECT * FROM register WHERE username='$username'"; 
  $result=mysqli_query($conn, $sql);
  $r=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html>
<head>

  
<link rel="stylesheet" href="searchbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">



    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--



https://templatemo.com/tm-557-grad-school

-->

  

 <link rel="stylesheet" href="mystyle.css"> 
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

 <link rel="stylesheet" href="searchbox.css">
 <style>
   .wrapper {
    
    position: absolute;
      left:300px;
      top: -350px;
      background-color: #fff;
      width:400px;
      padding: 50px;
      margin: 50px auto 0;
      border-top: 5px solid #f5ba1a;
      box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
      right:300px;
}

td{
  padding:10px;

}

 </style>
</head>
<body>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
      <source src="graphics\Cinematolust.mp4" type="video/mp4" />
    </video>
    <div class="video-overlay header-text">
      <div class="caption">
      <center>
        <div class="wrapper">
        <h1 id="log">EDIT PROFILE</h1>
          <form action="editmyprofilepro.php" method="post">
          <table id="uu">
          <tr>
          <td><label>Name: </label></td>
          <td><input type="text"  name="nname" value=<?php echo "'".$r['name']."'"; ?> ></td>

          </tr>
            <tr>
            <td><label>Age: </label></td>
            <td><input type="number"  name="nage" value=<?php echo "'".$r['age']."'"; ?> ></td>

            <tr>
            <td><label>Date of birth: </label></td>
            <td><input type="text"  name="ndob" value=<?php echo "'".$r['dob']."'"; ?> ></td>

            </tr>
            <tr><?php
                		if ($r['gender']=="male") {
                	?>
                			<td><input type="radio" name="gender" value="male" checked="checked" required>Male</td>
                		
                			<td><input type="radio" name="gender" value="female" required>Female</td>
                	<?php
                		}
                		else{
                	?>
                    		<td><input type="radio" name="gender" value="male"  required>Male</td>
                        <td><input type="radio" name="gender" value="female" checked="checked" required>Female</td>
                	<?php
                		}
                		
                        
            ?>
            </tr>

            <tr>
            <td><label>Address: </label></td>
            <td><input type="text" name="naddress" value=<?php echo "'".$r['address']."'"; ?> > </td>

            </tr>
            <tr>
            <td><label>Email: </label></td>
            <td><input type="email" name="nemail" value=<?php echo "'".$r['email']."'"; ?>></td>

            </tr>
            <tr>
            <td><label>Phone Number: </label></td>
            <td><input type="tel"  name="nphno" value=<?php echo "'".$r['phno']."'"; ?>></td>

            </tr>
            <tr>
            <td><label>Username: </label></td>
            <td><input type="text" placeholder="enter your current username" name="username" required></td>

            </tr>
            <tr>
            <td><input type="submit" name="submit">
            </tr>

            </table>
          </form>
        </div>
        </center>
    </div>


  </section>
  <?php
include("footer.php");
?>
  </body>
  </html>