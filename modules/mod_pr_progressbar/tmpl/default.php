<?php 
/*
 * @package Joomla 3.1.1
 * @copyright Copyright (C) 2013 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
	*
 * @module Pranon -PR Progressbar
 * @copyright Copyright (C) Pranon www.pranon.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

defined('_JEXEC') or die;
$document = JFactory::getDocument();
//$document->addStyleSheet(JURI::root(true).'/modules/mod_pr_progressbar/css/'.$params->get('choose_style'));
?> 


<?php
$style1=$params->get('choose_style');
 $pv1="";$ct1="";$c1='#000';
 if(($params->get('pv1'))!=null){
            $pv1= $params->get('pv1');}
  if(($params->get('ct1'))!=null){
            $ct1= $params->get('ct1');}	
  if(($params->get('c1'))!=null){
            $c1= $params->get('c1');}		

$pv2="";$ct2="";$c2='#ff0';
 if(($params->get('pv2'))!=null){
            $pv2= $params->get('pv2');}
  if(($params->get('ct2'))!=null){
            $ct2= $params->get('ct2');}	
  if(($params->get('c2'))!=null){
            $c2= $params->get('c2');}	
			
			$pv3="";$ct3="";$c3='#ff0';
 if(($params->get('pv3'))!=null){
            $pv3= $params->get('pv3');}
  if(($params->get('ct3'))!=null){
            $ct3= $params->get('ct3');}	
  if(($params->get('c3'))!=null){
            $c3= $params->get('c3');}	
			
			$pv4="";$ct4="";$c4='#ff0';
 if(($params->get('pv4'))!=null){
            $pv4= $params->get('pv4');}
  if(($params->get('ct4'))!=null){
            $ct4= $params->get('ct4');}	
  if(($params->get('c4'))!=null){
            $c4= $params->get('c4');}	
			
			$pv5="";$ct5="";$c5='#ff0';
 if(($params->get('pv5'))!=null){
            $pv5= $params->get('pv5');}
  if(($params->get('ct5'))!=null){
            $ct5= $params->get('ct5');}	
  if(($params->get('c5'))!=null){
            $c5= $params->get('c5');}	
			
			$pv6="";$ct6="";$c6='#ff0';
 if(($params->get('pv6'))!=null){
            $pv6= $params->get('pv6');}
  if(($params->get('ct6'))!=null){
            $ct6= $params->get('ct6');}	
  if(($params->get('c6'))!=null){
            $c6= $params->get('c6');}	
			
			$pv7="";$ct7="";$c7='#ff0';
 if(($params->get('pv7'))!=null){
            $pv7= $params->get('pv7');}
  if(($params->get('ct7'))!=null){
            $ct7= $params->get('ct7');}	
  if(($params->get('c7'))!=null){
            $c7= $params->get('c7');}	
			
			$pv8="";$ct8="";$c8='#ff0';
 if(($params->get('pv8'))!=null){
            $pv8= $params->get('pv8');}
  if(($params->get('ct8'))!=null){
            $ct8= $params->get('ct8');}	
  if(($params->get('c8'))!=null){
            $c8= $params->get('c8');}	
			
			$pv9="";$ct9="";$c9='#ff0';
 if(($params->get('pv9'))!=null){
            $pv9= $params->get('pv9');}
  if(($params->get('ct9'))!=null){
            $ct9= $params->get('ct9');}	
  if(($params->get('c9'))!=null){
            $c9= $params->get('c9');}	
			
			$pv10="";$ct10="";$c10='#ff0';
 if(($params->get('pv10'))!=null){
            $pv10= $params->get('pv10');}
  if(($params->get('ct10'))!=null){
            $ct10= $params->get('ct10');}	
  if(($params->get('c10'))!=null){
            $c10= $params->get('c10');}	
			
			
			
			
?>



<?php if($style1=="style_1") { ?>
<div class="head"><?php echo $params->get('desc');?></div>
						
<div class="Progress-content">				
                <?php if(($pv1!="")&&($ct1!="")){?>
				<div class="progress-bars">
								<!-- Progress Texts -->
								<div class="progress-texts">
									<span class="progress-name"><?php echo $ct1; ?></span>
									<span class="progress-value"><?php echo $pv1; ?></span>
									<div class="clear"></div>
								</div>
								
								<!-- Progress Tables -->
								<div class="progress progress-striped active">
								  <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $pv1;?>; background-color:<?php echo $c1;?>"></div>
								</div>
				</div>
				<?php } ?>

				<?php if(($pv2!="")&&($ct2!="")){?>
				<div class="progress-bars">
								<!-- Progress Texts -->
								<div class="progress-texts">
									<span class="progress-name"><?php echo $ct2; ?></span>
									<span class="progress-value"><?php echo $pv2; ?></span>
									<div class="clear"></div>
								</div>
								
								<!-- Progress Tables -->
								<div class="progress progress-striped active">
								  <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $pv2;?>; background-color:<?php echo $c2; ?>"></div>
								</div>
				</div>
				<?php } ?>
				
				<?php if(($pv3!="")&&($ct3!="")){?>
				<div class="progress-bars">
								<!-- Progress Texts -->
								<div class="progress-texts">
									<span class="progress-name"><?php echo $ct3; ?></span>
									<span class="progress-value"><?php echo $pv3; ?></span>
									<div class="clear"></div>
								</div>
								
								<!-- Progress Tables -->
								<div class="progress progress-striped active">
								  <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $pv3;?>; background-color:<?php echo $c3; ?>"></div>
								</div>
				</div>
				<?php } ?>
				
				<?php if(($pv4!="")&&($ct4!="")){?>
				<div class="progress-bars">
								<!-- Progress Texts -->
								<div class="progress-texts">
									<span class="progress-name"><?php echo $ct4; ?></span>
									<span class="progress-value"><?php echo $pv4; ?></span>
									<div class="clear"></div>
								</div>
								
								<!-- Progress Tables -->
								<div class="progress progress-striped active">
								  <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $pv4;?>; background-color:<?php echo $c4; ?>"></div>
								</div>
				</div>
				<?php } ?>
				
				<?php if(($pv5!="")&&($ct5!="")){?>
				<div class="progress-bars">
								<!-- Progress Texts -->
								<div class="progress-texts">
									<span class="progress-name"><?php echo $ct5; ?></span>
									<span class="progress-value"><?php echo $pv5; ?></span>
									<div class="clear"></div>
								</div>
								
								<!-- Progress Tables -->
								<div class="progress progress-striped active">
								  <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $pv5;?>; background-color:<?php echo $c5; ?>"></div>
								</div>
				</div>
				<?php } ?>
				
				<?php if(($pv6!="")&&($ct6!="")){?>
				<div class="progress-bars">
								<!-- Progress Texts -->
								<div class="progress-texts">
									<span class="progress-name"><?php echo $ct6; ?></span>
									<span class="progress-value"><?php echo $pv6; ?></span>
									<div class="clear"></div>
								</div>
								
								<!-- Progress Tables -->
								<div class="progress progress-striped active">
								  <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $pv6;?>; background-color:<?php echo $c6; ?>"></div>
								</div>
				</div>
				<?php } ?>
				
				<?php if(($pv7!="")&&($ct7!="")){?>
				<div class="progress-bars">
								<!-- Progress Texts -->
								<div class="progress-texts">
									<span class="progress-name"><?php echo $ct7; ?></span>
									<span class="progress-value"><?php echo $pv7; ?></span>
									<div class="clear"></div>
								</div>
								
								<!-- Progress Tables -->
								<div class="progress progress-striped active">
								  <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $pv7;?>; background-color:<?php echo $c7; ?>"></div>
								</div>
				</div>
				<?php } ?>
				
				<?php if(($pv8!="")&&($ct8!="")){?>
				<div class="progress-bars">
								<!-- Progress Texts -->
								<div class="progress-texts">
									<span class="progress-name"><?php echo $ct8; ?></span>
									<span class="progress-value"><?php echo $pv8; ?></span>
									<div class="clear"></div>
								</div>
								
								<!-- Progress Tables -->
								<div class="progress progress-striped active">
								  <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $pv8;?>; background-color:<?php echo $c8; ?>"></div>
								</div>
				</div>
				<?php } ?>
				
				<?php if(($pv9!="")&&($ct9!="")){?>
				<div class="progress-bars">
								<!-- Progress Texts -->
								<div class="progress-texts">
									<span class="progress-name"><?php echo $ct9; ?></span>
									<span class="progress-value"><?php echo $pv9; ?></span>
									<div class="clear"></div>
								</div>
								
								<!-- Progress Tables -->
								<div class="progress progress-striped active">
								  <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $pv9;?>; background-color:<?php echo $c9; ?>"></div>
								</div>
				</div>
				<?php } ?>
				
				<?php if(($pv10!="")&&($ct10!="")){?>
				<div class="progress-bars">
								<!-- Progress Texts -->
								<div class="progress-texts">
									<span class="progress-name"><?php echo $ct10; ?></span>
									<span class="progress-value"><?php echo $pv10; ?></span>
									<div class="clear"></div>
								</div>
								
								<!-- Progress Tables -->
								<div class="progress progress-striped active">
								  <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $pv10;?>; background-color:<?php echo $c10; ?>"></div>
								</div>
				</div>
				<?php } ?>
	
</div>
				
<?php } else { ?>		 
				 
				 
				
		<!-- About Extended -->
		<div class="full-width no-padding ">

			<div class="full-width about-extended">

				<!-- Header -->
				<div class="header">
					<?php echo $params->get('desc');?>
				</div>
				
				<!-- Second Header -->
				<div class="page-desc">
					<?php echo $params->get('intro');?>
				</div>

			</div>

			<!-- Company Facts -->
			<div class="inner company-facts">
				<?php if(($pv1!="")&&($ct1!="")){?>
				<div class="col-xs-3 facts animated" data-animation="fadeIn" data-animation-delay="200" data-perc="<?php echo $pv1; ?>">
					<!-- Nunber -->
					<h1 class="factor" style="color:<?php echo $c1; ?>"></h1>
					<!-- Fact -->
					<p style="color:<?php echo $c1; ?>"><?php echo $ct1; ?></p>
				</div>
				<?php } ?>
				
				<?php if(($pv2!="")&&($ct2!="")){?>
				<div class="col-xs-3 facts animated" data-animation="fadeIn" data-animation-delay="200" data-perc="<?php echo $pv2; ?>">
					<!-- Nunber -->
					<h1 class="factor" style="color:<?php echo $c2; ?>"></h1>
					<!-- Fact -->
					<p style="color:<?php echo $c2; ?>"><?php echo $ct2; ?></p>
				</div>
				<?php } ?>
				
				<?php if(($pv3!="")&&($ct3!="")){?>
				<div class="col-xs-3 facts animated" data-animation="fadeIn" data-animation-delay="200" data-perc="<?php echo $pv3; ?>">
					<!-- Nunber -->
					<h1 class="factor" style="color:<?php echo $c3; ?>"></h1>
					<!-- Fact -->
					<p style="color:<?php echo $c3; ?>"><?php echo $ct3; ?></p>
				</div>
				<?php } ?>
				
				<?php if(($pv4!="")&&($ct4!="")){?>
				<div class="col-xs-3 facts animated" data-animation="fadeIn" data-animation-delay="200" data-perc="<?php echo $pv4; ?>">
					<!-- Nunber -->
					<h1 class="factor" style="color:<?php echo $c4; ?>"></h1>
					<!-- Fact -->
					<p style="color:<?php echo $c4; ?>"><?php echo $ct4; ?></p>
				</div>
				<?php } ?>
				
				<?php if(($pv5!="")&&($ct5!="")){?>
				<div class="col-xs-3 facts animated" data-animation="fadeIn" data-animation-delay="200" data-perc="<?php echo $pv5; ?>">
					<!-- Nunber -->
					<h1 class="factor" style="color:<?php echo $c5; ?>"></h1>
					<!-- Fact -->
					<p style="color:<?php echo $c5; ?>"><?php echo $ct5; ?></p>
				</div>
				<?php } ?>
				
				<?php if(($pv6!="")&&($ct6!="")){?>
				<div class="col-xs-3 facts animated" data-animation="fadeIn" data-animation-delay="200" data-perc="<?php echo $pv6; ?>">
					<!-- Nunber -->
					<h1 class="factor" style="color:<?php echo $c6; ?>"></h1>
					<!-- Fact -->
					<p style="color:<?php echo $c6; ?>"><?php echo $ct6; ?></p>
				</div>
				<?php } ?>
				
				<?php if(($pv7!="")&&($ct7!="")){?>
				<div class="col-xs-3 facts animated" data-animation="fadeIn" data-animation-delay="200" data-perc="<?php echo $pv7; ?>">
					<!-- Nunber -->
					<h1 class="factor" style="color:<?php echo $c7; ?>"></h1>
					<!-- Fact -->
					<p style="color:<?php echo $c7; ?>"><?php echo $ct7; ?></p>
				</div>
				<?php } ?>
				
				<?php if(($pv8!="")&&($ct8!="")){?>
				<div class="col-xs-3 facts animated" data-animation="fadeIn" data-animation-delay="200" data-perc="<?php echo $pv8; ?>">
					<!-- Nunber -->
					<h1 class="factor" style="color:<?php echo $c8; ?>"></h1>
					<!-- Fact -->
					<p style="color:<?php echo $c8; ?>"><?php echo $ct8; ?></p>
				</div>
				<?php } ?>
				
				<?php if(($pv9!="")&&($ct9!="")){?>
				<div class="col-xs-3 facts animated" data-animation="fadeIn" data-animation-delay="200" data-perc="<?php echo $pv9; ?>">
					<!-- Nunber -->
					<h1 class="factor" style="color:<?php echo $c9; ?>"></h1>
					<!-- Fact -->
					<p style="color:<?php echo $c9; ?>"><?php echo $ct9; ?></p>
				</div>
				<?php } ?>
				
				
				
				<?php if(($pv10!="")&&($ct10!="")){?>
				<div class="col-xs-3 facts animated" data-animation="fadeIn" data-animation-delay="200" data-perc="<?php echo $pv10; ?>">
					<!-- Nunber -->
					<h1 class="factor" style="color:<?php echo $c10; ?>"></h1>
					<!-- Fact -->
					<p style="color:<?php echo $c10; ?>"><?php echo $ct10; ?></p>
				</div>
				<?php } ?>

				

				<div class="clear"></div>
			</div>

		</div>
		
			
			<?php } ?>
            		 
				 
				 
	