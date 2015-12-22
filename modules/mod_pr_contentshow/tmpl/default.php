<?php 
/*
 * @package Joomla 3.2.2
 * @copyright Copyright (C) 2013 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
	*
 * @module Pranon -PR CONTENTSHOW
 * @copyright Copyright (C) Pranon www.pranon.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

defined('_JEXEC') or die;

$n=0;
$n=$params->get('item_count');
$mod_type=$params->get('content_type');
$caption;
$title=""; $desc="";
if(($params->get('title'))!=null){
            $title= $params->get('title');}
			
if(($params->get('desc'))!=null){
            $desc= $params->get('desc');}
			
if(($params->get('icon'))!=null){
            $icon= $params->get('icon');}
			else {
			$icon='';
			}
/***************CSS*******************/
//$document->addStyleSheet(JURI::root(true).'/modules/mod_pr_contentshow/css/owl.theme.css');
//$document->addStyleSheet(JURI::root(true).'/modules/mod_pr_contentshow/css/owl.carousel.css');

/***************JS*******************/
//$document->addscript(JURI::root(true).'/modules/mod_pr_contentshow/js/owl.carousel.js');
?>
<div class="contain">
<?php if ($mod_type=="blog") { ?>

					<div class="latest-post">
						<div class="row">
						<div id="owl-blog" class="owl-carousel">
						<?php for($i=0;$i<$n;$i++): ?>
							<div class="col-md-4">
								<div class="item news-item">
									<div class="inner-item">
										<img alt="" src="<?php echo $list[$i]->image; ?>">
										<div class="hover-item">
											<ul>
												<li><a class="autor" href="#"><i class="fa fa-user"></i> <?php echo $list[$i]->author; ?></a></li>
												<li><a class="date" href="#"><i class="fa fa-clock-o"></i> <?php echo $list[$i]->created; ?></a></li>
												<li><a class="comment-numb" href="#"><i class="fa fa-comments"></i> <?php echo $list[$i]->comment;?></a></li>
											</ul>
										</div>
									</div>
									
								<h2><?php echo modPRCONTENTCommonHelper::cText($list[$i]->title, $article_count_title_text, $article_title_text_limit); ?></h2>
											
				<p><?php echo modPRCONTENTCommonHelper::cText($list[$i]->introtext, $article_count_intro_text, $article_intro_text_limit) ?></p>
									<a class="read-more" href="<?php echo $list[$i]->link ?>">read more <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
							<?php endfor; ?>
						</div>
						</div>
					</div>
				
	<script>

    $(document).ready(function($) {

      $("#owl-blog").owlCarousel();
    });
	
    </script>
		

<?php } elseif ($mod_type=="service") { ?>

				<div class="header">
					<?php echo $title; ?>
				</div>
				
				<!-- Second Header -->
				<div class="page-desc">
					<?php echo $desc; ?>
				</div>
					<ul class="service-contents slide-boxes">
						<?php for($i=0;$i<$n;$i++): ?>
						
					
					<li class="service box animated" data-animation="flipInY" data-animation-delay="0">
					<?php if ($article_linkedtitle) { ?>
						<a class="service-logo" href="<?php echo $list[$i]->link ?>">
					<?php } else { ?>	
						<a href="#" class="service-logo">
					<?php } ?>
							<?php echo $icon; ?>
						</a>
					
						<?php /*Article title*/ if ($article_showtitle): ?>
						<h3>
							<?php echo modPRCONTENTCommonHelper::cText($list[$i]->title, $article_count_title_text, $article_title_text_limit); ?>
														
						</h3>
						<?php endif; ?>
						<?php /*Introtext*/ if ($article_introtext): ?>
						<p><?php echo modPRCONTENTCommonHelper::cText($list[$i]->introtext, $article_count_intro_text, $article_intro_text_limit) ?></p>
						<?php endif; ?>
					</li>
						
						
							<?php endfor; ?>
					</ul>
		
<?php } ?>
</div>

