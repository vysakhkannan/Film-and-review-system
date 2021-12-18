<?php
include("session.php");

include("conn.php");
if(isset($_GET["english"]))

 $lan=$_GET["english"];
 echo $lan;
 ?>