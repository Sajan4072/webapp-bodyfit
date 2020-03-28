<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="dashbord1.css">
	<link rel="stylesheet" href="fonts/font-awesome.min.css">
	
</head>
<body>
<?php

session_start();
 include('include/config.php');
if(isset($_POST['submit']))
{
	     $name=$_POST['Username'];
	
       $pass=md5($_POST['Password']);
       
      $query="select *from admin where username='$name' and password='$pass'";
       $data=mysqli_query($conn,$query);
      $total=mysqli_num_rows($data);
         
      if($total==1)
      {
        $_SESSION['username']=$name;
      	header("location:home2.php");
      }
      else
      {
      	echo "login fail";
      }
      
    }

?>
<form method="post" action="">
 <div class="login-box">
 	<h1>Login</h1>
 	<div class="textbox fas fa-users">
 		<input type="text" name="Username" placeholder="Username" value="">
 	</div>
 	<div class="textbox fas fa-key">

 		<input type="password" name="Password" placeholder="Password" value="">
 	</div>
 	<input  class="btn" type="submit" name="submit" value="sign in" >
 </div>
</form>
 	
 	
 </div>
</body>
</html>