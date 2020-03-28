
<?php
session_start();
include('include/config.php');

if(strlen($_SESSION['username'])==0)
	{	
header('location:index.php');
}
else{
	
  if(isset($_POST['submit']))
   {
	$name=$_POST['name'];
	 $location=$_POST['location'];
	 $website=$_POST['website'];
	 $price=$_POST['price'];
	 $tel=$_POST['tel'];

	 $disc=$_POST['disc'];
	 $image1=$_FILES['image1']['name'];
	 $image2=$_FILES['image2']['name'];
	 $image3=$_FILES['image3']['name'];
	 $image4=$_FILES['image4']['name'];

	 $temp1=$_FILES['image1']['tmp_name'];
	 $temp2=$_FILES['image2']['tmp_name'];
	 $temp3=$_FILES['image3']['tmp_name'];
	 $temp4=$_FILES['image4']['tmp_name'];

	 $dir1="ads/".$image1;
	 $dir2="ads/".$image2;
	 $dir3="ads/".$image3;
	 $dir4="ads/".$image4;
	 move_uploaded_file($temp1, $dir1);
	 move_uploaded_file($temp2, $dir2);
	 move_uploaded_file($temp3, $dir3);
	 move_uploaded_file($temp4, $dir4);
	  $dates=date("y-m-d");
	   
	 
      
       $admins=$_SESSION['username'];

	 $sql="insert into ads(description,image1,image2,image3,location,name,postedby,price,website,dates,image4,tel)
	    values('$disc','$image1','$image2','$image3','$location','$name','$admins','$price','$website','$dates','$image4','$tel')";
	    $query=mysqli_query($conn,$sql);

	
 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Insert  Ads</title>
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
								<h3>Insert Ads</h3>
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



<div class="control-group">
<label class="control-label" for="basicinput">Gym center name</label>
<div class="controls">
<input type="text" name="name" id="name"  placeholder="Enter gym center" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Location</label>
<div class="controls">
<input type="text"    name="location"  placeholder="Enter gym center location" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Telephone no</label>
<div class="controls">
<input type="text"    name="tel"  placeholder="Telephone no" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Email</label>
<div class="controls">
<input type="text"    name="website"  placeholder="Enter email" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Price per month</label>
<div class="controls">
<input type="text"    name="price"  placeholder="Enter  Price" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Site Description</label>
<div class="controls">
<textarea  name="disc"  placeholder="Enter site Description" rows="6" class="span8 tip">
</textarea>  
</div>
</div>







<div class="control-group">
<label class="control-label" for="basicinput">Product Image1</label>
<div class="controls">
<input type="file" name="image1" id="productimage1" value="" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Product Image2</label>
<div class="controls">
<input type="file" name="image2"  class="span8 tip" required>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Product Image3</label>
<div class="controls">
<input type="file" name="image3"  class="span8 tip">
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Product Image4</label>
<div class="controls">
<input type="file" name="image4"  class="span8 tip">
</div>
</div>

	
	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Insert</button>
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

