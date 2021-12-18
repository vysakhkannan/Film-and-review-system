<?php
include("conn.php");
include("session.php");
include("header.php");
$no=0;

if(isset($_GET['submit'])){
   $title=$_GET['namesearch'];
   $year=$_GET['nosearch'];
   if($_GET['nosearch']=="" AND $_GET['namesearch']==""){
     $sql = "SELECT * FROM movies";
   }
   else if($_GET['nosearch']!="" AND $_GET['namesearch']==""){
      $sql = "SELECT * FROM movies WHERE `year` = '$year'";
   }
   else if($_GET['nosearch']=="" AND $_GET['namesearch']!=""){
      $sql = "SELECT * FROM movies WHERE title ='$title'";
   }
   else if($_GET['nosearch']!="" AND $_GET['namesearch']!=""){
     $sql = "SELECT * FROM movies WHERE title ='$title' AND `year` = '$year'";
   }
   

   $res=mysqli_query($conn,$sql);
   $no=mysqli_num_rows($res);
 }

 //if($_GET['nosearch']=="" AND $_GET['namesearch']==""){
if(!isset($_GET['nosearch']) AND !isset($_GET['namesearch'])){
    $sql = "SELECT * FROM movies";
     $res=mysqli_query($conn,$sql);
     $no=mysqli_num_rows($res);
   }

?>

?>
<!DOCTYPE html>
<html>
<title>Movies Search</title> 
<head>

  
<link rel="stylesheet" href="searchbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

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
    font-size: 50px;
}
form{
    position: relative;
  left: 10px;
  

}

.sea .sear {
    width:500px;
    border-radius: 20px;
    padding: 12px 20px;

    margin: 8px 8px;


}
.sea .searc {
    width:500px;
    border-radius: 20px;
    margin: 8px 8px;
    padding: 12px 20px;
}


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
.submit {
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
input[type=submit]:hover{
background-color:#f5a425 ;
color:white;
padding: 12px 20px;
border-radius: 20px;
}
input[type=submit]{
background-color:#394357 ;
padding: 12px 20px;
border-radius: 20px;
color:white
}

 </style>
</head>
<body>


  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
  <video autoplay muted loop id="bg-video">
          <source src="" type="video" />
      </video>

        <div class="video-overlay header-text">
            <div class="caption">
        
   <br >
   <br>
   <br >
   <br>
   <br >
   <br>
   <br >
   <br>
   <br >
   <br>
   <br >
   <br>
   <br >
   <br>
   <br >
   <br>
   <br >
   <br>
   <br >
   <br>
   <br >
   <br>
   <br >
   <br>


   <h2 align="center">Search Your Movies Here</h2><br />

<form class="sea" method="get" action="" >

  <input class="sear" type="text" name="namesearch" placeholder="Search By TV Series Name" value="<?php if(isset($_GET['namesearch'])) echo $_GET['namesearch']; ?>">
  <input class="searc" type="number" name="nosearch" placeholder="Search By TV Series year" value="<?php if(isset($_GET['nosearch'])) echo $_GET['nosearch']; ?>">
  <input type="submit"   name="submit" value="Search">

</form>



<?php
if($no>0)
{
?>
<br><br><br>
<table class="rev">
  <tr>
  <th>Movies Title</th>
     <th>Year </th>
     <th>Director</th>
     <th>Writer</th>
     <th>Male Lead</th>
     <th>Female Lead</th>
     <th>More Info</th>
  </tr>

<?php
  while($r=mysqli_fetch_array($res))
  {
?>
<tr>
    <td><?php echo $r['title']; ?></td>
    <td><?php echo $r['year']; ?></td>
    <td><?php echo $r['director']; ?></td>
    <td><?php echo $r['writer']; ?></td>
    <td><?php echo $r['maleactor']; ?></td>
    <td><?php echo $r['femaleactor']; ?></td>

    <td><a href="moviesinfo.php?title=<?php echo $r['title']; ?>">MORE INFO</a></td>
   <!-- <td>
      <a href=<?php //echo "'updateadmin.php?un=" .$r[7]."'"; ?>>
       Update
      </a> 
    </td>-->
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
<p> <?php echo "No Records!!!!!!!!"; ?></p>
  
<?php    
  }
?>
   
  </section>

  
  <?php
include("footer.php");
?>
</body>
</html>
