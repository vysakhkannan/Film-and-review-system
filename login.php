<!DOCTYPE html>
<html lang="en" dir="ltr">
<title>Login</title>
  <head>

    <meta charset="utf-8">
    <title></title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
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

<link rel="stylesheet" href="mystyle.css"> 
    <link rel="stylesheet" href="loginstylezz.css">
<style>

</style>
  </head>
  <body>
    <section>
       <!--header-->
<header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="login.php"><em>MOVIE</em>MANIAC</a>
    </div>
 
  </header>
  <div >
      <p></p>
    </div>


      <form action="loginpro.php" method="post" class="login-form">
        <h1>Login</h1>
        <p> <center>"GOOD FILMS MAKES YOUR LIFE BEAUTIFUL"</center></p>
        <div class="txtb">
          <input type="text" name="username">
          <span data-placeholder="Username"></span>
        </div>

        <div class="txtb">
          <input type="password" name="password">
          <span data-placeholder="Password"></span>
        </div>

        <input type="submit" class="logbtn" value="Login">

        <div class="bottom-text">
          Don't have account? <a href="register.php">Sign up</a>
        </div>



      </form>



      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>
    </section>

</body>

</html>
