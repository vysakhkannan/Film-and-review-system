<?php
include("adminheader.php");
include("conn.php");
$no=0;

if(isset($_GET['submit'])){
   $title=$_GET['titlesearch'];
   $year=$_GET['nosearch'];
   if($_GET['nosearch']=="" AND $_GET['titlesearch']==""){
     $sql = "SELECT * FROM movies";
  
   }
   else if($_GET['nosearch']!="" AND $_GET['titlesearch']==""){
      $sql = "SELECT * FROM movies WHERE `year` = '$year'";
 
   }
   else if($_GET['nosearch']=="" AND $_GET['titlesearch']!=""){
      $sql = "SELECT * FROM movies WHERE title ='$title'";
     
   }
   else if($_GET['nosearch']!="" AND $_GET['titlesearch']!=""){
     $sql = "SELECT * FROM movies WHERE title ='$title' AND `year` = '$year'";
  
   }
   

   $res=mysqli_query($conn,$sql);

   $no=mysqli_num_rows($res);

 }

 //if($_GET['nosearch']=="" AND $_GET['namesearch']==""){
if(!isset($_GET['nosearch']) AND !isset($_GET['titlesearch'])){
    $sql = "SELECT * FROM movies";
     $res=mysqli_query($conn,$sql);
     $no=mysqli_num_rows($res);

   }

?>




<html>
<title>Update and Delete Movies</title>

  <head>
  <link rel="stylesheet" href="adminstyle.css">
  <script type="text/javascript" src="adminstylescript.js"></script>
  <style>
  .tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}
.tooltip:hover .tooltiptext {
  visibility: visible;
}
   table, th, td {
         border: 1px solid black;
         border-collapse:collapse;
         width:5px;
         height:10px;
         width:10px
      }

      table {
        width:40px;
         border-spacing: 15px;
      }

      th, td{
         padding: 15px;
      }

      th {
         text-align: left;
      }
      .sea .sear {
    width:200px;
    border-radius: 20px;
    padding: 12px 20px;

    margin: 8px 8px;


}
.sea .searc {
    width:200px;
    border-radius: 20px;
    margin: 8px 8px;
    padding: 12px 20px;
}


.top-right1 {
  position: absolute;
  top: 50px;
  right: 90px;
  font-family: "Times New Roman", Times, serif;
  font-size: 25px;
  /*background-color: #006400;*/
  padding: 8px 8px;
  border-radius: 10px;
}

a {
  text-decoration: none;
}


th {
    background-color: #394357;
    color: white;
    text-align: left;
    padding: 8px;
    

}

tr : nth-child(even){background-color: #f2f2f2}

table {
    border-collapse: collapse;
    width: 100%;
}
td {
    text-align: left;
    padding: 8px;
    color: black;
    border-radius: 20px;
  }

.btnRegister {
    padding: 13px;
    background-color: #5d9cec;
    color: #f5f7fa;
    cursor: pointer;
    border-radius: 4px;
    width: 100%;
    border: #5791da 1px solid;
    font-size: 1.1em;
}


p {
  color: black;
}
/*.button2 {border-radius: 4px;}*/

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
<?php
include("adminheaderfuc.php")
?>
<section>
<h3>UPDATE / DELETE MOVIES</h3>
<form class="sea" method="get" action="" >

  <input class="sear" type="text" name="titlesearch" placeholder="title" value="<?php if(isset($_GET['titlesearch'])) echo $_GET['titlesearch']; ?>">
  <input class="searc" type="number" name="nosearch" placeholder="year" value="<?php if(isset($_GET['nosearch'])) echo $_GET['nosearch']; ?>">
  <input type="submit"   name="submit" value="Search">

</form>






  
  <?php




if($no>0)
{
?>
<br><br><br>


<table>
  <tr>
    <th>Title</th>
    <th>platform</th>
    <th>Category</th>
    <th>Release Year</th>
    <th>Language</th>
    <th>Director</th>
    <th>Writer</th>
    <th>Male Actor</th>
    <th>Female Actor</th>
    <th>Cover URL</th>
    <th>Trailer</th>
    <th>Storyline</th>
    <th>Update</th>
    <th>Delete</th>
    
    
  </tr>


<?php
  while($r=mysqli_fetch_array($res))
  {
?>
<tr>
    <td><?php echo $r['title']; ?></td>
    <td><?php echo $r['platform']; ?></td>
    <td><?php echo $r['category']; ?></td>
    <td><?php echo $r['year']; ?></td>
    <td><?php echo $r['language']; ?></td>
    <td><?php echo $r['director']; ?></td>
    <td><?php echo $r['writer']; ?></td>
    <td><?php echo $r['maleactor']; ?></td>
    <td><?php echo $r['femaleactor']; ?></td>
    <td><a href="<?php echo $r['cover']; ?>">Poster</a></td>
    <td><a href="<?php echo $r['trailer']; ?>">Trailer</a></td> 
    <td><div class="tooltip">Storyline<span class="tooltiptext"><?php echo $r['storyline']; ?></span></div></td>
    <td><a href="updatemovies.php?title=<?php echo $r['title']; ?>" onClick="return check()"><img src="graphics/update1.jpg" width=50 height=30 ></a></td>

      
    <td><a href="deletemovie.php?title=<?php echo $r['title']; ?>" onClick="return check()"><img src="graphics/delete.jpg" width=50 height=30 ></a></td>

      
    
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
<br>
<br>
<



<?php
include("adminfooter.php");
?>


</body>
<script>
function check()
{
  var a = confirm("Are you sure?");
  if(a==true)
  {
    return true;
  }
  else
  {
    return false;
  }
}
</script>
</html>