<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : ElegantBlue
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120108

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>TuneGenius - Prove You Really Know Your Tunes</title>
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<?php echo Asset::css('style.css') ?>
</head>
<body>
<div id="wrapper">
	<?php echo View::forge('includes/header'); ?>
	<!-- end #header -->
	<?php echo View::forge('includes/nav'); ?>
	
	<?php if (current_user){ ?>
	<p>
		Logged in as <?php echo Html::anchor('users/view/'.$current_user->id, $current_user->username) ?>
		(<?php echo Html::anchor('users/logout', 'Log out') ?>)
	</p>
<?php }else{ ?>
	<p><?php echo Html::anchor('users/login', 'Log in') ?></p>
<?php } ?>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="page-content">
					<div id="content">

						
						<div style="clear: both;">&nbsp;</div>
					</div>
					<!-- end #content -->
					
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
<?php echo View::forge('includes/footer'); ?>

