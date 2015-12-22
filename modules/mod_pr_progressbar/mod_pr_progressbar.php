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
$ID 				= $module->id;
    $document 			= JFactory::getDocument();
require JModuleHelper::getLayoutPath('mod_pr_progressbar', $params->get('layout', 'default'));
$moduleclass_sfx = $params->get('moduleclass_sfx', '');