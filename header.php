<?php
session_start();
$username=$_SESSION['username'];
?>
<!--header-->
<header class="main-header clearfix" role="header">

    <div class="logo">
      <a href="homee.php"><em>MOVIE</em>MANIAC</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="homee.php">Home</a></li>
        <li class="has-submenu"><a href="#section2">About Us </a>
          <ul class="sub-menu">
            <li><a href="#section2">Who we are?</a></li>
            <li><a href="#section3">What we do?</a></li>
            <li><a href="#section3">How it works?</a></li>

          </ul>
        </li>
        <li><a href="moviessearch.php">Movies <i class="fa fa-search" aria-hidden="true"></i> </a></li>
        <li><a href="tvseriessearch.php">TV Series  <i class="fa fa-search" aria-hidden="true"></i> </a></li>

        <!-- <li><a href="#section5">Video</a></li> -->
        <li class="has-submenu"><a href="#section2">My Wishlist </a>
          <ul class="sub-menu">
          <li><a href="mymovieswishlist.php?username=<?php echo $username ?>">Movies Wishlist</a></li>
            <li><a href="mytvserieswishlist.php?username=<?php echo $username ?>">TVSeries Wishlist</a></li>

          </ul>
        </li>

        <li class="has-submenu"><a href="#section2">Account Settings</a>
          <ul class="sub-menu">
            <li><a href="myprofile.php">My Profile</a></li>
            

            <li><a href="changepassword.php">ChangePassword</a></li>
            <li><a href="logout.php">Logout </a></li>

          </ul>
        </li>
      </ul>
    </nav>

  </header>


