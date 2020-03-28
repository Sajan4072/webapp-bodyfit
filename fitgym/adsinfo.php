 <!DOCTYPE html>
 <html lang="en">
 <head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta http-equiv="X-UA-Compatible" content="ie=edge">
	 <title>Document</title>
	 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

 </head>
 <body>
<header>
<?php
include("navi.php");
 include("admin/include/config.php");
 
  
   ?>
</header>
<div class="container">
   <?php 
                        include("admin/include/config.php");
                          $s=$_GET['aid'];
                       
                        $sql="select *from ads where aid=$s ";
                        $query=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($query))
                        {


                ?>
<h1 class="h1" style="color: red;"><?php echo $row['name']; ?></h1>
<img src="admin/ads/<?php echo $row['image1']; ?>" alt="" width="1200" height="600">
<br><br>
<p class="lead" class="justify-content" style="color:black; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat accusantium obcaecati quam quo labore dolor cumque maxime iusto. Perferendis eius optio ex minus. Iusto aliquam quaerat ad at libero dolor! Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur harum aspernatur, necessitatibus aliquam natus ullam non quae laudantium voluptate ipsum laboriosam dolor sit eligendi nam nemo illo deserunt mollitia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, enim. Commodi ipsam quaerat dolores beatae quia hic laudantium asperiores fugiat. Porro, aperiam sequi ex quo magni corporis expedita dolores tempora? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi vitae voluptatum et incidunt eveniet veritatis at tempore, suscipit ullam soluta velit. Suscipit eaque, expedita dolor corrupti commodi excepturi beatae iusto?</p>
<br><br>
<div class="row">
     <h2 style="color:red">More pictures</h2>
     <hr style="color:brown;">
     
</div>
<div class="row">

  <div class="col-md-4">
<img src="admin/ads/<?php echo $row['image2']; ?>"class="rounded float-left" alt="..." width="350" height="250" >
</div>
<div class="col-md-4">
  <img src="admin/ads/<?php echo $row['image3']; ?>" class="rounded float-left" alt="..." width="350" height="250" >
</div>
<div class="col-md-4">
  <img src="admin/ads/<?php echo $row['image4']; ?>" class="rounded float-left" alt="..." width="350" height="250" >
</div>

</div>
<hr style="color: red;">
<br><br>
<h1 style="color: red;">Gym Facilities</h1>
<table class="table">
  <tr>
    <th>FACILITY</th>
    <th>arobic exercies,water,mat,other different accessories</th>
  </tr>
</table>
<hr>
<br><br>
<h1 style="color: red;">Gym membership price</h1>
<table class="table">
  <tr>
  <th>SN</th>
  <th>Membership</th>
  <th>price</th>
  </tr>
  <tr>
    <td>1</td>
    <td>1 month</td>
    <td><?php echo $row['price']; ?></td>
  </tr>
  <tr>
    <td>2</td>
    <td>3 month</td>
    <td><?php echo 3*$row['price']; ?></td>
  </tr>
  <tr>
    <td>3</td>
    <td>6 month</td>
    <td><?php echo 6*$row['price']; ?></td>
  </tr>
  <tr>
    <td>3</td>
    <td>12 month</td>
    <td><?php echo 12*$row['price']; ?></td>
  </tr>
</table>
<br><br>
<hr>
<h1  style="color: red;">Contact</h1>

<table class="table">
  <tr>
  <td>Location</td>
  <td><?php echo $row['location']; ?></td>
  </tr>
  <tr>
    <td>tel 1</td>
    <td><?php echo $row['tel']; ?></td>
     
  </tr>
  
  <tr>
    <td>E-mail</td>
    <td><?php echo $row['website']; ?></td>
  </tr>
  <tr>
    <td>Posted by admin</td>
    <td><?php  echo $row['postedby'];?></td>
     
  </tr>
  
</table>
<?php }?>
 
</div>
<footer>
<?php
include("footer.php");
?>
</footer>
</body>
 </html>