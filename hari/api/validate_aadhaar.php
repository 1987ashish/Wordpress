<?php 
 include '../connection.php';
 $data = array();
 if(!empty($_REQUEST['aadhar_card_data']) && isset($_REQUEST['aadhar_card_data']))
 {
 	$get_aadhaar_no = $_REQUEST['aadhar_card_data'];
    $sql = mysqli_query($conn,"SELECT id FROM user_detail WHERE adharno ='$get_aadhaar_no'");
    //echo "SELECT id FROM user_detail WHERE adharno ='$get_aadhaar_no'";
    //exit;
    	if(mysqli_num_rows($sql)>0)
    	{
    		$retrive_data = mysqli_fetch_row($sql);
    		$data['response_code'] = '200'; //code use for the success
			$data['message'] = 'Aadhaar Card Number All Ready Exist';
			echo json_encode($data);
    	}
    	if(mysqli_num_rows($sql)<=0)
    	{
    		$retrive_data = mysqli_fetch_row($sql);
    		$data['response_code'] = '404'; //code use for the success
			$data['message'] = '';
			echo json_encode($data);
    	}
 }
 else
 {
 	$data['response_code'] = '204'; //code use for no content
 	$data['message'] = 'Empty Data';
 	echo json_encode($data);
 }
?>