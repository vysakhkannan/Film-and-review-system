<?php
include("adminheader.php");

include("conn.php");
   


   $title = $_GET['title'];

   $sql = "SELECT * FROM tvseries WHERE title='$title'"; 
   $result=mysqli_query($conn, $sql);
   $r=mysqli_fetch_array($result);


 ?>

<html>
<title>Update TV Series</title>

  <head>
  <link rel="stylesheet" href="adminstyle.css">
  <script type="text/javascript" src="adminstylescript.js"></script>
<style>
.eee{
  right:300px;
  top:300px;
}

</style>

  </head>
<body>
<?php
include("adminheaderfuc.php")
?>
<style>

td,tr{
  padding:10px;
}
.chn{

  width:100%;
  height:30px;
}

.logbtn{
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

</style>




<center>
<div>
<form  action="updatetvseriespro.php" method="post">
<table id="eee">
<h1 id="log">Update TV Series Info</h1>
<tr>

<td><label>Title: </label></td>
<td><input class="chn" type="text" name="ntitle" value=<?php echo "'".$r['title']."'"; ?> ></td>
</tr>

<tr>
<td><label>Platform: </label></td>
<td><input class="chn" type="text"  name="nplatform" value=<?php echo "'".$r['platform']."'"; ?> ></td>
</tr>

<tr>
<td><label>Category: </label></td>
<td><input class="chn" type="text"  name="ncategory" value=<?php echo "'".$r['category']."'"; ?> ></td>
</tr>




<tr>
<td><label>Year: </label></td>
<td><input class="chn" type="number" name="nyear" value=<?php echo "'".$r['year']."'"; ?> ></td>
</tr>

<tr>
<td><label>Language: </label></td>
<td><input class="chn" type="text" name="nlanguage" value=<?php echo "'".$r['language']."'"; ?> ></td>
</tr>

<tr>
<td><label>Director: </label></td>
<td><input class="chn" type="text" name="ndirector" value=<?php echo "'".$r['director']."'"; ?>></td>
</tr>

<tr>
<td><label>Writer: </label></td>
<td><input class="chn" type="text"  name="nwriter" value=<?php echo "'".$r['writer']."'"; ?>></td>
</tr>

<tr>
<td><label>Male Actor: </label></td>
<td><input class="chn" type="text" name="nmaleactor" value=<?php echo "'".$r['maleactor']."'"; ?>></td>
</tr>
<br>

<tr>
<td><label>Female Actor: </label></td>
<td><input class="chn" type="text" name="nfemaleactor" value=<?php echo "'".$r['femaleactor']."'"; ?>></td>
</tr>

<tr>
<td><label>Cover: </label></td>
<td><input class="chn" type="text" name="ncover" value=<?php echo "'".$r['cover']."'"; ?>></td>
</tr>

<tr>
<td><label>Trailer: </label></td>
<td><input class="chn" type="text" name="ntrailer" value=<?php echo "'".$r['trailer']."'"; ?>></td>
</tr>

<tr>
<td><label>Storyline: </label></td>
<td><input class="chn" type="text" name="nstoryline" value=<?php echo "'".$r['storyline']."'"; ?>></td>
</tr>

<tr>
<td colspan="2"><center><button class="logbtn" type="submit" name="submit">SUBMIT</button></center></td>
</tr>

</table>
</form>
</div>
<center>

  


<?php
include("adminfooter.php");
?>


</body>
</html>