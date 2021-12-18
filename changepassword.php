<?php
include("header.php");
include("session.php");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<title>Change Password</title>

  <head>

    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="changepasswordstyle.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
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

<link rel="stylesheet" href="mystyle.css"> 
  </head>
  <body>
  <section class="section main-banner" id="top" data-section="section1">
  <video autoplay muted loop id="bg-video">
          <source src="graphics\Cinematolust." type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
       


      <form action="changepasswordpro.php" method="post" class="login-form">
        <h1>Change Password</h1>

        <div class="txtb">
        <input type="text" name="un"  value="" required />
          <span data-placeholder="Username"></span>
        </div>

        <div class="txtb">
        <input type="password" name="old_pass"  value="" required />
          <span data-placeholder="Enter Old Password"></span>
        </div>
        <div class="txtb">
        <input type="password" name="new_pass"  value=""  required />
          <span data-placeholder="Enter New Password"></span>
        </div>
        <div class="txtb">
        <input type="password" name="re_pass"  value="" required />
          <span data-placeholder="Re-Enter New Password"></span>
        </div>
        <input type="submit" class="logbtn" value="Reset Password" name="re_password">



      </form>
      </div>
          </div>
      </div>
  </section>

      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>

<?php
include("footer.php");
?>
  </body>
</html>
