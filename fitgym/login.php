
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="icon" href="font/bodyfit.png" type="image/icon type">
  
	<link rel="stylesheet" type="text/css" href="login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="dashbord1.css">
	 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

	<style type="text/css">
     .msg{
            color: red;
            font-size: 30px;
             font-style: italic;
     } 
  </style>
</head>
<body>
	 <?php
     session_start();
     error_reporting(0);
   include("navi.php");
     
      ?>
      <?php


 include('admin/include/config.php');
if(isset($_POST['submit']))
{
	     $name=$_POST['user'];
	
       $pass=md5($_POST['pass']);
       
       
       $query="select *from users where email='$name' and passwords='$pass'";
       $data=mysqli_query($conn,$query);
       $total=mysqli_num_rows($data);
         
      if($total==1)
      {
        $_SESSION['user']=$name;
         header("location:index.php");


        
      	
      }
      else
      {
      	$x="login fail";
      }
      
    }
  


?>

	
<div class="login">
  <div class="msg">
  <center><?php  echo $x ?>
	</center>
</div>
	<h2><center>login</center></h2>
	<form method="post"  action="" >
		<input type="text" placeholder="user name" required="plz fill user name" name="user">
		<input type="password" placeholder="password" required="plz fill password" name="pass">
		<input type="submit" value="login" name="submit"><br>
		<DIV CLASS="id">
			<br>
			<a href="signup.php"> signup</a>
	    </DIV>
	</form>

</div>
<?php 
 include("footer.php");
?>
</body>
</html>