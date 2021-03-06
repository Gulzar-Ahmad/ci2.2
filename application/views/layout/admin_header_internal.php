<!DOCTYPE html>
<html>
<head>
  
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>dist/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>assets/css/dashboard.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>css/pto-admin.css" rel="stylesheet" media="screen">

        <!-- Carousel -->
            <link href="<?php echo base_url(); ?>examples/carousel/carousel.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
          <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
        <![endif]-->
	
        <!-- Fonts 
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300,300italic' rel='stylesheet' type='text/css'>	-->	
	<!-- Font-Awesome -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.css" media="screen" />
        <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome-ie7.css" media="screen" /><![endif]-->
	
	<!-- PIECHART -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.easy-pie-chart.css">
	
        <!-- Picker UI-->	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" />		
	
        <!-- jQuery -->	
        <script src="<?php echo base_url(); ?>assets/js/jquery.v2.0.3.js"></script>
	
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.easy-pie-chart.js"></script>

	<script>
            $(function() {
                <?php
                    if ($this->session->userdata('sess_error_type') == 'error') { ?>
                    $('#new_stu_Modal').modal('show');
                    });
                    <?php } ?>
</script>

	
  </head>
  <body id="top">
     <!-- CONTENT -->
	<div class="container2">

		
		<div class="container2 offset-0">
			
			
			<!-- CONTENT -->
			<div class="col-md-12  offset-0">
				

				
				<!-- LEFT MENU -->
				<div class="dashboard-left offset-0 textcenter">
					
					<br/>
					<a href="index.html"><img src="<?php echo base_url(); ?>images/dash/logo.png" alt="" style="width:70%;max-width:277px"/></a><br/>
					
					
										
					<!-- Nav tabs -->
					<ul class="nav dashboard-tabs">
							
                                                <li>
						  <a href="#dashboard" data-toggle="tab">
						  <div class="dash-ct">
							  <span class="dashboard-icon left"></span>									  
							  <span class="dtxt">Dashboard</span>
						  </div>
						  </a></li>  
						<li>
						  <a href="<?php echo base_url();?>admin/students">
						  <div class="dash-ct">
							  <span class="profile-icon left"></span>									  
							  <span class="dtxt">Students</span>
						  </div>
						  </a></li>	
						<li>
						  <a href="<?php echo base_url();?>admin/tutor/index">
						  <div class="dash-ct">
							  <span class="tutor-icon left"></span>									  
							  <span class="dtxt">Tutors</span>
						  </div>
						  </a></li>	
						<li>
						  <a href="<?php echo base_url();?>admin/classes/index">
						  <div class="dash-ct">
							  <span class="class-icon left"></span>	
							  <span class="dtxt">Classes</span>
						  </div>
						  </a></li>
						<li>
						  <a href="#one2one-classes" data-toggle="tab">
						  <div class="dash-ct">
							  <span class="lesson-icon left"></span>	
							  <span class="dtxt">One2One</span>
						  </div>
						  </a></li>
                                                <li class="margbottom20">
						  <a href="#reports" data-toggle="tab">
						  <div class="dash-ct">
							  <span class="bookings-icon left"></span>	
							  <span class="dtxt">Account Reports</span>
						  </div>
						  </a></li>
                                                  
						<li>
						  <a href="#message-box" data-toggle="tab">
						  <div class="dash-ct">
							  <span class="newsletter-icon left"></span>	
							  <span class="dtxt">Messages</span>
						  </div>
						  </a></li>
						<li class="margbottom20">
						  <a href="#pages" data-toggle="tab">
						  <div class="dash-ct">
							  <span class="pages-icon left"></span>	
							  <span class="dtxt">Pages</span>
						  </div>
						  </a></li>
							
						<li>
						  <a href="#settings" data-toggle="tab">
						  <div class="dash-ct">
							 <span class="settings-icon left"></span>									  
							  <span class="dtxt">Settings</span>
						  </div>
						  </a></li>		
					</ul>
					<br/>
					<span class="dtxt">
						<span class="size12 grey">
							Copyright &copy; 2015.<br/>
							http://abctuition.com
							</span>
						<br/>
						<br/>
						<br/>
					</span>
					<div class="clearfix"></div>
				</div>
				<!-- LEFT MENU -->
					
				<!-- RIGHT CPNTENT -->
				<div class="dashboard-right  offset-0">
					<!-- Tab panes from left menu -->
					<div class="tab-content5">
					
                                            <!-- Common Header part of every page -->
                                                <div class="cpadding40">
                                                <span class="size12 grey"><a href="<?php echo base_url(); ?>admin/login/logout" style="background:#eee; padding:4px 5px;"><img src="<?php echo base_url(); ?>images/dash/logout.png" alt=""/> Logout</a></span>
                                                   
														 <?php
                                                if ($this->session->userdata('sess_msges_type') == 'success') {
                                                    ?>
                                                <div class="alert alert-success">
                                                    <strong><?php echo $this->session->userdata('sess_msges');?></strong> 
                                                </div>
													<?php 
                                                     $this->session->set_userdata(array(
                                                        'sess_msges' => "",
                                                        'sess_msges_type' => ''
                                                    ));
                                                    } ?>
                                                    
                                               
                                                 <?php
                                                if ($this->session->userdata('sess_delete_type') == 'delete') {
                                                    ?>
                                                <div class="alert alert-success">
                                                    <strong><?php echo $this->session->userdata('sess_delete');?></strong> 
                                                </div>
                                                <?php 
                                                 $this->session->set_userdata(array(
                                                   'sess_delete' => "",
                                                   'sess_delete_type' =>""
                                                ));
                                                } ?>
                                                <?php
                                                if ($this->session->userdata('sess_update_type') == 'update') {
                                                    ?>
                                                <div class="alert alert-success">
                                                    <strong><?php echo $this->session->userdata('sess_update');?></strong> 
                                                </div>
                                                <?php 
												$this->session->set_userdata(array(
                                                   'sess_update' => "",
                                                   'sess_update' =>""
                                                ));
                                                } ?>
                                                
                                                 <?php
                                                if ($this->session->userdata('sess_error_type') == 'error') {
                                                    ?>
                                                <div class="alert alert-danger">
                                                    <strong><?php echo $this->session->userdata('sess_error_msges');?></strong> 
                                                </div>
                                                <?php 
												$this->session->set_userdata(array(
                                                   'sess_error_type' => "",
                                                   'sess_error_msges' =>""
                                                ));
                                                } ?>
                                                
                                                
                                                    <div class="line2"></div>
                                                </div>

                                            <!-- // Commong Header part of every page -->
                             