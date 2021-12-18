<?php
include("session.php");
include("header.php");
include("conn.php");

header('Cache-Control: public');

$title = $_GET['title'];


$query_str = "SELECT * FROM movies WHERE title = '" . $title . "'";
$query = mysqli_query($conn,"SELECT AVG(reviewrating) as AVGRATE from moviesreview WHERE movietitle = '" . $title . "'");
$row = mysqli_fetch_array($query);
$AVGRATE=$row['AVGRATE'];





$result = $conn->query($query_str);


	$result_row = $result->fetch_assoc();


$page_title = "Jayrolex: " . $result_row['title'];

	require_once ('conn.php');

	?>
	


<!DOCTYPE html>
<html>
<title>Movies Info</title>
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



<link rel="stylesheet" href="needed.css">
<link rel="stylesheet" href="mystyle.css">  
 <style>
 h4,h1,p{
     color:white;
 }
 img{
    width: 100%;
    height: 310px;
    position: relative;
}

    @media (min-width: 992px) {
    .container5 {
      width: 970px;
      top:100px;
      position: relative;
      left:300px;

    }
}
p{
    font-size: 30px;
}
form{
    position: relative;
  left: 30px;
  top:
}
button {
  background-color: #f5a425;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  display: block;
    width: 100%;
    height: 50px;
    border: none;
    background: linear-gradient(120deg,#394357,#f5a425,#ffffff);
    background-size: 200%;
    color: #fff;
    outline: none;
    cursor: pointer;
    transition: .5s;
}
    
    
.rev{
  border:1px;
  color:white;
  border-collapse: collapse;
  width: 50%;
  padding: 10px;
  position:relative;
  left:350px;
  
}
th {
    background-color: #394357;
    color: white;
    text-align: center;
    padding: 8px;
    

}
tr : nth-child(even){background-color: #f2f2f2}
td {
    text-align: center;
    padding: 10px;
    color: white;
    border-radius: 20px;
  }
  #you{
    width:50px;
     height:50px
     
  }
  #cen{
    text-align:left;
  }
#re{
  width=10px;
   height=10px ;
}



 </style>
 
</head>
<body>

  <!-- ***** Main Banner Area Start ***** -->
<section>
<div class="container5 wrapper">
<h1 class="text-center"><?php echo $result_row['title'] ?></h1>
<br>
<div class="row">
  
   
    <div class="col-xs-3 col-xs-offset-1">
    
    <img class="img-responsive" src="<?php echo $result_row['cover']; ?>" alt=""/>

    </div>
    <div class="col-xs-8">
        <div class="panel panel-default">
            <div class="panel-body">
    
        <p class="lead"><?php echo $result_row['storyline'] ?></p>
    
        <h4>Overall Rating: <?php echo round($AVGRATE,1);?><i class="fa fa-star" data-rating="2" style="font-size:20px;color:#ff9f00;"></i></h4>
     <h4>Year: <?php echo $result_row['year'] ?></h4>
    
    
      <h4>Language: <?php echo $result_row['language'] ?></h4>
    
    <h4>Director: <?php echo $result_row['director'] ?></h4>
    
    <h4>Writer: <?php echo $result_row['writer'] ?></h4>
    
    <h4>Male Actor: <?php echo $result_row['maleactor'] ?></h4>
    
    <h4>Female Actor: <?php echo $result_row['femaleactor'] ?></h4>
    
    <h4>Trailer:<a href="<?php echo $result_row['trailer'] ?>"><img id="you" src="graphics/youtube.png" width=10 height=10 ><a></h4>
    <form action="movieswishlistinsert.php" method="post">
      <input type="hidden" name ="tit"value ="<?php echo $result_row['title']?>">

      <input type="hidden" name ="cov"value ="<?php echo $result_row['cover']?>">
      <button onclick= "return checks()" name="wishlist" type="submit"  class="btn btn1">ADD TO WISHLIST</button>

</form>
    


 

    <form action="reviewmovie.php" method="post">
    <table>
<tr>
<td id="cen"><h3 style="color:white">REVIEW US HERE:</h3></td>
<td><button value="<?php echo $result_row['title'] ?>" name="tit" style="width:auto;">ADD REVIEW</button></td>
</tr>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  </table>

  </form>
     
        
            </div>
        </div>
        
    </div>
</div>

</div>
</section>
<br>
<br>
<section>
<?php
$sql = "SELECT username, reviewrating, reviewcontent, `time` FROM moviesreview WHERE movietitle='" . $title . "'";
$res=mysqli_query($conn,$sql);
$no=mysqli_num_rows($res);

if($no>0)
{
?>
<br><br><br>
<center><h3 style="color:white">Users Review And Rating</h3></center>
<br><br><br>
<table class="rev">
  <tr>
    <th>Username</th>
    <th>Rating</th>
    <th>Review</th>
    <th>Time</th>
    <th>Report</th>


    
    
  </tr>


<?php
  while($r=mysqli_fetch_array($res))
  {
?>
<tr>

    <td><?php echo $r['username']; ?></td>
    <td><?php echo $r['reviewrating']; ?></td>
    <td><?php echo $r['reviewcontent']; ?></td>
    <td><?php echo $r['time']; ?></td>
    <td><button   onclick= "location.href = 'report.php?time=<?php echo $r['time']; ?>'">REPORT</button></td>
 
    
      
      

</tr>
<?php
  }
?>
</table>

<?php
  }
  else
  {
?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<p> <?php echo "No Reviews!!!!!!!!"; ?></p>
  
<?php    
  }
?>
       
</section>


<?php
include("footer.php");
?>
<script>
function checks()
{
  var a = alert("Are you sure?");
  if(a==true)
  {
   
  }
  else
  {
    return false;
  }

  </script>

</body>
</html>


