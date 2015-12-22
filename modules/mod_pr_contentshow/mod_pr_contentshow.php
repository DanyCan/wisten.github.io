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
$moduleclass_sfx = $params->get('moduleclass_sfx', '');
$ID 				= $module->id;
$document 			= JFactory::getDocument();




$moduleclass_sfx 					= $params->get('moduleclass_sfx');
$moduleName         				= basename(dirname(__FILE__));
$uniqid								= ($params->get('uniqid')=="") ? $module->id : $params->get('uniqid');
$content_source						= $params->get('content_source');
$count=0;

//Article Layout
$article_column						= $params->get('article_column');
$article_row						= $params->get('article_row');
$article_col_padding				= $params->get('article_col_padding');
$article_showtitle					= $params->get('article_showtitle');
$article_linkedtitle				= $params->get('article_linkedtitle');
$article_title_text_limit			= $params->get('article_title_text_limit');
$article_count_title_text			= $params->get('article_count_title_text');
$article_introtext					= $params->get('article_introtext');
$article_intro_text_limit			= $params->get('article_intro_text_limit');
$article_count_intro_text			= $params->get('article_count_intro_text');
$article_date_format				= $params->get('article_date_format');
$article_show_author				= $params->get('article_show_author');
$article_show_category				= $params->get('article_show_category');
$article_linked_category			= $params->get('article_linked_category');
$article_show_image					= $params->get('article_show_image');
$article_linked_image				= $params->get('article_linked_image');
$article_image_pos					= $params->get('article_image_pos');
$article_image_float				= $params->get('article_image_float');			
$article_image_margin				= $params->get('article_image_margin');
$article_thumb_width				= $params->get('article_thumb_width');
$article_thumb_height				= $params->get('article_thumb_height');
$article_thumb_ratio				= $params->get('article_thumb_ratio');
$article_extra_fields				= $params->get('article_extra_fields');
$article_show_more					= $params->get('article_show_more');
$article_more_text					= $params->get('article_more_text');
$article_comments					= $params->get('article_comments');
$article_hits						= $params->get('article_hits');
$article_show_ratings				= $params->get('article_show_ratings');
$article_animation					= $params->get('article_animation');
$article_slide_count				= $params->get('article_slide_count');
$article_controllers_style			= $params->get('article_controllers_style', 'nssp2-default');
$article_pagination					= $params->get('article_pagination');
$article_arrows						= $params->get('article_arrows');
$article_autoplay					= $params->get('article_autoplay');
$article_play_button				= $params->get('article_play_button');
$article_activator					= $params->get('article_activator');
$article_animation_speed			= $params->get('article_animation_speed');
$article_animation_interval			= $params->get('article_animation_interval');
$article_animation_transition		= $params->get('article_animation_transition');
//Links Layout
$links_block						= $params->get('links_block');
$links_count						= $params->get('links_count');
$links_col_padding					= $params->get('links_col_padding');
$links_position						= $params->get('links_position');
$links_more							= $params->get('links_more');
$links_more_text					= $params->get('links_more_text');
$links_title_text_limit				= $params->get('links_title_text_limit');
$links_title_count					= $params->get('links_title_count');
$links_show_intro					= $params->get('links_show_intro');
$links_intro_text_limit				= $params->get('links_intro_text_limit');
$links_intro_count					= $params->get('links_intro_count');
$links_show_image					= $params->get('links_show_image');
$links_linked_image					= $params->get('links_linked_image');
$links_image_pos					= $params->get('links_image_pos');
$links_image_float					= $params->get('links_image_float');
$links_image_margin					= $params->get('links_image_margin');
$links_thumb_width					= $params->get('links_thumb_width');
$links_thumb_height					= $params->get('links_thumb_height');
$links_thumb_ratio					= $params->get('links_thumb_ratio');
$links_animation					= $params->get('links_animation');
$links_slide_count					= $params->get('links_slide_count');
$links_controllers_style			= $params->get('links_controllers_style', 'nssp2-default');
$links_pagination					= $params->get('links_pagination');
$links_arrows						= $params->get('links_arrows');
$links_autoplay						= $params->get('links_autoplay');
$links_play_button					= $params->get('links_play_button');
$links_activator					= $params->get('links_activator');
$links_animation_speed				= $params->get('links_animation_speed');
$links_animation_interval			= $params->get('links_animation_interval');
$links_animation_transition			= $params->get('links_animation_transition');


require_once (dirname(__FILE__).'/common.php');//include common.php file

if ($content_source=="joomla") {
	require_once (dirname(__FILE__).'/helper.php');
	$list 		= modPRJCONTENTHelper::getList($params,$count);
}  else {
	require_once (dirname(__FILE__).'/k2helper.php');
	$list 							= modPRCONTENTK2Helper::getList($params,$count);
}
require(JModuleHelper::getLayoutPath('mod_pr_contentshow'));
?>