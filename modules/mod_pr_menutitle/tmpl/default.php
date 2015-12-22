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

$menu    = JFactory::getApplication()->getMenu();
$id    =   $menu->getActive()->id;

/** Getting the Title of the Menu by using id. **/ 
$db    = JFactory::getDBO();
$query    = "SELECT * FROM #__menu WHERE id = '$id'";
$db->setQuery($query);
$rows    = $db->loadObjectList();
$itemrow = $rows[0];
$title   =   $itemrow->title;
$des   =   $itemrow->note;
?>


<div class="header">
	<?php echo $title; ?>
</div>
				
<!-- Second Header -->
<div class="page-desc">
	<?php echo $des; ?>
</div>