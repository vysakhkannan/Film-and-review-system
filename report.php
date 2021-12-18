<?php
include("conn.php");
include("session.php");
include("header.php");
$time=$_GET['time'];



    



?>
<!DOCTYPE html>
<html>
<title>Report</title>
<head>
<script type="text/javascript">
fuction preback()
{window.history.forward();}
setTimeout("preback()",0);
window.onunload=function(){null};
</script>

  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

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

  

 <link rel="stylesheet" href="mystyle.css"> 
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

 <link rel="stylesheet" href="searchbox.css">
 <style>
     body{
        background-image: url("assets/images/contact-bg.jpg");

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
  left:450px;
  top: 40px;
    width:40px

  margin: 50px auto 0;

}
.btn5{
  display: block;
  margin: 40px 0;
  width: 540px;
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

 </style>
</head>
<body>
    <section>
<div class="container">
        <div class="imagebg"></div>
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
                    <br>
                    <center><h2>Report</h2> </center>
                    <br>
                    <p> Reporting Reason: </p>
                    <form role="form" method="post" action="reportpro.php" id="reused_form">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Reason</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="reason" id="reason" value="bad" >
                                        Contains illegal content or activity. 
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="reason" id="reason" value="average" >
                                        Deliberate degrading.
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="reason" id="reason" value="good" >
                                        Contains hate speech. 
                                    </label>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" name="submit" value="<?php echo "$time"?>" class="btn5" >Report </button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
</div> 


</section>
<footer>
    <div class="">
      <div class="">
        <div class="">
          <p><i class="fa fa-copyright"></i> Copyright 2020 by MOVIEMANIAC  
          
           | Design: <a href="" rel="sponsored" target="_parent">LUTTAPPI</a></p>
        </div>
      </div>
    </div>
  </footer>

 
</body>

</html>