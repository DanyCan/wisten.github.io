<?php 
/*
 * @package Joomla 2.5
 * @copyright Copyright (C) 2012 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
	*
 * @module Pranon -PR PriceTable
 * @copyright Copyright (C) Pranon www.pranon.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */


defined('_JEXEC') or die;
$document = JFactory::getDocument();

$header1=$params->get('header_text1');
$text11=$params->get('col_1_row_1_text');
$text12=$params->get('col_1_row_2_text');
$text13=$params->get('col_1_row_3_text');
$text14=$params->get('col_1_row_4_text');
$text15=$params->get('col_1_row_5_text');
$text16=$params->get('col_1_row_6_text');
$text17=$params->get('col_1_row_7_text');
$text18=$params->get('col_1_row_8_text');
$text19=$params->get('col_1_row_9_text');
$text20=$params->get('col_1_row_10_text');

$header2=$params->get('header_text2');
$text21=$params->get('col_2_row_1_text');
$text22=$params->get('col_2_row_2_text');
$text23=$params->get('col_2_row_3_text');
$text24=$params->get('col_2_row_4_text');
$text25=$params->get('col_2_row_5_text');
$text26=$params->get('col_2_row_6_text');
$text27=$params->get('col_2_row_7_text');
$text28=$params->get('col_2_row_8_text');
$text29=$params->get('col_2_row_9_text');
$text30=$params->get('col_2_row_10_text');


$header3=$params->get('header_text3');
$text31=$params->get('col_3_row_1_text');
$text32=$params->get('col_3_row_2_text');
$text33=$params->get('col_3_row_3_text');
$text34=$params->get('col_3_row_4_text');
$text35=$params->get('col_3_row_5_text');
$text36=$params->get('col_3_row_6_text');
$text37=$params->get('col_3_row_7_text');
$text38=$params->get('col_3_row_8_text');
$text39=$params->get('col_3_row_9_text');
$text40=$params->get('col_3_row_10_text');

/*****  Table 4*****/
$header4=$params->get('header_text4');
$text41=$params->get('col_4_row_1_text');
$text42=$params->get('col_4_row_2_text');
$text43=$params->get('col_4_row_3_text');
$text44=$params->get('col_4_row_4_text');
$text45=$params->get('col_4_row_5_text');
$text46=$params->get('col_4_row_6_text');
$text47=$params->get('col_4_row_7_text');
$text48=$params->get('col_4_row_8_text');
$text49=$params->get('col_4_row_9_text');
$text50=$params->get('col_4_row_10_text');


/*****  Table 5*****/
$header5=$params->get('header_text5');
$text51=$params->get('col_5_row_1_text');
$text52=$params->get('col_5_row_2_text');
$text53=$params->get('col_5_row_3_text');
$text54=$params->get('col_5_row_4_text');
$text55=$params->get('col_5_row_5_text');
$text56=$params->get('col_5_row_6_text');
$text57=$params->get('col_5_row_7_text');
$text58=$params->get('col_5_row_8_text');
$text59=$params->get('col_5_row_9_text');
$text60=$params->get('col_5_row_10_text');

/*****  Table 6*****/
$header6=$params->get('header_text6');
$text61=$params->get('col_6_row_1_text');
$text62=$params->get('col_6_row_2_text');
$text63=$params->get('col_6_row_3_text');
$text64=$params->get('col_6_row_4_text');
$text65=$params->get('col_6_row_5_text');
$text66=$params->get('col_6_row_6_text');
$text67=$params->get('col_6_row_7_text');
$text68=$params->get('col_6_row_8_text');
$text69=$params->get('col_6_row_9_text');
$text70=$params->get('col_6_row_10_text');


/*****  Table 7*****/
$header7=$params->get('header_text7');
$text71=$params->get('col_7_row_1_text');
$text72=$params->get('col_7_row_2_text');
$text73=$params->get('col_7_row_3_text');
$text74=$params->get('col_7_row_4_text');
$text75=$params->get('col_7_row_5_text');
$text76=$params->get('col_7_row_6_text');
$text77=$params->get('col_7_row_7_text');
$text78=$params->get('col_7_row_8_text');
$text79=$params->get('col_7_row_9_text');
$text80=$params->get('col_7_row_10_text');


/*****  Table 8*****/
$header8=$params->get('header_text8');
$text81=$params->get('col_8_row_1_text');
$text82=$params->get('col_8_row_2_text');
$text83=$params->get('col_8_row_3_text');
$text84=$params->get('col_8_row_4_text');
$text85=$params->get('col_8_row_5_text');
$text86=$params->get('col_8_row_6_text');
$text87=$params->get('col_8_row_7_text');
$text88=$params->get('col_8_row_8_text');
$text89=$params->get('col_8_row_9_text');
$text90=$params->get('col_8_row_10_text');


/*****  Table 9*****/
$header9=$params->get('header_text9');
$text91=$params->get('col_9_row_1_text');
$text92=$params->get('col_9_row_2_text');
$text93=$params->get('col_9_row_3_text');
$text94=$params->get('col_9_row_4_text');
$text95=$params->get('col_9_row_5_text');
$text96=$params->get('col_9_row_6_text');
$text97=$params->get('col_9_row_7_text');
$text98=$params->get('col_9_row_8_text');
$text99=$params->get('col_9_row_9_text');
$text100=$params->get('col_9_row_10_text');


/*****  Table 10*****/
$header10=$params->get('header_text10');
$text101=$params->get('col_10_row_1_text');
$text102=$params->get('col_10_row_2_text');
$text103=$params->get('col_10_row_3_text');
$text104=$params->get('col_10_row_4_text');
$text105=$params->get('col_10_row_5_text');
$text106=$params->get('col_10_row_6_text');
$text107=$params->get('col_10_row_7_text');
$text108=$params->get('col_10_row_8_text');
$text109=$params->get('col_10_row_9_text');
$text110=$params->get('col_10_row_10_text');

$col_width=$params->get('col_width');

?> 
<div id="pricebox<?php echo $module->id; ?>" class="priceblock<?php if($params->get('moduleclass_sfx')) echo ' '.$params->get('moduleclass_sfx'); ?>">
          
		   <div class="header ">
					<?php echo $params->get('title');?>
				</div>
				
				<!-- Second Header -->
				<div class="page-desc ">
					<?php echo $params->get('desc');?>
				</div>
<div class="packages">    

							<?php if ($header1!=""): ?>
							<!---========= Table 1==========-->
							<div class="package animated" data-animation="flipInY" data-animation-delay="100" style="width:<?php echo $params->get('col_width');?>">
                            	
                                    	<h1><?php echo $params->get('header_text1');?></h1>
                               		<div class="circle">
                                        <h2><?php echo $params->get('price_int_1');?><span><?php echo $params->get('price_deci_1');?></span></h2>
										<p><?php echo $params->get('period1');?></p>
                                    </div>  
                                    
                                    <ol>
									
									<?php if ($text11!=""): ?>
                                       	<li><?php echo $params->get('col_1_row_1_text');?> <?php echo $params->get('col_1_row_1_text1');?></li>
                                    <?php endif; ?>   	
									<?php if ($text12!=""): ?>	
										<li><span><?php echo $params->get('col_1_row_2_text');?></span> <?php echo $params->get('col_1_row_2_text1');?></li>
                                    <?php endif; ?>  	
									<?php if ($text13!=""): ?>
										<li><span><?php echo $params->get('col_1_row_3_text');?></span> <?php echo $params->get('col_1_row_3_text1');?></li>
                                    <?php endif; ?>  	
									<?php if ($text14!=""): ?>
										<li><span><?php echo $params->get('col_1_row_4_text');?></span> <?php echo $params->get('col_1_row_4_text1');?></li>
                                    <?php endif; ?>   	
									<?php if ($text15!=""): ?>
										<li><span><?php echo $params->get('col_1_row_5_text');?></span> <?php echo $params->get('col_1_row_5_text1');?></li>
                                    <?php endif; ?>   	
									<?php if ($text16!=""): ?>
										<li><span><?php echo $params->get('col_1_row_6_text');?></span> <?php echo $params->get('col_1_row_6_text1');?></li>
                                    <?php endif; ?>
									</ol>
                                     
									<?php if ($text17!=""): ?>
                                    	<a class="p-btn" href="<?php echo $params->get('col_1_row_8_text');?>"><?php echo $params->get('col_1_row_7_text');?></a>
									<?php endif; ?>
							</div>
							<?php endif; ?>
							
							
							<?php if ($header2!=""): ?>
							<!---========= Table 2==========-->
							<div class="package animated" data-animation="flipInY" data-animation-delay="100" style="width:<?php echo $params->get('col_width');?>">
                            	
                                    	<h1><?php echo $params->get('header_text2');?></h1>
                               		<div class="circle">
                                        <h2><?php echo $params->get('price_int_2');?><span><?php echo $params->get('price_deci_2');?></span></h2>
										<p><?php echo $params->get('period2');?></p>
                                    </div>  
                                    
                                    <ol>
									<?php if ($text21!=""): ?>
                                       	<li><?php echo $params->get('col_2_row_1_text');?> <?php echo $params->get('col_2_row_1_text1');?></li>
                                     <?php endif; ?>
									 <?php if ($text22!=""): ?>
										<li><span><?php echo $params->get('col_2_row_2_text');?></span> <?php echo $params->get('col_2_row_2_text1');?></li>
                                    <?php endif; ?>   	
									<?php if ($text23!=""): ?>
										<li><span><?php echo $params->get('col_2_row_3_text');?></span> <?php echo $params->get('col_2_row_3_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text24!=""): ?>
									   <li><span><?php echo $params->get('col_2_row_4_text');?></span> <?php echo $params->get('col_2_row_4_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text25!=""): ?>
									   <li><span><?php echo $params->get('col_2_row_5_text');?></span> <?php echo $params->get('col_2_row_5_text1');?></li>
                                    <?php endif; ?>
									<?php if ($text26!=""): ?>
									  <li><span><?php echo $params->get('col_2_row_6_text');?></span> <?php echo $params->get('col_2_row_6_text1');?></li>
                                    <?php endif; ?>   
									</ol>
                                   <?php if ($text27!=""): ?>
                                    	<a class="p-btn" href="<?php echo $params->get('col_2_row_8_text');?>"><?php echo $params->get('col_2_row_7_text');?></a>
									<?php endif; ?> 
						   </div>
							<?php endif; ?> 
							
							
							<?php if ($header3!=""): ?>
							<!---========= Table 3==========-->
							<div class="package active animated" data-animation="flipInY" data-animation-delay="100" style="width:<?php echo $params->get('col_width');?>">
                            	
                                    	<h1><?php echo $params->get('header_text3');?></h1>
                               		<div class="circle">
                                        <h2><?php echo $params->get('price_int_3');?><span><?php echo $params->get('price_deci_3');?></span></h2>
										<p><?php echo $params->get('period3');?></p>
                                    </div>  
                                    
                                    <ol>
									<?php if ($text31!=""): ?>
                                       	<li><?php echo $params->get('col_3_row_1_text');?> <?php echo $params->get('col_3_row_1_text1');?></li>
                                     <?php endif; ?>
									 <?php if ($text32!=""): ?>
										<li><span><?php echo $params->get('col_3_row_2_text');?></span> <?php echo $params->get('col_3_row_2_text1');?></li>
                                    <?php endif; ?>   	
									<?php if ($text33!=""): ?>
										<li><span><?php echo $params->get('col_3_row_3_text');?></span> <?php echo $params->get('col_3_row_3_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text34!=""): ?>
									   <li><span><?php echo $params->get('col_3_row_4_text');?></span> <?php echo $params->get('col_3_row_4_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text35!=""): ?>
									   <li><span><?php echo $params->get('col_3_row_5_text');?></span> <?php echo $params->get('col_3_row_5_text1');?></li>
                                    <?php endif; ?>
									<?php if ($text36!=""): ?>
									  <li><span><?php echo $params->get('col_3_row_6_text');?></span> <?php echo $params->get('col_3_row_6_text1');?></li>
                                    <?php endif; ?>   
									</ol>
                                   <?php if ($text37!=""): ?>
                                    	<a class="p-btn" href="<?php echo $params->get('col_3_row_8_text');?>"><?php echo $params->get('col_3_row_7_text');?></a>
									<?php endif; ?> 
						   </div>
							<?php endif; ?> 
							
							<?php if ($header4!=""): ?>
							<!---========= Table 4==========-->
							<div class="package animated" data-animation="flipInY" data-animation-delay="100" style="width:<?php echo $params->get('col_width');?>">
                            	
                                    	<h1><?php echo $params->get('header_text4');?></h1>
                               		<div class="circle">
                                        <h2><?php echo $params->get('price_int_4');?><span><?php echo $params->get('price_deci_4');?></span></h2>
										<p><?php echo $params->get('period4');?></p>
                                    </div>  
                                    
                                    <ol>
									<?php if ($text41!=""): ?>
                                       	<li><?php echo $params->get('col_4_row_1_text');?> <?php echo $params->get('col_4_row_1_text1');?></li>
                                     <?php endif; ?>
									 <?php if ($text42!=""): ?>
										<li><span><?php echo $params->get('col_4_row_2_text');?></span> <?php echo $params->get('col_4_row_2_text1');?></li>
                                    <?php endif; ?>   	
									<?php if ($text43!=""): ?>
										<li><span><?php echo $params->get('col_4_row_3_text');?></span> <?php echo $params->get('col_4_row_3_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text44!=""): ?>
									   <li><span><?php echo $params->get('col_4_row_4_text');?></span> <?php echo $params->get('col_4_row_4_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text45!=""): ?>
									   <li><span><?php echo $params->get('col_4_row_5_text');?></span> <?php echo $params->get('col_4_row_5_text1');?></li>
                                    <?php endif; ?>
									<?php if ($text46!=""): ?>
									  <li><span><?php echo $params->get('col_4_row_6_text');?></span> <?php echo $params->get('col_4_row_6_text1');?></li>
                                    <?php endif; ?>   
									</ol>
                                   <?php if ($text47!=""): ?>
                                    	<a class="p-btn" href="<?php echo $params->get('col_4_row_8_text');?>"><?php echo $params->get('col_4_row_7_text');?></a>
									<?php endif; ?> 
							</div>
							<?php endif; ?>
							
							<?php if ($header5!=""): ?>
							<!---========= Table 5==========-->
							<div class="package animated" data-animation="flipInY" data-animation-delay="100" style="width:<?php echo $params->get('col_width');?>">
                            	
                                    	<h1><?php echo $params->get('header_text5');?></h1>
                               		<div class="circle">
                                        <h2><?php echo $params->get('price_int_5');?><span><?php echo $params->get('price_deci_5');?></span></h2>
										<p><?php echo $params->get('period5');?></p>
                                    </div>  
                                    
                                    <ol>
									<?php if ($text51!=""): ?>
                                       	<li><?php echo $params->get('col_5_row_1_text');?> <?php echo $params->get('col_5_row_1_text1');?></li>
                                     <?php endif; ?>
									 <?php if ($text52!=""): ?>
										<li><span><?php echo $params->get('col_5_row_2_text');?></span> <?php echo $params->get('col_5_row_2_text1');?></li>
                                    <?php endif; ?>   	
									<?php if ($text53!=""): ?>
										<li><span><?php echo $params->get('col_5_row_3_text');?></span> <?php echo $params->get('col_5_row_3_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text54!=""): ?>
									   <li><span><?php echo $params->get('col_5_row_4_text');?></span> <?php echo $params->get('col_5_row_4_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text55!=""): ?>
									   <li><span><?php echo $params->get('col_5_row_5_text');?></span> <?php echo $params->get('col_5_row_5_text1');?></li>
                                    <?php endif; ?>
									<?php if ($text56!=""): ?>
									  <li><span><?php echo $params->get('col_5_row_6_text');?></span> <?php echo $params->get('col_5_row_6_text1');?></li>
                                    <?php endif; ?>   
									</ol>
                                   <?php if ($text57!=""): ?>
                                    	<a class="p-btn" href="<?php echo $params->get('col_5_row_8_text');?>"><?php echo $params->get('col_5_row_7_text');?></a>
									<?php endif; ?> 
							</div>
							<?php endif; ?>
							
							<?php if ($header6!=""): ?>
							<!---========= Table 6==========-->
							<div class="package animated" data-animation="flipInY" data-animation-delay="100" style="width:<?php echo $params->get('col_width');?>">
                            	
                                    	<h1><?php echo $params->get('header_text6');?></h1>
                               		<div class="circle">
                                        <h2><?php echo $params->get('price_int_6');?><span><?php echo $params->get('price_deci_6');?></span></h2>
										<p><?php echo $params->get('period6');?></p>
                                    </div>  
                                    
                                    <ol>
									<?php if ($text61!=""): ?>
                                       	<li><?php echo $params->get('col_6_row_1_text');?> <?php echo $params->get('col_6_row_1_text1');?></li>
                                     <?php endif; ?>
									 <?php if ($text62!=""): ?>
										<li><span><?php echo $params->get('col_6_row_2_text');?></span> <?php echo $params->get('col_6_row_2_text1');?></li>
                                    <?php endif; ?>   	
									<?php if ($text63!=""): ?>
										<li><span><?php echo $params->get('col_6_row_3_text');?></span> <?php echo $params->get('col_6_row_3_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text64!=""): ?>
									   <li><span><?php echo $params->get('col_6_row_4_text');?></span> <?php echo $params->get('col_6_row_4_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text65!=""): ?>
									   <li><span><?php echo $params->get('col_6_row_5_text');?></span> <?php echo $params->get('col_6_row_5_text1');?></li>
                                    <?php endif; ?>
									<?php if ($text66!=""): ?>
									  <li><span><?php echo $params->get('col_6_row_6_text');?></span> <?php echo $params->get('col_6_row_6_text1');?></li>
                                    <?php endif; ?>   
									</ol>
                                   <?php if ($text67!=""): ?>
                                    	<a class="p-btn" href="<?php echo $params->get('col_6_row_8_text');?>"><?php echo $params->get('col_6_row_7_text');?></a>
									<?php endif; ?> 
							</div>
							<?php endif; ?>
							
							<?php if ($header7!=""): ?>
							<!---========= Table 7==========-->
							<div class="package animated" data-animation="flipInY" data-animation-delay="100" style="width:<?php echo $params->get('col_width');?>">
                            	
                                    	<h1><?php echo $params->get('header_text7');?></h1>
                               		<div class="circle">
                                        <h2><?php echo $params->get('price_int_7');?><span><?php echo $params->get('price_deci_7');?></span></h2>
										<p><?php echo $params->get('period7');?></p>
                                    </div>  
                                    
                                    <ol>
									<?php if ($text71!=""): ?>
                                       	<li><?php echo $params->get('col_7_row_1_text');?> <?php echo $params->get('col_7_row_1_text1');?></li>
                                     <?php endif; ?>
									 <?php if ($text72!=""): ?>
										<li><span><?php echo $params->get('col_7_row_2_text');?></span> <?php echo $params->get('col_7_row_2_text1');?></li>
                                    <?php endif; ?>   	
									<?php if ($text73!=""): ?>
										<li><span><?php echo $params->get('col_7_row_3_text');?></span> <?php echo $params->get('col_7_row_3_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text74!=""): ?>
									   <li><span><?php echo $params->get('col_7_row_4_text');?></span> <?php echo $params->get('col_7_row_4_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text75!=""): ?>
									   <li><span><?php echo $params->get('col_7_row_5_text');?></span> <?php echo $params->get('col_7_row_5_text1');?></li>
                                    <?php endif; ?>
									<?php if ($text76!=""): ?>
									  <li><span><?php echo $params->get('col_7_row_6_text');?></span> <?php echo $params->get('col_7_row_6_text1');?></li>
                                    <?php endif; ?>   
									</ol>
                                   <?php if ($text77!=""): ?>
                                    	<a class="p-btn" href="<?php echo $params->get('col_7_row_8_text');?>"><?php echo $params->get('col_7_row_7_text');?></a>
									<?php endif; ?> 
							</div>
							<?php endif; ?>
							
							<?php if ($header8!=""): ?>
							<!---========= Table 8==========-->
							<div class="package animated" data-animation="flipInY" data-animation-delay="100" style="width:<?php echo $params->get('col_width');?>">
                            	
                                    	<h1><?php echo $params->get('header_text8');?></h1>
                               		<div class="circle">
                                        <h2><?php echo $params->get('price_int_8');?><span><?php echo $params->get('price_deci_8');?></span></h2>
										<p><?php echo $params->get('period8');?></p>
                                    </div>  
                                    
                                    <ol>
									<?php if ($text81!=""): ?>
                                       	<li><?php echo $params->get('col_8_row_1_text');?> <?php echo $params->get('col_8_row_1_text1');?></li>
                                     <?php endif; ?>
									 <?php if ($text82!=""): ?>
										<li><span><?php echo $params->get('col_8_row_2_text');?></span> <?php echo $params->get('col_8_row_2_text1');?></li>
                                    <?php endif; ?>   	
									<?php if ($text83!=""): ?>
										<li><span><?php echo $params->get('col_8_row_3_text');?></span> <?php echo $params->get('col_8_row_3_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text84!=""): ?>
									   <li><span><?php echo $params->get('col_8_row_4_text');?></span> <?php echo $params->get('col_8_row_4_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text85!=""): ?>
									   <li><span><?php echo $params->get('col_8_row_5_text');?></span> <?php echo $params->get('col_8_row_5_text1');?></li>
                                    <?php endif; ?>
									<?php if ($text86!=""): ?>
									  <li><span><?php echo $params->get('col_8_row_6_text');?></span> <?php echo $params->get('col_8_row_6_text1');?></li>
                                    <?php endif; ?>   
									</ol>
                                   <?php if ($text87!=""): ?>
                                    	<a class="p-btn" href="<?php echo $params->get('col_8_row_8_text');?>"><?php echo $params->get('col_8_row_7_text');?></a>
									<?php endif; ?> 
							</div>
							<?php endif; ?>
							
							<?php if ($header9!=""): ?>
							<!---========= Table 9==========-->
							<div class="package animated" data-animation="flipInY" data-animation-delay="100" style="width:<?php echo $params->get('col_width');?>">
                            	
                                    	<h1><?php echo $params->get('header_text9');?></h1>
                               		<div class="circle">
                                        <h2><?php echo $params->get('price_int_9');?><span><?php echo $params->get('price_deci_9');?></span></h2>
										<p><?php echo $params->get('period9');?></p>
                                    </div>  
                                    
                                    <ol>
									<?php if ($text91!=""): ?>
                                       	<li><?php echo $params->get('col_9_row_1_text');?> <?php echo $params->get('col_9_row_1_text1');?></li>
                                     <?php endif; ?>
									 <?php if ($text92!=""): ?>
										<li><span><?php echo $params->get('col_9_row_2_text');?></span> <?php echo $params->get('col_9_row_2_text1');?></li>
                                    <?php endif; ?>   	
									<?php if ($text93!=""): ?>
										<li><span><?php echo $params->get('col_9_row_3_text');?></span> <?php echo $params->get('col_9_row_3_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text94!=""): ?>
									   <li><span><?php echo $params->get('col_9_row_4_text');?></span> <?php echo $params->get('col_9_row_4_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text95!=""): ?>
									   <li><span><?php echo $params->get('col_9_row_5_text');?></span> <?php echo $params->get('col_9_row_5_text1');?></li>
                                    <?php endif; ?>
									<?php if ($text96!=""): ?>
									  <li><span><?php echo $params->get('col_9_row_6_text');?></span> <?php echo $params->get('col_9_row_6_text1');?></li>
                                    <?php endif; ?>   
									</ol>
                                   <?php if ($text97!=""): ?>
                                    	<a class="p-btn" href="<?php echo $params->get('col_9_row_8_text');?>"><?php echo $params->get('col_9_row_7_text');?></a>
									<?php endif; ?> 
							</div>
							<?php endif; ?>
							
							<?php if ($header10!=""): ?>
							<!---========= Table 10==========-->
							<div class="package animated" data-animation="flipInY" data-animation-delay="100" style="width:<?php echo $params->get('col_width');?>">
                            	
                                    	<h1><?php echo $params->get('header_text10');?></h1>
                               		<div class="circle">
                                        <h2><?php echo $params->get('price_int_10');?><span><?php echo $params->get('price_deci_10');?></span></h2>
										<p><?php echo $params->get('period10');?></p>
                                    </div>  
                                    
                                    <ol>
									<?php if ($text101!=""): ?>
                                       	<li><?php echo $params->get('col_10_row_1_text');?> <?php echo $params->get('col_10_row_1_text1');?></li>
                                     <?php endif; ?>
									 <?php if ($text102!=""): ?>
										<li><span><?php echo $params->get('col_10_row_2_text');?></span> <?php echo $params->get('col_10_row_2_text1');?></li>
                                    <?php endif; ?>   	
									<?php if ($text103!=""): ?>
										<li><span><?php echo $params->get('col_10_row_3_text');?></span> <?php echo $params->get('col_10_row_3_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text104!=""): ?>
									   <li><span><?php echo $params->get('col_10_row_4_text');?></span> <?php echo $params->get('col_10_row_4_text1');?></li>
                                    <?php endif; ?>   
									<?php if ($text105!=""): ?>
									   <li><span><?php echo $params->get('col_10_row_5_text');?></span> <?php echo $params->get('col_10_row_5_text1');?></li>
                                    <?php endif; ?>
									<?php if ($text106!=""): ?>
									  <li><span><?php echo $params->get('col_10_row_6_text');?></span> <?php echo $params->get('col_10_row_6_text1');?></li>
                                    <?php endif; ?>   
									</ol>
                                   <?php if ($text107!=""): ?>
                                    	<a class="p-btn" href="<?php echo $params->get('col_10_row_8_text');?>"><?php echo $params->get('col_10_row_7_text');?></a>
									<?php endif; ?> 
							</div>
							<?php endif; ?>
							
							
		   
		   
        </div>
    </div>
		
