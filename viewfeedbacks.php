<?php
include("session.php");
include("adminheader.php");
?>
<html>
<title>View Feedback</title>

  <head>
  <link rel="stylesheet" href="adminstyle.css">
  <script type="text/javascript" src="adminstylescript.js"></script>
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






</style>


  </head>
<body>
<?php
include("adminheaderfuc.php")
?>


  <section>
  

</head>
<body>
   
   <br>

<?php

include("conn.php");



   $sql = "SELECT * FROM feedback";
        $res=mysqli_query($conn,$sql);
        $no=mysqli_num_rows($res);


if($no>0)
{
?>
<br>
<h2>FEEDBACKS</h2>
<table>
  <tr>

    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th>Delete</th>


    
    
  </tr>


<?php
  while($r=mysqli_fetch_array($res))
  {
?>
<tr>
    <td><?php echo $r['name']; ?></td>
    <td><?php echo $r['email']; ?></td>
    <td><?php echo $r['message']; ?></td>
    <td><a href="delfeedback.php?name=<?php echo $r['name']; ?>" onClick="return check()">DELETE</a></td>

      

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
