<?php 
/*
 * @package Joomla 3.1.1
 * @copyright Copyright (C) 2013 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
	*
 * @module Pranon -PR Team
 * @copyright Copyright (C) Pranon www.pranon.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

defined('_JEXEC') or die;
$document = JFactory::getDocument();

//$document->addStyleSheet(JURI::root(true).'/modules/mod_pr_team/css/owl.theme.css');
$document->addStyleSheet(JURI::root(true).'/modules/mod_pr_team/css/owl.carousel.css');

/***************JS*******************/
//$document->addscript(JURI::root(true).'/modules/mod_pr_team/js/owl.carousel.js');
?> 


<?php
$head="";
if(($params->get('head'))!=null){
            $head= $params->get('head');}
 $tm1="";$tt1="";$td1='';$mn1='';
 if(($params->get('tm1'))!=null){
            $tm1= $params->get('tm1');}
  if(($params->get('mn1'))!=null){
            $mn1= $params->get('mn1');}	
  if(($params->get('tt1'))!=null){
            $tt1= $params->get('tt1');}	
  if(($params->get('td1'))!=null){
            $td1= $params->get('td1');}	
			
$skill1="";
if(($params->get('skill1'))!=null){
            $skill1= $params->get('skill1');}
 $pv11="";$ct11="";$c11='#000';
 if(($params->get('pv11'))!=null){
            $pv11= $params->get('pv11');}
  if(($params->get('ct11'))!=null){
            $ct11= $params->get('ct11');}	
  if(($params->get('c11'))!=null){
            $c11= $params->get('c11');}
			
$pv12="";$ct12="";$c12='#000';
 if(($params->get('pv12'))!=null){
            $pv12= $params->get('pv12');}
  if(($params->get('ct12'))!=null){
            $ct12= $params->get('ct12');}	
  if(($params->get('c12'))!=null){
            $c12= $params->get('c12');}

$pv13="";$ct13="";$c13='#000';
 if(($params->get('pv13'))!=null){
            $pv13= $params->get('pv13');}
  if(($params->get('ct13'))!=null){
            $ct13= $params->get('ct13');}	
  if(($params->get('c13'))!=null){
            $c13= $params->get('c13');}

$pv14="";$ct14="";$c14='#000';
 if(($params->get('pv14'))!=null){
            $pv14= $params->get('pv14');}
  if(($params->get('ct14'))!=null){
            $ct14= $params->get('ct14');}	
  if(($params->get('c14'))!=null){
            $c14= $params->get('c14');}			
	
$pv15="";$ct15="";$c15='#000';
 if(($params->get('pv15'))!=null){
            $pv15= $params->get('pv15');}
  if(($params->get('ct15'))!=null){
            $ct15= $params->get('ct15');}	
  if(($params->get('c15'))!=null){
            $c15= $params->get('c15');}
			



/*******************Team 2*************/	
			$tm2="";$tt2="";$td2='';$mn2='';
 if(($params->get('tm2'))!=null){
            $tm2= $params->get('tm2');}
  if(($params->get('mn2'))!=null){
            $mn2= $params->get('mn2');}	
  if(($params->get('tt2'))!=null){
            $tt2= $params->get('tt2');}	
  if(($params->get('td2'))!=null){
            $td2= $params->get('td2');}	

$skill2="";
if(($params->get('skill2'))!=null){
            $skill2= $params->get('skill2');}
 $pv21="";$ct21="";$c21='#000';
 if(($params->get('pv21'))!=null){
            $pv21= $params->get('pv21');}
  if(($params->get('ct21'))!=null){
            $ct21= $params->get('ct21');}	
  if(($params->get('c21'))!=null){
            $c21= $params->get('c21');}
			
$pv22="";$ct22="";$c22='#000';
 if(($params->get('pv22'))!=null){
            $pv22= $params->get('pv22');}
  if(($params->get('ct22'))!=null){
            $ct22= $params->get('ct22');}	
  if(($params->get('c22'))!=null){
            $c22= $params->get('c22');}

$pv23="";$ct23="";$c23='#000';
 if(($params->get('pv23'))!=null){
            $pv23= $params->get('pv23');}
  if(($params->get('ct23'))!=null){
            $ct23= $params->get('ct23');}	
  if(($params->get('c23'))!=null){
            $c23= $params->get('c23');}

$pv24="";$ct24="";$c24='#000';
 if(($params->get('pv24'))!=null){
            $pv24= $params->get('pv24');}
  if(($params->get('ct24'))!=null){
            $ct24= $params->get('ct24');}	
  if(($params->get('c24'))!=null){
            $c24= $params->get('c24');}			
	
$pv25="";$ct25="";$c25='#000';
 if(($params->get('pv25'))!=null){
            $pv25= $params->get('pv25');}
  if(($params->get('ct25'))!=null){
            $ct25= $params->get('ct25');}	
  if(($params->get('c25'))!=null){
            $c25= $params->get('c25');}
			

/****************Team 3*****************/			
			
			$tm3="";$tt3="";$td3='';$mn3='';
 if(($params->get('tm3'))!=null){
            $tm3= $params->get('tm3');}
  if(($params->get('mn3'))!=null){
            $mn3= $params->get('mn3');}	
  if(($params->get('tt3'))!=null){
            $tt3= $params->get('tt3');}	
  if(($params->get('td3'))!=null){
            $td3= $params->get('td3');}	

			
$skill3="";
if(($params->get('skill3'))!=null){
            $skill3= $params->get('skill3');}
 $pv31="";$ct31="";$c31='#000';
 if(($params->get('pv31'))!=null){
            $pv31= $params->get('pv31');}
  if(($params->get('ct31'))!=null){
            $ct31= $params->get('ct31');}	
  if(($params->get('c31'))!=null){
            $c31= $params->get('c31');}
			
$pv32="";$ct32="";$c32='#000';
 if(($params->get('pv32'))!=null){
            $pv32= $params->get('pv32');}
  if(($params->get('ct32'))!=null){
            $ct32= $params->get('ct32');}	
  if(($params->get('c32'))!=null){
            $c32= $params->get('c32');}

$pv33="";$ct33="";$c33='#000';
 if(($params->get('pv33'))!=null){
            $pv33= $params->get('pv33');}
  if(($params->get('ct33'))!=null){
            $ct33= $params->get('ct33');}	
  if(($params->get('c33'))!=null){
            $c33= $params->get('c33');}

$pv34="";$ct34="";$c34='#000';
 if(($params->get('pv34'))!=null){
            $pv34= $params->get('pv34');}
  if(($params->get('ct34'))!=null){
            $ct34= $params->get('ct34');}	
  if(($params->get('c34'))!=null){
            $c34= $params->get('c34');}			
	
$pv35="";$ct35="";$c35='#000';
 if(($params->get('pv35'))!=null){
            $pv35= $params->get('pv35');}
  if(($params->get('ct35'))!=null){
            $ct35= $params->get('ct35');}	
  if(($params->get('c35'))!=null){
            $c35= $params->get('c35');}
			
/******************Team 4**************/
			$tm4="";$tt4="";$td4='';$mn4='';
 if(($params->get('tm4'))!=null){
            $tm4= $params->get('tm4');}
  if(($params->get('mn4'))!=null){
            $mn4= $params->get('mn4');}	
  if(($params->get('tt4'))!=null){
            $tt4= $params->get('tt4');}	
  if(($params->get('td4'))!=null){
            $td4= $params->get('td4');}	

$skill4="";
if(($params->get('skill4'))!=null){
            $skill4= $params->get('skill4');}
 $pv41="";$ct41="";$c41='#000';
 if(($params->get('pv41'))!=null){
            $pv41= $params->get('pv41');}
  if(($params->get('ct41'))!=null){
            $ct41= $params->get('ct41');}	
  if(($params->get('c41'))!=null){
            $c41= $params->get('c41');}
			
$pv42="";$ct42="";$c42='#000';
 if(($params->get('pv42'))!=null){
            $pv42= $params->get('pv42');}
  if(($params->get('ct42'))!=null){
            $ct42= $params->get('ct42');}	
  if(($params->get('c42'))!=null){
            $c42= $params->get('c42');}

$pv43="";$ct43="";$c43='#000';
 if(($params->get('pv43'))!=null){
            $pv43= $params->get('pv43');}
  if(($params->get('ct43'))!=null){
            $ct43= $params->get('ct43');}	
  if(($params->get('c43'))!=null){
            $c43= $params->get('c43');}

$pv44="";$ct44="";$c44='#000';
 if(($params->get('pv44'))!=null){
            $pv44= $params->get('pv44');}
  if(($params->get('ct44'))!=null){
            $ct44= $params->get('ct44');}	
  if(($params->get('c44'))!=null){
            $c44= $params->get('c44');}			
	
$pv45="";$ct45="";$c45='#000';
 if(($params->get('pv45'))!=null){
            $pv45= $params->get('pv45');}
  if(($params->get('ct45'))!=null){
            $ct45= $params->get('ct45');}	
  if(($params->get('c45'))!=null){
            $c45= $params->get('c45');}


/********************Team 5***************/
			
			$tm5="";$tt5="";$td5='';$mn5='';
 if(($params->get('tm5'))!=null){
            $tm5= $params->get('tm5');}
  if(($params->get('mn5'))!=null){
            $mn5= $params->get('mn5');}	
  if(($params->get('tt5'))!=null){
            $tt5= $params->get('tt5');}	
  if(($params->get('td5'))!=null){
            $td5= $params->get('td5');}	


$skill5="";
if(($params->get('skill5'))!=null){
            $skill5= $params->get('skill5');}
 $pv51="";$ct51="";$c51='#000';
 if(($params->get('pv51'))!=null){
            $pv51= $params->get('pv51');}
  if(($params->get('ct51'))!=null){
            $ct51= $params->get('ct51');}	
  if(($params->get('c51'))!=null){
            $c51= $params->get('c51');}
			
$pv52="";$ct52="";$c52='#000';
 if(($params->get('pv52'))!=null){
            $pv52= $params->get('pv52');}
  if(($params->get('ct52'))!=null){
            $ct52= $params->get('ct52');}	
  if(($params->get('c52'))!=null){
            $c52= $params->get('c52');}

$pv53="";$ct53="";$c53='#000';
 if(($params->get('pv53'))!=null){
            $pv53= $params->get('pv53');}
  if(($params->get('ct53'))!=null){
            $ct53= $params->get('ct53');}	
  if(($params->get('c53'))!=null){
            $c53= $params->get('c53');}

$pv54="";$ct54="";$c54='#000';
 if(($params->get('pv54'))!=null){
            $pv54= $params->get('pv54');}
  if(($params->get('ct54'))!=null){
            $ct54= $params->get('ct54');}	
  if(($params->get('c54'))!=null){
            $c54= $params->get('c54');}			
	
$pv55="";$ct55="";$c55='#000';
 if(($params->get('pv55'))!=null){
            $pv55= $params->get('pv55');}
  if(($params->get('ct55'))!=null){
            $ct55= $params->get('ct55');}	
  if(($params->get('c55'))!=null){
            $c55= $params->get('c55');}

/***************** Team 6 ****************/			
			$tm6="";$tt6="";$td6='';$mn6='';
 if(($params->get('tm6'))!=null){
            $tm6= $params->get('tm6');}
  if(($params->get('mn6'))!=null){
            $mn6= $params->get('mn6');}	
  if(($params->get('tt6'))!=null){
            $tt6= $params->get('tt6');}	
  if(($params->get('td6'))!=null){
            $td6= $params->get('td6');}	
	

$skill65="";
if(($params->get('skill6'))!=null){
            $skill6= $params->get('skill6');}
 $pv61="";$ct61="";$c61='#000';
 if(($params->get('pv61'))!=null){
            $pv61= $params->get('pv61');}
  if(($params->get('ct61'))!=null){
            $ct61= $params->get('ct61');}	
  if(($params->get('c61'))!=null){
            $c61= $params->get('c61');}
			
$pv62="";$ct62="";$c62='#000';
 if(($params->get('pv62'))!=null){
            $pv62= $params->get('pv62');}
  if(($params->get('ct62'))!=null){
            $ct62= $params->get('ct62');}	
  if(($params->get('c62'))!=null){
            $c62= $params->get('c62');}

$pv63="";$ct63="";$c63='#000';
 if(($params->get('pv63'))!=null){
            $pv63= $params->get('pv63');}
  if(($params->get('ct63'))!=null){
            $ct63= $params->get('ct63');}	
  if(($params->get('c63'))!=null){
            $c63= $params->get('c63');}

$pv64="";$ct64="";$c64='#000';
 if(($params->get('pv64'))!=null){
            $pv64= $params->get('pv64');}
  if(($params->get('ct64'))!=null){
            $ct64= $params->get('ct64');}	
  if(($params->get('c64'))!=null){
            $c64= $params->get('c64');}			
	
$pv65="";$ct65="";$c65='#000';
 if(($params->get('pv65'))!=null){
            $pv65= $params->get('pv65');}
  if(($params->get('ct65'))!=null){
            $ct65= $params->get('ct65');}	
  if(($params->get('c65'))!=null){
            $c65= $params->get('c65');}

	
	
$facebook1="";$facebook2="";$facebook3="";$facebook4="";$facebook5="";$facebook6="";	
 if(($params->get('facebook1'))!=null){$facebook1= $params->get('facebook1');}
 if(($params->get('facebook2'))!=null){$facebook2= $params->get('facebook2');}
 if(($params->get('facebook3'))!=null){$facebook3= $params->get('facebook3');}
 if(($params->get('facebook4'))!=null){$facebook4= $params->get('facebook4');}
 if(($params->get('facebook5'))!=null){$facebook5= $params->get('facebook5');}
 if(($params->get('facebook6'))!=null){$facebook6= $params->get('facebook6');}
 
$twitter1="";$twitter2="";$twitter3="";$twitter4="";$twitter5="";$twitter6="";	
 if(($params->get('twitter1'))!=null){$twitter1= $params->get('twitter1');}
 if(($params->get('twitter2'))!=null){$twitter2= $params->get('twitter2');}
 if(($params->get('twitter3'))!=null){$twitter3= $params->get('twitter3');}
 if(($params->get('twitter4'))!=null){$twitter4= $params->get('twitter4');}
 if(($params->get('twitter5'))!=null){$twitter5= $params->get('twitter5');}
 if(($params->get('twitter6'))!=null){$twitter6= $params->get('twitter6');}
 
$googleplus1="";$googleplus2="";$googleplus3="";$googleplus4="";$googleplus5="";$googleplus6="";	
 if(($params->get('googleplus1'))!=null){$googleplus1= $params->get('googleplus1');}
 if(($params->get('googleplus2'))!=null){$googleplus2= $params->get('googleplus2');}
 if(($params->get('googleplus3'))!=null){$googleplus3= $params->get('googleplus3');}
 if(($params->get('googleplus4'))!=null){$googleplus4= $params->get('googleplus4');}
 if(($params->get('googleplus5'))!=null){$googleplus5= $params->get('googleplus5');}
 if(($params->get('googleplus6'))!=null){$googleplus6= $params->get('googleplus6');}
 
$dribbble1="";$dribbble2="";$dribbble3="";$dribbble4="";$dribbble5="";$dribbble6="";	
 if(($params->get('dribbble1'))!=null){$dribbble1= $params->get('dribbble1');}
 if(($params->get('dribbble2'))!=null){$dribbble2= $params->get('dribbble2');}
 if(($params->get('dribbble3'))!=null){$dribbble3= $params->get('dribbble3');}
 if(($params->get('dribbble4'))!=null){$dribbble4= $params->get('dribbble4');}
 if(($params->get('dribbble5'))!=null){$dribbble5= $params->get('dribbble5');}
 if(($params->get('dribbble6'))!=null){$dribbble6= $params->get('dribbble6');}
 
$linkedin1="";$linkedin2="";$linkedin3="";$linkedin4="";$linkedin5="";$linkedin6="";	
 if(($params->get('linkedin1'))!=null){$linkedin1= $params->get('linkedin1');}
 if(($params->get('linkedin2'))!=null){$linkedin2= $params->get('linkedin2');}
 if(($params->get('linkedin3'))!=null){$linkedin3= $params->get('linkedin3');}
 if(($params->get('linkedin4'))!=null){$linkedin4= $params->get('linkedin4');}
 if(($params->get('linkedin5'))!=null){$linkedin5= $params->get('linkedin5');}
 if(($params->get('linkedin6'))!=null){$linkedin6= $params->get('linkedin6');}
 
$pinterest1="";$pinterest2="";$pinterest3="";$pinterest4="";$pinterest5="";$pinterest6="";	
 if(($params->get('pinterest1'))!=null){$pinterest1= $params->get('pinterest1');}
 if(($params->get('pinterest2'))!=null){$pinterest2= $params->get('pinterest2');}
 if(($params->get('pinterest3'))!=null){$pinterest3= $params->get('pinterest3');}
 if(($params->get('pinterest4'))!=null){$pinterest4= $params->get('pinterest4');}
 if(($params->get('pinterest5'))!=null){$pinterest5= $params->get('pinterest5');}
 if(($params->get('pinterest6'))!=null){$pinterest6= $params->get('pinterest6');}

?>


				<div class="inner">
					<?php echo $head; ?>
					
						<div class="team-items slide-boxes">
						<?php if($tm1!=""){?>
							<div class="item animated" data-animation="flipInY" data-animation-delay="0">
							  <img src="<?php echo $tm1;?>" alt="" class="img-circle" />
								<h3><?php echo $mn1?></h3>
								<h4><?php echo $tt1?></h4>
								<p><?php echo $td1?></p>
								<div class="socials">
									<?php if($facebook1!=""){?>
                                                    <a href="<?php echo $facebook1;?>"><i class="fa fa-facebook"></i></a>
													<?php } ?>
													<?php if($twitter1!=""){?>
                                                    <a href="<?php echo $twitter1;?>"><i class="fa fa-twitter"></i></a>
													<?php } ?>
													<?php if($googleplus1!=""){?>
													<a href="<?php echo $googleplus1;?>"><i class="fa fa-google-plus"></i></a>
													<?php } ?>
													<?php if($dribbble1!=""){?>
													<a href="<?php echo $dribbble1;?>"><i class="fa fa-dribbble"></i></a>
													<?php } ?>
													<?php if($linkedin1!=""){?>
													<a href="<?php echo $linkedin1;?>"><i class="fa fa-linkedin"></i></a>
													<?php } ?>
													<?php if($pinterest1!=""){?>
													<a href="<?php echo $pinterest1;?>"><i class="fa fa-pinterest"></i></a>
													<?php } ?>
								</div>
								
							</div>
						<?php } ?>
						
						<?php if($tm2!=""){?>
							<div class="item animated" data-animation="flipInY" data-animation-delay="0">
							  <img src="<?php echo $tm2;?>" alt="" class="img-circle" />
								<h3><?php echo $mn2?></h3>
								<h4><?php echo $tt2?></h4>
								<p><?php echo $td2?></p>
								<div class="socials">
									<?php if($facebook2!=""){?>
                                                    <a href="<?php echo $facebook2;?>"><i class="fa fa-facebook"></i></a>
													<?php } ?>
													<?php if($twitter2!=""){?>
                                                    <a href="<?php echo $twitter2;?>"><i class="fa fa-twitter"></i></a>
													<?php } ?>
													<?php if($googleplus2!=""){?>
													<a href="<?php echo $googleplus2;?>"><i class="fa fa-google-plus"></i></a>
													<?php } ?>
													<?php if($dribbble2!=""){?>
													<a href="<?php echo $dribbble2;?>"><i class="fa fa-dribbble"></i></a>
													<?php } ?>
													<?php if($linkedin2!=""){?>
													<a href="<?php echo $linkedin2;?>"><i class="fa fa-linkedin"></i></a>
													<?php } ?>
													<?php if($pinterest2!=""){?>
													<a href="<?php echo $pinterest2;?>"><i class="fa fa-pinterest"></i></a>
													<?php } ?>
								</div>
								
							</div>
						<?php } ?>
						
						<?php if($tm3!=""){?>
							<div class="item animated" data-animation="flipInY" data-animation-delay="0">
							  <img src="<?php echo $tm3;?>" alt="" class="img-circle" />
								<h3><?php echo $mn3?></h3>
								<h4><?php echo $tt3?></h4>
								<p><?php echo $td3?></p>
								<div class="socials">
									<?php if($facebook3!=""){?>
                                                    <a href="<?php echo $facebook3;?>"><i class="fa fa-facebook"></i></a>
													<?php } ?>
													<?php if($twitter3!=""){?>
                                                    <a href="<?php echo $twitter3;?>"><i class="fa fa-twitter"></i></a>
													<?php } ?>
													<?php if($googleplus3!=""){?>
													<a href="<?php echo $googleplus3;?>"><i class="fa fa-google-plus"></i></a>
													<?php } ?>
													<?php if($dribbble3!=""){?>
													<a href="<?php echo $dribbble3;?>"><i class="fa fa-dribbble"></i></a>
													<?php } ?>
													<?php if($linkedin3!=""){?>
													<a href="<?php echo $linkedin3;?>"><i class="fa fa-linkedin"></i></a>
													<?php } ?>
													<?php if($pinterest3!=""){?>
													<a href="<?php echo $pinterest3;?>"><i class="fa fa-pinterest"></i></a>
													<?php } ?>
								</div>
								
							</div>
						<?php } ?>
						
						<?php if($tm4!=""){?>
							<div class="item animated" data-animation="flipInY" data-animation-delay="0">
							  <img src="<?php echo $tm4;?>" alt="" class="img-circle" />
								<h3><?php echo $mn4?></h3>
								<h4><?php echo $tt4?></h4>
								<p><?php echo $td4?></p>
								<div class="socials">
									<?php if($facebook4!=""){?>
                                                    <a href="<?php echo $facebook4;?>"><i class="fa fa-facebook"></i></a>
													<?php } ?>
													<?php if($twitter4!=""){?>
                                                    <a href="<?php echo $twitter4;?>"><i class="fa fa-twitter"></i></a>
													<?php } ?>
													<?php if($googleplus4!=""){?>
													<a href="<?php echo $googleplus4;?>"><i class="fa fa-google-plus"></i></a>
													<?php } ?>
													<?php if($dribbble4!=""){?>
													<a href="<?php echo $dribbble4;?>"><i class="fa fa-dribbble"></i></a>
													<?php } ?>
													<?php if($linkedin4!=""){?>
													<a href="<?php echo $linkedin4;?>"><i class="fa fa-linkedin"></i></a>
													<?php } ?>
													<?php if($pinterest4!=""){?>
													<a href="<?php echo $pinterest4;?>"><i class="fa fa-pinterest"></i></a>
													<?php } ?>
								</div>
								
							</div>
						<?php } ?>
						
						<?php if($tm5!=""){?>
							<div class="item animated" data-animation="flipInY" data-animation-delay="0">
							  <img src="<?php echo $tm5;?>" alt="" class="img-circle" />
								<h3><?php echo $mn5?></h3>
								<h4><?php echo $tt5?></h4>
								<p><?php echo $td5?></p>
								<div class="socials">
									<?php if($facebook5!=""){?>
                                                    <a href="<?php echo $facebook5;?>"><i class="fa fa-facebook"></i></a>
													<?php } ?>
													<?php if($twitter5!=""){?>
                                                    <a href="<?php echo $twitter5;?>"><i class="fa fa-twitter"></i></a>
													<?php } ?>
													<?php if($googleplus5!=""){?>
													<a href="<?php echo $googleplus5;?>"><i class="fa fa-google-plus"></i></a>
													<?php } ?>
													<?php if($dribbble5!=""){?>
													<a href="<?php echo $dribbble5;?>"><i class="fa fa-dribbble"></i></a>
													<?php } ?>
													<?php if($linkedin5!=""){?>
													<a href="<?php echo $linkedin5;?>"><i class="fa fa-linkedin"></i></a>
													<?php } ?>
													<?php if($pinterest5!=""){?>
													<a href="<?php echo $pinterest5;?>"><i class="fa fa-pinterest"></i></a>
													<?php } ?>
								</div>
								
							</div>
						<?php } ?>
						
						<?php if($tm6!=""){?>
							<div class="item animated" data-animation="flipInY" data-animation-delay="0">
							  <img src="<?php echo $tm6;?>" alt="" class="img-circle" />
								<h3><?php echo $mn6?></h3>
								<h4><?php echo $tt6?></h4>
								<p><?php echo $td6?></p>
								<div class="socials">
									<?php if($facebook6!=""){?>
                                                    <a href="<?php echo $facebook6;?>"><i class="fa fa-facebook"></i></a>
													<?php } ?>
													<?php if($twitter6!=""){?>
                                                    <a href="<?php echo $twitter6;?>"><i class="fa fa-twitter"></i></a>
													<?php } ?>
													<?php if($googleplus6!=""){?>
													<a href="<?php echo $googleplus6;?>"><i class="fa fa-google-plus"></i></a>
													<?php } ?>
													<?php if($dribbble6!=""){?>
													<a href="<?php echo $dribbble6;?>"><i class="fa fa-dribbble"></i></a>
													<?php } ?>
													<?php if($linkedin6!=""){?>
													<a href="<?php echo $linkedin6;?>"><i class="fa fa-linkedin"></i></a>
													<?php } ?>
													<?php if($pinterest6!=""){?>
													<a href="<?php echo $pinterest6;?>"><i class="fa fa-pinterest"></i></a>
													<?php } ?>
								</div>
								
							</div>
						<?php } ?>
						</div>
						
						
					
				</div>
				
				
<script>

    jQuery(document).ready(function($) {
      jQuery("#owl-blog").owlCarousel();
    });
	
    </script>



				
				 
				
					