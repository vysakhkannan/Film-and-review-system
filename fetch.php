<?php
//fetch.php
include("conn.php");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM movies 
  WHERE title LIKE '%".$search."%'
  OR year LIKE '%".$search."%' 
  OR director LIKE '%".$search."%' 
  OR writer LIKE '%".$search."%'
  OR maleactor LIKE '%".$search."%' 
  OR femaleactor LIKE '%".$search."%'

 ";
}
else
{
 $query = "
  SELECT * FROM movies ORDER BY year
 ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Movie Title</th>
     <th>Year </th>
     <th>Director</th>
     <th>writer Code</th>
     <th>Male Lead</th>
     <th>Female Lead</th>
     <th>More Info</th>
    </tr>
 ';
 while($result_row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$result_row["title"].'</td>
    <td>'.$result_row["year"].'</td>
    <td>'.$result_row["director"].'</td>
    <td>'.$result_row["writer"].'</td>
    <td>'.$result_row["maleactor"].'</td>
    <td>'.$result_row["femaleactor"].'</td>

 
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>