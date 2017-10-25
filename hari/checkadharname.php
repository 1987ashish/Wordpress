<?php
session_start();
include('connection.php');

   $searchVal = $_POST['adhaarname'];
     $querydetail = mysqli_query($conn, "SELECT * FROM user_detail WHERE adharno ='".$searchVal."'");
           $result = mysqli_num_rows($querydetail);
        if($result>0) {
            echo "true";
        } else {
            echo "false";
        } 


?>
