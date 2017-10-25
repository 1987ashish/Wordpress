<?php
  include('update.php');
  //print_r($_SESSION);
  if($_SESSION['username']==''){
  	header('location:index.php');
  	
  }
  
include('connection.php');
$userdetail =  mysqli_query($conn,"SELECT * FROM `user_detail` WHERE id=".$_GET['id']."");
$detail = mysqli_fetch_array($userdetail);
//print_r($detail);exit();
$qualificationdetail =  mysqli_query($conn,"SELECT * FROM `user_qualification` WHERE uid = ".$_GET['id']."");

$preemploymentdetails = mysqli_query($conn,"SELECT * FROM  `tbl_pre_employment` WHERE uid =".$_GET['id']."");

$familydetails = mysqli_query($conn,"SELECT * FROM `tbl_family_detail` WHERE uid =".$_GET['id']."");
$fdetail = mysqli_fetch_array($familydetails);
$membershipdetails = mysqli_query($conn,"SELECT * FROM `tbl_membership_details` WHERE uid = ".$_GET['id']."");

$knowingkentemployee = mysqli_query($conn,"SELECT * FROM `details_of_knowing_any_kent_employee` WHERE uid = ".$_GET['id']."");
$kdetail = mysqli_fetch_array($familydetails);
  //state list
  $querydetail =  mysqli_query($conn,"select * from tbl_state where 1");
  $querydetails =  mysqli_query($conn,"select * from tbl_state where 1");
  ?>
<!DOCTYPE html>
<!-- 
  Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.1
  Version: 3.6.1
  Author: KeenThemes
  Website: http://www.keenthemes.com/
  Contact: support@keenthemes.com
  Follow: www.twitter.com/keenthemes
  Like: www.facebook.com/keenthemes
  Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
  License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
  -->
<!--[if IE 8]> 
<html lang="en" class="ie8 no-js">
  <![endif]-->
  <!--[if IE 9]> 
  <html lang="en" class="ie9 no-js">
    <![endif]-->
    <!--[if !IE]><!-->
    <html lang="en">
      <!--<![endif]-->
      <!-- BEGIN HEAD -->
      <head>
        <meta charset="utf-8"/>
        <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
        <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
        <style>
          article, aside, figure, footer, header, hgroup, 
          menu, nav, section { display: block; }
        </style>
        <title>KENT Employment Form</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel="stylesheet" type="text/css" href="assets/global/plugins/select2/select2.css"/>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME STYLES -->
        <link href="assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
        <link id="style_color" href="assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css"/>
        <link href="assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
        <style>
          label.error {
          color: darkred;
          }
        </style>
      </head>
      <!-- END HEAD -->
      <!-- BEGIN BODY -->
      <!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
      <!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
      <!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
      <!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
      <!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
      <!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
      <!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
      <!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
      <!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
      <body class="page-header-fixed page-quick-sidebar-over-content ">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
          <!-- BEGIN HEADER INNER -->
          <div class="page-header-inner">
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            </a>
            <li>
              <style>
                a.name {
                font-size: 25px;
                }
              </style>
              <a class="name">
              <i class="icon-user"></i><?php echo $_SESSION["username"];?> </a>
            </li>
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
              <ul class="nav navbar-nav pull-right">
                <li class="dropdown dropdown-user">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <!--<img alt="" class="img-circle" src="assets/admin/layout/img/avatar3_small.jpg"/>-->
                    <span class="username username-hide-on-mobile">
                    User </span>
                    <i class="fa fa-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-default">
                    <li>
                      <a>
                      <i class="icon-user"></i><?php echo $_SESSION["username"];?> </a>
                    </li>
                    <li>
                      <a href="logout.php">
                      <i class="icon-key"></i> Log Out </a>
                    </li>
                  </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <!-- END QUICK SIDEBAR TOGGLER -->
              </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
            <!-- END RESPONSIVE MENU TOGGLER -->
          </div>
          <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <div class="clearfix"></div>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
        <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Modal title</h4>
              </div>
              <div class="modal-body">
                Widget settings form goes here
              </div>
              <div class="modal-footer">
                <button type="button" class="btn blue">Save changes</button>
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN STYLE CUSTOMIZER -->
        <div class="theme-panel hidden-xs hidden-sm">
          <!--<div class="toggler">
            </div>-->
          <div class="toggler-close">
          </div>
          <div class="theme-options">
            <div class="theme-option theme-colors clearfix">
              <span>
              THEME COLOR </span>
              <ul>
                <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
                </li>
                <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue">
                </li>
                <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
                </li>
                <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
                </li>
                <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
                </li>
                <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2">
                </li>
              </ul>
            </div>
            <div class="theme-option">
              <span>
              Layout </span>
              <select class="layout-option form-control input-sm">
                <option value="fluid" selected="selected">Fluid</option>
                <option value="boxed">Boxed</option>
              </select>
            </div>
            <div class="theme-option">
              <span>
              Header </span>
              <select class="page-header-option form-control input-sm">
                <option value="fixed" selected="selected">Fixed</option>
                <option value="default">Default</option>
              </select>
            </div>
            <div class="theme-option">
              <span>
              Top Menu Dropdown</span>
              <select class="page-header-top-dropdown-style-option form-control input-sm">
                <option value="light" selected="selected">Light</option>
                <option value="dark">Dark</option>
              </select>
            </div>
            <div class="theme-option">
              <span>
              Sidebar Mode</span>
              <select class="sidebar-option form-control input-sm">
                <option value="fixed">Fixed</option>
                <option value="default" selected="selected">Default</option>
              </select>
            </div>
            <div class="theme-option">
              <span>
              Sidebar Menu </span>
              <select class="sidebar-menu-option form-control input-sm">
                <option value="accordion" selected="selected">Accordion</option>
                <option value="hover">Hover</option>
              </select>
            </div>
            <div class="theme-option">
              <span>
              Sidebar Style </span>
              <select class="sidebar-style-option form-control input-sm">
                <option value="default" selected="selected">Default</option>
                <option value="light">Light</option>
              </select>
            </div>
            <div class="theme-option">
              <span>
              Sidebar Position </span>
              <select class="sidebar-pos-option form-control input-sm">
                <option value="left" selected="selected">Left</option>
                <option value="right">Right</option>
              </select>
            </div>
            <div class="theme-option">
              <span>
              Footer </span>
              <select class="page-footer-option form-control input-sm">
                <option value="fixed">Fixed</option>
                <option value="default" selected="selected">Default</option>
              </select>
            </div>
          </div>
        </div>
        <!-- END STYLE CUSTOMIZER -->
        <!-- BEGIN PAGE HEADER-->
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
          <div class="col-md-12">
            <div class="tabbable tabbable-custom boxless tabbable-reversed">
              <div >
                <div >
                  <div class="portlet box blue">
                    <div class="portlet-title">
                      <div class="caption">
                        <i class="fa fa-gift"></i>Employment Form 
                      </div>
                      <!--<div class="tools">
                        <a href="javascript:;" class="collapse">
                        </a>
                        <a href="#portlet-config" data-toggle="modal" class="config">
                        </a>
                        <a href="javascript:;" class="reload">
                        </a>
                        <a href="javascript:;" class="remove">
                        </a>
                        </div>-->
                    </div>
                    <div class="portlet-body form">
                      <?php
                        if(isset($_GET['succ']) == 1){
                        	
                        	echo '<div id ="successMessage" class="alert alert-success"><strong>Form submitted successfully.</strong></div>';
                        	?>
                      <script>
                        setTimeout(function() {
                        $('#successMessage').hide('fast');
                        window.location.href = window.location.href.split('?')[0];
                        }, 5000);
                      </script>
                      <?php
                        }
                        
                        ?>
                      <!-- BEGIN FORM-->
                      <form action="update.php" id="signupForm" method="post" class="horizontal-form" >
                        <div class="form-body">
                          <h3 class="form-section"><strong>Personal Details</strong></h3>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Aadhar Card No.</label>
                                <input type="text" maxlength="12"  id="adharno"  class="form-control" value="<?php echo $detail['adharno'] ?>"  name ="adharno" placeholder="">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">PAN NO.</label>
                                <input type="text" id="pan_number" class="form-control" onblur="return validatePanNumber(this.value);" value="<?php echo $detail['pan_number'] ?>"  style="text-transform: uppercase" name ="pan_number"  placeholder="" >
                                <span id="pannumbers"></span>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">UAN NO.</label>
                                <input type="text" maxlength="12" id="uanno" class="form-control" value="<?php echo $detail['uanno'] ?>"  name ="uanno"  placeholder="">
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">ESI NO.</label>
                                <input type="text" id="esino" maxlength="10" class="form-control" value="<?php echo $detail['esino'] ?>"  onkeypress='return isNumberKey(event)' name ="esino"  placeholder="">
                              </div>
                            </div>
                            <!--/span-->
                          </div>
                          <label class="forml" style="border-bottom: 1px solid #eee; ">*Name Printed on cheque/Passbook/Bank statement should be same as given in aadhar Card.</label>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label">Bank Name</label>
                                <input type="text" id="firstName" class="form-control" value="<?php echo $detail['bank_number'] ?>" name ="bank_number"  placeholder="">
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label">Bank Account No.</label>
                                <input type="text" id="bankaccount" class="form-control"   value="<?php echo $detail['bank_account'] ?>" onkeypress='return isNumberKey(event)' name ="bank_account"  placeholder="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label">IFSC Code No.</label>
                                <input type="text" id="ifsc_number" class="form-control" value="<?php echo $detail['ifsc_number'] ?>" onkeyup="return validatePanNumber();"  name ="ifsc_number"  placeholder="">
                                <div id="ifccode"></div>
                              </div>
                            </div>
                            <!--/span-->
                          </div>
                          <label class="forml" style="border-bottom: 1px solid #eee; ">*Name should be same as given in aadhar card.</label>
                          <div class="row">
                            <div class="col-md-2">
                              <div class="form-group">
                                <label class="control-label">First Name</label>
                                <input type="text" id="firstName" class="form-control" value="<?php echo $detail['firstname'] ?>" name ="firstname" placeholder="">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <label class="control-label">Second Name</label>
                                <input type="text" id="secondname" value="<?php echo $detail['secondname'] ?>" class="form-control" value="" name ="secondname"  placeholder="">
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-2">
                              <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input type="text" id="lastName" class="form-control" value="<?php echo $detail['lastname'] ?>" name ="lastname"  placeholder="">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <label class="control-label">D.O.B.</label>
                                <input type="text"  id="dob_user" class="form-control" value="<?php echo $detail['dob'] ?>" name ="dob"  placeholder="MM/DD/YYYY">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <label class="control-label">D.O.J.</label>
                                <input type="text"  id="doj_user" class="form-control" value="<?php echo $detail['doj'] ?>"  name ="doj"  placeholder="MM/DD/YYYY">
                              </div>
                            </div>
							<?php
							$bloodgroup= $bloodgroup1= $bloodgroup2= $bloodgroup3= $bloodgroup4= $bloodgroup5= $bloodgroup6 = $bloodgroup7 = $bloodgroup8 = '';
							
							if ($detail['blood_group']=== 'A+' ){
								$bloodgroup = 'selected="selected"';
								
							}
							if ($detail['blood_group']=== 'A-'){
								$bloodgroup = 'selected="selected"';
								
							}
							if($detail['blood_group'] ==='B+'){
								$bloodgroup2 = 'selected="selected"';
							}
							if($detail['blood_group'] ==='B-'){
								$bloodgroup3 = 'selected="selected"';
							}
							if($detail['blood_group'] ==='O+'){
								$bloodgroup4 = 'selected="selected"';
							}
							if($detail['blood_group'] ==='O-'){
								$bloodgroup5 = 'selected="selected"';
							}
							if($detail['blood_group'] ==='AB+'){
								$bloodgroup6 = 'selected="selected"';
							}
							if($detail['blood_group'] ==='AB-'){
								$bloodgroup7 = 'selected="selected"';
							}
							?>
							
							
                             <div class="col-md-2">
                              <div class="form-group">
                                <label class="control-label">Blood Group</label>
                                <select name ="blood_group" class="form-control" id="blood_group">
                                  <option        <?php echo $bloodgroup ?> value="A+"> A+</option>
                                  <option  <?php echo $bloodgroup1 ?> value="A-">A-</option>
                                  <option  <?php echo $bloodgroup2 ?> value="B+">B+</option>
                                  <option   <?php echo $bloodgroup3 ?> value="B-">B-</option>
                                  <option  <?php echo $bloodgroup4 ?> value="O+ ">O+ </option>
                                  <option  <?php echo $bloodgroup5 ?> value="O- ">O- </option>
                                  <option  <?php echo $bloodgroup6 ?> value="AB+">AB+</option>
                                  <option  <?php echo $bloodgroup7 ?> value="AB-">AB-</option>
                                </select>
                              </div>
                            </div>
                            <!--/span-->
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">Name Of Father</label>
                                <input type="text" id="fatherName" class="form-control" value="<?php echo $detail['fathername'] ?>"  name ="fathername"  placeholder="">
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">Name Of Husband/Wife(If Married)</label>
                                <input type="text" id="husbabandname" class="form-control" value="<?php echo $detail['husband_wife_name'] ?>"  name ="husband_wife_name"  placeholder="">
                              </div>
                            </div>
                            <!--/span-->
                          </div>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Personal Email Id</label>
                                <input type="email" id="persional_email_id" class="form-control" value="<?php echo $detail['persional_email_id'] ?>" name ="persional_email_id"  placeholder="">
                              </div>
                            </div>
							<?php
							$gender= $gender1= $gender2 = '';
							if ($detail['gender']=== 'Male' ){
								$gender1 = 'selected="selected"';
								
							}
							if ($detail['gender']=== 'Female' ){
								$gender2 = 'selected="selected"';
								
							}
							
							?>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Gender</label>
                                <select name ="gender"  class="form-control" id="gender">
                                  <option  <?php echo $gender1 ?> value="Male">Male</option>
                                  <option <?php echo $gender2 ?> value="Female">Female</option>
                                </select>
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Mobile No.</label>
                                <input type="text" id="mobileno" class="form-control"  maxlength="10" value="<?php echo $detail['mobile_number'] ?>"   onkeypress='return isNumberKey(event)' name ="mobile_number" placeholder="">
                              </div>
                            </div>
							
							<?php 
							$matitalstatus= $matitalstatus1= $matitalstatus2 = '';
							
							if ($detail['matital_status']=== 'Unmarried' ){
								$matitalstatus1 = 'selected="selected"';
								
							}
							if ($detail['matital_status']=== 'Married' ){
								$matitalstatus2 = 'selected="selected"';
								
							}
							?>
							
                            <div class="col-md-3">
                              <div class="form-group">
							  
                                <label class="control-label">Marital Status</label>
                                <select name ="matital_status" class="form-control" id= "matital_status">
                                  
                                  <option <?php echo $matitalstatus1 ?>  value="Unmarried">Unmarried</option>
								  <option  <?php echo $matitalstatus2 ?> value="Married"> Married</option>
                                </select>
                              </div>
                            </div>
                            <!--/span-->
                          </div>
                          
                          <h3 class="form-section"><strong> Correspondence Address </strong></h3>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>House/Plot/Gali/Floor/Sector</label>
                                <input type="text" name ="corresp_house_address" value="<?php echo $detail['corresp_house_address'] ?>" class="form-control">
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Colony</label>
                                <input type="text" name ="corresp_colony" value="<?php echo $detail['corresp_colony'] ?>" class="form-control">
                              </div>
                            </div>
                            <!--/span-->
                          </div>
                          <!--/row-->
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>State</label>
                                <select name ="corresp_state" id="corresp_state" class="form-control valid">
                                  <option value="" >Select state</option>
                                   <?php 
                                    while($state = mysqli_fetch_array($querydetails)){
                                        $states ='';
										if($state['stateid'] == $detail['corresp_state']){
											$states = 'selected="selected"';
										}
                                    	?>                                    	
                                  <option <?php echo $states; ?> value="<?php echo $state['stateid'] ?>"><?php echo $state['statename'] ?></option>
                                  <?php
                                    } 	
                                    ?>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>District/City</label>
                                <select name ="corresp_city" id="cityid_customer" class="form-control valid" value="">
								 <option  value=""><?php echo $detail['corresp_city'] ?></option>
                                </select>
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Pincode</label>
                                <input type="text"  id= "corresp_pincode" maxlength="6" name ="corresp_pincode"  value="<?php echo $detail['corresp_pincode'] ?>" onkeypress='return isNumberKey(event)' class="form-control">
                              </div>
                            </div>
                            <!--/span-->
                          </div>
                          <h3 class="form-section"><strong> Permanent Address </strong></h3>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>House/Plot/Gali/Floor/Sector</label>
                                <input type="text" name ="pernt_house_address" value="<?php echo $detail['pernt_house_address'] ?>"  class="form-control">
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Colony</label>
                                <input type="text" name ="pernt_corresp_colony" value="<?php echo $detail['pernt_corresp_colony'] ?>"  class="form-control">
                              </div>
                            </div>
                            <!--/span-->
                          </div>
                          <!--/row-->
                          <div class="row">
                            <!--/span-->
                            <div class="col-md-4">
														<div class="form-group">
															<label>State</label>
															<select name ="pernt_corresp_state" id="pernt_corresp_state"   class="form-control valid">
															<option value="" >Select state</option>
																  <?php 
                                    while($state = mysqli_fetch_array($querydetail)){
                                        $states ='';
										if($state['stateid'] == $detail['pernt_corresp_state']){
											$states = 'selected="selected"';
										}
                                    	?>                                    	
                                  <option <?php echo $states; ?> value="<?php echo $state['stateid'] ?>"><?php echo $state['statename'] ?></option>
                                  <?php
                                    } 	
                                    ?> 
															</select>
														</div>
													</div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>District/City</label>
								 <select name ="pernt_corresp_city" id="cityid_customer_second" class="form-control valid" value="">
								 <option  value=""><?php echo $detail['pernt_corresp_city'] ?></option>
                                </select>
                                
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Pincode</label>
                                <input type="text" id="pernt_corresp_pincode" name ="pernt_corresp_pincode" maxlength="6"  value="<?php echo $detail['pernt_corresp_pincode'] ?>" onkeypress='return isNumberKey(event)' class="form-control">
                              </div>
                            </div>
                            <!--/span-->
                          </div>
                          <div class="form-body">
                            <h3 class="form-section"><strong> Qualifications (Start With Highest Education)</strong> </h3>
							<?php
							while ($qualdetail = mysqli_fetch_assoc($qualificationdetail)){
							?>
							
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Qualification</label>
                                  <input type="text" id="qualification4" name="qualification[]"  value="<?php echo $qualdetail['qualification'] ?>" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">College</label>
                                  <input type="text" id="college4" name="college[]"  value="<?php echo $qualdetail['college'] ?>" class="form-control" placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Affiliated to UNIVERSITY</label>
                                  <input type="text" id="afliliated4" name="afliliated[]"  value="<?php echo $qualdetail['affliliated'] ?>" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Year From(MM/YY)</label>
                                  <input type="text" id="to_form4" name="to_form[]"  value="<?php echo $qualdetail['year_form'] ?>" class="form-control "  placeholder="MM/YY">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Year To(MM/YY)</label>
                                  <input type="text" id="year_to4" name ="year_to[]" value="<?php echo $qualdetail['year_to'] ?>"  onkeyup="getdatevalidate()" class="form-control" placeholder="MM/YY">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">%</label>
                                  <input type="text" id="year_per4" name ="year_per[]" value="<?php echo $qualdetail['percentage'] ?>"  class="form-control" onkeypress='return isNumberKey(event)' placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                            </div> 
							<?php } ?>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="qualification3" name="qualification[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="college3" name="college[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="afliliated3" name="afliliated[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="to_form3" name="to_form[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="year_to3" name ="year_to[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="year_per3" name ="year_per[]"   class="form-control" onkeypress='return isNumberKey(event)' placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                            </div>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="qualification2" name="qualification[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="college2" name="college[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="afliliated2" name="afliliated[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="to_form2" name="to_form[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="year_to2" name ="year_to[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="year_per2" name ="year_per[]"  class="form-control" onkeypress='return isNumberKey(event)' placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                            </div>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="qualification" name="qualification[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="college" name="college[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="afliliated" name="afliliated[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="to_form" name="to_form[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="year_to" name ="year_to[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="year_per" name ="year_per[]"   class="form-control" onkeypress='return isNumberKey(event)' placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                            </div>
                          </div>
                          <div class="form-body">
                            <h3 class="form-section"><strong> Pre Employment Details</strong> </h3>
							<?php 
							while ($preemployment = mysqli_fetch_assoc($preemploymentdetails)){
							?>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Organization</label>
                                  <input type="text" id="organization" name ="organization[]"  value="<?php echo $preemployment['organization']?>" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Service From</label>
                                  <input type="text" id="service_from" name ="service_from[]" value="<?php echo $preemployment['service_from']?>" class="form-control " placeholder=""  >
                                </div>
                              </div>
                              <!--/span-->
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Service To</label>
                                  <input type="text" id="service_to" name ="service_to[]"  value="<?php echo $preemployment['service_to']?>"  onkeyup ="getdatevalidate()"  class="form-control" placeholder="" >
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Total Service Period</label>
                                  <input type="text" id="serviceperiod" name ="total_service[]" value="<?php echo $preemployment['total_service']?>"  readonly class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Designation</label>
                                  <input type="text" id="firstName" name ="designation[]" value="<?php echo $preemployment['designation']?>"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Gross Salary*</label>
                                  <input type="text" id="firstName" name ="gross_salary[]" value="<?php echo $preemployment['gross_salary']?>" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Responsibilities**</label>
                                  <input type="text" id="firstName" name ="responsibilities[]"  value="<?php echo $preemployment['responsibilities']?>" class="form-control" placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                            </div>
							<?php
							} 
							?>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="organization" name ="organization[]" value="<?php echo $preemployment['organization']?>" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="service_from2" name ="service_from[]"  class="form-control" placeholder="" >
                                </div>
                              </div>
                              <!--/span-->
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="service_to2" name ="service_to[]"  onkeyup ="getdatevalidate()"  class="form-control" placeholder=""  >
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="serviceperiod2" name ="total_service[]" readonly  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name ="designation[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name ="gross_salary[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name ="responsibilities[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                            </div>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="organization" name ="organization[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="service_from3" name ="service_from[]"   class="form-control" placeholder="" >
                                </div>
                              </div>
                              <!--/span-->
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="service_to3" name ="service_to[]" onkeyup ="getdatevalidate()"   class="form-control" placeholder="" >
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="serviceperiod3" name ="total_service[]"  disabled class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="designation" name ="designation[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name ="gross_salary[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name ="responsibilities[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                            </div>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="organization" name ="organization[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="service_from4" name ="service_from[]"  class="form-control" placeholder="" >
                                </div>
                              </div>
                              <!--/span-->
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="service_to4" name ="service_to[]" onkeyup="getdatevalidate()" class="form-control" placeholder="" >
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="serviceperiod4" name ="total_service[]"  disabled class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="designation" name ="designation[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="gross_salary" name ="gross_salary[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="responsibilities" name ="responsibilities[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                            </div>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name ="organization[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="service_from5" name ="service_from[]"   class="form-control" placeholder="" >
                                </div>
                              </div>
                              <!--/span-->
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="service_to5" name ="service_to[]" onkeyup="getdatevalidate" class="form-control" placeholder="" >
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="serviceperiod5" name ="total_service[]" disabled class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name ="designation[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name ="gross_salary[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name ="responsibilities[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                            </div>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name ="organization[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="service_from6" name ="service_from[]"   class="form-control" placeholder="" >
                                </div>
                              </div>
                              <!--/span-->
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="service_to6" name ="service_to[]"  onkeyup="getdatevalidate" class="form-control" placeholder="" >
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="serviceperiod6" name ="total_service[]" disabled class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name ="designation[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name ="gross_salary[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name ="responsibilities[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                            </div>
                            <label class="forml" style="border-bottom: 1px solid #eee;"> *Gross Salary should include Basic+DA+HRA+Medical+LTA+Travel Allowance+Special Allowance  </label></br>
                            <label class="forml" style="border-bottom: 1px solid #eee; ">**Use comma if more than one responsibility exists.</label>
                          </div>
                          <div class="form-body">
                            <h3 class="form-section"><strong> Family Details & Emergency Contact details  </strong> </h3>
							
							<?php 
							while ($family = mysqli_fetch_assoc($familydetails)){
							?>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Name</label>
                                  <input type="text" id="family_name" name="family_name[]" value= "<?php echo $family['family_name']?>" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">D.O.B.</label>
                                  <input type="text" id="dobirth1" name="dobirth[]" value= "<?php echo $family['dobirth']?>" class="form-control" placeholder="" >
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="control-label">Email Id</label>
                                  <input type="email" id="family_email_id1" class="form-control" value="<?php echo $family['family_email_id']?>" name ="family_email_id[]"  placeholder="">
                                </div>
                              </div>
                              <!--/span-->
							  
							  <?php
							  $familyrelationship= $familyrelationship1=$familyrelationship2=$familyrelationship3=$familyrelationship4=$familyrelationship5=$familyrelationship6=$familyrelationship7=
                              $familyrelationship8=$familyrelationship9='';
							  
                             if ($fdetail['family_relationship'] ==='Father' ){
								 $familyrelationship = 'selected="selected"';
							 }	
 if ($fdetail['family_relationship'] ==='Mother' ){
								 $familyrelationship2 = 'selected="selected"';
							 }	
 if ($fdetail['family_relationship'] ==='husband' ){
								 $familyrelationship3 = 'selected="selected"';
							 }	
 if ($fdetail['family_relationship'] ==='wife' ){
								 $familyrelationship4 = 'selected="selected"';
							 }	
 if ($fdetail['family_relationship'] ==='son' ){
								 $familyrelationship5 = 'selected="selected"';
							 }	
 if ($fdetail['family_relationship'] ==='daughter' ){
								 $familyrelationship6 = 'selected="selected"';
							 }	
 if ($fdetail['family_relationship'] ==='Brother' ){
								 $familyrelationship7 = 'selected="selected"';
							 }	
 if ($fdetail['family_relationship'] ==='Sister' ){
								 $familyrelationship8 = 'selected="selected"';
							 }	
 if ($fdetail['family_relationship'] ==='other' ){
								 $familyrelationship9 = 'selected="selected"';
							 }								 
							  ?>
                              <div class="col-md-1">
                                <div class="form-group">
                                  <label class="control-label">Relationship</label>
                                  <select name ="family_relationship[]" class="form-control" id="family_relationship" style ="width:110px";>
                                    <option <?php echo $familyrelationship1 ?> value="Father"> Father</option>
                                    <option <?php echo $familyrelationship2 ?> value="Mother">Mother</option>
                                    <option <?php echo $familyrelationship3 ?> value="husband">Husband</option>
                                    <option <?php echo $familyrelationship4 ?> value="wife">Wife</option>
                                    <option <?php echo $familyrelationship5 ?> value="son ">Son </option>
                                    <option <?php echo $familyrelationship6 ?> value="daughter ">Daughter </option>
                                    <option <?php echo $familyrelationship7 ?> value="Brother">Brother</option>
                                    <option <?php echo $familyrelationship8 ?> value="Sister">Sister</option>
                                    <option <?php echo $familyrelationship9 ?> value="other">other</option>
                                  </select>
                                  <!--<input type="text" id="lastName" name="family_relationship[]" class="form-control" placeholder="">-->
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Aadhar Card No.</label>
                                  <input type="text" maxlength="12"  id="family_aadharno1"  class="form-control" value="<?php echo $family['family_aadharno']?>"  name ="family_aadharno[]" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Mobile No.</label>
                                  <input type="text" id="family_mobileno1" maxlength="10"  name="family_mobileno[]" value="<?php echo $family['family_mobileno']?>" onkeypress='return isNumberKey(event)' class="form-control" placeholder="" >
                                </div>
                              </div>
							 
                              <!--/span-->
                            </div> 
							
							<?php } ?>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="family_name" name="family_name[]" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="dobirth2"  name="dobirth[]" class="form-control" placeholder="" >
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="email" id="family_email_id2" class="form-control" value="" name ="family_email_id[]"  placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                              <div class="col-md-1">
                                <div class="form-group">
                                  <select name ="family_relationship[]" class="form-control" style ="width:110px";>
                                    <option value="Father"> Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="husband">Husband</option>
                                    <option value="wife">Wife</option>
                                    <option value="son ">Son </option>
                                    <option value="daughter ">Daughter </option>
                                    <option value="Brother">Brother</option>
                                    <option value="Sister">Sister</option>
                                    <option value="other">other</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" maxlength="12"  id="family_aadharno2"  class="form-control" value=""  name ="family_aadharno[]" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="family_mobileno" maxlength="10"  name="family_mobileno[]" onkeypress='return isNumberKey(event)' class="form-control" placeholder="" >
                                </div>
                              </div>
                             
                              <!--/span-->
                            </div>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName"  name="family_name[]" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="dobirth3"  name="dobirth[]" class="form-control" placeholder="" >
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="email" id="family_email_id3" class="form-control" value="" name ="family_email_id[]"  placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                              <div class="col-md-1">
                                <div class="form-group">
                                  <select name ="family_relationship[]" class="form-control" style ="width:110px";>
                                    <option value="Father"> Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="husband">Husband</option>
                                    <option value="wife">Wife</option>
                                    <option value="son ">Son </option>
                                    <option value="daughter ">Daughter </option>
                                    <option value="Brother">Brother</option>
                                    <option value="Sister">Sister</option>
                                    <option value="other">other</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" maxlength="12"  id="family_aadharno3"  class="form-control" value=""  name ="family_aadharno[]" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="family_mobileno3" maxlength="10"  name="family_mobileno[]" onkeypress='return isNumberKey(event)' class="form-control" placeholder="" >
                                </div>
                              </div>
                            
                              <!--/span-->
                            </div>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name="family_name[]" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="dobirth4"  name="dobirth[]" class="form-control" placeholder="" >
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="email" id="family_email_id4" class="form-control" value="" name ="family_email_id[]"  placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                              <div class="col-md-1">
                                <div class="form-group">
                                  <select name ="family_relationship[]" class="form-control" style ="width:110px";>
                                    <option value="Father"> Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="husband">Husband</option>
                                    <option value="wife">Wife</option>
                                    <option value="son ">Son </option>
                                    <option value="daughter ">Daughter </option>
                                    <option value="Brother">Brother</option>
                                    <option value="Sister">Sister</option>
                                    <option value="other">other</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" maxlength="12"  id="family_aadharno4"  class="form-control" value=""  name ="family_aadharno[]" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="family_mobileno4" maxlength="10"  name="family_mobileno[]" onkeypress='return isNumberKey(event)' class="form-control" placeholder="" >
                                </div>
                              </div>
                             
                              <!--/span-->
                            </div>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name="family_name[]" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="dobirth5"  name="dobirth[]"  class="form-control" placeholder=""  >
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="email" id="family_email_id5" class="form-control" value="" name ="family_email_id[]"  placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                              <div class="col-md-1">
                                <div class="form-group">
                                  <select name ="family_relationship[]" class="form-control" style ="width:110px";>
                                    <option value="Father"> Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="husband">Husband</option>
                                    <option value="wife">Wife</option>
                                    <option value="son ">Son </option>
                                    <option value="daughter ">Daughter </option>
                                    <option value="Brother">Brother</option>
                                    <option value="Sister">Sister</option>
                                    <option value="other">other</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" maxlength="12"  id="family_aadharno5"  class="form-control" value=""  name ="family_aadharno[]" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="family_mobileno5" maxlength="10"  name="family_mobileno[]" onkeypress='return isNumberKey(event)' class="form-control" placeholder="" >
                                </div>
                              </div>
                            
							  
                              <!--/span-->
                            </div> 
                          </div>
                          <div class="form-body">
                            <h3 class="form-section"><strong> Membership Details</strong> </h3>
							<?php
								$data = array();			
						        while($membershipdetail = mysqli_fetch_assoc($membershipdetails)){
							  $list['name'] = $membershipdetail['name'];
							  $list['membership_no'] = $membershipdetail['membership_no'];
							   $list['member'] = $membershipdetail['member'];
							   $list['position'] = $membershipdetail['position'];
							   $data[] = $list;
						  
						 }
						
						?>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="control-label">Name</label>
                                  <input type="text" id="firstName" value="EMPLOYEE PF SCHEME" class="form-control" name= "name1" placeholder="EMPLOYEE PF SCHEME" readonly>
                                </div>
                              </div>
							  <?php
						
							  $checked1 = $checked2 ='';
                                if($data[0]['member'] == 'Yes'){
									$checked1 = 'checked';
								}
								if($data[0]['member'] === 'No'){
									$checked2 = 'checked';
								}
							  ?>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="control-label">Member</label>
                                  <div class="radio-list">
                                    <label class="radio-inline">
                                    <input type="radio" <?php echo $checked1; ?> value="Yes" onclick="checkmember1()" id="optionsRadios11" name= "member1"  > Yes </label>
                                    <label class="radio-inline">
                                    <input type="radio" <?php echo $checked2; ?> value="No" onclick="checkmember2()" id="optionsRadios22" name= "member1" > No </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="control-label">Membership No.</label>
                                  <input type="text" disabled id="membershipno1" name= "membership_no1" class="form-control"  value ="<?php echo $data[0]['membership_no'] ?>" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="control-label">Name Of Organization & Position</label>
                                  <input type="text" disabled id="position1" value ="<?php echo $data[0]['position'] ?>" name= "position1" class="form-control" placeholder="">
                                </div>
                              </div>
                            </div>
							
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" id="firstName"  value="ESIC SCHEME" class="form-control" name= "name2" placeholder="ESIC SCHEME" readonly>
                                </div>
                              </div>
							  <?php
						
							  $checked3 = $checked4 ='';
                                if($data[1]['member'] == 'Yes'){
									$checked3 = 'checked';
								}
								if($data[1]['member'] === 'No'){
									$checked4 = 'checked';
								}
							  ?>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <div class="radio-list">
                                    <label class="radio-inline">
                                    <input type="radio" value="Yes" <?php echo $checked3; ?> onclick="checkmember3()" id="optionsRadios33"  name= "member2"  > Yes </label>
                                    <label class="radio-inline">
                                    <input type="radio" value="No" <?php echo $checked4; ?> onclick="checkmember4()" id="optionsRadios44"  name= "member2"  checked > No </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" disabled id="membershipno2" value ="<?php echo $data[1]['membership_no'] ?>" name= "membership_no2" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" disabled id="position2" value ="<?php echo $data[1]['position'] ?>" name= "position2" class="form-control" placeholder="">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" id="firstName" value="PROFESSIONAL ORG." class="form-control" name= "name3" placeholder="PROFESSIONAL ORG." readonly>
                                </div>
                              </div>
							  <?php
						
							  $checked5 = $checked6 ='';
                                if($data[2]['member'] == 'Yes'){
									$checked5 = 'checked';
								}
								if($data[2]['member'] === 'No'){
									$checked6 = 'checked';
								}
							  ?>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <div class="radio-list">
                                    <label class="radio-inline">
                                    <input type="radio"  value="Yes" <?php echo $checked5; ?> onclick="checkmember5()" id="optionsRadios55"  name= "member3"   > Yes </label>
                                    <label class="radio-inline">
                                    <input type="radio"  value="No" <?php echo $checked6; ?> onclick="checkmember6()" id="optionsRadios66"   name= "member3" checked> No </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" disabled id="membershipno3" value ="<?php echo $data[2]['membership_no'] ?>" name= "membership_no3" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" disabled id="position3"  value ="<?php echo $data[2]['position'] ?>" name= "position3"  class="form-control" placeholder="">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" id="firstName" class="form-control" name= "name4" value="SOCIAL ORG." placeholder="SOCIAL ORG." readonly>
                                </div>
                              </div>
							   <?php
						
							  $checked7 = $checked8 ='';
                                if($data[3]['member'] == 'Yes'){
									$checked7 = 'checked';
								}
								if($data[3]['member'] === 'No'){
									$checked8 = 'checked';
								}
							  ?>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <div class="radio-list">
                                    <label class="radio-inline">
                                    <input type="radio"  value="Yes" <?php echo $checked7; ?> onclick="checkmember7()" id="optionsRadios77"  name= "member4" > Yes </label>
                                    <label class="radio-inline">
                                    <input type="radio" value="No"  <?php echo $checked8; ?> onclick="checkmember8()" id="optionsRadios88"  name= "member4" checked> No </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" disabled id="membershipno4" value ="<?php echo $data[3]['membership_no'] ?>" name= "membership_no4" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" disabled id="position4" value ="<?php echo $data[3]['position'] ?>" name= "position4" class="form-control" placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-body">
                            <h3 class="form-section"><strong> Details Of Knowing Any KENT Employee</strong> </h3>
							<?php 
							while ($detailsofknowing = mysqli_fetch_assoc($knowingkentemployee)){
							?>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Reference Name</label>
                                  <input type="text" id="firstName" name="reference_name[]"  value= "<?php echo $detailsofknowing['reference_name']?>" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">EMPLOYEE. Code</label>
                                  <input type="text" id="emp_code" name="emp_code[]" class="form-control"  value= "<?php echo $detailsofknowing['emp_code']?>" maxlength="7" onkeypress='return isNumberKey(event)' placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Designation</label>
                                  <input type="text" id="firstName" name="designation[]" value= "<?php echo $detailsofknowing['designation']?>" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Department</label>
                                  <input type="text" id="firstName" name="department[]" value= "<?php echo $detailsofknowing['department']?>" class="form-control" placeholder="">
                                </div>
                              </div>
							  
							  <?php
							  $familyrelationship= $familyrelationship1=$familyrelationship2=$familyrelationship3=$familyrelationship4=$familyrelationship5=$familyrelationship6=$familyrelationship7=
                              $familyrelationship8=$familyrelationship9='';
							  
                             if ($fdetail['family_relationship'] ==='Father' ){
								 $familyrelationship = 'selected="selected"';
							 }	
 if ($fdetail['family_relationship'] ==='Mother' ){
								 $familyrelationship2 = 'selected="selected"';
							 }	
 if ($fdetail['family_relationship'] ==='husband' ){
								 $familyrelationship3 = 'selected="selected"';
							 }	
 if ($fdetail['family_relationship'] ==='wife' ){
								 $familyrelationship4 = 'selected="selected"';
							 }	
 if ($fdetail['family_relationship'] ==='son' ){
								 $familyrelationship5 = 'selected="selected"';
							 }	
 if ($fdetail['family_relationship'] ==='daughter' ){
								 $familyrelationship6 = 'selected="selected"';
							 }	
 if ($fdetail['family_relationship'] ==='Brother' ){
								 $familyrelationship7 = 'selected="selected"';
							 }	
 if ($fdetail['family_relationship'] ==='Sister' ){
								 $familyrelationship8 = 'selected="selected"';
							 }	
 if ($fdetail['family_relationship'] ==='other' ){
								 $familyrelationship9 = 'selected="selected"';
							 }								 
							  ?>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Relationship</label>
                                  <select name ="kent_relationship[]" class="form-control">
                                    <option value="Father"> Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="husband">Husband</option>
                                    <option value="wife">Wife</option>
                                    <option value="son ">Son </option>
                                    <option value="daughter ">Daughter </option>
                                    <option value="Brother">Brother</option>
                                    <option value="Sister">Sister</option>
                                    <option value="Friends">Friend</option>
                                    <option value="other">other</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Mobile No.</label>
                                  <input type="text" id="kent_mobile_no" maxlength="10"  value= "<?php echo $detailsofknowing['kent_mobile_no']?>" name="kent_mobile_no[]" onkeypress='return isNumberKey(event)' class="form-control" placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                            </div><?php } ?>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name="reference_name[]" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="emp_code" name="emp_code[]"  maxlength="7" class="form-control" onkeypress='return isNumberKey(event)' placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name="designation[]" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="firstName" name="department[]" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <select name ="kent_relationship[]" class="form-control">
                                    <option value="Father"> Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="husband">Husband</option>
                                    <option value="wife">Wife</option>
                                    <option value="son ">Son </option>
                                    <option value="daughter ">Daughter </option>
                                    <option value="Brother">Brother</option>
                                    <option value="Sister">Sister</option>
                                    <option value="Friends">Friends</option>
                                    <option value="other">other</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="kent_mobile_no1" maxlength="10" name="kent_mobile_no[]" onkeypress='return isNumberKey(event)' class="form-control" placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                            </div>
                          </div>
						  
						  <div class="form-body">
                           <h3 class="form-section"><strong> HAVE YOU EVER BEEN CONVICTED IN A COURT OF LAW. IF YES, GIVE DETAILS:</strong> </h3>
                            <div class="row">
	
							 <div class="col-md-12">
                                <div class="form-group">
                                  <textarea class="form-control" value=""  name="convicted" rows="3"><?php echo $detail['place'] ?></textarea>
                                </div>
                              </div>
                            </div>
							
							<div class="row">
							 <div class="col-md-12">
                                <div class="form-group">
                                  <label class="control-label"><strong>DECLARATION:</strong></label></br>
								 
								  <label>Information given by me in the Employment Form is true to the best of my knowledge and nothing has been concealed by me. If at any time during my employment with the company, it is found that any of the information given by me is false or concealed, I will be liable for summary dismissal from my job.</label>
                                  <input type="checkbox" name="declaration" value="1" data-title="Information given by me."/> 
                                </div>
                              </div>
							
                            </div>
							
							<div class="row">
							 <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label"><strong>PLACE:</strong></label>
                                  <input type="text" id="place" name="place" value="<?php echo $detail['place'] ?>"class="form-control"  placeholder="">
                                </div>
                              </div>
							
                            </div>
							<div class="row">
							 <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label"><strong>DATE:</strong></label>
                                  <input type="text" id="date" name="date" class="form-control"  value="<?php echo $detail['date'] ?>"  placeholder="MM/DD/YYYY">
                                </div>
                              </div>
							   
							   
							   
                            </div>
							
                          </div>
						  
                          <div class="form-actions right">
                            <input type="submit" value ="Save" name ="submit" onclick="return validatePanNumber();" class="btn blue">
                            <button type="button" class="btn default">Cancel</button>
                          </div>
                          <!-- END FORM-->
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END PAGE CONTENT-->
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
          <div class="page-footer-inner">
            2017 &copy; KENT RO SYSTEM.
          </div>
          <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
          </div>
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <script src="assets/global/plugins/respond.min.js"></script>
        <script src="assets/global/plugins/excanvas.min.js"></script> 
        <?php
          include('connection.php');
          ?>
        <![endif]-->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src="assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="assets/global/plugins/select2/select2.min.js"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
        <script src="assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
        <script src="assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
        <script src="assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
        <script src="assets/admin/pages/scripts/form-samples.js"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
          jQuery(document).ready(function() {    
             // initiate layout and plugins
             Metronic.init(); // init metronic core components
          Layout.init(); // init current layout
          QuickSidebar.init(); // init quick sidebar
          Demo.init(); // init demo features
             FormSamples.init();
          });
        </script>
        <script src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
          var d = new Date();
          var year = d.getFullYear() - 19;
          d.setFullYear(year);
          $('#dob_user,#dobirth1,#dobirth2,#dobirth3,#dobirth4,#dobirth5').datepicker({
             changeYear: true,
             changeMonth: true,
             yearRange: '1920:' + year + '',
             defaultDate: d});
          
          $('#doj_user').datepicker({
          	 maxDate: 0
          });
          
          
           $(function() {
          
             $("#signupForm").validate({
            
                 rules: {
          		adharno: {
                         required: true,
                         minlength:12,
                         maxlength:12,
                     },
					 uanno: {
						 minlength:12,
                         maxlength:12,
					 },
				esino: {
					       minlength:10,
                           maxlength:10,
				},	 
                     firstname: "required",
                     lastname: "required",
          		dob     : "required",
          		doj: "required",
				
				
				
				
          		fathername     : "required",
				declaration    : "required",
          		
          		pernt_house_address     : "required",
          		pernt_corresp_city     : "required",
          		pernt_corresp_state     : "required",
          		pernt_corresp_pincode    : {
                         required: true,
                         minlength:6,
                         maxlength:6,
                     },
          		corresp_pincode: {
                         
                         minlength:6,
                         maxlength:6,
                     },
          		"qualification[]":"required",
          		"college[]":"required",
          		"afliliated[]":"required",
          		"to_form[]":"required",
          		"year_to[]":"required",
          		"year_per[]":"required",
          		
                     persional_email_id: {
                         required: true,
                         email: true
                     },
          		
          		
          		
          		email_id: {
          			
                         email: true
          		},
                     password: {
                         required: true,
                         minlength: 5
                     },
          		mobile_number: {
                         required: true,
                         minlength:10,
                         maxlength:10,
                     },
          		mobile_no: {
                         
                         minlength:10,
                         maxlength:10,
                     },
          		
          		
          		"kent_mobile_no[]": {
                         minlength:10,
                         maxlength:10,
                     },
          		"family_mobileno[]": {
          		     minlength:10,
                         maxlength:10,	
          		},
          		"family_aadharno[]": {
          		    minlength:12,
                         maxlength:12,
          		},
                     agree: "required"
                 },
                 
                 // Specify the validation error messages
                 messages: {
          		adharno:{
          			required: "Please provide a Aadhar number.",
          			minlength: "Please enter 12 digit Aadhar number",
          			maxlength: "Please enter 12 digit  Aadhar number "
          		},
				
				uanno:{
					minlength: "Please enter 12 digit UAN number",
          			maxlength: "Please enter 12 digit  UAN number "
				},
				esino:{
					minlength: "Please enter 10 digit ESI number",
          			maxlength: "Please enter 10 digit  ESI number "
				},
                     firstname: "Please enter your first name",
                     lastname: "Please enter your last name",
          		dob: "Please enter your D.O.B",
				
          		doj: "Please enter your D.O.J",
          		fathername: "Please enter your father name",
				declaration: "Please confirm declaration",
          		
          		pernt_house_address: "Please enter house address",
          		pernt_corresp_city: "Please enter city",
          		pernt_corresp_state: "Please enter state",
          		pernt_corresp_pincode:{
          			required: "Please provide Pin Code of 6 digits",
          			minlength: "Please enter valid Pin code",
          			maxlength: "Please enter pincode of 6 digits"
          		},
          		corresp_pincode :{
          			minlength: "Please enter valid Pin code of 6 digits",
          			maxlength: "Please enter pincode of 6 digits"
          		},
          		"qualification[]":"Please enter qualification",
          		"college[]":"Please enter College",
          		"afliliated[]":"Please enter Afliliated to UNIVERSITY",
          		"to_form[]":"Please enter Year form",
          		"year_to[]":"Please enter Year to",
          		"year_per[]":"Please enter %",
          		mobile_number: {
                         required: "Please provide a Mobile No.",
                         minlength: "Please enter 10 digit mobile number",
          			maxlength: "Please enter mobile number of 10 digits"
                     },
          	
          		mobile_no: {
                        
                         minlength: "Please enter 10 digit mobile number",
          			maxlength: "Please enter mobile number of 10 digits"
                     },
          		"kent_mobile_no[]": {
                        
                         minlength: "Please enter 10 digit mobile number",
          			maxlength: "Please enter mobile number of 10 digits"
                     },
          		"family_mobileno[]": {
                        
                         minlength: "Please enter 10 digit mobile number",
          			maxlength: "Please enter mobile number of 10 digits"
                     },
          		"family_aadharno[]": {
                        
                         minlength: "Please enter 12 digit Aadhar number",
          			maxlength: "Please enter 12 digit  Aadhar number "
                     },
          		
                     password: {
                         required: "Please provide a password",
                         minlength: "Your password must be at least 5 characters long"
                     },
                     persional_email_id: "Please enter a valid email address",
          		email_id: "Please enter a valid email address",
                     agree: "Please accept our policy"
                 },
                 
                 submitHandler: function(form) {
          		 var r = confirm("Are you sure you want to submit this form?");
          			  if (r==true)
          			   {
          				form.submit();
          			return true;
          			}
          			   else
          			{
          			return false;
          			}
                    
                 }
             });
          
           });
           
           
        </script>
        <script>
          $(document).on('change', '#corresp_state', function() {
           var corresp_state=$('#corresp_state').val();
          $.ajax({
           url: 'getcity.php',
           type: 'POST',
           //dataType:'json',
           data: {'state':corresp_state},
          success:function(data){
          	//alert(data)
             //console.log(data);
          
             $('#cityid_customer').html(data);
              },
            });
           //} 
          });
        </script>
        <script>
          $(document).on('change', '#pernt_corresp_state', function() {
           var pernt_corresp_state=$('#pernt_corresp_state').val();
           
          $.ajax({
           url: 'getcity.php',
           type: 'POST',
           //dataType:'json',
           data: {'state':pernt_corresp_state},
          success:function(data){
             $('#cityid_customer_second').html(data);
              },
            });
           //} 
          });
        </script>
        <script>
          $('#adharno,#uanno,#mobileno,#bankaccount,#mobile_no,#corresp_pincode,#pernt_corresp_pincode,#year_per4,#year_per3,#year_per2,#year_per,#service_from,#service_to,#total_service,#family_aadharno1,#family_aadharno2,#family_aadharno3,#family_aadharno4,#family_aadharno5').keydown(function (event) {
          
              var keycode = event.which;
              
          
              if (!/[\d\t\b]/.test(String.fromCharCode(event.which)) || event.shiftKey ) {
                  $('#error').attr('class', 'errorMessage');
                  $('#error').text("Enter Only Numbers");
                  return false;
              } else {
                  $('#error').attr('class', ' display: none;');
                  $('#error').text("");
                  return true;
              }
          });
         
          function isNumberKey(evt){
          	
              var charCode = (evt.which) ? evt.which : evt.keyCode;
          	
              if (charCode > 31 && (charCode < 48 || charCode > 57))
          		
                  return false;
              return true;
          }
          function validatePanNumber() { 
          
            var Obj = document.getElementById("pan_number");
            
                  if (Obj.value != "") {
                      ObjVal = Obj.value;
          			ObjVal_3 = ObjVal.charAt(3);
                      var panPat = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                      if (ObjVal.search(panPat) == -1 || (ObjVal_3!="p" && ObjVal_3!="P")) {
                         document.getElementById("pannumbers").innerHTML = "Please enter a valid PAN number.";
          			   document.getElementById("pannumbers").style.color = "darkred";
                          Obj.focus();
                          return false;
                      }
                    else
                      {
                        document.getElementById("pannumbers").innerHTML = "";
          			  document.getElementById("pannumbers").style.color = "darkred";
          			  
                        }
                  }
          	
          		 var Obj2 = document.getElementById("ifsc_number");
                  if (Obj2.value != "") {
                      Obj2Val = Obj2.value;
                      var panPat = /^[A-Za-z]{4}\d{7}$/;
                      if (Obj2Val.search(panPat) == -1) {
                         document.getElementById("ifccode").innerHTML = "Please enter valid IFSC code.";
          			   document.getElementById("ifccode").style.color = "darkred";
                          Obj2.focus();
                          return false;
                      }
                    else
                      {
                        document.getElementById("ifccode").innerHTML = "";
          			  document.getElementById("ifccode").style.color = "darkred";
                        }
          			  
                  }
            }
        
             $('#year_per4').keyup(function(){
          	  if(parseInt($('#year_per4').val()) > 100){
          		  
          		  alert("% not greater than 100");
          		  $('#year_per4').val('');
          		  return false;
          	  }
            }); 
            
             $('#year_per3').keyup(function(){
          	  if(parseInt($('#year_per3').val()) > 100){
          		  
          		  alert("% not greater than 100");
          		  $('#year_per3').val('');
          		  return false;
          	  }
            }); 
            $('#year_per2').keyup(function(){
          	  if(parseInt($('#year_per2').val()) > 100){
          		  
          		  alert("% not greater than 100");
          		  $('#year_per2').val('');
          		  return false;
          	  }
            });
            
              $('#year_per').keyup(function(){
          	  if(parseInt($('#year_per').val()) > 100){
          		  
          		  alert("% not greater than 100");
          		  $('#year_per').val('');
          		  return false;
          	  }
            });
            
             $('#service_from').datepicker({
          		//dateFormat: 'mm/yy',
          	changeYear: true,
              changeMonth: true
          		
          	});
          		$('#service_to').datepicker({
          		//dateFormat: 'mm/yy',
          	changeYear: true,
              changeMonth: true
          		
          	});
          	
          	$(function() {
           $("#service_to").on("change",function(){
           var endDate = Date.parse($(this).val());
           var startDate = Date.parse($("#service_from").val());
          if (startDate > endDate){
          	 $('#service_to').val('');
          alert('Please ensure that the End Date is greater than or equal to the Start Date.');
          return false;
          }
          var From_date = new Date($("#service_from").val());
          var To_date = new Date($("#service_to").val());
          var diff_date =  To_date - From_date;
           
          var years = Math.floor(diff_date/31536000000);
          var months = Math.floor((diff_date % 31536000000)/2628000000);
          var days = Math.floor(((diff_date % 31536000000) % 2628000000)/86400000);
          
          if($("#service_from").val() !='' && $("#service_to").val() !=''){
			  if(days==1){
				  $("#serviceperiod").val(years+" year "+months+" month "+days+" day");
			  }else{
          $("#serviceperiod").val(years+" year "+months+" month "+days+" days");
			  }
          }
             });
          });
          
           $('#service_from2').datepicker({
          		//dateFormat: 'mm/yy',
          	changeYear: true,
              changeMonth: true
          		
          	});
          		$('#service_to2').datepicker({
          		//dateFormat: 'mm/yy',
          	changeYear: true,
              changeMonth: true
          		
          	});
          	
          	$(function() {
           $("#service_to2").on("change",function(){
           var endDate = Date.parse($(this).val());
           var startDate = Date.parse($("#service_from2").val());
          if (startDate > endDate){
          	 $('#service_to2').val('');
          alert('Please ensure that the End Date is greater than or equal to the Start Date.');
          return false;
          }
          var From_date = new Date($("#service_from2").val());
          var To_date = new Date($("#service_to2").val());
          var diff_date =  To_date - From_date;
           
          var years = Math.floor(diff_date/31536000000);
          var months = Math.floor((diff_date % 31536000000)/2628000000);
          var days = Math.floor(((diff_date % 31536000000) % 2628000000)/86400000);
          
          if($("#service_from2").val() !='' && $("#service_to2").val() !=''){
			  if(days==1){
				   $("#serviceperiod2").val(years+" year "+months+" month "+days+"day");
			  }else{
			  $("#serviceperiod2").val(years+" year "+months+" month "+days+"days");
			  }
          }
             });
          });
          
          $('#service_from3').datepicker({
          		//dateFormat: 'mm/yy',
          	changeYear: true,
              changeMonth: true
          		
          	});
          		$('#service_to3').datepicker({
          		//dateFormat: 'mm/yy',
          	changeYear: true,
              changeMonth: true
          		
          	});
          	
          	$(function() {
           $("#service_to3").on("change",function(){
           var endDate = Date.parse($(this).val());
           var startDate = Date.parse($("#service_from3").val());
          if (startDate > endDate){
          	 $('#service_to3').val('');
          alert('Please ensure that the End Date is greater than or equal to the Start Date.');
          return false;
          }
          var From_date = new Date($("#service_from3").val());
          var To_date = new Date($("#service_to3").val());
          var diff_date =  To_date - From_date;
           
          var years = Math.floor(diff_date/31536000000);
          var months = Math.floor((diff_date % 31536000000)/2628000000);
          var days = Math.floor(((diff_date % 31536000000) % 2628000000)/86400000);
          
          if($("#service_from3").val() !='' && $("#service_to3").val() !=''){
			  if(days==1){
				  $("#serviceperiod3").val(years+" year "+months+" month "+days+"day");
			  }else{
			  $("#serviceperiod3").val(years+" year "+months+" month "+days+"days"); 
			  }
          }
             });
          });
          
          $('#service_from4').datepicker({
          		
          	changeYear: true,
              changeMonth: true
          		
          	});
          		$('#service_to4').datepicker({
          
          	changeYear: true,
              changeMonth: true
          		
          	});
          	
          	$(function() {
           $("#service_to4").on("change",function(){
           var endDate = Date.parse($(this).val());
           var startDate = Date.parse($("#service_from4").val());
          if (startDate > endDate){
          	$('#service_to4').val('');
          alert('Please ensure that the End Date is greater than or equal to the Start Date.');
          return false;
          }
          var From_date = new Date($("#service_from4").val());
          var To_date = new Date($("#service_to4").val());
          var diff_date =  To_date - From_date;
           
          var years = Math.floor(diff_date/31536000000);
          var months = Math.floor((diff_date % 31536000000)/2628000000);
          var days = Math.floor(((diff_date % 31536000000) % 2628000000)/86400000);
          
          if($("#service_from4").val() !='' && $("#service_to4").val() !=''){
			  if(days==1){
				   $("#serviceperiod4").val(years+" year "+months+" month "+days+"day");
			  }else{
			  $("#serviceperiod4").val(years+" year "+months+" month "+days+"days");
			  }
          }
             });
          });
          
            $('#service_from5').datepicker({
          		
          	changeYear: true,
              changeMonth: true
          		
          	});
          		$('#service_to5').datepicker({
          		
          	changeYear: true,
              changeMonth: true
          		
          	});
          	
          	$(function() {
           $("#service_to5").on("change",function(){
           var endDate = Date.parse($(this).val());
           var startDate = Date.parse($("#service_from5").val());
          if (startDate > endDate){
          	$('#service_to5').val('');
          alert('Please ensure that the End Date is greater than or equal to the Start Date.');
          return false;
          }
          var From_date = new Date($("#service_from5").val());
          var To_date = new Date($("#service_to5").val());
          var diff_date =  To_date - From_date;
           
          var years = Math.floor(diff_date/31536000000);
          var months = Math.floor((diff_date % 31536000000)/2628000000);
          var days = Math.floor(((diff_date % 31536000000) % 2628000000)/86400000);
          
          if($("#service_from5").val() !='' && $("#service_to5").val() !=''){
			  if(days==1){
				  $("#serviceperiod5").val(years+" year "+months+" month "+days+"day");
			  }else{
			  $("#serviceperiod5").val(years+" year "+months+" month "+days+"days");
			  }
          }
             });
          });
          
           $('#service_from6').datepicker({
          		
          	changeYear: true,
              changeMonth: true
          		
          	});
          		$('#service_to6').datepicker({
          		
          	changeYear: true,
              changeMonth: true
          		
          	});
          	
          	$(function() {
           $("#service_to6").on("change",function(){
           var endDate = Date.parse($(this).val());
           var startDate = Date.parse($("#service_from6").val());
          if (startDate > endDate){
          	$('#service_to6').val('');
          alert('Please ensure that the End Date is greater than or equal to the Start Date.');
          return false;
          }
          var From_date = new Date($("#service_from6").val());
          var To_date = new Date($("#service_to6").val());
          var diff_date =  To_date - From_date;
           
          var years = Math.floor(diff_date/31536000000);
          var months = Math.floor((diff_date % 31536000000)/2628000000);
          var days = Math.floor(((diff_date % 31536000000) % 2628000000)/86400000);
          
          if($("#service_from6").val() !='' && $("#service_to6").val() !=''){
			  if(days==1){
				  $("#serviceperiod6").val(years+" year "+months+" month "+days+"day");
			  }else{
			  $("#serviceperiod6").val(years+" year "+months+" month "+days+"days");
			  }
          }
             });
          });
          
          
            function checkmember1(){
          		var getvalue1 =$('#optionsRadios11:checked').val();
          		if(getvalue1 = 'Yes'){
          			document.getElementById("membershipno1").disabled='';
          			document.getElementById("position1").disabled='';
          			$('#membershipno1').removeAttr('placeholder');
          			$('#position1').removeAttr('placeholder');
          		}
          	
          		
          	}
          	function checkmember2(){
          
          		var getvalue2 =$('#optionsRadios22:checked').val();
          	
          	
          		if(getvalue2 = 'No'){
          			document.getElementById("membershipno1").setAttribute("disabled","disabled");
          			document.getElementById("position1").setAttribute("disabled","disabled");
          			$('#membershipno1').attr('placeholder','If you enter then please select yes');
          			$('#position1').attr('placeholder','If you enter then please select yes');
          		}
          		
          	}
            
            
            function checkmember3(){
          		var getvalue3 =$('#optionsRadios33:checked').val();
          		if(getvalue3 = 'Yes'){
          			document.getElementById("membershipno2").disabled='';
          			document.getElementById("position2").disabled='';
          			$('#membershipno2').removeAttr('placeholder');
          			$('#position2').removeAttr('placeholder');
          		}
          	
          		
          	}
          	function checkmember4(){
          
          		var getvalue4 =$('#optionsRadios44:checked').val();
          	
          	
          		if(getvalue4 = 'No'){
          			document.getElementById("membershipno2").setAttribute("disabled","disabled");
          			document.getElementById("position2").setAttribute("disabled","disabled");
          			$('#membershipno2').attr('placeholder','If you enter then please select yes');
          			$('#position2').attr('placeholder','If you enter then please select yes');
          		}
          		
          	}
          	
          	 function checkmember5(){
          		var getvalue5 =$('#optionsRadios55:checked').val();
          		if(getvalue5 = 'Yes'){
          			document.getElementById("membershipno3").disabled='';
          			document.getElementById("position3").disabled='';
          			$('#membershipno3').removeAttr('placeholder');
          			$('#position3').removeAttr('placeholder');
          		}
          	
          		
          	}
          	function checkmember6(){
          
          		var getvalue6 =$('#optionsRadios66:checked').val();
          	
          	
          		if(getvalue6 = 'No'){
          			document.getElementById("membershipno3").setAttribute("disabled","disabled");
          			document.getElementById("position3").setAttribute("disabled","disabled");
          			$('#membershipno3').attr('placeholder','If you enter then please select yes');
          			$('#position3').attr('placeholder','If you enter then please select yes');
          		}
          		
          	}
          	
          	
          	 function checkmember7(){
          		var getvalue7 =$('#optionsRadios77:checked').val();
          		if(getvalue7 = 'Yes'){
          			document.getElementById("membershipno4").disabled='';
          			document.getElementById("position4").disabled='';
          			$('#membershipno4').removeAttr('placeholder');
          			$('#position4').removeAttr('placeholder');
          		}
          	
          		
          	}
          	function checkmember8(){
          
          		var getvalue8 =$('#optionsRadios88:checked').val();
          	
          	
          		if(getvalue8 = 'No'){
          			document.getElementById("membershipno4").setAttribute("disabled","disabled");
          			document.getElementById("position4").setAttribute("disabled","disabled");
          			$('#membershipno4').attr('placeholder','If you enter then please select yes');
          			$('#position4').attr('placeholder','If you enter then please select yes');
          		}
          		
          	}
          	
			
			 $('#date').datepicker({
          		
          	changeYear: true,
              changeMonth: true
          		
          	});
        </script>
       
        <!-- END JAVASCRIPTS -->
      </body>
      <!-- END BODY -->
    </html>