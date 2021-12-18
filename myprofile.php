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
<title>Profile</title>

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="myprofilestyle.css">
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

TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->

  


 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<style>
 #my {
  background-color: #f5a425;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
  display: block;
    width: 20%;
    height: 50px;
    border: none;
    background: linear-gradient(120deg,#394357,#f5a425,#ffffff);
    background-size: 200%;
    color: #fff;
    outline: none;
    cursor: pointer;
    transition: .5s;
    font-size:15px;
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

    <div class="container">
	<div class="row">
		<h2>kdkdjhvlkzdvzlkvjlzxkcjvlzxkcjlckjfgdfgfdgdflzghfghdfghdfghfhfgfgh</h2>
        
        
       <div class="col-md-7 ">

<div class="panel panel-default">
  <div class="panel-heading"> <center> <h4 > My Profile</h4></center></div>
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                
                <input id="profile-image-upload" class="hidden" type="file">
<div style="color:#999;" >click here to change profile image</div>
                <!--Upload Image Js And Css-->
           
              
   
                
                
                </div>                 
                     
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;text-transform: uppercase"><?php echo "'".$r['name']."'"; ?> </h4></span>
              <span><p>User</p></span>            
            </div>
            <div >


<button id="my" onclick="location.href = 'editmyprofile.php'" class="btn">Edit Profile</button></th>

</div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
            


<div class="col-sm-5 col-xs-6 tital " >Name:</div><div class="col-sm-7 col-xs-6 "><?php echo "'".$r['name']."'"; ?></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Age:</div><div class="col-sm-7"> <?php echo "'".$r['age']."'"; ?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Date Of Birth:</div><div class="col-sm-7"><?php echo "'".$r['dob']."'"; ?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Gender:</div><div class="col-sm-7"><?php echo "'".$r['gender']."'"; ?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Address:</div><div class="col-sm-7"><?php echo "'".$r['address']."'"; ?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7"><?php echo "'".$r['email']."'"; ?></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Phone Number:</div><div class="col-sm-7"><?php echo "'".$r['phno']."'"; ?></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Username:</div><div class="col-sm-7"><?php echo "'".$r['username']."'"; ?></div>
<br>
<br>





            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
        </div>    
    </div> 
    </div>
</div>  
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 
       
       
       
       
       
       
       
       
      
   </div>
</div>
    </div>
    
  </section>


</body>
</html>