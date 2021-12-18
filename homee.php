<?php
include("session.php");
include("header.php");

?>
<!DOCTYPE html>
<html>
<title>Home</title>
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

TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->

  

 <link rel="stylesheet" href="mystyle.css"> 
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

 <link rel="stylesheet" href="searchbox.css">
</head>
<body>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
  <video autoplay muted loop id="bg-video">
          <source src="graphics\cinematolust.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Welcome to the world of Cinemato</h6>
              <h2><em>REVIEW</em> US HERE</h2>
              
              <div class="main-button">
                  <div class="scroll-to-section"><a href="movies.php">MOVIES</a></div>
                  
              </div>
              <br>
              
              <div class="main-button">
                  <div class="scroll-to-section"><a href="tvseries.php">TV Series</a></div>
              </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-newspaper-o"></i><a href="news.php" ></i>News</a></h4>
              </div>
              <div class="content-hide">

                <p></p>
               <p></p> 
                <div class="scroll-to-section"><a href="#section2"></a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"><a href="categories.php" ></i>category</a></h4>
              </div>
              <div class="content-hide">

                <p></p>
                <p class="hidden-sm"></p>
                <div class="scroll-to-section"><a href="#section3">Details</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i><a href="feedback.php" >Feedback</a></h4>
              </div>
           
              <div class="content-hide">

                <p></p>
                <p class="hidden-sm"></p>
                <div class="scroll-to-section"><a href="#section4"></a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <?php
include("footer.php");
?>
</body>
</html>