<html>
<?php

	defined('BASEPATH') OR exit('No direct script access allowed');


	if ($this->ion_auth->logged_in()){

		$user = $this->ion_auth->users()->row_array();
		$username = $user['username'];
		$email = $user['email'];
		$first_name = $user['first_name'];
		$last_name = $user['last_name'];
		
	
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $username.' Homepage'?> HomePage</title>

   <!-- Bootstrap scripts-->
   
   

    <!-- Bootstrap core CSS -->
    <link href=<?php echo base_url("dist/css/bootstrap.min.css")?> rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=<?php echo base_url("dist/css/homepage.min.css")?> rel="stylesheet">

    <!-- Bootstrp Glyphicons-->
    <link href=<?php echo base_url("dist/css/font.css")?> rel="stylesheet">
     <link href=<?php echo base_url("dist/css/font-awesome.min.css")?> rel="stylesheet">
    

   
   
	<title>Admin Page</title>


</head>
<body class="nav-md">
	<div class="container body">	
		<div class="main_container">
			<div class="col-md-3 left_col">
		        <div class="left_col scroll-view">
		            <div class="navbar nav_title" style="border: 0;">
		              <a href="#" class="site_title"><span>DASHBOARD</span></a>
		            </div>

		            <div class="clearfix">
		            	<!-- menu profile quick info -->
		            	<div class="profile clearfix">
		              		<div class="profile_pic">
		                		<img src=<?php echo base_url("dist/img/user_default.png")?> alt="..." class="img-circle profile_img">
		              		</div>
		              		<div class="profile_info">
		                		<span>Welcome,</span>
		                	<h3><?php echo $first_name.' '.$last_name?></h3>
		              		</div>
		            	</div>
		            	<!-- /menu profile quick info -->

		            <br>

		            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              			<div class="menu_section active">
                			<h3>Main Menu</h3>
                				<ul class="nav side-menu" style="">
                 					<li class=""><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    					<ul class="nav child_menu" style="display: none;">
                      						<li><a href="index.html">Dashboard</a></li>
                      						<li><a href="index2.html">Dashboard2</a></li>
                    					</ul>
                  					</li>
                  <li class=""><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                      <li><a href="form.html">General Form</a></li>
                      <li><a href="form_advanced.html">Advanced Components</a></li>
                      <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="">
                      <li><a href="general_elements.html">General Elements</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="icons.html">Icons</a></li>
                      <li><a href="glyphicons.html">Glyphicons</a></li>
                      <li><a href="widgets.html">Widgets</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="">
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
		            </div>

		         </div>
		    </div>
		    <!--top nav-->
		    <div class=top_nav>
		    	<div class="nav_menu">
		    		<nav>
		    			<div class="nav toggle">
		    				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
		    			</div>
		    			<ul class="nav navbar-nav navbar-right">
				                <li class="dropdown">
				              <a data-target="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="dmenu"><?php echo $username;?> <span class="caret"></span></a>
				              <ul class="dropdown-menu" aria-labeled-by="dmenu">
				                <li><a href="#">Profile</a></li>
				                <li><a href="#">Settings</a></li>
				                <li><a href="#">Help</a></li>
				                <li><a href=<?php echo base_url('auth/logout');?>>Logout <span class="glyphicon glyphicon-off pull-right"></span></a></li>
				              </ul>
				            </li>
			            </ul>
		    		</nav>
		    	</div>
			</div>
		    <div class="right_col" role="main" style="min-height: 1161px;">
				<div id="profile">
					<?php
						echo "Hello <b id='welcome'><i>" . $username . "</i> !</b>";
						echo "<br/>";
						echo "<br/>";
						echo "Welcome to Admin Page";
						echo "<br/>";
						echo "<br/>";
						echo "Your Username is " . $username;
						echo "<br/>";
						echo "Your Email is " . $email;
						echo "<br/>";
						
					?>
					
				
				</div>
			</div>
		</div>
	</div>

<!--<nav class="navbar navbar-inverse navbar-fixed-top">
					<div class='container-fluid'>
						<ul class="nav navbar-nav navbar-right">
				            <li><a href="../navbar/">Default</a></li>
				            <li><a href="../navbar-static-top/">Static top</a></li>
				            <li class="dropdown">
				              <a data-target="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="dmenu"><?php echo $username;?> <span class="caret"></span></a>
				              <ul class="dropdown-menu" aria-labeled-by="dmenu">
				                <li><a href="#">Profile</a></li>
				                <li><a href="#">Settings</a></li>
				                <li><a href="#">Help</a></li>
				                <li><a href=<?php echo base_url('auth/logout');?>>Logout <span class="glyphicon glyphicon-off pull-right"></span></a></li>
				              </ul>
				            </li>
			          </ul>
					</div>
				</nav>-->



<!--<ul class="nav side-menu panel-group" style id="accordion" role="tablist" aria-multiselect="true">
		            			<li class=""><a><span class="glyphicon glyphicon-home"></span>	Home</a></li>
		            			<li class="" role="tab" id="user_tab">
		            				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#user_menu" aria-expanded="true" aria-controls="user_menu">
		            					<span class="glyphicon glyphicon-user"></span>	User <span class="glyphicon glyphicon-chevron-down pull-right"></span>
		            				</a>
		            			<ul id="user_menu" class="nav child_menu list-group collapse in" role="tabpanel" aria-labeledby="user_tab">
		            					<li>Create User</li>
		            					<li>View Users</li>
		            				</ul>
		            			</li>
		            			<li></li>
		            			<li></li> 
		            		</ul>-->







	
<br/>

   <script type="text/javascript" src="<?php echo base_url(); ?>dist/js/jquery/jquery.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>dist/js/bootstrap/bootstrap.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>dist/js/custom.min.js"></script>
</body>
</html>
<?php
}
	
	else {
		
		//echo 'No Session';
		header("location:".base_url("Auth/login"));
	}

?>