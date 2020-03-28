
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['username'])==0)
	{	
header('location:index.php');
     }



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Pending Orders</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
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
								<h3>Pending Orders</h3>
							</div>
								

									

							
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display table-responsive" >
									<thead>
										<tr>
										     <th>#</th>
										     <th>Fname</th>
										     <th>Lname</th>
										     <th>Email</th>
										     <th>phon no</th>
										     <th>Password</th>
										     <th>created on</th>
										    
											
										
										</tr>
									</thead>
								
<tbody>
<?php 
$status='Delivered';
$query=mysqli_query($conn,"select *from users");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>										
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
                                             <td><?php echo htmlentities($row['Fname']);?></td>
										   
											<td><?php echo htmlentities($row['Lname']);?></td>


											<td><?php echo htmlentities($row['email']);?></td>
											<td><?php echo htmlentities($row['phon']);?></td>
											
										    <td><?php echo htmlentities($row['passwords']);?></td>
												<td><?php echo htmlentities($row['dates']);?></td>
										 
										     
										   
									</tr>

										<?php $cnt=$cnt+1; } ?>
</tbody>
								</table>
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
