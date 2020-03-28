<?php 

    session_start();
    error_reporting(0);
   if(isset($_POST['set']))
    {
         if (strlen($_SESSION['user'])==0)
            {
              header("location:login.php");
            }
            else { 

                 }
    }

  
?>
<style type="text/css">
	
header {
	background: url('http://www.autodatz.com/wp-content/uploads/2017/05/Old-Car-Wallpapers-Hd-36-with-Old-Car-Wallpapers-Hd.jpg');
	text-align: center;
	width: 100%;
	height: auto;
	background-size: cover;
	background-attachment: fixed;
	position: relative;
	overflow: hidden;
	border-radius: 0 0 85% 85% / 30%;
}
header .overlay{
	width: 100%;
	height: 75%;
	padding: 50px;
	color: #FFF;
	text-shadow: 1px 1px 1px #333;
  background-image: linear-gradient( 135deg, #9f05ff69 10%, #fd5e086b 100%);
	
}

.overlay h1 {
	font-family: 'Dancing Script', cursive;
	font-size: 80px;
	margin-bottom: 30px;
}

.overlay h3, p {
	font-family: 'Open Sans', sans-serif;
	margin-bottom: 30px;
}

.overlay button {
	border: none;
	outline: none;
	padding: 10px 20px;
	border-radius: 50px;
	color: #333;
	background: #fff;
	margin-bottom: 50px;
	box-shadow: 0 3px 20px 0 #0000003b;
}
button:hover{
	cursor: pointer;
}
</style>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	  <link rel="icon" href="font/bodyfit.png" type="image/icon type">
	

 <!-- Bootstrap -->
    
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">



	<link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="dashbord1.css">
    <!-- fontawsome -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
  include("navi.php");
 include("admin/include/config.php");

 
     
  ?>
<div class="container">
	
	<div class="row text-center py-5">
		 <?php 
                   
                   $query="select* from products  ";
                   $run=mysqli_query( $conn,$query);
              while($row=mysqli_fetch_array($run))
                {  $image=$row['image'];
                  $price=$row['productprice'];
           
                   $name=$row['name'];


                    ?>

		<div class="col-md-3">
			<div class="card shadow">

			<div class="image">
             <img src="admin/productimages/<?php echo $image; ?> " height="200" width="200">
		   </div>
		    <div class="content">
		    	<h4><?php echo $name; ?></h4>
		    	<h4 class="price-details"><?php echo $price; ?></h4>
		    	<i class="fas fa-star "></i>

		    	<i class="fas fa-star "></i>
		    	<i class="fas fa-star "></i>
		    	<i class="fas fa-star "></i>
		    	<i class="fas fa-star "></i>
		    	<i class="far fa-star"></i>
		    	
		    		<div class="button"><a href="ordertable.php?id=<?php echo $row['id']; ?>">order</a></div>
		    	

		     </div>

			
	
	</div>
</div>
          
		<?php } ?>

	</div>
	
</div>
<header>
	<div class="overlay">
<h1>FAT IS SWEET CRYING</h1>
<h3>no pain no gain</h3>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab.</p>
	<br>
	<button>READ MORE</button>
		</div>
</header>
<?php 
 include("footer.php");
?>
</body>
</html>