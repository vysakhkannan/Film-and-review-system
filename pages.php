<?php
include("session.php");
include("adminheader.php");
?>
<html>
<title>Pages</title>

  <head>
  <link rel="stylesheet" href="adminstyle.css">
  <script type="text/javascript" src="adminstylescript.js"></script>


  </head>
<body>
<?php
include("adminheaderfuc.php")
?>


  <section class="grid">
  <article ></article>
    <button class="btn" onclick="location.href = 'addmoviestvseries.php'" class="btn btn1">Upload Movies/TV Series</button></a>
    <button class="btn" onclick="location.href = 'updatedeletemovies.php'" class="btn btn1">Update and Delete Movies </button>
    <button class="btn" onclick="location.href = 'updatedeletetvseries.php'" class="btn btn1">Update and Delete TV Series </button>
    <button class="btn" onclick="location.href = 'viewmoviesreview.php'" class="btn btn1">View Movies Reviews</button>
    <button class="btn" onclick="location.href = 'viewtvseriesreview.php'" class="btn btn1">View TV Series Reviews</button>
    <button class="btn" onclick="location.href = 'addnews.php'" class="btn btn1">Add News</button>
    <button class="btn" onclick="location.href = 'updateanddeletenews.php'" class="btn btn1">Update/Delete News</button>
  

    <button class="btn" onclick="location.href = 'viewfeedbacks.php'" class="btn btn1">View Feedbacks</button>
  

</section>
<?php
include("adminfooter.php");
?>


</body>











</html>
