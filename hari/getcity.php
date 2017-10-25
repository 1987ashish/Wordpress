<?php
include('function.php');
$stateid =$_POST['state'];
$querydetail =  mysqli_query($conn,"select DISTINCT(cityname) from tbl_city where stateid ='".$stateid."' ORDER BY cityname ASC");
$var='';
$var .= '<option value="">Select district/City</option>';
while($city = mysqli_fetch_array($querydetail)){
	
	$var   .= "<option value ='".$city['cityname']."'>".$city['cityname']."</option>";
		
}
print_r($var);
?>