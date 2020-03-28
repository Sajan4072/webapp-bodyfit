 <?php      
          include('admin/include/config.php');

if(isset($_POST['submit']))
   {
  
  
  $email2=$_POST['email'];
  $fname=$_POST['name'];
  $lname=$_POST['name2'];
  
  $number=$_POST['phon'];
  
  $password=md5($_POST['password']);
  
  
   
      $dates=date("y-m-d");
      

      
  $queery="insert into 
               users(email,Fname,Lname,passwords,phon,dates)    
               values('$email2','$fname','$lname','$password','$number','$dates')";
$sql=mysqli_query($conn,$queery);
$x="sign up successfully!!";

}

                    
      ?>
      

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="icon" href="font/bodyfit.png" type="image/icon type">
  
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="dashbord1.css">
	<link rel=stylesheet type="text/css" href="signup.css">
	 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<style type="text/css">
     .msg{
            color: red;
            font-size: 20px;
             font-style: italic;
     } 
  </style>
<body>
     <?php
   include("navi.php");
      ?>
      

  <div class="signup">
       <div class="msg">
  <center><?php  echo $x ?>
  </center>
</div>
  	  <h2>signup</h2>
  	<form method="post" action="" onsubmit=" return fun();" name="f1">

  		<input type="text" placeholder="firstname" name="name" required>
  		<input type="text" placeholder="lastname" name="name2"required>
  		<input type="text" placeholder="email " name="email" required>
  		<input type="text" placeholder="phon number" name="phon" required>
  		<input type="password" placeholder="password" name="password" required>
  		<input type="password" placeholder="retype" name="password2" required>

  		<input type="submit" value="submit" name="submit">

  	</form>


  </div>

  <?php 
 include("footer.php");
?>
<script type="text/javascript">
     function fun()
                  {
                    var firstname=document.f1.name.value;  
                    var secondname=document.f1.name2.value;
                    var email=document.f1.email.value;
                    var  phon=document.f1.phon.value;
                    var passwords1=document.f1.password.value;
                    var passwords2=document.f1.password2.value;

                     if(firstname.length>10 || secondname.length>10)
                        {
                          alert("name must be less than 10");
                            return false;
                        }
                     var atposition=email.indexOf("@");  
                     var dotposition=email.lastIndexOf(".");  
                     if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length)
                      {  
                       alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
                        return false;
                       
                       }  

                      if (isNaN(phon)){  
                                       alert("enter valid number");
                                       return false;  
                                     }
                        if(phon.length>10 || phon.length<10)

                               {
                                alert("phon number must be 10");
                                return false;
                               }                    
                          if(passwords1==passwords2)
                          {
                               return true;
                          } 
                             else {
                                   alert("retype password  not match");
                                   return false;
                             } 

    
                    
                  }
                </script>
     
</body>

</html>

