<!doctype html>
<?php echo $this->Html->charset(); ?>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Groupin - <?php echo $title_for_layout; ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">		
	<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
	<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  	<?php 
		echo $this->Html->css('960'); 
		echo $this->Html->css('style'); 
		echo $this->Html->css('facebox/facebox'); 
  	?>

	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->script('jquery-1.6.2.min');
		echo $this->Html->script('modernizr-2.0.6.min');
		echo $this->Html->script('respond/respond.min');			   // enable media queries for old browsers
		echo $scripts_for_layout;
	?>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<header id="header" class="">
		<?php echo $this->element('header'); ?>
	</header>
  <div class="container_16">
	<div id="main" role="main">
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>	
    </div>
    <footer class="grid_16">
		<?php echo $this->element('footer'); ?>
    </footer>
  </div> <!--! end of #container -->
<!--
<div class="take_a_tour">
	<h1>Take a feature tour...</h1>
</div>
-->
	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<!-- <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script> -->
	<?php echo $this->Html->script('facebox/facebox'); ?>

	<?php echo $this->Html->script('scripts'); ?>
	<?php echo $this->Html->script('google_analytics'); ?>
	<?php //echo $this->element('sql_dump'); ?>  
</body>
</html>
