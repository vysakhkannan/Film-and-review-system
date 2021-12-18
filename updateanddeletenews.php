<?php
 include("conn.php");
 include("adminheader.php");

   
   $no=0;

   if(isset($_GET['submit'])){
      $name=$_GET['namesearch'];
      $email=$_GET['nosearch'];
      if($_GET['nosearch']=="" AND $_GET['namesearch']==""){
        $sql = "SELECT * FROM news";
      }
      else if($_GET['nosearch']!="" AND $_GET['namesearch']==""){
         $sql = "SELECT * FROM news WHERE email = '$email'";
      }
      else if($_GET['nosearch']=="" AND $_GET['namesearch']!=""){
         $sql = "SELECT * FROM news WHERE name ='$name'";
      }
      else if($_GET['nosearch']!="" AND $_GET['namesearch']!=""){
        $sql = "SELECT * FROM news WHERE name ='$name' AND email = '$email'";
      }
      

      $res=mysqli_query($conn,$sql);
      $no=mysqli_num_rows($res);
    }
   
    //if($_GET['nosearch']=="" AND $_GET['namesearch']==""){
   if(!isset($_GET['nosearch']) AND !isset($_GET['namesearch'])){
       $sql = "SELECT * FROM news";
        $res=mysqli_query($conn,$sql);
        $no=mysqli_num_rows($res);
      }

?>

<!DOCTYPE html>
<html>
<title>Update and Delete News</title>

<head>
<link rel="stylesheet" href="adminstyle.css">


 
   
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
form {
    position: center;


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
}.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 220px;
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


</style>

<body>

<?php
include("adminheaderfuc.php")
?>
<h3>UPDATE / DELETE NEWS</h3>
<form class="sea" method="get" action="" >

  <input class="sear" type="text" name="namesearch" placeholder="name of author" value="<?php if(isset($_GET['namesearch'])) echo $_GET['namesearch']; ?>">
  <input class="searc" type="text" name="nosearch" placeholder="enter email" value="<?php if(isset($_GET['nosearch'])) echo $_GET['nosearch']; ?>">
  <input type="submit"   name="submit" value="Search">

</form>



<?php
if($no>0)
{
?>
<br><br><br>
<table>
  <tr>
    <th>Headline</th>
    <th>Cover</th>
    <th>News Story</th>
    <th>Name of author</th>
    <th>Email</th>
    <th>Time Added</th>
    <th>Update</th>
    <th>Delete</th>


  </tr>

<?php
  while($r=mysqli_fetch_array($res))
  {
?>
<tr>
    <td><div class="tooltip">Headline Hover Me<span class="tooltiptext"><?php echo $r['headline']; ?></span></div></td>
    <td><?php echo $r['cover']; ?></td>
    <td><div class="tooltip">News Story<span class="tooltiptext"><?php echo $r['newsstory']; ?></span></div></td>
    <td><?php echo $r['name']; ?></td>
    <td><?php echo $r['email']; ?></td>
    <td><?php echo $r['timestamp']; ?></td>
    <td><a href="updatenews.php?timestamp=<?php echo $r['timestamp']; ?>"><img src="graphics/update1.jpg" width=50 height=30 ></a></td>
    <td><a href="delnews.php?timestamp=<?php echo $r['timestamp']; ?>" onClick="return check()"><img src="graphics/delete.jpg" width=50 height=30 ></a></td>
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
