<?php
  include('function.php');
  //print_r($_SESSION);
  if($_SESSION['username']==''){
  	header('location:index.php');
  	
  }
  
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
                      <form action="function.php" id="signupForm" method="post" class="horizontal-form">
                        <div class="form-body">
                          <h3 class="form-section"><strong>Personal Details</strong></h3>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label aadhaarno">Aadhar Card No.</label>
                                <input type="text" maxlength="12"  id="adharno"  class="form-control" value=""  onkeypress='return isNumberKey(event)' name ="adharno" placeholder="">
                                <span id = "all-ready-exist">
                                </span>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">PAN NO.</label>
                                <input type="text" id="pan_number" maxlength="10" class="form-control" onblur="return validatePanNumber(this.value);" value=""  style="text-transform: uppercase" name ="pan_number"  placeholder="" >
                                <span id="pannumbers"></span>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">UAN NO.</label>
                                <input type="text" maxlength="12" id="uanno" class="form-control" value=""  onkeypress='return isNumberKey(event)' name ="uanno"  placeholder="">
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">ESI NO.</label>
                                <input type="text" id="esino" maxlength="10" class="form-control" value=""  onkeypress='return isNumberKey(event)' name ="esino"  placeholder="">
                              </div>
                            </div>
                            <!--/span-->
                          </div>
                          <label class="forml" style="border-bottom: 1px solid #eee; ">*Name Printed on cheque/Passbook/Bank statement should be same as given in aadhar Card.</label>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label">Bank Name</label>
                                <input type="text" id="firstName" class="form-control" value="" name ="bank_number"  placeholder="">
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label">Bank Account No.</label>
                                <input type="text" id="bankaccount" class="form-control"   value="" onkeypress='return isNumberKey(event)' name ="bank_account"  placeholder="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label">IFSC Code No.</label>
                                <input type="text" id="ifsc_number" class="form-control" value="" onkeyup="return validatePanNumber();"  name ="ifsc_number"  placeholder="">
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
                                <input type="text" id="firstName" class="form-control" value="" name ="firstname" placeholder="">
								<p>Name should be same as given in aadhar card.... </p>
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <label class="control-label">Second Name</label>
                                <input type="text" id="secondname" class="form-control" value="" name ="secondname"  placeholder="">
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-2">
                              <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input type="text" id="lastName" class="form-control" value="" name ="lastname"  placeholder="">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <label class="control-label">D.O.B.</label>
                                <input type="text"  id="dob_user" class="form-control" value="" name ="dob"  placeholder="DD/MM/YYYY">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <label class="control-label">D.O.J.</label>
                                <input type="text"  id="doj_user" class="form-control" value=""  name ="doj"  placeholder="DD/MM/YYYY">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <label class="control-label">Blood Group</label>
                                <select name ="blood_group" class="form-control" id="blood_group">
                                  <option value="A+"> A+</option>
                                  <option value="A-">A-</option>
                                  <option value="B+">B+</option>
                                  <option value="B-">B-</option>
                                  <option value="O+ ">O+ </option>
                                  <option value="O- ">O- </option>
                                  <option value="AB+">AB+</option>
                                  <option value="AB-">AB-</option>
                                </select>
                              </div>
                            </div>
                            <!--/span-->
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">Name Of Father</label>
                                <input type="text" id="fatherName" class="form-control" onkeyup="getFName()" value=""  name ="fathername"  placeholder="">
								
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">Name Of Husband/Wife(If Married)</label>
                                <input type="text" id="husbabandname" class="form-control" value=""  name ="husband_wife_name"  placeholder="">
                              </div>
                            </div>
                            <!--/span-->
                          </div>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Personal Email Id</label>
                                <input type="email" id="persional_email_id" class="form-control" value="" name ="persional_email_id"  placeholder="">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Gender</label>
                                <select name ="gender"  class="form-control">
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Mobile No.</label>
                                <input type="text" id="mobileno" class="form-control"  maxlength="10" value=""   onkeypress='return isNumberKey(event)' name ="mobile_number" placeholder="">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Marital Status</label>
                                <select id="SelectBox" name ="matital_status" class="form-control">
                                  
                                  <option value="Unmarried">Unmarried</option>
								  <option value="Married">Married</option>
								   <option value="Widowed">Widowed</option>
								    <option value="Divorced">Divorced</option>
                                </select>
                              </div>
                            </div>
							
						
                            <!--/span-->
                          </div>
                          <!--
                            <div class="row">
                            	<div class="col-md-3">
                            		<div class="form-group">
                            			<label class="control-label">Emergency Contact Name</label>
                            			<input type="text" id="firstName" class="form-control"  value="" name ="emer_contact_number"  placeholder="">
                            			
                            		</div>
                            	</div>
                            	<div class="col-md-3">
                            		<div class="form-group">
                            			<label class="control-label">Relationship</label>
                            			<select name ="relationship" class="form-control">
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
                            
                            	<div class="col-md-3">
                            		<div class="form-group">
                            			<label class="control-label">Email Id</label>
                            			<input type="text" id="email_id" class="form-control" value="" name ="email_id"  placeholder="">
                            			
                            		</div>
                            	</div>
                            	<div class="col-md-3">
                            		<div class="form-group">
                            			<label class="control-label">Mobile No.</label>
                            			<input type="text" maxlength="10" id="mobile_no" class="form-control"  value="" onkeypress='return isNumberKey(event)' name ="mobile_no"  placeholder="">
                            			
                            		</div>
                            	</div>
                            	
                            
                            
                            </div>-->
                          <h3 class="form-section"><strong> Correspondence Address </strong></h3>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>House/Plot/Gali/Floor/Sector</label>
                                <input type="text" name ="corresp_house_address" value="" class="form-control">
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Colony</label>
                                <input type="text" name ="corresp_colony" value="" class="form-control">
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
                                    	?>
                                  <option value="<?php echo $state['stateid'] ?>"><?php echo $state['statename'] ?></option>
                                  <?php
                                    } 	
                                    ?> 
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>District/City</label>
                                <select name ="corresp_city" id="cityid_customer" class="form-control valid">
                                </select>
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Pincode</label>
                                <input type="text"  id= "corresp_pincode" maxlength="6" name ="corresp_pincode"  value="" onkeypress='return isNumberKey(event)' class="form-control">
                              </div>
                            </div>
                            <!--/span-->
                          </div>
                          <h3 class="form-section"><strong> Permanent Address </strong></h3>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>House/Plot/Gali/Floor/Sector</label>
                                <input type="text" name ="pernt_house_address" value=""  class="form-control">
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Colony</label>
                                <input type="text" name ="pernt_corresp_colony" value=""  class="form-control">
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
                                <select name ="pernt_corresp_state" id="pernt_corresp_state"  class="form-control valid">
                                  <option value="" >Select state</option>
                                  <?php 
                                    while($state = mysqli_fetch_array($querydetail)){
                                    	?>
                                  <option value="<?php echo $state['stateid'] ?>"><?php echo $state['statename'] ?></option>
                                  <?php
                                    } 	
                                    ?> 
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>District/City</label>
                                <select name ="pernt_corresp_city" id="cityid_customer_second" class="form-control valid">
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Pincode</label>
                                <input type="text" id="pernt_corresp_pincode" name ="pernt_corresp_pincode" maxlength="6"  value="" onkeypress='return isNumberKey(event)' class="form-control">
                              </div>
                            </div>
                            <!--/span-->
                          </div>
                          <div class="form-body">
                            <h3 class="form-section"><strong> Qualifications (Start With Highest Education)</strong> </h3>
                            <div class="row">
							 <div class="col-md-2">
                              <div class="form-group">
                                <label class="control-label">Qualification</label>
                                <select name ="qualification[]"  id="qualification4" class="form-control">
                                  <option value="Bachelor of Arts">Bachelor of Arts</option>
                                  <option value="Bach of Ayurvedic Med">Bach of Ayurvedic Med</option>
								  <option value="Bach in Business Admin">Bach in Business Admin</option>
								  <option value="Bach in Business Edu">Bach in Business Edu</option>
								  <option value="Bach in Business Mgt">Bach in Business Mgt</option>
								  <option value="Bach in Comp Application">Bach in Comp Application</option>
								  <option value="Bachelor in Commerce">Bachelor in Commerce</option>
								  <option value="Bach in Computer Science">Bach in Computer Science</option>
								  <option value="Bachelor in Engineering">Bachelor in Engineering</option>
								  <option value="Bachelor of Education">Bachelor of Education</option>
								  <option value="Bach of  Fisheries">Bach of  Fisheries</option>
								  <option value="Bach in Hotel Mgt">Bach in Hotel Mgt</option>
								  <option value="Bach in Info Systems">Bach in Info Systems</option>
								  <option value="Bach in Info Tech">Bach in Info Tech</option>
								  <option value="Bachelors in Mass Media">Bachelors in Mass Media</option>
								  <option value="Bach of Mgt Studies">Bach of Mgt Studies</option>
								  <option value="Bachelor in Pharmacy">Bachelor in Pharmacy</option>
								  <option value="Bach of Professional Std">Bach of Professional Std</option>
								  <option value="Bachelor in Rural Studies">Bachelor in Rural Studies</option>
								  <option value="Bachelor in Science">Bachelor in Science</option>
								  <option value="Bachelor in Tech">Bachelor in Tech</option>
								  <option value="Chartered Accountant">Chartered Accountant</option>
								  <option value="Cost Management Acc.">Cost Management Acc.</option>
								  <option value="Company Secretariat">Company Secretariat</option>
								  <option value="DIP In Automobile Eng">DIP In Automobile Eng</option>
								  <option value="DIP in Business Admin">DIP in Business Admin</option>
								  <option value="DIP In Business Mgt">DIP In Business Mgt</option>
								  <option value="DIP In Comp Application">DIP In Comp Application</option>
								  <option value="DIP in Costume Design">DIP in Costume Design</option>
								  <option value="DIP IN CIVIL ENG">DIP IN CIVIL ENG</option>
								  <option value="DIP in Elect & Comm Eng">DIP in Elect & Comm Eng</option>
								  <option value="DIP in Elect Eng">DIP in Elect Eng</option>
								  <option value="DIP In Financial Mgt">DIP In Financial Mgt</option>
								  <option value="DIP in Hotel Mgt">DIP in Hotel Mgt</option>
								  <option value="DIP In Human Resource Mgt">DIP In Human Resource Mgt</option>
								  <option value="DIP In Instrumentation">DIP In Instrumentation</option>
								  <option value="Dip. in Information Techn">Dip. in Information Techn</option>
								  <option value="Dip. in Mech. Engg.">Dip. in Mech. Engg.</option>
								  <option value="DIP In Marketing Mgt">DIP In Marketing Mgt</option>
								  <option value="DIP In Mkting & Sales Mgt">DIP In Mkting & Sales Mgt</option>
								  <option value="Exec Master in Buss. Mgt">Exec Master in Buss. Mgt</option>
								  <option value="Fellowship">Fellowship</option>
								  <option value="HDIP in Cooperative Mgt">HDIP in Cooperative Mgt</option>
								  <option value="Higher Secondary">Higher Secondary</option>
								  <option value="ITI">ITI</option>
								  <option value="Licentiate">Licentiate</option>
								  <option value="Bach in Legislative Law">Bach in Legislative Law</option>
								  <option value="Master in Legislative Law">Master in Legislative Law</option>
								  <option value="Master in Arts">Master in Arts</option>
								  <option value="Master in Admin. Mgt">Master in Admin. Mgt</option>
								  <option value="Master in Business Aminis">Master in Business Aminis</option>
								  <option value="Master Fin Mgt Risk&Ins">Master Fin Mgt Risk&Ins</option>
								  <option value="Master in Comp App.">Master in Comp App.</option>
								  <option value="Master in Computer Mgt">Master in Computer Mgt</option>
								  <option value="Master In Commerce">Master In Commerce</option>
								  <option value="Master in Education Tech">Master in Education Tech</option>
								  <option value="Master In Fin. Analysis">Master In Fin. Analysis</option>
								  <option value="Master in Financial Mgt">Master in Financial Mgt</option>
								  <option value="Master In HRM">Master In HRM</option>
								  <option value="Master in Internl. Bus">Master in Internl. Bus</option>
								  <option value="MASTER IN BUISNESS MNGMNT">MASTER IN BUISNESS MNGMNT</option>
								  <option value="Master in Info Tecnology">Master in Info Tecnology</option>
								  <option value="Master in Jou & Mass com.">Master in Jou & Mass com.</option>
								  <option value="Master in Lib & Info Sci">Master in Lib & Info Sci</option>
								  <option value="Masters in Marketing Mgt">Masters in Marketing Mgt</option>
								  <option value="Master in Mark & Sales">Master in Mark & Sales</option>
								  <option value="Masters in Project Mgt">Masters in Project Mgt</option>
								  <option value="Master in Rural Studies">Master in Rural Studies</option>
								  <option value="Master in Science">Master in Science</option>
								  <option value="Master of Social Work">Master of Social Work</option>
								  <option value="Masters in Tech">Masters in Tech</option>
								  <option value="Master in Tourism Mgt">Master in Tourism Mgt</option>
								  <option value="PGD Bank Insu & Fin Ser">PGD Bank Insu & Fin Ser</option>
								  <option value="PG DIP in  Acturial Sci">PG DIP in  Acturial Sci</option>
								  <option value="PG DIP in Business Mgt">PG DIP in Business Mgt</option>
								  <option value="PG DIP in Banking Ops">PG DIP in Banking Ops</option>
								  <option value="PG DIP in Comp App">PG DIP in Comp App</option>
								  <option value="PG DIP in Fin Acct">PG DIP in Fin Acct</option>
								  <option value="PG DIP in  Finance Mgt">PG DIP in  Finance Mgt</option>
								  <option value="PG DIP in  Foreign Trade">PG DIP in  Foreign Trade</option>
								  <option value="PG DIP in  Human Resource">PG DIP in  Human Resource</option>
								  <option value="PG DIP in  Industrial Mgt">PG DIP in  Industrial Mgt</option>
								  <option value="PG DIP in Management">PG DIP in Management</option>
								  <option value="PG DIP in  Marketing Mgt">PG DIP in  Marketing Mgt</option>
								  <option value="PG DIP in Medical Writing">PG DIP in Medical Writing</option>
								  <option value="PG DIP in Public Admin">PG DIP in Public Admin</option>
								  <option value="PG DIP in  Project Mgt">PG DIP in  Project Mgt</option>
								  <option value="PG DIP in Rural Devp">PG DIP in Rural Devp</option>
								  <option value="PG DIP in  Telecom Mgt">PG DIP in  Telecom Mgt</option>
								  <option value="PGD in Inter Busi Mgt">PGD in Inter Busi Mgt</option>
								  <option value="PGD Invest & Fin Analysis">PGD Invest & Fin Analysis</option>
								  <option value="PGD in Insu & Risk Mgt">PGD in Insu & Risk Mgt</option>
								  <option value="PGD in Journ & Mass Comm">PGD in Journ & Mass Comm</option>
								  <option value="PGD in Mgt of Insur Sec">PGD in Mgt of Insur Sec</option>
								  <option value="masters test">masters test</option>
								  <option value="Hadware & Networking">Hadware & Networking</option>
								  <option value="C Java DotNet">C Java DotNet</option>
								  <option value="Senior Secondary">Senior Secondary</option>
								  <option value="Junior Secondary">Junior Secondary</option>
								  <option value="Other">Other</option>
								 
                                </select>
                              </div>
                            </div>
                              
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">College</label>
                                  <input type="text" id="college4" name="college[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Affiliated to UNIVERSITY</label>
                                  <input type="text" id="afliliated4" name="afliliated[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Year From(MM/YY)</label>
                                  <input type="text" id="to_form4" name="to_form[]"  class="form-control "  placeholder="MM/YY">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Year To(MM/YY)</label>
                                  <input type="text" id="year_to4" name ="year_to[]"  onkeyup="getdatevalidate()" class="form-control" placeholder="MM/YY">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">%</label>
                                  <input type="text" id="year_per4" name ="year_per[]"   class="form-control" onkeypress='return isNumberKey(event)' placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                            </div>
                            <div class="row">
                             
							  
							   <div class="col-md-2">
                              <div class="form-group">
                                <label class="control-label">Qualification</label>
                                <select name ="qualification[]"  id="qualification3" class="form-control">
                                  <option value="Bachelor of Arts">Bachelor of Arts</option>
                                  <option value="Bach of Ayurvedic Med">Bach of Ayurvedic Med</option>
								  <option value="Bach in Business Admin">Bach in Business Admin</option>
								  <option value="Bach in Business Edu">Bach in Business Edu</option>
								  <option value="Bach in Business Mgt">Bach in Business Mgt</option>
								  <option value="Bach in Comp Application">Bach in Comp Application</option>
								  <option value="Bachelor in Commerce">Bachelor in Commerce</option>
								  <option value="Bach in Computer Science">Bach in Computer Science</option>
								  <option value="Bachelor in Engineering">Bachelor in Engineering</option>
								  <option value="Bachelor of Education">Bachelor of Education</option>
								  <option value="Bach of  Fisheries">Bach of  Fisheries</option>
								  <option value="Bach in Hotel Mgt">Bach in Hotel Mgt</option>
								  <option value="Bach in Info Systems">Bach in Info Systems</option>
								  <option value="Bach in Info Tech">Bach in Info Tech</option>
								  <option value="Bachelors in Mass Media">Bachelors in Mass Media</option>
								  <option value="Bach of Mgt Studies">Bach of Mgt Studies</option>
								  <option value="Bachelor in Pharmacy">Bachelor in Pharmacy</option>
								  <option value="Bach of Professional Std">Bach of Professional Std</option>
								  <option value="Bachelor in Rural Studies">Bachelor in Rural Studies</option>
								  <option value="Bachelor in Science">Bachelor in Science</option>
								  <option value="Bachelor in Tech">Bachelor in Tech</option>
								  <option value="Chartered Accountant">Chartered Accountant</option>
								  <option value="Cost Management Acc.">Cost Management Acc.</option>
								  <option value="Company Secretariat">Company Secretariat</option>
								  <option value="DIP In Automobile Eng">DIP In Automobile Eng</option>
								  <option value="DIP in Business Admin">DIP in Business Admin</option>
								  <option value="DIP In Business Mgt">DIP In Business Mgt</option>
								  <option value="DIP In Comp Application">DIP In Comp Application</option>
								  <option value="DIP in Costume Design">DIP in Costume Design</option>
								  <option value="DIP IN CIVIL ENG">DIP IN CIVIL ENG</option>
								  <option value="DIP in Elect & Comm Eng">DIP in Elect & Comm Eng</option>
								  <option value="DIP in Elect Eng">DIP in Elect Eng</option>
								  <option value="DIP In Financial Mgt">DIP In Financial Mgt</option>
								  <option value="DIP in Hotel Mgt">DIP in Hotel Mgt</option>
								  <option value="DIP In Human Resource Mgt">DIP In Human Resource Mgt</option>
								  <option value="DIP In Instrumentation">DIP In Instrumentation</option>
								  <option value="Dip. in Information Techn">Dip. in Information Techn</option>
								  <option value="Dip. in Mech. Engg.">Dip. in Mech. Engg.</option>
								  <option value="DIP In Marketing Mgt">DIP In Marketing Mgt</option>
								  <option value="DIP In Mkting & Sales Mgt">DIP In Mkting & Sales Mgt</option>
								  <option value="Exec Master in Buss. Mgt">Exec Master in Buss. Mgt</option>
								  <option value="Fellowship">Fellowship</option>
								  <option value="HDIP in Cooperative Mgt">HDIP in Cooperative Mgt</option>
								  <option value="Higher Secondary">Higher Secondary</option>
								  <option value="ITI">ITI</option>
								  <option value="Licentiate">Licentiate</option>
								  <option value="Bach in Legislative Law">Bach in Legislative Law</option>
								  <option value="Master in Legislative Law">Master in Legislative Law</option>
								  <option value="Master in Arts">Master in Arts</option>
								  <option value="Master in Admin. Mgt">Master in Admin. Mgt</option>
								  <option value="Master in Business Aminis">Master in Business Aminis</option>
								  <option value="Master Fin Mgt Risk&Ins">Master Fin Mgt Risk&Ins</option>
								  <option value="Master in Comp App.">Master in Comp App.</option>
								  <option value="Master in Computer Mgt">Master in Computer Mgt</option>
								  <option value="Master In Commerce">Master In Commerce</option>
								  <option value="Master in Education Tech">Master in Education Tech</option>
								  <option value="Master In Fin. Analysis">Master In Fin. Analysis</option>
								  <option value="Master in Financial Mgt">Master in Financial Mgt</option>
								  <option value="Master In HRM">Master In HRM</option>
								  <option value="Master in Internl. Bus">Master in Internl. Bus</option>
								  <option value="MASTER IN BUISNESS MNGMNT">MASTER IN BUISNESS MNGMNT</option>
								  <option value="Master in Info Tecnology">Master in Info Tecnology</option>
								  <option value="Master in Jou & Mass com.">Master in Jou & Mass com.</option>
								  <option value="Master in Lib & Info Sci">Master in Lib & Info Sci</option>
								  <option value="Masters in Marketing Mgt">Masters in Marketing Mgt</option>
								  <option value="Master in Mark & Sales">Master in Mark & Sales</option>
								  <option value="Masters in Project Mgt">Masters in Project Mgt</option>
								  <option value="Master in Rural Studies">Master in Rural Studies</option>
								  <option value="Master in Science">Master in Science</option>
								  <option value="Master of Social Work">Master of Social Work</option>
								  <option value="Masters in Tech">Masters in Tech</option>
								  <option value="Master in Tourism Mgt">Master in Tourism Mgt</option>
								  <option value="PGD Bank Insu & Fin Ser">PGD Bank Insu & Fin Ser</option>
								  <option value="PG DIP in  Acturial Sci">PG DIP in  Acturial Sci</option>
								  <option value="PG DIP in Business Mgt">PG DIP in Business Mgt</option>
								  <option value="PG DIP in Banking Ops">PG DIP in Banking Ops</option>
								  <option value="PG DIP in Comp App">PG DIP in Comp App</option>
								  <option value="PG DIP in Fin Acct">PG DIP in Fin Acct</option>
								  <option value="PG DIP in  Finance Mgt">PG DIP in  Finance Mgt</option>
								  <option value="PG DIP in  Foreign Trade">PG DIP in  Foreign Trade</option>
								  <option value="PG DIP in  Human Resource">PG DIP in  Human Resource</option>
								  <option value="PG DIP in  Industrial Mgt">PG DIP in  Industrial Mgt</option>
								  <option value="PG DIP in Management">PG DIP in Management</option>
								  <option value="PG DIP in  Marketing Mgt">PG DIP in  Marketing Mgt</option>
								  <option value="PG DIP in Medical Writing">PG DIP in Medical Writing</option>
								  <option value="PG DIP in Public Admin">PG DIP in Public Admin</option>
								  <option value="PG DIP in  Project Mgt">PG DIP in  Project Mgt</option>
								  <option value="PG DIP in Rural Devp">PG DIP in Rural Devp</option>
								  <option value="PG DIP in  Telecom Mgt">PG DIP in  Telecom Mgt</option>
								  <option value="PGD in Inter Busi Mgt">PGD in Inter Busi Mgt</option>
								  <option value="PGD Invest & Fin Analysis">PGD Invest & Fin Analysis</option>
								  <option value="PGD in Insu & Risk Mgt">PGD in Insu & Risk Mgt</option>
								  <option value="PGD in Journ & Mass Comm">PGD in Journ & Mass Comm</option>
								  <option value="PGD in Mgt of Insur Sec">PGD in Mgt of Insur Sec</option>
								  <option value="masters test">masters test</option>
								  <option value="Hadware & Networking">Hadware & Networking</option>
								  <option value="C Java DotNet">C Java DotNet</option>
								  <option value="Senior Secondary">Senior Secondary</option>
								  <option value="Junior Secondary">Junior Secondary</option>
								  <option value="Other">Other</option>
								 
                                </select>
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
                                <label class="control-label">Qualification</label>
                                <select name ="qualification[]"  id="qualification2" class="form-control">
                                  <option value="Bachelor of Arts">Bachelor of Arts</option>
                                  <option value="Bach of Ayurvedic Med">Bach of Ayurvedic Med</option>
								  <option value="Bach in Business Admin">Bach in Business Admin</option>
								  <option value="Bach in Business Edu">Bach in Business Edu</option>
								  <option value="Bach in Business Mgt">Bach in Business Mgt</option>
								  <option value="Bach in Comp Application">Bach in Comp Application</option>
								  <option value="Bachelor in Commerce">Bachelor in Commerce</option>
								  <option value="Bach in Computer Science">Bach in Computer Science</option>
								  <option value="Bachelor in Engineering">Bachelor in Engineering</option>
								  <option value="Bachelor of Education">Bachelor of Education</option>
								  <option value="Bach of  Fisheries">Bach of  Fisheries</option>
								  <option value="Bach in Hotel Mgt">Bach in Hotel Mgt</option>
								  <option value="Bach in Info Systems">Bach in Info Systems</option>
								  <option value="Bach in Info Tech">Bach in Info Tech</option>
								  <option value="Bachelors in Mass Media">Bachelors in Mass Media</option>
								  <option value="Bach of Mgt Studies">Bach of Mgt Studies</option>
								  <option value="Bachelor in Pharmacy">Bachelor in Pharmacy</option>
								  <option value="Bach of Professional Std">Bach of Professional Std</option>
								  <option value="Bachelor in Rural Studies">Bachelor in Rural Studies</option>
								  <option value="Bachelor in Science">Bachelor in Science</option>
								  <option value="Bachelor in Tech">Bachelor in Tech</option>
								  <option value="Chartered Accountant">Chartered Accountant</option>
								  <option value="Cost Management Acc.">Cost Management Acc.</option>
								  <option value="Company Secretariat">Company Secretariat</option>
								  <option value="DIP In Automobile Eng">DIP In Automobile Eng</option>
								  <option value="DIP in Business Admin">DIP in Business Admin</option>
								  <option value="DIP In Business Mgt">DIP In Business Mgt</option>
								  <option value="DIP In Comp Application">DIP In Comp Application</option>
								  <option value="DIP in Costume Design">DIP in Costume Design</option>
								  <option value="DIP IN CIVIL ENG">DIP IN CIVIL ENG</option>
								  <option value="DIP in Elect & Comm Eng">DIP in Elect & Comm Eng</option>
								  <option value="DIP in Elect Eng">DIP in Elect Eng</option>
								  <option value="DIP In Financial Mgt">DIP In Financial Mgt</option>
								  <option value="DIP in Hotel Mgt">DIP in Hotel Mgt</option>
								  <option value="DIP In Human Resource Mgt">DIP In Human Resource Mgt</option>
								  <option value="DIP In Instrumentation">DIP In Instrumentation</option>
								  <option value="Dip. in Information Techn">Dip. in Information Techn</option>
								  <option value="Dip. in Mech. Engg.">Dip. in Mech. Engg.</option>
								  <option value="DIP In Marketing Mgt">DIP In Marketing Mgt</option>
								  <option value="DIP In Mkting & Sales Mgt">DIP In Mkting & Sales Mgt</option>
								  <option value="Exec Master in Buss. Mgt">Exec Master in Buss. Mgt</option>
								  <option value="Fellowship">Fellowship</option>
								  <option value="HDIP in Cooperative Mgt">HDIP in Cooperative Mgt</option>
								  <option value="Higher Secondary">Higher Secondary</option>
								  <option value="ITI">ITI</option>
								  <option value="Licentiate">Licentiate</option>
								  <option value="Bach in Legislative Law">Bach in Legislative Law</option>
								  <option value="Master in Legislative Law">Master in Legislative Law</option>
								  <option value="Master in Arts">Master in Arts</option>
								  <option value="Master in Admin. Mgt">Master in Admin. Mgt</option>
								  <option value="Master in Business Aminis">Master in Business Aminis</option>
								  <option value="Master Fin Mgt Risk&Ins">Master Fin Mgt Risk&Ins</option>
								  <option value="Master in Comp App.">Master in Comp App.</option>
								  <option value="Master in Computer Mgt">Master in Computer Mgt</option>
								  <option value="Master In Commerce">Master In Commerce</option>
								  <option value="Master in Education Tech">Master in Education Tech</option>
								  <option value="Master In Fin. Analysis">Master In Fin. Analysis</option>
								  <option value="Master in Financial Mgt">Master in Financial Mgt</option>
								  <option value="Master In HRM">Master In HRM</option>
								  <option value="Master in Internl. Bus">Master in Internl. Bus</option>
								  <option value="MASTER IN BUISNESS MNGMNT">MASTER IN BUISNESS MNGMNT</option>
								  <option value="Master in Info Tecnology">Master in Info Tecnology</option>
								  <option value="Master in Jou & Mass com.">Master in Jou & Mass com.</option>
								  <option value="Master in Lib & Info Sci">Master in Lib & Info Sci</option>
								  <option value="Masters in Marketing Mgt">Masters in Marketing Mgt</option>
								  <option value="Master in Mark & Sales">Master in Mark & Sales</option>
								  <option value="Masters in Project Mgt">Masters in Project Mgt</option>
								  <option value="Master in Rural Studies">Master in Rural Studies</option>
								  <option value="Master in Science">Master in Science</option>
								  <option value="Master of Social Work">Master of Social Work</option>
								  <option value="Masters in Tech">Masters in Tech</option>
								  <option value="Master in Tourism Mgt">Master in Tourism Mgt</option>
								  <option value="PGD Bank Insu & Fin Ser">PGD Bank Insu & Fin Ser</option>
								  <option value="PG DIP in  Acturial Sci">PG DIP in  Acturial Sci</option>
								  <option value="PG DIP in Business Mgt">PG DIP in Business Mgt</option>
								  <option value="PG DIP in Banking Ops">PG DIP in Banking Ops</option>
								  <option value="PG DIP in Comp App">PG DIP in Comp App</option>
								  <option value="PG DIP in Fin Acct">PG DIP in Fin Acct</option>
								  <option value="PG DIP in  Finance Mgt">PG DIP in  Finance Mgt</option>
								  <option value="PG DIP in  Foreign Trade">PG DIP in  Foreign Trade</option>
								  <option value="PG DIP in  Human Resource">PG DIP in  Human Resource</option>
								  <option value="PG DIP in  Industrial Mgt">PG DIP in  Industrial Mgt</option>
								  <option value="PG DIP in Management">PG DIP in Management</option>
								  <option value="PG DIP in  Marketing Mgt">PG DIP in  Marketing Mgt</option>
								  <option value="PG DIP in Medical Writing">PG DIP in Medical Writing</option>
								  <option value="PG DIP in Public Admin">PG DIP in Public Admin</option>
								  <option value="PG DIP in  Project Mgt">PG DIP in  Project Mgt</option>
								  <option value="PG DIP in Rural Devp">PG DIP in Rural Devp</option>
								  <option value="PG DIP in  Telecom Mgt">PG DIP in  Telecom Mgt</option>
								  <option value="PGD in Inter Busi Mgt">PGD in Inter Busi Mgt</option>
								  <option value="PGD Invest & Fin Analysis">PGD Invest & Fin Analysis</option>
								  <option value="PGD in Insu & Risk Mgt">PGD in Insu & Risk Mgt</option>
								  <option value="PGD in Journ & Mass Comm">PGD in Journ & Mass Comm</option>
								  <option value="PGD in Mgt of Insur Sec">PGD in Mgt of Insur Sec</option>
								  <option value="masters test">masters test</option>
								  <option value="Hadware & Networking">Hadware & Networking</option>
								  <option value="C Java DotNet">C Java DotNet</option>
								  <option value="Senior Secondary">Senior Secondary</option>
								  <option value="Junior Secondary">Junior Secondary</option>
								  <option value="Other">Other</option>
								 
                                </select>
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
                                <label class="control-label">Qualification</label>
                                <select name ="qualification[]"  id="qualification" class="form-control">
                                  <option value="Bachelor of Arts">Bachelor of Arts</option>
                                  <option value="Bach of Ayurvedic Med">Bach of Ayurvedic Med</option>
								  <option value="Bach in Business Admin">Bach in Business Admin</option>
								  <option value="Bach in Business Edu">Bach in Business Edu</option>
								  <option value="Bach in Business Mgt">Bach in Business Mgt</option>
								  <option value="Bach in Comp Application">Bach in Comp Application</option>
								  <option value="Bachelor in Commerce">Bachelor in Commerce</option>
								  <option value="Bach in Computer Science">Bach in Computer Science</option>
								  <option value="Bachelor in Engineering">Bachelor in Engineering</option>
								  <option value="Bachelor of Education">Bachelor of Education</option>
								  <option value="Bach of  Fisheries">Bach of  Fisheries</option>
								  <option value="Bach in Hotel Mgt">Bach in Hotel Mgt</option>
								  <option value="Bach in Info Systems">Bach in Info Systems</option>
								  <option value="Bach in Info Tech">Bach in Info Tech</option>
								  <option value="Bachelors in Mass Media">Bachelors in Mass Media</option>
								  <option value="Bach of Mgt Studies">Bach of Mgt Studies</option>
								  <option value="Bachelor in Pharmacy">Bachelor in Pharmacy</option>
								  <option value="Bach of Professional Std">Bach of Professional Std</option>
								  <option value="Bachelor in Rural Studies">Bachelor in Rural Studies</option>
								  <option value="Bachelor in Science">Bachelor in Science</option>
								  <option value="Bachelor in Tech">Bachelor in Tech</option>
								  <option value="Chartered Accountant">Chartered Accountant</option>
								  <option value="Cost Management Acc.">Cost Management Acc.</option>
								  <option value="Company Secretariat">Company Secretariat</option>
								  <option value="DIP In Automobile Eng">DIP In Automobile Eng</option>
								  <option value="DIP in Business Admin">DIP in Business Admin</option>
								  <option value="DIP In Business Mgt">DIP In Business Mgt</option>
								  <option value="DIP In Comp Application">DIP In Comp Application</option>
								  <option value="DIP in Costume Design">DIP in Costume Design</option>
								  <option value="DIP IN CIVIL ENG">DIP IN CIVIL ENG</option>
								  <option value="DIP in Elect & Comm Eng">DIP in Elect & Comm Eng</option>
								  <option value="DIP in Elect Eng">DIP in Elect Eng</option>
								  <option value="DIP In Financial Mgt">DIP In Financial Mgt</option>
								  <option value="DIP in Hotel Mgt">DIP in Hotel Mgt</option>
								  <option value="DIP In Human Resource Mgt">DIP In Human Resource Mgt</option>
								  <option value="DIP In Instrumentation">DIP In Instrumentation</option>
								  <option value="Dip. in Information Techn">Dip. in Information Techn</option>
								  <option value="Dip. in Mech. Engg.">Dip. in Mech. Engg.</option>
								  <option value="DIP In Marketing Mgt">DIP In Marketing Mgt</option>
								  <option value="DIP In Mkting & Sales Mgt">DIP In Mkting & Sales Mgt</option>
								  <option value="Exec Master in Buss. Mgt">Exec Master in Buss. Mgt</option>
								  <option value="Fellowship">Fellowship</option>
								  <option value="HDIP in Cooperative Mgt">HDIP in Cooperative Mgt</option>
								  <option value="Higher Secondary">Higher Secondary</option>
								  <option value="ITI">ITI</option>
								  <option value="Licentiate">Licentiate</option>
								  <option value="Bach in Legislative Law">Bach in Legislative Law</option>
								  <option value="Master in Legislative Law">Master in Legislative Law</option>
								  <option value="Master in Arts">Master in Arts</option>
								  <option value="Master in Admin. Mgt">Master in Admin. Mgt</option>
								  <option value="Master in Business Aminis">Master in Business Aminis</option>
								  <option value="Master Fin Mgt Risk&Ins">Master Fin Mgt Risk&Ins</option>
								  <option value="Master in Comp App.">Master in Comp App.</option>
								  <option value="Master in Computer Mgt">Master in Computer Mgt</option>
								  <option value="Master In Commerce">Master In Commerce</option>
								  <option value="Master in Education Tech">Master in Education Tech</option>
								  <option value="Master In Fin. Analysis">Master In Fin. Analysis</option>
								  <option value="Master in Financial Mgt">Master in Financial Mgt</option>
								  <option value="Master In HRM">Master In HRM</option>
								  <option value="Master in Internl. Bus">Master in Internl. Bus</option>
								  <option value="MASTER IN BUISNESS MNGMNT">MASTER IN BUISNESS MNGMNT</option>
								  <option value="Master in Info Tecnology">Master in Info Tecnology</option>
								  <option value="Master in Jou & Mass com.">Master in Jou & Mass com.</option>
								  <option value="Master in Lib & Info Sci">Master in Lib & Info Sci</option>
								  <option value="Masters in Marketing Mgt">Masters in Marketing Mgt</option>
								  <option value="Master in Mark & Sales">Master in Mark & Sales</option>
								  <option value="Masters in Project Mgt">Masters in Project Mgt</option>
								  <option value="Master in Rural Studies">Master in Rural Studies</option>
								  <option value="Master in Science">Master in Science</option>
								  <option value="Master of Social Work">Master of Social Work</option>
								  <option value="Masters in Tech">Masters in Tech</option>
								  <option value="Master in Tourism Mgt">Master in Tourism Mgt</option>
								  <option value="PGD Bank Insu & Fin Ser">PGD Bank Insu & Fin Ser</option>
								  <option value="PG DIP in  Acturial Sci">PG DIP in  Acturial Sci</option>
								  <option value="PG DIP in Business Mgt">PG DIP in Business Mgt</option>
								  <option value="PG DIP in Banking Ops">PG DIP in Banking Ops</option>
								  <option value="PG DIP in Comp App">PG DIP in Comp App</option>
								  <option value="PG DIP in Fin Acct">PG DIP in Fin Acct</option>
								  <option value="PG DIP in  Finance Mgt">PG DIP in  Finance Mgt</option>
								  <option value="PG DIP in  Foreign Trade">PG DIP in  Foreign Trade</option>
								  <option value="PG DIP in  Human Resource">PG DIP in  Human Resource</option>
								  <option value="PG DIP in  Industrial Mgt">PG DIP in  Industrial Mgt</option>
								  <option value="PG DIP in Management">PG DIP in Management</option>
								  <option value="PG DIP in  Marketing Mgt">PG DIP in  Marketing Mgt</option>
								  <option value="PG DIP in Medical Writing">PG DIP in Medical Writing</option>
								  <option value="PG DIP in Public Admin">PG DIP in Public Admin</option>
								  <option value="PG DIP in  Project Mgt">PG DIP in  Project Mgt</option>
								  <option value="PG DIP in Rural Devp">PG DIP in Rural Devp</option>
								  <option value="PG DIP in  Telecom Mgt">PG DIP in  Telecom Mgt</option>
								  <option value="PGD in Inter Busi Mgt">PGD in Inter Busi Mgt</option>
								  <option value="PGD Invest & Fin Analysis">PGD Invest & Fin Analysis</option>
								  <option value="PGD in Insu & Risk Mgt">PGD in Insu & Risk Mgt</option>
								  <option value="PGD in Journ & Mass Comm">PGD in Journ & Mass Comm</option>
								  <option value="PGD in Mgt of Insur Sec">PGD in Mgt of Insur Sec</option>
								  <option value="masters test">masters test</option>
								  <option value="Hadware & Networking">Hadware & Networking</option>
								  <option value="C Java DotNet">C Java DotNet</option>
								  <option value="Senior Secondary">Senior Secondary</option>
								  <option value="Junior Secondary">Junior Secondary</option>
								  <option value="Other">Other</option>
								 
                                </select>
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
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Organization</label>
                                  <input type="text" id="organization" name ="organization[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Service From</label>
                                  <input type="text" id="service_from" name ="service_from[]" class="form-control " placeholder=""  >
                                </div>
                              </div>
                              <!--/span-->
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Service To</label>
                                  <input type="text" id="service_to" name ="service_to[]"   onkeyup ="getdatevalidate()"  class="form-control" placeholder="" >
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Total Service Period</label>
                                  <input type="text" id="serviceperiod" name ="total_service[]"  readonly class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Designation</label>
                                  <input type="text" id="firstName" name ="designation[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Gross Salary*</label>
                                  <input type="text" id="firstName" name ="gross_salary[]"  class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="control-label">Responsibilities**</label>
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
                              <div class="col-md-3">
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
                              <div class="col-md-3">
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
                              <div class="col-md-3">
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
                              <div class="col-md-3">
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
                              <div class="col-md-3">
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
                           
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Name</label>
                                  <input type="text" id="family_name_data" name="family_name[]" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">D.O.B.</label>
                                  <input type="text" id="dobirth1" name="dobirth[]" class="form-control" placeholder="" >
								 
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="control-label">Email Id</label>
                                  <input type="email" id="family_email_id1" class="form-control" value="" name ="family_email_id[]"  placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                              <div class="col-md-1">
                                <div class="form-group">
                                  <label class="control-label">Relationship</label>
                                  <select name ="family_relationship[]" class="form-control" id="family_relationship" style ="width:110px";>
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
                                  <!--<input type="text" id="lastName" name="family_relationship[]" class="form-control" placeholder="">-->
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Aadhar Card No.</label>
                                  <input type="text" maxlength="12"  id="family_aadharno1"  class="form-control" value=""  onkeypress='return isNumberKey(event)' name ="family_aadharno[]" placeholder="">
								  <span class ="family_aadharno1"></span>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Mobile No.</label>
                                  <input type="text" id="family_mobileno1" maxlength="10"  name="family_mobileno[]" onkeypress='return isNumberKey(event)' class="form-control" placeholder="" >
                                </div>
                              </div>
							 
                              <!--/span-->
                            </div> 
							
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <input type="text" id="family_name" name="family_name[]"   class="form-control" placeholder="">
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
                                  <input type="text" maxlength="12"  id="family_aadharno2"  class="form-control" value=""  onkeypress='return isNumberKey(event)' name ="family_aadharno[]" placeholder="">
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
                                  <input type="text" id="family_name3"  name="family_name[]" onkeyup="getFName3()" class="form-control" placeholder="">
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
                                  <input type="text" maxlength="12"  id="family_aadharno3"  onkeypress='return isNumberKey(event)' class="form-control" value=""  name ="family_aadharno[]" placeholder="">
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
                                  <input type="text" maxlength="12"  id="family_aadharno4"  onkeypress='return isNumberKey(event)' class="form-control" value=""  name ="family_aadharno[]" placeholder="">
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
                                  <input type="text" id="firstName" name="family_name[]" onkeyup="getFName2()" class="form-control" placeholder="">
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
                                  <input type="text" maxlength="12"  id="family_aadharno5"  onkeypress='return isNumberKey(event)' class="form-control" value=""  name ="family_aadharno[]" placeholder="">
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
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="control-label">Name</label>
                                  <input type="text" id="firstName" value="EMPLOYEE PF SCHEME" class="form-control" name= "name1" placeholder="EMPLOYEE PF SCHEME" readonly>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="control-label">Member</label>
                                  <div class="radio-list">
                                    <label class="radio-inline">
                                    <input type="radio"  value="Yes" onclick="checkmember1()" id="optionsRadios11" name= "member1"  > Yes </label>
                                    <label class="radio-inline">
                                    <input type="radio"  value="No" onclick="checkmember2()" id="optionsRadios22" name= "member1" checked > No </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="control-label">Membership No.</label>
                                 <input type="text" disabled id="membershipno1" name= "membership_no1" class="form-control" placeholder="Enter Membership No">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="control-label">Name Of Organization & Position</label>
                                  <input type="text" disabled id="position1" name= "position1" class="form-control" placeholder="">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" id="firstName"  value="ESIC SCHEME" class="form-control" name= "name2" placeholder="ESIC SCHEME" readonly>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <div class="radio-list">
                                    <label class="radio-inline">
                                    <input type="radio" value="Yes" onclick="checkmember3()" id="optionsRadios33"  name= "member2"  > Yes </label>
                                    <label class="radio-inline">
                                    <input type="radio" value="No" onclick="checkmember4()" id="optionsRadios44"  name= "member2"  checked > No </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" disabled id="membershipno2" name= "membership_no2" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" disabled id="position2" name= "position2" class="form-control" placeholder="">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" id="firstName" value="PROFESSIONAL ORG." class="form-control" name= "name3" placeholder="PROFESSIONAL ORG." readonly>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <div class="radio-list">
                                    <label class="radio-inline">
                                    <input type="radio"  value="Yes" onclick="checkmember5()" id="optionsRadios55"  name= "member3"   > Yes </label>
                                    <label class="radio-inline">
                                    <input type="radio"  value="No" onclick="checkmember6()" id="optionsRadios66"   name= "member3" checked> No </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" disabled id="membershipno3" name= "membership_no3" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" disabled id="position3" name= "position3"  class="form-control" placeholder="">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" id="firstName" class="form-control" name= "name4" value="SOCIAL ORG." placeholder="SOCIAL ORG." readonly>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <div class="radio-list">
                                    <label class="radio-inline">
                                    <input type="radio"  value="Yes" onclick="checkmember7()" id="optionsRadios77"  name= "member4" > Yes </label>
                                    <label class="radio-inline">
                                    <input type="radio" value="No"  onclick="checkmember8()" id="optionsRadios88"  name= "member4" checked> No </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" disabled id="membershipno4" name= "membership_no4" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" disabled id="position4" name= "position4" class="form-control" placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-body">
                            <h3 class="form-section"><strong> Details Of Knowing Any KENT Employee</strong> </h3>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Reference Name</label>
                                  <input type="text" id="firstName" name="reference_name[]" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">EMPLOYEE. Code</label>
                                  <input type="text" id="emp_code" name="emp_code[]" class="form-control"  maxlength="7" onkeypress='return isNumberKey(event)' placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Designation</label>
                                  <input type="text" id="firstName" name="designation[]" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label">Department</label>
                                  <input type="text" id="firstName" name="department[]" class="form-control" placeholder="">
                                </div>
                              </div>
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
                                  <input type="text" id="kent_mobile_no" maxlength="10"  name="kent_mobile_no[]" onkeypress='return isNumberKey(event)' class="form-control" placeholder="">
                                </div>
                              </div>
                              <!--/span-->
                            </div>
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
                                  <textarea class="form-control"  name="convicted" rows="3"></textarea>
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
                                  <input type="text" id="place" name="place" class="form-control"  placeholder="">
                                </div>
                              </div>
							
                            </div>
							<div class="row">
							 <div class="col-md-2">
                                <div class="form-group">
                                  <label class="control-label"><strong>DATE:</strong></label>
                                  <input type="text" id="date" name="date" class="form-control"   placeholder="DD/MM/YYYY">
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
			 dateFormat: 'dd/mm/yy',
             defaultDate: d});
          
          $('#doj_user').datepicker({
			   dateFormat: 'dd/mm/yy',
          	 maxDate: 0
			 
          });
          
          
        $(function() {
        $.validator.addMethod("checkAdhaarName", 
        function(value, element) {
            var result = false;
            $.ajax({
                type:"POST",
                async: false,
                url: "checkadharname.php", // script to validate in server side
                data: {adhaarname: value},
                success: function(data) {
                    result = (data == true) ? true : false;
                }
            });
            // return true if username is exist in database
            return result; 
        }, 
       // "This username is already taken! Try another."
    );

			 
			 
             $("#signupForm").validate({
            
                 rules: {
          		adharno: {
                         required: true,
                         minlength:12,
                         maxlength:12,
					 // checkAdhaarName: true,
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
					//checkAdhaarName: "Aadhar Number already exit "
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
				husband_wife_name: "Please enter your name Of Husband/Wife",
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
			 
			 $("#SelectBox").change(function() {
				
				var selectedOption = $('#SelectBox option:selected');
				if(selectedOption.val() != 'Married')
				{
					$("#husbabandname").prop('required',false);
				}
				else{
					$("#husbabandname").prop('required',true);
					
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
          $('#mobile_no,#service_from,#service_to,#total_service').keydown(function (event) {
          
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
         
          function isNumberKey(evt)
          {
          	  var charCode = (evt.which) ? evt.which : evt.keyCode;
          	  if (charCode > 31 && (charCode < 48 || charCode > 57))
          		     {
                      return false;
                   }
                   else
                   {
                      checkAadhaarExist();
                      return true;
                   }
          }
          function checkAadhaarExist()
          {
            var get_aadhaar_data = $("#adharno").val();
              if(get_aadhaar_data != '')
              {
                  //if(get_aadhaar_data.length == 12)
                  //{
                    $.ajax(
                    {
                      type:'POST',
                      datatype:'json',
                      url:"api/validate_aadhaar.php",
                      data:{aadhar_card_data:get_aadhaar_data},
                      success : function(data)
                      {
                        var json = $.parseJSON(data);
                          if(json['response_code'] == 200)
                          {
                            $("#all-ready-exist").html('<label for="adharno-error">'+json['message']+'</label>');
                          }
                            else
                            {
                              $("#all-ready-exist").html('');
                            }
                      },
                        error : function(jqXHR, textStatus, errorThrown)
                        {
                        }
                    });
                    
                  //}
                  
              }
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
				dateFormat: 'dd/mm/yy',
          	changeYear: true,
              changeMonth: true
          		
          	});
          		$('#service_to').datepicker({
          		//dateFormat: 'mm/yy',
				dateFormat: 'dd/mm/yy',
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
          		dateFormat: 'dd/mm/yy',
          	changeYear: true,
              changeMonth: true
          		
          	});
          		$('#service_to2').datepicker({
          		dateFormat: 'dd/mm/yy',
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
          		dateFormat: 'dd/mm/yy',
          	changeYear: true,
              changeMonth: true
          		
          	});
          		$('#service_to3').datepicker({
          		dateFormat: 'dd/mm/yy',
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
          		dateFormat: 'dd/mm/yy',
          	changeYear: true,
              changeMonth: true
          		
          	});
          		$('#service_to4').datepicker({
          dateFormat: 'dd/mm/yy',
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
          	dateFormat: 'dd/mm/yy',	
          	changeYear: true,
              changeMonth: true
          		
          	});
          		$('#service_to5').datepicker({
          		dateFormat: 'dd/mm/yy',
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
          	dateFormat: 'dd/mm/yy',	
          	changeYear: true,
              changeMonth: true
          		
          	});
          		$('#service_to6').datepicker({
          	dateFormat: 'dd/mm/yy',	
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
					$('#membershipno2').attr('required', true);
				    $('#position2').attr('required', true);
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
					$('#membershipno3').attr('required', true);
				    $('#position3').attr('required', true);
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
					$('#membershipno4').attr('required', true);
				    $('#position4').attr('required', true);
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
          		dateFormat: 'dd/mm/yy',	
          	changeYear: true,
              changeMonth: true
          		
          	});
			function getFName(){
				var getvalue = $('#fatherName').val();
				$('#family_name_data').val(getvalue);
				$('#family_name_data').attr('readonly', true);
				    $('#family_relationship').attr('disabled', true);
					 
			}                                
					
			
			function marital_status(status){
				var statusData = status;
				//alert(statusData)
			}

        </script>
		    <script type="text/javascript">
	$(document).ready(function(){
    $('#submit').click(function(){
    if($('#family_name_data').val()=='')
   {    
   		$(".dobirth1").html(" ").css({ 'color': 'red' }); 
   }else{
	   if(($('#dobirth1').val()=='') || ($('#family_aadharno1').val()=='')){
	   $(".dobirth1").html("Please enter dob.").css({ 'color': 'red' });
	   	$(".family_aadharno1").html("Please enter dob.").css({ 'color': 'red' });
     	return false;
	   }
   }
//---------------------------------///
 	if($('#family_namew').val()=='')
   { 
   		$(".dobirth2").html(" ").css({ 'color': 'red' });
   }else{
	    if(($('#dobirth2').val()=='') || ($('#family_aadharno2').val()=='')){
	   $(".dobirth2").html("Please enter dob.").css({ 'color': 'red' });
	   	$(".family_aadharno2").html("Please enter dob.").css({ 'color': 'red' });
   	return false;
		}
   }
  
});
	});
</script>
	<style>
p {
        background-color: rgba(0,102,255,.15);
        border: 2px solid rgba(0,102,255,.5);
        border-radius: 10px;
        color: #000;
        display: none;
        padding: 10px;
        position: relative;
    }

p:before {
    content: "";
    border-style: solid;
    border-width: 0 15px 15px 15px;
    border-color:  transparent transparent rgba(0,102,255,.5) transparent;
    height: 0;
    position: absolute;
    top: -17px;
    width: 0;
}

input {
    display: block
}

input:hover + p {
    display: inline-block;
    margin: 10px 0 0 10px
}

</style>	
       
        <!-- END JAVASCRIPTS -->
      </body>
      <!-- END BODY -->
    </html>