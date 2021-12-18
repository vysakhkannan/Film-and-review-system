<?php
include("session.php");
include("header.php");
session_start();
?>
<!DOCTYPE html>
<html>
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
 <style>
     .btnn{
  display: ;
  margin: 0px ;
  width: 150px;
  height: 80px;
  border: none;
  background-color:#f5a425;
  color: #fff;
  font-size: 18px;
  border-radius: 6px;
  outline: none;
  cursor: pointer;
  transition: .3s linear;
}

.btn1:hover{
  transform: rotateX(15deg);
  box-shadow: 0 15px 15px #e15f4190;
}

.btn2:hover{
  transform: rotateX(-15deg);
  box-shadow: 0 -15px 15px #e15f4190;
}

.btn3:hover{
  transform: rotateY(15deg);
  box-shadow: -15px 0px 15px #e15f4190;
}

.btn4:hover{
  transform: rotateY(-15deg);
  box-shadow: 15px 0 15px #e15f4190;
}
.hed{
    color:white;
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
      <nav id="menu" class="main-nav" role="navigation">
        <ul class="section">
          <div class="sin">
            <div class="container">

                
              </div>
              <form action="moviescategorylist.php" method="post">
                  <table>
              <td><table style="margin-top:10px; margin-left:50px;">
              <h4 class="hed"><center>MOVIES</center><h4>
              <tr>
              <th><button name="category" value ="action" type="submit" onclick= "location.href = ''" class="btnn btn1">Action</button></th>
              <th><button name="category" value="adventure" type="submit" onclick="location.href = ''" class="btnn btn2">Adventure</button></th>
              <th><button name="category" value="animation" type="submit" onclick="location.href = ''" class="btnn btn3">Animation</button></th>
              <th><button name="category" value="comedy" type="submit" onclick="location.href = ''" class="btnn btn4">Comedy</button></th>
              </tr>
              <tr>
              <th><button name="category" value ="drama" type="submit" onclick= "location.href = ''" class="btnn btn1">Drama</button></th>
              <th><button name="category" value="fantasy" type="submit" onclick="location.href = ''" class="btnn btn2">Fantasy</button></th>
              <th><button name="category" value="fiction" type="submit" onclick="location.href = ''" class="btnn btn3">Fiction</button></th>
              <th><button name="category" value="horror" type="submit" onclick="location.href = ''" class="btnn btn4">Horror</button></th>
              </tr>
              <tr>
              <th><button name="category" value ="thriller" type="submit" onclick= "location.href = ''" class="btnn btn1">Thriller</button></th>
              <th><button name="category" value="crime" type="submit" onclick="location.href = ''" class="btnn btn2">Crime</button></th>
              <th><button name="category" value="music" type="submit" onclick="location.href = ''" class="btnn btn3">Music</button></th>
              <th><button name="category" value="romance" type="submit" onclick="location.href = ''" class="btnn btn4">Mystery</button></th>

              
              </tr>
              <tr>
              <th><button name="category" value="romance" type="submit" onclick="location.href = ''" class="btnn btn4">Romance</button></th>
              <th><button name="category" value ="sci-fi" type="submit" onclick= "location.href = ''" class="btnn btn1">Sci-Fi</button></th>
              </table></td>
                </form>
                <form action="tvseriescategorylist.php" method="post">
               <td> <table style="margin-top:10px; margin-left:70px;">
               <h4 class="hed"><center>TV SERIES</center><h4>
               <tr>
              <th><button name="category" value ="action" type="submit" onclick= "location.href = ''" class="btnn btn1">Action</button></th>
              <th><button name="category" value="adventure" type="submit" onclick="location.href = ''" class="btnn btn2">Adventure</button></th>
              <th><button name="category" value="animation" type="submit" onclick="location.href = ''" class="btnn btn3">Animation</button></th>
              <th><button name="category" value="comedy" type="submit" onclick="location.href = ''" class="btnn btn4">Comedy</button></th>
              </tr>
              <tr>
              <th><button name="category" value ="drama" type="submit" onclick= "location.href = ''" class="btnn btn1">Drama</button></th>
              <th><button name="category" value="fantasy" type="submit" onclick="location.href = ''" class="btnn btn2">Fantasy</button></th>
              <th><button name="category" value="fiction" type="submit" onclick="location.href = ''" class="btnn btn3">Fiction</button></th>
              <th><button name="category" value="horror" type="submit" onclick="location.href = ''" class="btnn btn4">Horror</button></th>
              </tr>
              <tr>
              <th><button name="category" value ="thriller" type="submit" onclick= "location.href = ''" class="btnn btn1">Thriller</button></th>
              <th><button name="category" value="crime" type="submit" onclick="location.href = ''" class="btnn btn2">Crime</button></th>
              <th><button name="category" value="music" type="submit" onclick="location.href = ''" class="btnn btn3">Music</button></th>
              <th><button name="category" value="romance" type="submit" onclick="location.href = ''" class="btnn btn4">Mystery</button></th>
              </tr>
              <tr>
              <th><button name="category" value="romance" type="submit" onclick="location.href = ''" class="btnn btn4">Romance</button></th>
              <th><button name="category" value ="sci-fi" type="submit" onclick= "location.href = ''" class="btnn btn1">Sci-Fi</button></th>
              </table></td>
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