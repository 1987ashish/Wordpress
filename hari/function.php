<?php
session_start();
include('connection.php');

//Connection stablish//
//----------User Personal Detail----//

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
    
    //Insert query in user detail page//
    $querydetail = mysqli_query($conn, "INSERT INTO user_detail(userid,adharno,uanno,esino,firstname,secondname,lastname,dob,doj,blood_group,fathername,husband_wife_name
    ,persional_email_id,gender,mobile_number,matital_status,pan_number,bank_number,bank_account,ifsc_number,
    corresp_house_address,corresp_colony,corresp_city,corresp_state,corresp_pincode,pernt_house_address,pernt_corresp_colony,pernt_corresp_city,pernt_corresp_state,
    pernt_corresp_pincode,convicted,place,date) VALUES('" . $username . "', '" . $adharno . "', '" . $uanno . "','" . $esino . "', '" . $firstname . "','" . $secondname . "','" . $lastname . "','" . $dob . "','" . $doj . "','" . $blood_group . "'
    ,'" . $fathername . "','" . $husband_wife_name . "','" . $persional_email_id . "','" . $gender . "','" . $mobile_number . "','" . $matital_status . "','" . $pan_number . "','" . $bank_number . "'
    ,'" . $bank_account . "','" . $ifsc_number . "','" . $corresp_house_address . "'
    ,'" . $corresp_colony . "','" . $corresp_city . "','" . $corresp_state . "','" . $corresp_pincode . "','" . $pernt_house_address . "','" . $pernt_corresp_colony . "','" . $pernt_corresp_city . "','" . $pernt_corresp_state . "', '" . $pernt_corresp_pincode . "' , '" . $convicted . "' , '" . $place . "', '" . $date . "')");
    $last_id     = $conn->insert_id;
    
    //----------Qualificaation Detail--------//
    $qualification = $_POST['qualification'];
    $college       = $_POST['college'];
    $afliliated    = $_POST['afliliated'];
    $to_form       = $_POST['to_form'];
    $year_to       = $_POST['year_to'];
    $year_per      = $_POST['year_per'];
    $i             = 0;
    foreach ($qualification as $value) {
        if (!empty($value) && !empty($college[$i])) {
            
            $query = mysqli_query($conn, "INSERT INTO user_qualification(uid,qualification,college,affliliated,year_form,year_to,percentage) VALUES('" . $last_id . "','" . $value . "','" . $college[$i] . "','" . $afliliated[$i] . "','" . $to_form[$i] . "','" . $year_to[$i] . "','" . $year_per[$i] . "')");
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
            
            $query = mysqli_query($conn, "INSERT INTO  tbl_pre_employment(uid,organization,service_from,service_to,total_service,designation,gross_salary,responsibilities) 
    VALUES('" . $last_id . "','" . $value . "','" . $service_from[$i] . "','" . $service_to[$i] . "','" . $total_service[$i] . "','" . $designation[$i] . "','" . $gross_salary[$i] . "','" . $responsibilities[$i] . "')");
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
            $query         = mysqli_query($conn, "INSERT INTO  tbl_membership_details(uid,name,member,membership_no,position) 
            VALUES('" . $last_id . "','" . $name . "','" . $member . "','" . $membership_no . "','" . $position . "')");
        }
    }
    
    //----------END---------------------------//
    
    //---------------Family Details----------------//
    
    $family_name         = $_POST['family_name'];
    $dobirth             = $_POST['dobirth'];
    $family_email_id     = $_POST['family_email_id'];
    $family_relationship = $_POST['family_relationship'];
    $family_aadharno     = $_POST['family_aadharno'];
    $family_mobileno     = $_POST['family_mobileno'];
    
    
    $i = 0;
    foreach ($family_name as $value) {
        if (!empty($value)) {
            
            $query = mysqli_query($conn, "INSERT INTO tbl_family_detail(uid,family_name,dobirth,family_email_id,family_relationship,family_aadharno,family_mobileno) 
    VALUES ('" . $last_id . "','" . $value . "', '" . $dobirth[$i] . "', '" . $family_email_id[$i] . "', '" . $family_relationship[$i] . "', '" . $family_aadharno[$i] . "', '" . $family_mobileno[$i] . "')");
        }
        $i++;
    }
    
    //---------------END-------------------//
    
    
    //-----------Details Of Knowing Any KENT Employee-------------//
    
    $reference_name    = $_POST['reference_name'];
    $emp_code          = $_POST['emp_code'];
    $designation       = $_POST['designation'];
    $department        = $_POST['department'];
    $kent_relationship = $_POST['kent_relationship'];
    $kent_mobile_no    = $_POST['kent_mobile_no'];
    
    $i = 0;
    foreach ($reference_name as $value) {
        if (!empty($value)) {
            $queryref = mysqli_query($conn, "INSERT INTO details_of_knowing_any_kent_employee(uid,reference_name,emp_code,designation,department,kent_relationship,kent_mobile_no)
        VALUES ('" . $last_id . "','" . $value . "','" . $emp_code[$i] . "','" . $designation[$i] . "','" . $department[$i] . "','" . $kent_relationship[$i] . "','" . $kent_mobile_no[$i] . "')");
            
        }
        $i++;
        
    }
    header('Location:userdetail.php?succ=1');
    
}
?>