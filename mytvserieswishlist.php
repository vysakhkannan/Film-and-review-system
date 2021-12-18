<?php
include("session.php");

include("header.php");
include("conn.php");
header('Cache-Control: public');

$username=$_GET['username'];


//select statement
$query_str = "SELECT * FROM tvserieswishlist where username='$username'" ;


//execut the query
$result = $conn->query($query_str);


//Handle selection errors
if (!$result) {
	$errno = $conn->errno;
	$errmsg = $conn->error;
	echo "Selection failed with: ($errno) $errmsg<br/>\n";
	;
	exit;
}else { //display results in a table
	
?>

<!DOCTYPE html>
<html>
<title>My TV Series Wishlist</title>
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
 
</head>
<body>

  <!-- ***** Main Banner Area Start ***** -->
<section>


              <div class="container wrapper">

              
	            <div class="movie-list">
                <h2 style="color:white"><center>MY TV SERIES WISHLIST </center></h2>
			        <?php
			        $i = 0;
			        while ( $result_row = $result->fetch_assoc() ) :
				    $i++;
				        if ($i == 1) :
					?>
					<div class="row">
				        <?php endif; ?>
				        <div class="col-xs-4">
					        <div class="thumbnail">


						        <div class="caption">

								<div class="text-center">

<a href="tvseriesinfo.php?title=<?php echo $result_row['title']?>">
<img src="<?php echo $result_row['cover'] ?>" />
</a>
</div>
<h3 class="text-center">
<?php
echo "<a href='tvseriesinfo.php?title=" . $result_row['title'] . "'>", $result_row['title'], "</a>";

?>
<br>
<br>
<?php
echo "<a onclick='return check()' href='deltvserieswishlist.php?tit=" . $result_row['title'] . "' >DELETE FROM WISHLIST</a>";
?>
							        </h3>
						        </div>
					        </div>
				        </div>
				        <?php if ($i == 3) : ?>
				    </div>
				        <?php $i=0; endif; endwhile; ?>
		        </div>
	          </div>
              <?php
	// clean up result sets when we're done with them!
    $result->close();
    
}
?>

            </div>
          </div>
</section>
<?php
include("footer.php");

?>
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

</body>
</html>