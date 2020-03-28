
<?php 
  include("admin/include/config.php");
  
      $s=$_GET['id'];
    
     session_start();
     error_reporting(0);
   

    if ( strlen($_SESSION['user'])==0)
    	   {
    	   	   header("location:login.php");
    	   }
   else 
     { 	  


        $user=$_SESSION['user'];

    $sql="select *from products where id=$s";
      $query=mysqli_query($conn,$sql);
           while($row=mysqli_fetch_array($query))
           	{  $name=$row['name'];
                $price=$row['productprice'];
                $img=$row['image'];
                
                $sql2="insert into orders(pid,name,price,image,orderby)
                        values('$s','$name','$price','$img','$user') ";
                 $query2=mysqli_query($conn,$sql2);

           }
       }
?>
 <?php if (isset($_POST['jit']))
          {
          	  $sql="select * from orders";
           $query=mysqli_query($conn,$sql);
           while($row=mysqli_fetch_array($query))
       	   {    $pid=$row['pid'];
       		 
       		 $image=$row['image'];
       		 $name=$row['name'];
       		 $price=$row['price'];
       		 $orderby=$row['orderby'];
       		 $dates=date("y-m-d");

       		   $sql2="insert into orders1(pid,image,name,price,orderby,dates)
       		                      values('$pid','$image','$name','$price','$orderby','$dates')";
       		      $query2=mysqli_query($conn,$sql2);
          	# code...
         
            }
            $sql3=mysqli_query($conn,"TRUNCATE orders");


          }
          if (isset($_POST['jit2']))
          {
          	  header("location:new.php");

          }
        $sql="select * from orders";
        $query=mysqli_query($conn,$sql);
           while($row=mysqli_fetch_array($query))
       	{    $pid=$row['pid'];
       		 $oid=$row['oid'];
       		 $image=$row['image'];
       		 $name=$row['name'];
       		 $price=$row['price'];
       		 $orderby=$row['orderby'];

       		   $sql2="insert into orders1(pid,oid,image,name,price,orderby)
       		                      values('$pid','$oid','$image','$name','$price','$orderby')";
       		      $query2=mysqli_query($conn,$sql2);
          	# code...
         
          }


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="font/bodyfit.png" type="image/icon type">
	
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="ordertable/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ordertable/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ordertable/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ordertable/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ordertable/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ordertable/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ordertable/css/util.css">
	<link rel="stylesheet" type="text/css" href="ordertable/css/main.css">
<!--===============================================================================================-->
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
    	input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 15px 5px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.jits{
               background-color: black;
     }
     .container
     {
     	background-color: black;
     }
     .jit {
     	   background: #fff0;
     	   background-color: #fff0;
     }
    </style>


</head>
<body>
	 <?php 
  include("navi.php");
 include("admin/include/config.php");

 ?>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">


						<div class="row header">
							<div class="cell">
								Product
							</div>
							<div class="cell">
							      name
							</div>
							<div class="cell">
								  quantity
							</div>
							<div class="cell">
							    price
							</div>
                <div class="cell">
                  Action..
              </div>
					
						</div>
						<?php $sql="select * from orders";
						   $query=mysqli_query($conn,$sql);
						   while($row=mysqli_fetch_array($query))
						   { 
						?>

						<div class="row">
							<div class="cell" data-title="Full Name">
								<img src="<?php echo "admin/productimages/".$row['image']; ?>" height="100" width="150">
							</div>
							<div class="cell" data-title="Age">
							  <?php echo htmlentities($row['name']);?>
							</div>
							<div class="cell" data-title="Job Title">
								1
							</div>
							<div class="cell" data-title="Location">
							RS.<?php echo htmlentities($row['price']);?>
							<?php   $count=$count+$row['price'];
							         ?>
							</div>
              <div class="cell" data-title="Location">
                  <a href="orderdlt.php?oid=<?php echo $row['oid']; ?>">dlt</a>
              </div>
						</div>

				    <?php }  ?>

						
						


						<div class="row">
							<div class="cell" data-title="Full Name">
								total
							</div>
							<div class="cell" data-title="Age">
								
							</div>
							<div class="cell" data-title="Job Title">
								
							</div>
							<div class="cell" data-title="Location">
								RS<?php  echo $count; ?>
							</div>
						</div>
							<div class="row">
							<div class="cell" data-title="Full Name">
							  <?php echo $_SESSION['user'];?>
							</div>
							<div class="cell" data-title="Age">
								
							</div>
							<div class="cell" data-title="Job Title">
					
							</div>
							<div class="cell" data-title="Location">
								<form method="post">
							 <input type="submit" value="update" name="jit">
							 <input type="submit" name="jit2" value="continue">
							</form>
							</div>
						</div>



					</div>
			</div>
		</div>
	</div>


<footer>
      <div class="footer-top">
           <div class="jits">
            <div class="container">
             <div class="row jit">
             <div class=" col-md-3 col-sm-6 col-xs-12 segment-one">
                  <h3>Bodyfit</h3>
                  <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                  </div>
                  <div class=" col-md-3 col-sm-6 col-xs-12 segment-two">
                        <h2>Bodyfit</h2>
                        <ul>
                              <li><a href="#">Event</a></li>
                              <li><a href="#">Support</a></li><li><a href="#">Hosting</a></li>
                              <li><a href="#">Blogs</a></li>

                      </ul>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12 segment-three">
                        <h2>follow us</h2>
                        <p> please flow us on social media</p>
                        <a href="#"><img src="mediaicon/facebook.png " height="40px" width="40px" ></a>
                        <a href="#"><img src="mediaicon/google-plus.png " height="40px" width="40px" ></i></a>
                        <a href="#"><img src="mediaicon/instagram.png " height="40px" width="40px" ></a>
                        <a href="#"><img src="mediaicon/twitter.png " height="40px" width="40px" ></a>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12 segment-four">
                        <h2>our newletter</h2>
                              <p>Send your email address</p>
                              <form action="">
                                    <input type="email" placeholder="email address">
                                    <input type="submit" value="send">
                              </form>

                  </div>   
                 

             </div>
         </div>
       </div>
            
<p class="footer-bottom-text">All right reserve by &copy;Bodyfit.2019</p>
</footer>

<!--===============================================================================================-->	
	<script src="ordertable/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="ordertable/vendor/bootstrap/js/popper.js"></script>
	<script src="ordertable/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="ordertable/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="ordertable/js/main.js"></script>
		       

</body>
</html>