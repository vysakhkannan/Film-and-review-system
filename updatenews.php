<?php
include("adminheader.php");

include("conn.php");
   


   $timestamp = $_GET['timestamp'];

   $sql = "SELECT * FROM news WHERE `timestamp`='$timestamp'"; 
   $result=mysqli_query($conn, $sql);
   $r=mysqli_fetch_array($result);


 ?>

<html>
<title>Update News</title>

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
  padding:20px;
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
<form  action="updatenewspro.php" method="post">
<table id="eee">
<h1 id="log">Update News Info</h1>
<tr>

<td><label>Headline: </label></td>
<td><input class="chn" type="text" name="nheadline" value=<?php echo "'".$r['headline']."'"; ?> ></td>
</tr>

<tr>
<td><label>Cover: </label></td>
<td><input class="chn" type="text"  name="ncover" value=<?php echo "'".$r['cover']."'"; ?> ></td>
</tr>

<tr>
<td><label>News Story: </label></td>
<td><textarea class="chn" type="text"  name="nnewsstory" rows="2" cols="30"  > <?php echo "'".$r['newsstory']."'"; ?></textarea></td>
</tr>





<tr>
<td><label>Name: </label></td>
<td><input class="chn" type="text" name="nname" value=<?php echo "'".$r['name']."'"; ?>></td>
</tr>
<tr>
<td><label>Email: </label></td>
<td><input class="chn" type="text" name="nemail" value=<?php echo "'".$r['email']."'"; ?>></td>
</tr>
<tr>
<td><label>Time: </label></td>
<td><input class="chn" type="timestamp" name="ntime" value=<?php echo "'".$r['timestamp']."'"; ?>></td>
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