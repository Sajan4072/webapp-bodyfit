
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['username'])==0)
	{	
header('location:index1.php');
}
else{
	$pid=$_GET['id'];// product id
 if(isset($_POST['submit']))
   {
	
	
	$productname=$_POST['name'];
	$productcompany=$_POST['productCompany'];
	$productprice=$_POST['productprice'];
	
	$productdescription=$_POST['productDescription'];
	
	$productavailability=$_POST['productavailability'];
	
	

	  $dates=date("y-m-d");
	   
	 
      
       $admins=$_SESSION['username'];
	
	$queery="insert into 
	             products(name,productcompany,productprice,productDescription,productavilability,admin,dates)    
	             values('$productname','$productcompany','$productprice','$productdescription','$productavailability',
	             '$admins','$dates')";
$sql=mysqli_query($conn,$queery);
$_SESSION['msg']="Product Inserted Successfully !!";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Insert Product</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

   <script>
function getSubcat(val) {
	$.ajax({
	type: "POST",
	url: "get_subcat.php",
	data:'cat_id='+val,
	success: function(data){
		$("#subcategory").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>	


</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Insert Product</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

<?php 

$query=mysqli_query($conn,"select * from products where id=$pid");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
  


?>


									


<div class="control-group">
<label class="control-label" for="basicinput">Product Name</label>
<div class="controls">
<input type="text"    name="name"  placeholder="Enter Product Name" value="<?php echo htmlentities($row['name']);?>" class="span8 tip" >
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Product Company</label>
<div class="controls">
<input type="text"    name="productCompany"  placeholder="Enter Product Comapny Name" value="<?php echo htmlentities($row['productcompany']);?>" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Product Price</label>
<div class="controls">
<input type="text"    name="productprice"  placeholder="Enter Product Price" value="<?php echo htmlentities($row['productprice']);?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Product Description</label>
<div class="controls">
<textarea  name="productDescription"  placeholder="Enter Product Description" rows="6" class="span8 tip">
<?php echo htmlentities($row['productDescription']);?>
</textarea>  
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Product Availability</label>
<div class="controls">
<select   name="productavailability"  id="productAvailability" class="span8 tip" required>
<option value="<?php echo htmlentities($row['productavilability']);?>"><?php echo htmlentities($row['productavilability']);?></option>
<option value="In Stock">In Stock</option>
<option value="Out of Stock">Out of Stock</option>
</select>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Product Image</label>
<div class="controls">
<img src="productimages/<?php echo htmlentities($row['image']); ?> " width="200" height="100"> 
<br>
<br>
<a href="updateimage.php?id=<?php echo $row['id'];?>">Change Image</a>
</div>
</div>






<?php } ?>
	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Update</button>
											</div>
										</div>
									</form>
							</div>
						</div>


	
						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
