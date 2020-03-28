<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['username'])==0)
  { 
header('location:index1.php');
}
  
      if(isset($_POST['submit']))
      {  $s=$_GET['oid'];
        $sql=mysqli_query($conn,"delete from orders1 where oid=$s");
        ?> 
        <script> alert("order delivered");</script>


     <?php
   header("location:home2.php");
      }?>
  


n
<!DOCTYPE html>
<html>
<head>
  <title>
    
  </title>
  <style type="text/css">
    table {
  border-collapse: separate;
  border-spacing: 100px 0;
}

td {
  padding: 50px 0;
}
  </style>
</head>
<body>
     <center><h2>Deliverd product<h2></center><hr>
     <center> 
         <table>
           <tr>
            <th>Product name</th> 
           <th>Price</th>
           <th>Customer name</th>
         </tr>
         <?php 
              $s=$_GET['oid'];
             $sql=mysqli_query($conn,"select *from orders1 where oid=$s");
        while($row=mysqli_fetch_array($sql))
        {
                ?>
         <tr>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['orderby']; ?></td>
        </tr>
      <?php } ?>
         </table>
         <br><p>.................................</p><p>signature</p>
           <form method="post">
          <input type="submit" name="submit" value="delivered">
        </form>
       </center>
       <