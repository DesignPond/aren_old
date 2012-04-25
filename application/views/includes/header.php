<!doctype html>
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php echo $page_title; ?> | AREN | </title>
  <meta name="description" content="AREN ">
  <meta name="author" content="Cindy Leschaud | DesignPond">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  
  <link rel="stylesheet" href="<?php echo base_url();?>font/stylesheet.css">
  <!--[if lte IE 9]> <script type="text/javascript" src="<?php echo base_url();?>js/html5-ie.js"></script><![endif]-->
  <!--[if IE 8]><link rel="stylesheet" href="<?php echo base_url();?>css/ie.css" type="text/css" media="screen" /><![endif]-->
  <link rel="stylesheet" href="<?php echo base_url();?>css/1140.css" type="text/css" media="screen, projection" />
  <link rel="stylesheet" href="<?php echo base_url();?>css/styles.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/form.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/table.css">
  <link type="text/css" href="<?php echo base_url();?>css/smoothness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />	
  <link rel="stylesheet" href="<?php echo base_url();?>css/smallscreen.css" type="text/css" />
  <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1024px)" 
  href="<?php echo base_url();?>css/ipad.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>js/jquery-ui-1.8.16.custom.min.js"></script>
  <script src="<?php echo base_url();?>js/respond.min.js"></script>
  <!--[if lte IE 8]>
   <script type="text/javascript" src="<?php echo base_url();?>js/selectivizr.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>js/roundies.js"></script>
  <![endif]--> 
  <script src="<?php echo base_url();?>js/jquery.validate.min.js" type="text/javascript"></script>
  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC6vx7nmKzTMxYre4ShGeEDIiQ2AzbFwws&sensor=false"> </script>
  <script src="<?php echo base_url();?>js/script.js"></script>
  <?php 
  	if (isset($map['js']))
 	 {
   	 echo $map['js']; 
  	}
  ?>
	<script>
	$(document).ready(function(){
		$("#formContact").validate();
    
	});
	</script> 
</head>

<body onload="initialize()">

<div id="bgheader"></div>
<div id="bgshadow"></div>
<div class="container">
<div class="row" role="main">
   <header>
   	<h1 class="mainLogo">
   	<a class="logo" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logo.png" alt="logo"></a></h1>
   		<nav class="last">
   			<ul id="menu">
   				<li><a class="<?php  if ($titlepage == 'accueil'){echo 'current';}  ?>" href="<?php echo base_url();?>">
   				Accueil</a></li>
   				<li><a class="<?php  if ($titlepage == 'news'){echo 'current';}  ?>" href="<?php echo base_url();?>index.php/site/news">
   				News</a></li>
   				<li class="drop"><a class="<?php  if ($titlepage == 'presentation'){echo 'current';}  ?>" href="<?php echo base_url();?>index.php/site/presentation">
   				Présentation</a>
   				</li>
   				<li><a class="<?php  if ($titlepage == 'prestation'){echo 'current';}  ?>" href="<?php echo base_url();?>index.php/prestation">
   				Prestations</a></li>
   				<li><a class="<?php  if ($titlepage == 'liens'){echo 'current';}  ?>" href="<?php echo base_url();?>index.php/site/liens">
   				Liens utiles</a></li>
   				<li class="noMarge"><a class="<?php  if ($titlepage == 'contact'){echo 'current';}  ?>" href="<?php echo base_url();?>index.php/site/contact">
   				Contact</a></li>
   			</ul>
   		</nav>
   </header>  


