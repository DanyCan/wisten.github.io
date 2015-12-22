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

defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');

class JFormFieldColorpicker extends JFormField
{
	protected $type = 'Colorpicker';

	protected function getInput()
	{
		
        $baseurl = JURI::base();
		$baseurl = str_replace('administrator/','',$baseurl);	

		$size		= $this->element['size'] ? ' size="'.(int) $this->element['size'].'"' : '';
		$maxLength	= $this->element['maxlength'] ? ' maxlength="'.(int) $this->element['maxlength'].'"' : '';
		$class		= $this->element['class'] ? ' class="'.(string) $this->element['class'].'"' : '';
		$readonly	= ((string) $this->element['readonly'] == 'true') ? ' readonly="readonly"' : '';
		$disabled	= ((string) $this->element['disabled'] == 'true') ? ' disabled="disabled"' : '';
		$scriptname	 = $this->element['scriptpath'] ?(string) $this->element['scriptpath'] : $baseurl.'modules/mod_pr_pricetable/js/color-picker.js';

		if($scriptname == 'self')
		{
           $filedir = str_replace(JPATH_SITE . '/','',dirname(__FILE__));
    	   $filedir = str_replace('\\','/',$filedir);
           $scriptname = $baseurl . $filedir . '/color-picker.js';
		}
		
		$doc =& JFactory::getDocument();
		$doc->addScript($scriptname);
		
		$options = array();
		if( $this->element['cellwidth']){ $options[] = "cellWidth:". (int) $this->element['cellwidth'];}
		if( $this->element['cellheight']){ $options[] = "cellHeight:".(int) $this->element['cellheight'];}
		if( $this->element['top']){ $options[] = "top:". (int) $this->element['top'];}
		if( $this->element['left']){ $options[] = "left:". (int) $this->element['left'];}
																			  
        $optionString = implode(',',$options);

		$js = 'window.addEvent(\'domready\', function(){
		var colorInput = $(\''.$this->id.'\');
		var cpicker = new ColorPicker(colorInput,{'.$optionString.'});
});
';

        $doc->addScriptDeclaration($js);

		$onchange	= $this->element['onchange'] ? ' onchange="'.(string) $this->element['onchange'].'"' : '';

		return '<input type="text" name="'.$this->name.'" id="'.$this->id.'"' .
				' value="'.htmlspecialchars($this->value, ENT_COMPAT, 'UTF-8').'"' .
				$class.$size.$disabled.$readonly.$onchange.$maxLength.'/>';
	}
}