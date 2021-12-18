<?php
include("session.php");
include("header.php");
header('Cache-Control: public');

?>
<!DOCTYPE html>
<html>
<title>TV Series</title>
<head>
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

 <link rel="stylesheet" href="mystyle.css"> 
 
</head>
<body>

  <!-- ***** Main Banner Area Start ***** -->



<section class="section main-banner" id="top" data-section="section1">
  <video autoplay muted loop id="bg-video">
      <source src="graphics\Cinematolust.mp4" type="video/mp4" />
  </video>
  <div class="video-overlay header-text">
    <div class="caption">
      <nav id="menu" class="main-nav" role="navigation">
        <ul class="section">
          <div class="sin">
            <div class="container">
              <div class="logoi">
                <a href="tvseries.php">TV SERIES</a>
              </div>
              <form action="tvserieslist.php" method="post">
              <table style="margin-top:10px; margin-left:70px;">
              <tr>
              <th><button name="language" value ="english" type="submit" onclick= "location.href = ''" class="btn btn1">English</button></th>
              <th><button name="language" value="hindi" type="submit" onclick="location.href = ''" class="btn btn2">Hindi</button></th>
              <th><button name="language" value="malayalam" type="submit" onclick="location.href = ''" class="btn btn3">Malayalam</button></th>
              <th><button name="language" value="tamil" type="submit" onclick="location.href = ''" class="btn btn4">Tamil</button></th>
              </tr>
              </table>
              </form>
            </div>
          </div>
        </ul>
      </nav>
    </div>
  </div>  
</section>
<?php
include("footer.php");
?>

</body>
</html>