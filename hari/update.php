<?php
session_start();
include('connection.php');

if (isset($_POST['submit'])) {
    
    $username           = $_SESSION['username'];
    $adharno            = $_POST['adharno'];
    $uanno              = $_POST['uanno'];
    $esino              = $_POST['esino'];
    $firstname          = $_POST['firstname'];
    $secondname         = $_POST['secondname'];
    $lastname           = $_POST['lastname'];
    $dob                = $_POST['dob'];
    $doj                = $_POST['doj'];
    $blood_group        = $_POST['blood_group'];
    $fathername         = $_POST['fathername'];
    $husband_wife_name  = $_POST['husband_wife_name'];
    $persional_email_id = $_POST['persional_email_id'];
    $gender             = $_POST['gender'];
    $mobile_number      = $_POST['mobile_number'];
    $matital_status     = $_POST['matital_status'];
    $pan_number         = strtoupper($_POST['pan_number']);
    $bank_number        = $_POST['bank_number'];
    $bank_account       = $_POST['bank_account'];
    $ifsc_number        = $_POST['ifsc_number'];
    
    $corresp_house_address = $_POST['corresp_house_address'];
    $corresp_colony        = $_POST['corresp_colony'];
    
    $corresp_city = '';
    if (isset($_POST['corresp_city'])) {
        $corresp_city = $_POST['corresp_city'];
    }
    $corresp_state        = $_POST['corresp_state'];
    $corresp_pincode      = $_POST['corresp_pincode'];
    $pernt_house_address  = $_POST['pernt_house_address'];
    $pernt_corresp_colony = $_POST['pernt_corresp_colony'];
    $pernt_corresp_city   = '';
    if (isset($_POST['pernt_corresp_city'])) {
        $pernt_corresp_city = $_POST['pernt_corresp_city'];
    }
    $pernt_corresp_state = '';
    if (isset($_POST['pernt_corresp_state'])) {
        $pernt_corresp_state = $_POST['pernt_corresp_state'];
    }
    $pernt_corresp_pincode = $_POST['pernt_corresp_pincode'];
    
    $convicted = $_POST['convicted'];
    $place     = $_POST['place'];
    $date      = $_POST['date'];
    
    $querydetail = mysqli_query($conn, "UPDATE user_detail SET userid  = '" . $username . "', adharno  = '" . $adharno . "', uanno  = '" . $adharno . "', esino  = '" . $esino . "', firstname  = '" . $firstname . "', secondname  = '" . $secondname . "', lastname  = '" . $lastname . "', 
	dob  = '" . $dob . "', doj  = '" . $doj . "', blood_group  = '" . $blood_group . "', fathername  = '" . $fathername . "', husband_wife_name  = '" . $husband_wife_name . "', persional_email_id  = '" . $persional_email_id . "', gender = '" . $gender . "', mobile_number = '" . $mobile_number . "',
	matital_status = '" . $matital_status . "', pan_number = '" . $pan_number . "', bank_number = '" . $bank_number . "', bank_account = '" . $bank_account . "', ifsc_number = '" . $ifsc_number . "'	,
	corresp_house_address = '" . $corresp_house_address . "' , corresp_colony = '" . $corresp_colony . "', , corresp_city = '" . $corresp_city . "' , , corresp_state = '" . $corresp_state . "'
	, corresp_pincode = '" . $corresp_pincode . "', pernt_house_address = '" . $pernt_house_address . "', pernt_corresp_colony = '" . $pernt_corresp_colony . "', pernt_corresp_city = '" . $pernt_corresp_city . "', 
	pernt_corresp_state = '" . $pernt_corresp_state . "',pernt_corresp_pincode = '" . $pernt_corresp_pincode . "',convicted = '" . $convicted . "',place = '" . $place . "',date = '" . $date . "'");
	  $last_id     = $conn->insert_id; 
    //echo ("UPDATE user_detail SET adharno  = '".$adharno."', firstname  = '".$firstname."', lastname = '".$lastname."' "); exit;
	
	
	//----------Qualificaation Detail--------//
    $qualification = $_POST['qualification'];
    $college       = $_POST['college'];
    $afliliated    = $_POST['afliliated'];
    $to_form       = $_POST['to_form'];
    $year_to       = $_POST['year_to'];
    $year_per      = $_POST['year_per'];
    $i             = 0;
    foreach ($qualification as $value) {
        if (!empty($value)) {
            
            $query = mysqli_query($conn, "UPDATE user_qualification SET uid = '" . $last_id . "', qualification = '" . $qualification . "', college = '" . $college . "', afliliated = '" . $afliliated . "', to_form = '" . $to_form . "', year_to = '" . $year_to . "', year_per = '" . $year_per . "'");
        }
        $i++;
    }
    
    //----------END---------------------------// 
	
	//----------Pre Employment Details--------//
    $organization     = $_POST['organization'];
    $service_from     = $_POST['service_from'];
    $service_to       = $_POST['service_to'];
    $total_service    = $_POST['total_service'];
    $designation      = $_POST['designation'];
    $gross_salary     = $_POST['gross_salary'];
    $responsibilities = $_POST['responsibilities'];
    $i                = 0;
    foreach ($organization as $value) {
        if (!empty($value)) {
            
            $query = mysqli_query($conn, "UPDATE tbl_pre_employment SET uid = '" . $last_id . "', organization = '" . $organization . "', service_from = '" . $service_from . "', service_to = '" . $service_to . "',
			total_service = '" . $total_service . "', designation = '" . $designation . "', gross_salary = '" . $gross_salary . "', responsibilities = '" . $responsibilities . "'");
        }
        $i++;
    }
    //----------END---------------------------//
	
	//---------Menbership Details--------//
    for ($counter = 1; $counter <= 4; $counter++) {
        if (isset($_POST['member' . $counter]) && $_POST['member' . $counter] == 'Yes') {
            $name          = $_POST['name' . $counter] ? $_POST['name' . $counter] : '';
            $member        = $_POST['member' . $counter] ? $_POST['member' . $counter] : '';
            $membership_no = $_POST['membership_no' . $counter] ? $_POST['membership_no' . $counter] : '';
            $position      = $_POST['position' . $counter] ? $_POST['position' . $counter] : '';
			
            $query         = mysqli_query($conn, "UPDATE tbl_membership_details SET uid = '" . $last_id . "', qualification = '" . $qualification . "', college = '" . $college . "', afliliated = '" . $afliliated . "', to_form = '" . $to_form . "', year_to = '" . $year_to . "', year_per = '" . $year_per . "'");
        }
    }
    
    //----------END---------------------------//
	
    
    header('Location:edit.php?succ=1');
	
    
}
?>