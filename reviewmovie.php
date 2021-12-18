
<?php
include("conn.php");
include("header.php");
header('Cache-Control: public');

if(isset($_POST['submit']))
{
    $username = $_POST["name"];
    $rating = $_POST["rating"];
    $title=$_POST["title"];
    $review = $_POST["review"];
  
    
 
    
    $sql = "INSERT INTO moviesreview (movietitle,username,reviewrating,reviewcontent,report) VALUES ('$title','$username','$rating','$review','0')";
    if (mysqli_query($conn, $sql))
    {
      header("location: moviesinfo.php?title=$title" ); 
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
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
<style>
body{
    background-image:url("graphics/courses-bg.jpg");
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #f5a425;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container7 {
  padding: 16px;

}
.container7 .row{
    top:100px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content3 {

  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<form class="modal-content3" action="reviewmovie.php" method="post">
<br>
<center><h2 style="color:black">WRITE REVIEW HERE</h2></center>
<br>
    <div class="container7">
    
            <div class="row">
              <div class="col-md-6">
                  <fieldset>
                    <label for="username"><b>Username</b></label>
                    <input name="name"  type="text" class="form-control" id="name" placeholder="Enter your Username" required="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                  <label for="email"><b>Rating</b></label>
                  <div class="rateyo" id= "rating"
                    data-rateyo-rating="4"
                    data-rateyo-num-stars="5"
                    data-rateyo-score="3">
                    </div>

 
    <span class='result'>0</span>
    <input type="hidden" name="rating">
 
    </div>
    
    <div class="col-md-6">
                  </fieldset>
                  <fieldset>
                    <label for="title"><b>Title</b></label>
                    <input name="title" value="<?php echo $_POST["tit"] ?>" type="text" class="form-control" id="name">
                  </fieldset>
                  </div>
                </div>
              <div class="col-md-12">
                <fieldset>
                <label for="review"><b>Review</b></label>
                  <textarea name="review" rows="6" class="form-control" id="review" placeholder="Enter your Review" required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" onclick = "check()" name="submit" id="form-submit" class="button">Submit</button>
                </fieldset>
              </div>
            </div>
          </form>


    </div>
  </form>
</div>
<div id="popup">
    Record added successfully
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script>
 
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
 
</script>

<script>

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
function check()
{
  var a = alert("Click OK to add your review");
}
</script>


</section>
<?php
include("footer.php");

?>
