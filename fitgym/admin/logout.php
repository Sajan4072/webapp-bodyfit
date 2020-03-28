<?php
session_start();
$_SESSION['username']=="";
session_unset();
//session_destroy();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="index1.php";
</script>
