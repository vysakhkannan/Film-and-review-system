<!DOCTYPE html>
<html lang="en">
<title>Register</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="registersty.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">



<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



<link rel="stylesheet" href="mystyle.css"> 
</head>
<body>
           <!--header-->
<header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="login.php"><em>MOVIE</em>MANIAC</a>
    </div>
 
  </header>
    <div  class="wrapper">
    <h2>Registration</h2>  
<div class="form-conteniar">
            <form action="registerpro.php" method="post">
            
                <div class="input-name">
                    <i class="fa fa-user lock"></i>
                    <input type="text" placeholder="Enter Name" name="name" class="text-name">
                </div>
<div class="input-name">
                        <i class="fa fa-envelope email"></i>
                        <input type="number" placeholder="Enter Age" name="age" required class="text-name">
                </div>
                
<div class="input-name">
                        <label>Date of birth: </label>

                    <select name="yearOfBirth">
                        <option value="">Year</option>
                        <?php for ($i = 1940; $i < date('Y'); $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>

                    <select name="monthOfBirth">
                        <option value="">Month</option>
                        <?php for ($i = 1; $i <= 12; $i++) : ?>
                        <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                    <select name="dateOfBirth">
                        <option value="">Date</option>
                        <?php for ($i = 1; $i <= 31; $i++) : ?>
                        <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
<div class="input-name">
<label for="gender">Gender:  </label>
<input type="radio" id="male" name="gender" value="male" require>

    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female" require>
    <label for="female">Female</label>
    <input type="radio" id="LGBT" name="gender" value="LGBT" require>
    <label for="LGBT">LGBT</label>
                </div>
<div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="text" placeholder="Enter Address"  name="address" class="text-name">
                </div>                
<div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="text" placeholder="Enter Email"  name="email" class="text-name">
                </div>
<div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="number" placeholder="Enter Phone NUmber"  name="phno" class="text-name">
                </div>
<div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="text" placeholder="Enter Username"  name="username" class="text-name">
                </div>   
<div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Enter Password"  name="password" class="text-name">
                </div>
<div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Re-type Password" class="text-name">
                </div>             


<div class="input-name">
                        <input type="checkbox" id="cb1" class="chack-button">
                      <label for="cb1" class="chack">I agree with terms and conditions</label>
                    </div>

<div class="input-name">
                        <input class="button" type="submit" name="submit" value="Register" /> 
                    </div>
</form>
</div>
</div>

</body>
</html>
