<!doctype html>
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php echo $page_title; ?>| ADMINISTRATION | AREN | </title>
  <meta name="description" content="AREN ">
  <meta name="author" content="Cindy Leschaud | DesignPond">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  
  <link rel="stylesheet" href="<?php echo base_url();?>font/stylesheet.css">
  <!--[if lte IE 9]> <script type="text/javascript" src="<?php echo base_url();?>js/html5-ie.js"></script><![endif]-->
  <!--[if IE 8]><link rel="stylesheet" href="<?php echo base_url();?>css/ie.css" type="text/css" media="screen" /><![endif]-->
  <link rel="stylesheet" href="<?php echo base_url();?>css/1140.css" type="text/css" media="screen, projection" />
  <link rel="stylesheet" href="<?php echo base_url();?>css/styles.css">
   <link rel="stylesheet" href="<?php echo base_url();?>css/admin.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/form.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/table.css">
  <link type="text/css" href="<?php echo base_url();?>css/smoothness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />	
  <link type="text/css" href="<?php echo base_url();?>css/ui-lightness/jquery-ui-1.8.18.custom.css" rel="stylesheet" />	
  <link rel="stylesheet" media="screen and (max-width: 1140px)" href="<?php echo base_url();?>css/smallscreen.css" type="text/css" />
  <!-- -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>js/jquery-ui-1.8.16.custom.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/tiny_mce/tiny_mce.js" ></script>
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
	function deletechecked(message)
	{
    var answer = confirm(message)
   		 if (answer){
       		 document.messages.submit();
        		return false; // This line added
    	}    
   		 return false;  
		}  
	
	$(document).ready(function(){
	///////
		$(".formContact").validate();
		$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
	
	
	///////	
	});
	</script> 
</head>

<body onload="initialize()">

<div id="bgheaderAdmin"></div>
<div class="container">
<div class="row all" role="main">
   <header id="headerAdmin">
   		<h1 class="fivecol"><a class="logoAdmin" href="<?php echo base_url();?>">
   			<img src="<?php echo base_url();?>images/logoAdmin.png" alt="logo"></a>
   		</h1>
   		<nav id="navAdmin" class="sevencol last">
   			<ul id="menuAdmin">
   				<li><a class="<?php  if ($titlepage == 'accueil'){echo 'current';}  ?>" href="<?php echo base_url();?>index.php/admin">
   				Accueil</a></li>
   				<li><a href="<?php echo base_url();?>">
   				Retour au site</a></li>
   				<li><a class="<?php  if ($titlepage == 'news'){echo 'current';}  ?>" href="<?php echo base_url();?>index.php/site/news">
   				Déconnexion</a></li>
   			</ul>
   		</nav>
   </header>  
