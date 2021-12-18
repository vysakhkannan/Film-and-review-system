<?php
 include("conn.php");
 include("adminheader.php");

   
   $no=0;

  
 

        $sql = "SELECT * FROM `login` WHERE `role` ='admin'";
    




      $res=mysqli_query($conn,$sql);
  



        $no=mysqli_num_rows($res);
      

?>

<!DOCTYPE html>
<html>
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
}
#lef{
    position:relative;
    left:500px;
    top:10px;
}

</style>

<body>
<?php
include("adminheaderfuc.php")
?>
<section>
    <h3>ADMINS</h3>
    <button id="lef" class="btn" onclick="location.href = 'addadmin.php'" class="btn btn1">Add Admin</button></a>




<?php
if($no>0)
{
?>
<br><br><br>
<table>
  <tr>
    <th>Username</th>
    <th>Role</th>
    <th>Delete</th>


  </tr>

<?php
  while($r=mysqli_fetch_array($res))
  {
?>
<tr>
    <td><?php echo $r['username']; ?></td>
    <td><?php echo $r['role']; ?></td>

    <td><a href="deladmin.php?username=<?php echo $r['username']; ?>" onClick="return check()">DELETE</a></td>
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
</section>
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
