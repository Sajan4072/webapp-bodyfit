
<?php

     session_start();
       error_reporting(0);
    

       $us=$_SESSION['user'];
   
    if(strlen($us)==0)
        {

        }
      else
      {
        $n="logout";
      }

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="font/bodyfit.png" type="image/icon type">
  
  <link rel="stylesheet" type="text/css" href="dashbord1.css">
  
<!-- Optional theme -->

</head>
<body>
<div class="right">
            <ul>
                  <li><a href="login.php">LOGIN</a></li>
                  <li><a href="signup.php">SIGNUP</a></li>
                  <li><a href="#"><?php echo $us; ?></a></li>
                  <li><a href="logout.php"><?php echo $n; ?></a></li>
                  
                  

            </ul>
        
      </div>

  <div class="header">
      <div class="logo">
   <a href="index.php" class="navbar-brand">BODY <span>FIT</span></a>
   </div>
      
    </label>

    <ul class="menu">
      <a href="index.php">Home</a>
      <a href="ads.php">GYM CENTER</a>
      <a href="new.php">ACCESSORIES</a>
      <a href="coursse.php">FITNESS TUTORIAL</a>
      <a href="dietplan.php">DIET PLAN</a>
      <a href="contact.php">CONTACT</a>
      <label for="chk" class="hide-menu-btn">
        <i class="fas fa-times"></i>
      </label>
    </ul>
  </div>
   <div class="clearfix"> </div>
      

</body>
</html>