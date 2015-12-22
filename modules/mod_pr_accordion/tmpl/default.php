<?php 
/*
 * @package Joomla 3.2.2
 * @copyright Copyright (C) 2014 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
	*
 * @module Pranon -PR Accordion
 * @copyright Copyright (C) Pranon www.pranon.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

defined('_JEXEC') or die;
$document = JFactory::getDocument();

?>
<?php

 $sl_image="";$sl_text="";

if(($params->get('heading'))!=null){
            $heading= $params->get('heading');}
			else {
			$heading='';
			}
 
 if(($params->get('sl_image'))!=null){
            $sl_image= $params->get('sl_image');}
			else {
			$sl_image='';
			}
 
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
			
if(($params->get('sl_text8'))!=null){
            $sl_text8= $params->get('sl_text8');}
			else {
			$sl_text8='';
			}
			
if(($params->get('sl_text9'))!=null){
            $sl_text9= $params->get('sl_text9');}
			else {
			$sl_text9='';
			}
			
if(($params->get('sl_text10'))!=null){
            $sl_text10= $params->get('sl_text10');}
			else {
			$sl_text10='';
			}
			
if(($params->get('sl_text11'))!=null){
            $sl_text11= $params->get('sl_text11');}
			else {
			$sl_text11='';
			}

if(($params->get('sl_text12'))!=null){
            $sl_text12= $params->get('sl_text12');}
			else {
			$sl_text12='';
			}
			


?>





<!-- Iphone images -->
				<div class="w-iphone animated" data-animation="fadeInLeft" data-animation-delay="0">
					<img src="<?php echo $sl_image; ?>" alt="wisten">
				</div>
				
				<!-- accordion menu -->
				<div class="accordion" id="accordion2">
				
					<?php if($heading!=""){?>
					<div class="accordion-head"><?php echo $heading; ?></div>
					
					<?php } ?>
					
					  <!-- accordion menu 1 -->
					  <?php if($sl_text1!=""){ ?>
					  <div class="panel">
						<div class="accordion-heading">
						  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#coll-one">
						  
						  <i class="fa fa-check"></i>
							<?php echo $sl_text1; ?>
						</a>
						</div>
						<div id="coll-one" class="accordion-body collapse in">
						<div class="accordion-inner">
							<?php echo $sl_text2; ?>
						</div>
						</div>
					  </div>
					  <?php } ?>
					  
					  
					  <!-- accordion menu 2 -->
					  <?php if($sl_text3!=""){ ?>
					  <div class="panel">
						<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#coll-two">
						<i class="fa fa-check"></i>
						<?php echo $sl_text3; ?>
						</a>
						</div>
						<div id="coll-two" class="accordion-body collapse">
						<div class="accordion-inner">
						<?php echo $sl_text4; ?>
						</div>
						</div>
					  </div>
					  <?php } ?>
					  
					  
					   <!-- accordion menu 3 -->
					   <?php if($sl_text5!=""){ ?>
					   <div class="panel">
						<div class="accordion-heading">
						  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#coll-three">
						  
							<i class="fa fa-check"></i>
						<?php echo $sl_text5; ?>
						</a>
						</div>
						<div id="coll-three" class="accordion-body collapse">
							<div class="accordion-inner">
							<?php echo $sl_text6; ?>
							</div>
						</div>
					  </div>
					  <?php } ?>
					  
					   <!-- accordion menu 4 -->
					   <?php if($sl_text7!=""){ ?>
					   <div class="panel">
						<div class="accordion-heading">
						  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#coll-four">
						  
							<i class="fa fa-check"></i>
							<?php echo $sl_text7; ?>
							</a>
						</div>
						<div id="coll-four" class="accordion-body collapse">
						<div class="accordion-inner">
						<?php echo $sl_text8; ?>
						</div>
						</div>
					  </div>
					  <?php } ?>
					  
					  <!-- accordion menu 5 -->
					  <?php if($sl_text9!=""){ ?>
					   <div class="panel">
						<div class="accordion-heading">
						  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#coll-five">
						  
							<i class="fa fa-check"></i>
							<?php echo $sl_text9; ?>
							</a>
						</div>
						<div id="coll-five" class="accordion-body collapse">
						<div class="accordion-inner">
						<?php echo $sl_text10; ?>
						</div>
						</div>
					  </div>
					  <?php } ?>
					  
					  <!-- accordion menu 6 -->
					  <?php if($sl_text11!=""){ ?>
					   <div class="panel">
						<div class="accordion-heading">
						  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#coll-six">
						  
							<i class="fa fa-check"></i>
							<?php echo $sl_text11; ?>
							</a>
						</div>
						<div id="coll-six" class="accordion-body collapse">
						<div class="accordion-inner">
						<?php echo $sl_text12; ?>
						</div>
						</div>
					  </div>
					  <?php } ?>
					
				</div>











