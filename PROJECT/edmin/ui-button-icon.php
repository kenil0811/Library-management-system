<!DOCTYPE html>
<html lang="en">

<head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	 
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.php">
			  		Edmin
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav nav-icons">
						<li class="active"><a href="#">
							<i class="icon-envelope"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-eye-open"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-bar-chart"></i>
						</a></li>
					</ul>

					<form class="navbar-search pull-left input-append" action="#">
						<input type="text" class="span3">
						<button class="btn" type="button">
							<i class="icon-search"></i>
						</button>
					</form>
				
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Item No. 1</a></li>
								
								<li><a href="#">Don't Click</a></li>
								<li class="divider"></li>
								<li class="nav-header">Example Header</li>
								<li><a href="#">A Separated link</a></li>
															</ul>
						</li>
						
						<li><a href="#">
							Support
						</a></li>
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="images/user.png" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Your Profile</a></li>
								<li><a href="#">Edit Profile</a></li>
								<li><a href="#">Account Settings</a></li>
								<li class="divider"></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="index.php">
									<i class="menu-icon icon-dashboard"></i>
									Dashboard
								</a>
							</li>
							<li>
								<a href="activity.php">
									<i class="menu-icon icon-bullhorn"></i>
									News Feed
								</a>
							</li>
							<li>
								<a href="message.php">
									<i class="menu-icon icon-inbox"></i>
									Inbox
									<b class="label green pull-right">11</b>
								</a>
							</li>
							
							<li>
								<a href="task.php">
									<i class="menu-icon icon-tasks"></i>
									Tasks
									<b class="label orange pull-right">19</b>
								</a>
							</li>
						</ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.php"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.php"><i class="menu-icon icon-book"></i>Typography </a></li>
                                <li><a href="form.php"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                <li><a href="table.php"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="charts.php"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									More Pages
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="other-login.php">
											<i class="icon-inbox"></i>
											Login
										</a>
									</li>
									<li>
										<a href="other-user-profile.php">
											<i class="icon-inbox"></i>
											Profile
										</a>
									</li>
									<li>
										<a href="other-user-listing.php">
											<i class="icon-inbox"></i>
											All Users
										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="#">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="btn-controls">
							<div class="btn-box-row row-fluid">
								<a href="#" class="btn-box span3">
									<i class="icon-arrow-up"></i>
									<b>Big</b>
								</a>
								<a href="#" class="btn-box span3">
									<i class="icon-bell"></i>
									<b>Big</b>
								</a>
								<a href="#" class="btn-box span3">
									<i class="icon-screenshot"></i>
									<b>Big</b>
								</a>
								<a href="#" class="btn-box span3">
									<i class="icon-beaker"></i>
									<b>Big</b>
								</a>
							</div>

							<div class="btn-box-row row-fluid">
								<a href="#" class="btn-box big span4">
									<i class="icon-adjust"></i>
									<b>Bigger</b>
								</a>
								<a href="#" class="btn-box big span4">
									<i class="icon-briefcase"></i>
									<b>Bigger</b>
								</a>
								<a href="#" class="btn-box big span4">
									<i class="icon-gift"></i>
									<b>Bigger</b>
								</a>
							</div>

							<div class="btn-box-row row-fluid">
								<a href="#" class="btn-box small span2">
									<i class="icon-facebook"></i>
									<b>Small</b>
								</a>
								<a href="#" class="btn-box small span2">
									<i class="icon-ambulance"></i>
									<b>Small</b>
								</a>
								<a href="#" class="btn-box small span2">
									<i class="icon-search"></i>
									<b>Small</b>
								</a>
								<a href="#" class="btn-box small span2">
									<i class="icon-key"></i>
									<b>Small</b>
								</a>
								<a href="#" class="btn-box small span2">
									<i class="icon-zoom-in"></i>
									<b>Small</b>
								</a>
								<a href="#" class="btn-box small span2">
									<i class="icon-edit"></i>
									<b>Small</b>
								</a>
							</div>
						</div><!--/.btn-controls-->


						<div class="module">
							<div class="module-head">
								<h3>Buttons</h3>
							</div>
							<div class="module-body">
								<p>
									Button styles can be applied to anything with the <code>.btn</code> class applied. However, typically you'll want to apply these to only <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements for the best rendering.
								</p>
								<br />
								<table class="table table-bordered">
									<thead>
										<th>Button</th>
										<th>Standard</th>
										<th>Mini</th>
										<th>Small</th>
										<th>Large</th>
									</thead>
									<tbody>
										<tr>
											<td>Standard Button <br /> <code>.btn</code></td>
											<td><a class="btn">Button</a></td>
											<td><a class="btn btn-mini">Button</a></td>
											<td><a class="btn btn-small">Button</a></td>
											<td><a class="btn btn-large">Button Large</a></td>
										</tr>
										<tr>
											<td>Primary Button <br /> <code>.btn-primary</code></td>
											<td><a class="btn btn-primary">Button</a></td>
											<td><a class="btn btn-mini btn-primary">Button</a></td>
											<td><a class="btn btn-small btn-primary">Button</a></td>
											<td><a class="btn btn-large btn-primary">Button Large</a></td>
										</tr>
										<tr>
											<td>Info Button <br /> <code>.btn-info</code></td>
											<td><a class="btn btn-info">Button</a></td>
											<td><a class="btn btn-mini btn-info">Button</a></td>
											<td><a class="btn btn-small btn-info">Button</a></td>
											<td><a class="btn btn-large btn-info">Button Large</a></td>
										</tr>
										<tr>
											<td>Success Button <br /> <code>.btn-success</code></td>
											<td><a class="btn btn-success">Button</a></td>
											<td><a class="btn btn-mini btn-success">Button</a></td>
											<td><a class="btn btn-small btn-success">Button</a></td>
											<td><a class="btn btn-large btn-success">Button Large</a></td>
										</tr>
										<tr>
											<td>Warning Button <br /> <code>.btn-warning</code></td>
											<td><a class="btn btn-warning">Button</a></td>
											<td><a class="btn btn-mini btn-warning">Button</a></td>
											<td><a class="btn btn-small btn-warning">Button</a></td>
											<td><a class="btn btn-large btn-warning">Button Large</a></td>
										</tr>
										<tr>
											<td>Danger Button <br /> <code>.btn-danger</code></td>
											<td><a class="btn btn-danger">Button</a></td>
											<td><a class="btn btn-mini btn-danger">Button</a></td>
											<td><a class="btn btn-small btn-danger">Button</a></td>
											<td><a class="btn btn-large btn-danger">Button Large</a></td>
										</tr>
										<tr>
											<td>Inverse Button <br /> <code>.btn-inverse</code></td>
											<td><a class="btn btn-inverse">Button</a></td>
											<td><a class="btn btn-mini btn-inverse">Button</a></td>
											<td><a class="btn btn-small btn-inverse">Button</a></td>
											<td><a class="btn btn-large btn-inverse">Button Large</a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						
						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>


</body>