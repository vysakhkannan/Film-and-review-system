<?php
include("session.php");
include("header.php");
include("conn.php");
header('Cache-Control: public');
$timestamp = $_GET['timestamp'];


$query_str = "SELECT * FROM news WHERE timestamp = '" . $timestamp . "'";





$result = $conn->query($query_str);


	$result_row = $result->fetch_assoc();


$page_title = "Jayrolex: " . $result_row['headline'];



	?>
	


<!DOCTYPE html>
<html>
<title>News Info</title>
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




 </style>
 
</head>
<body>

  <!-- ***** Main Banner Area Start ***** -->
<section>
<div class="container5 wrapper">
<h1 class="text-center"><?php echo $result_row['headline'] ?></h1>
<br>
<div class="row">
  
   
    <div class="col-xs-3 col-xs-offset-1">
    
    <img class="img-responsive" src="<?php echo $result_row['cover']; ?>" alt=""/>
  <br>
    </div>
    <div class="col-xs-8">
        <div class="panel panel-default">
            <div class="panel-body">
    
        
    
        
    
    
      <h4>Reported BY: <?php echo $result_row['name'] ?></h4>
      
     
      <p class="lead"><?php echo $result_row['newsstory'] ?></p>
    
    
 


     
        
            </div>
        </div>
        
    </div>
</div>

</div>
</section>
<br>
<br>


<?php
include("footer.php");
?>

</body>
</html>


