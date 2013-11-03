<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap31.css'); ?>
	<?php echo Asset::css('sb-admin.css'); ?>
	<?php echo Asset::css('b.css'); ?>
	
	<style>
		/* Padding to prevent content from scrolling behind top nav has to be added AFTER bootstrap css. */
		/* body { padding-top: 60px; } */
	</style>
	
</head>
<body class="blueGradient">
<div>

      <!-- Sidebar -->
      <nav class="navbar navbar-fixed-top" role="navigation" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color:#fff;" href="index.html">Bureaucracy</a>
        </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <!--
<ul class="nav navbar-nav side-nav">
            <li class="active"><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
            <li><a href="charts.html"><i class="icon-bar-chart"></i> Charts</a></li>
            <li><a href="tables.html"><i class="icon-table"></i> Tables</a></li>
            <li><a href="forms.html"><i class="icon-edit"></i> Forms</a></li>
            <li><a href="typography.html"><i class="icon-font"></i> Typography</a></li>
            <li><a href="bootstrap-elements.html"><i class="icon-desktop"></i> Bootstrap Elements</a></li>
            <li><a href="bootstrap-grid.html"><i class="icon-wrench"></i> Bootstrap Grid</a></li>
            <li><a href="blank-page.html"><i class="icon-file-alt"></i> Blank Page</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-collapse"></i> Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Dropdown Item</a></li>
                <li><a href="#">Another Item</a></li>
                <li><a href="#">Third Item</a></li>
                <li><a href="#">Last Item</a></li>
              </ul>
            </li>
          </ul>
-->

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#fff;"><i class="icon-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">7 New Messages</li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="icon-time"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="icon-time"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="icon-time"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li><a href="#">View Inbox <span class="badge">7</span></a></li>
              </ul>
            </li>
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#fff;"><i class="icon-bell-alt"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#fff;"><i class="icon-user"></i> Grant Elgin <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                <li><a href="#"><i class="icon-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="icon-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
      
<!--
<h1>Bureaucracy</h1>
<h2>Keeping track shouldn't be difficult</h2>
-->
	<div id="page-wrapper" class="container">
		<div class="span12">
			<!-- <h1><?php echo $title; ?></h1> 
			<hr>-->

<?php if (Session::get_flash('success')): ?>
			<div class="alert alert-success">
				<strong>Success</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
				</p>
			</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
			<div class="alert alert-error">
				<strong>Error</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
				</p>
			</div>
<?php endif; ?>
		</div>
		<div class="span12">
<?php echo $content; ?>
		</div>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<!-- <p>																			   -->
			<!--   <a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br> -->
			<!--   <small>Version: <?php echo e(Fuel::VERSION); ?></small>						   -->
			<!-- </p>																			   -->
		</footer>
	</div>
</body>
</html>
