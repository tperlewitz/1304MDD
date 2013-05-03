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
<!-- formated from a tmplate from freecsstemplates.org this uses the sidebar and main channel -->
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
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="page-content">
					<div id="content">
					<?php echo $content ?>
						
						<div style="clear: both;">&nbsp;</div>
					</div>
					<!-- end #content -->
					<div id="sidebar">
						<ul>
							<li>
								<h2>Who We Are</h2>
								<p>TuneGenius is a web application that allows aspiring young music writers the chance to prove they have a real voice on the music</p>
							</li>
							<li>
								<h2>Why We Started</h2>
								<p>Rarely are people allowed to showcase their talent in a setting that really pits them against one another. Disagree with a user? Make a comment and realy stand behind it! We want authors who don't troll. These are passionate individuals with a goal of making great content.</p>
							</li>
							<li>
								<h2>Where Do I Start</h2>
								<p>Now that you are signed in, get writing! Pick any album, single, EP, mashup you want. It can be decades old or not out yet, provided you have those tunes or can get those tunes. We don't want to waste our communities time reading nonsense. Then get writing and prove you are a TuneGenius!</p>
							</li>
						</ul>
					</div>
					<!-- end #sidebar -->
					
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
<?php echo View::forge('includes/footer'); ?>
