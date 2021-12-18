<?php
include("adminheader.php");
?>
<html>
  <title>Add Movies/Series</title>
  <head>
  <link rel="stylesheet" href="adminstyle.css">
  <script type="text/javascript" src="adminstylescript.js"></script>
  <link href="addmoviestvseriesstyle.css" rel="stylesheet">


  </head>
<body>
<?php
include("adminheaderfuc.php")
?>
<section>
<div class="wrapper">
                
                <form action="addmoviestvseriespro.php" method="POST">
                  <table class="">
                    <h4><center>Add Movies/TV Series<center><h4>
                      <br>
                    <tr>
                        <td><label for="multimedia">Choose multimedia :</label></td>
                        <td><select id="mul" name="multimedia" class="text-name">
                            <option value="movie">Movie</option>
                            <option value="tvseries">TV Series</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><label for="title">Title: </label></td>
					              <td><input type="text" name="title" class="text-name"></td>
                      </tr>
                      <tr>
                        <td><label for="platform">Platform: </label></td>
					              <td><select id="plat" name="platform"  class="text-name">
                              <option value="ott">OTT</option>
                              <option value="other">Other</option>
                      </tr>
                      <tr>
                        <td><label for="category">Choose Category :</label></td>
                        <td><select id="cate" name="category"  class="text-name">
                              <option value="none">none</option>
                              <option value="action">Action</option>
                              <option value="adventure">Adventure</option>
                              <option value="animation">Animation</option>
                              <option value="comedy">Comedy</option>
                              <option value="drama">Drama</option>
                              <option value="fantasy">Fantasy</option>
                              <option value="fiction">Fiction</option>
                              <option value="horror">Horror</option>
                              <option value="thriller">Thriller</option>
                              <option value="crime">Crime</option>
                              <option value="music">Music</option>
                              <option value="music">Mystery</option>
                              <option value="romance">Romance</option>
                              <option value="sci-fi">Sci-Fi</option>
                            </select></td>
                            
                      </tr>
                      <tr>
                        <td><label for=year>Release Year : </label></td>
                        <td><select name="year">
                          <option value="">Year</option>
                          <?php for ($i = 1888; $i <= date('Y'); $i++) : ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                          <?php endfor; ?>                                                              
                          </select></td>
                      </tr>
                      <tr>
                        <td><label for="language">Language :</label></td>
                        <td><select id="lan" name="language"  class="text-name">
                              <option value="english">English</option>
                              <option value="hindi">Hindi</option>
                              <option value="malayalam">Malayalam</option>
                              <option value="tamil">Tamil</option>

                            </select></td>
                      <tr>      
                        <td><label for="director">Director:</label> </td>
                        <td><input type="text" name="director" class="text-name"></td>
                      </tr>
                      <tr>
                        <td><label for="writer">Writers: </label></td>
                        <td><input type="text" name="writer" class="text-name"></td>
                      </tr>
                      <tr>
                        <td><label for="stars">Male Leading Actor: </label></td>
                        <td><input type="text" name="maleactor" rows="2" class="text-name"></td>
                      </tr>
                      <tr>
                        <td><label for="stars">Female Leading Actor: </label></td>
                        <td><input type="text" name="femaleactor" rows="2" class="text-name"></td>
                      </tr>
                      <tr>
                        <td><label for="cover">Cover URL: </label></td>
                        <td><input type="text" name="cover" rows="3" class="text-name"></td>
                      </tr>
                      <tr>
                        <td><label for="trailer">Trailer: </label></td>
                        <td><input type="text" name="trailer" rows="3" class="text-name"></td>
                      </tr>
                      <tr>
                        <td><label for="storyline">Storyline:</label> </td>
                        <td><textarea name="storyline" rows="4" cols="19" class="text-name"></textarea></td>
                      </tr>
                      <tr>
                        <td></td>
                      <td><input class="button" type="submit" name="submit" value="Upload" /> </td>
                      </tr>
                    

                
                  </table>
                </form>

  
</div>
</section>








</body>

</html>
