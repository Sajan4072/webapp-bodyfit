<?php 

   $uname=$_SESSION['username'];


  $sql="select * from admin where username='$uname '";
  $res=mysqli_query($conn,$sql);
  $result=mysqli_fetch_assoc($res);
  $_SESSION['img']=$result['image'];
  
?>		 