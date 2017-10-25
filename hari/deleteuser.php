<?php
include('function.php');
$uid =$_POST['uid'];
$querydetail =  mysqli_query($conn,"DELETE FROM `user_detail` WHERE  id='".$uid."'");
return 1;
?>