<?php 
/*
 * @package Joomla 3.2.2
 * @copyright Copyright (C) 2013 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
	*
 * @module Pranon -PR Contentshow
 * @copyright Copyright (C) Pranon www.pranon.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

defined('_JEXEC') or die;
$document = JFactory::getDocument();
//$document->addStyleSheet(JURI::root(true).'/modules/mod_pr_slider/css/slide-style.css');


//$document->addStyleSheet(JURI::root(true).'/modules/mod_pr_slider/css/'.$params->get('choose_style'));
$document->addscript(JURI::root(true).'/modules/mod_pr_slider/js/jquery.mb.YTPlayer.js');



?>
<?php
$style=$params->get('choose_style');
 $sl_image="";$sl_text="";
 if(($params->get('sl_image'))!=null){
            $sl_image= $params->get('sl_image');}
 if(($params->get('sl_text1'))!=null){
            $sl_text1= $params->get('sl_text1');}
			else {
			$sl_text1='';
			}
if(($params->get('sl_text2'))!=null){
            $sl_text2= $params->get('sl_text2');}
			else {
			$sl_text2='';
			}
if(($params->get('sl_text3'))!=null){
            $sl_text3= $params->get('sl_text3');}
			else {
			$sl_text3='';
			}
if(($params->get('sl_text4'))!=null){
            $sl_text4= $params->get('sl_text4');}
			else {
			$sl_text4='';
			}
if(($params->get('sl_image'))!=null){
            $sl_image= $params->get('sl_image');}
			else {
			$sl_image='';
			}
			
if(($params->get('sl_image1'))!=null){
            $sl_image1= $params->get('sl_image1');}
			else {
			$sl_image1='';
			}
			
if(($params->get('sl_image2'))!=null){
            $sl_image2= $params->get('sl_image2');}
			else {
			$sl_image2='';
			}
if(($params->get('sl_image3'))!=null){
            $sl_image3= $params->get('sl_image3');}
			else {
			$sl_image3='';
			}
if(($params->get('sl_image4'))!=null){
            $sl_image4= $params->get('sl_image4');}
			else {
			$sl_image4='';
			}
if(($params->get('sl_image5'))!=null){
            $sl_image5= $params->get('sl_image5');}
			else {
			$sl_image5='';
			}
if(($params->get('sl_image6'))!=null){
            $sl_image6= $params->get('sl_image6');}
			else {
			$sl_image6='';
			}
if(($params->get('sl_image7'))!=null){
            $sl_image7= $params->get('sl_image7');}
			else {
			$sl_image7='';
			}
if(($params->get('sl_image8'))!=null){
            $sl_image8= $params->get('sl_image8');}
			else {
			$sl_image8='';
			}
			
if(($params->get('sl_text5'))!=null){
            $sl_text5= $params->get('sl_text5');}
			else {
			$sl_text5='';
			}
if(($params->get('sl_text6'))!=null){
            $sl_text6= $params->get('sl_text6');}
			else {
			$sl_text6='';
			}
if(($params->get('sl_text7'))!=null){
            $sl_text7= $params->get('sl_text7');}
			else {
			$sl_text7='';
			}
			
if(($params->get('video1'))!=null){
            $video1= $params->get('video1');}
			else {
			$video1='';
			}

?>
<?php  if($style=="single_image"){ ?>

<!-- Home Section -->
	<section id="home" class="nav-link">
	
		<!-- Slides Div -->
		<div id="slides" class="pattern">

			<!-- Pattern -->
			<?php if ($sl_image!="") { ?>
			 <div class="home-pattern-style" style="background: url(<?php echo $sl_image; ?>) repeat; width: 100%; height: 100%;"></div>
			 <?php } ?>
			 <!-- End Pattern -->

		</div>
		<!-- End Slides Div -->
		
		<!-- Main - Text Slide -->
		<div class=" main">
			
			<!-- Text Slider -->
			<div class="flexslider home-slider">
			
				<!-- Text Slides -->
				<ul class="home-slides">
					<?php if ($sl_text1!="") { ?>
					<li><?php echo $sl_text1; ?></li>
					<?php } ?>
					<?php if ($sl_text2!="") { ?>
					<li><?php echo $sl_text2; ?></li>
					<?php } ?>
					<?php if ($sl_text3!="") { ?>
					<li><?php echo $sl_text3; ?></li>
					<?php } ?>
					<?php if ($sl_text4!="") { ?>
					<li><?php echo $sl_text4; ?></li>
					<?php } ?>
					<?php if ($sl_text5!="") { ?>
					<li><?php echo $sl_text5; ?></li>
					<?php } ?>
					<?php if ($sl_text6!="") { ?>
					<li><?php echo $sl_text6; ?></li>
					<?php } ?>
				</ul>
				<!-- End Text Slides -->
				
				<div class="clear"></div>
				
			</div>

			<!-- Home Description -->
			<?php if ($sl_text7!="") { ?>
			<div class="home-desc"><?php echo $sl_text7; ?></div>
			<?php } ?>
			<!-- End Home Description -->
			
			<!-- Home Button -->
			<a class="scroll home-button" href="#about">Get Started</a>
			<!-- End Home Button -->
			
		</div>
		<!-- End Main -->
		
	</section>
	<!-- End Home Section -->      
<?php }   	elseif ($style=="multi_images") { ?>


<!-- Home Section -->
	<section id="home" class="nav-link">
	
		<!-- Slider -->
		<div id="slides">
			<div class="slides-container">
			
			<!-- Slider Images -->
			<?php if ($sl_image1!="") { ?>
			 <div class="image1pattern"style="background: url(<?php echo $sl_image1; ?>) center fixed;"></div>
			<?php } ?>
			<?php if ($sl_image2!="") { ?>
			 <div class="image1pattern"style="background: url(<?php echo $sl_image2; ?>) center fixed;"></div>
			<?php } ?>
			<?php if ($sl_image3!="") { ?>
			 <div class="image1pattern"style="background: url(<?php echo $sl_image3; ?>) center fixed;"></div>
			<?php } ?>
			<?php if ($sl_image4!="") { ?>
			 <div class="image1pattern"style="background: url(<?php echo $sl_image4; ?>) center fixed;"></div>
			<?php } ?>
			<?php if ($sl_image5!="") { ?>
			 <div class="image1pattern"style="background: url(<?php echo $sl_image5; ?>) center fixed;"></div>
			<?php } ?>
			<?php if ($sl_image6!="") { ?>
			 <div class="image1pattern"style="background: url(<?php echo $sl_image6; ?>) center fixed;"></div>
			<?php } ?>
			<?php if ($sl_image7!="") { ?>
			 <div class="image1pattern"style="background: url(<?php echo $sl_image7; ?>) center fixed;"></div>
			<?php } ?>
			<?php if ($sl_image8!="") { ?>
			 <div class="image1pattern"style="background: url(<?php echo $sl_image8; ?>) center fixed;"></div>
			<?php } ?>
			
			 
			 <!-- End Slider Images -->
			 
			</div>
			
			<!-- Slider Controls -->
			
			<nav class="slides-navigation">
			  <a href="#" class="next"></a>
			  <a href="#" class="prev"></a>
			</nav>
			 
			<!-- End Slider Controls -->
			
		</div>
		<!-- End Slider Images -->
		
		<!-- Main - Text Slide -->
		<div class=" main">
			
			<!-- Text Slider -->
			<div class="flexslider home-slider">
			
				<!-- Text Slides -->
				<ul class="home-slides">
					<?php if ($sl_text1!="") { ?>
					<li><?php echo $sl_text1; ?></li>
					<?php } ?>
					<?php if ($sl_text2!="") { ?>
					<li><?php echo $sl_text2; ?></li>
					<?php } ?>
					<?php if ($sl_text3!="") { ?>
					<li><?php echo $sl_text3; ?></li>
					<?php } ?>
					<?php if ($sl_text4!="") { ?>
					<li><?php echo $sl_text4; ?></li>
					<?php } ?>
					<?php if ($sl_text5!="") { ?>
					<li><?php echo $sl_text5; ?></li>
					<?php } ?>
					<?php if ($sl_text6!="") { ?>
					<li><?php echo $sl_text6; ?></li>
					<?php } ?>
				</ul>
				<!-- End Text Slides -->
				
				<div class="clear"></div>
				
			</div>

			<!-- Home Description -->
			<?php if ($sl_text7!="") { ?>
			<div class="home-desc"><?php echo $sl_text7; ?></div>
			<?php } ?>
			<!-- End Home Description -->
			
			<!-- Home Button -->
			<a class="scroll home-button" href="#about">Get Started</a>
			<!-- End Home Button -->
			
		</div>
		<!-- End Main -->
		
	</section>
	<!-- End Home Section -->      
<?php } else { ?>

<!-- Home Section -->
	<section id="home" class="nav-link">
	
		<!-- Video Pattern -->
	<div class="home-pattern"></div>
	
		<!-- Full Screen Video -->
		<div id="slides">
			<div class="slides-container">
			
			<!-- Video -->
			 <div id="P3" class="player video-container" data-property="{videoURL:'<?php echo $video1; ?>',containment:'#slides',autoPlay:true, mute:true, startAt:0, opacity:1}"></div>
			 <!-- End Video -->
			 
			</div>
			
		</div>
		
		<!-- Main - Text Slide -->
		<div class=" main">
			
			<!-- Text Slider -->
			<div class="flexslider home-slider">
			
				<!-- Text Slides -->
				<ul class="home-slides">
					<?php if ($sl_text1!="") { ?>
					<li><?php echo $sl_text1; ?></li>
					<?php } ?>
					<?php if ($sl_text2!="") { ?>
					<li><?php echo $sl_text2; ?></li>
					<?php } ?>
					<?php if ($sl_text3!="") { ?>
					<li><?php echo $sl_text3; ?></li>
					<?php } ?>
					<?php if ($sl_text4!="") { ?>
					<li><?php echo $sl_text4; ?></li>
					<?php } ?>
					<?php if ($sl_text5!="") { ?>
					<li><?php echo $sl_text5; ?></li>
					<?php } ?>
					<?php if ($sl_text6!="") { ?>
					<li><?php echo $sl_text6; ?></li>
					<?php } ?>
				</ul>
				<!-- End Text Slides -->
				
				<div class="clear"></div>
				
			</div>

			<!-- Home Description -->
			<?php if ($sl_text7!="") { ?>
			<div class="home-desc"><?php echo $sl_text7; ?></div>
			<?php } ?>
			<!-- End Home Description -->
			
			<!-- Home Button -->
			<a class="scroll home-button" href="#about">Get Started</a>
			<!-- End Home Button -->
			
		</div>
		<!-- End Main -->
		
	</section>
	<!-- End Home Section -->  
<script>
/* ==============================================
Video Script
=============================================== */

jQuery(function(){
            jQuery(".player").mb_YTPlayer();
		});	
		
</script>
<?php } ?>  
                   	
	
	

	