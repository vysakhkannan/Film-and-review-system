<?php
include("conn.php");
include("session.php");
include("adminheader.php");
if(isset($_POST['submit']))
{
    $headline = $_POST["headline"];
    $cover = $_POST["cover"];
    $newsstory=$_POST["newsstory"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    $sql = "INSERT INTO news (headline,cover,newsstory,name,email) VALUES ('$headline','$cover','$newsstory','$name','$email')";
    if (mysqli_query($conn, $sql))
    {
        echo "News added addedddd successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>
<html>
<head>

<link rel="stylesheet" href="adminstyle.css">
  <script type="text/javascript" src="adminstylescript.js"></script>
<title>Add News</title>
<meta http-equiv="Content-Type" content="text/html; charset="iso"-8859-1">
</head>
<style>

}
     .imagebg {
	
    background-repeat: no-repeat;
background-position: center center;
background-size: cover;
background-attachment: fixed;
position: fixed;
top: 0;
left: 0;
right: 0;
bottom: 0;
-webkit-filter: blur(3px);
filter: blur(3px);
opacity: 0.6;
filter: alpha(opacity=60);
width:60px;
}
.form-container
{
	background-color: #fff;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 20px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
    border-radius: 8px;	
    font-family: 'Montserrat', Arial, Helvetica, sans-serif;
    
}
.container{



position: absolute;
  left:400px;
  top: 40px;
    width:100px

    margin: 40px ;

}
.btn5{
  display: block;
  margin: 40px 0;
  width: 400px;
  height: 40px;
  border: none;
  background-color:#f5a425;
  color: #fff;
  font-size: 18px;
  border-radius: 6px;
  outline: none;
  cursor: pointer;
  transition: .3s linear;
}


.btn5:hover{

}
.col-sm-6{
  padding:10px;

}
input{
  border:1px black;
}
</style>
<body>
<?php
include("adminheaderfuc.php");
?>

     
<section>
<div class="container">
        <div class="imagebg"></div>
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
                    <br>
                    <center><h2>ADD NEWS HERE</h2> </center>
                    <br>

                    <form role="form" action="addnews.php" method="post" id="reused_form">
                    <div class="row">
                    <table><tr>
                            <div class="col-sm-6 form-group">
                                <label for="headline"> Headline:</label>
                                <input type="text" class="form-control" id="headline" name="headline" required>
                            </div>
                            </tr>
                            <div class="col-sm-6 form-group">
                                <label for="cover"> cover:</label>
                                <input type="text" class="form-control" id="cover" name="cover" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="newsstory"> News Story:</label>
                                <textarea class="form-control" type="textarea" name="newsstory" id="newsstory" placeholder="Enter News Story" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Your Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" name="submit" class="btn5" >Post </button>
                            </div>
                        </div>
                        </table>
                    </form>
                    
                </div>
            </div>
        </div>
</div> 



    
  </table>
  </form>
  </div>
  
  </section>
</body>
</html>

