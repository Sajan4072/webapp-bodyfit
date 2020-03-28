<?php
      include("admin/include/config.php");
  if(isset($_GET['oid']))
      {    $s=$_GET['oid'];

              $sd=mysqli_query($conn,"delete from orders1 where oid=$s");
                
              ?>   <script>alert("order deleted");</script><?php
      }

?>