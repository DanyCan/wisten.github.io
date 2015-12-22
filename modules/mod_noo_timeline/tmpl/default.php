<?php
/**
 * @version		$Id$
 * @author		NooTheme
 * @package		Joomla.Site
 * @subpackage	mod_noo_timeline
 * @copyright	Copyright (C) 2013 NooTheme. All rights reserved.
 * @license		License GNU General Public License version 2 or later; see LICENSE.txt, see LICENSE.php
 */
// no direct access
defined('_JEXEC') or die('Restricted access');
$display = $params->get('display');

if(($params->get('heading'))!=null){
            $heading= $params->get('heading');}
			else {
			$heading='';
			}
if(($params->get('desc'))!=null){
            $desc= $params->get('desc');}
			else {
			$desc='';
			}
?>

<!-- Header -->
<?php if($heading!=""){?>
	<div class="header white"><?php echo $heading; ?></div>
<?php } ?>
	
<?php if($desc!=""){?>
			<!-- Description -->
<div class="page-desc white"><?php echo $desc; ?></div>
<?php } ?>


<div id="noo_tl<?php echo $module->id ?>" class="noo-tl<?php echo $params->get('moduleclass_sfx');?>">
	<ul class="timeline list-unstyled">
		<?php $t = 0; $i=0;
		$timeframe=array();
		foreach ($lists as $list){
		$timeframe[$t]=$list['frame'];
		$t++;
		}
        $timeframe=array_unique($timeframe);
		$m=0;
		$m=max(array_keys($timeframe));
		//print_r($timeframe);
		for($j=0;$j<=$m;$j++){
		if($timeframe[$j]!=null){?>
		<li class="year"><?php echo $timeframe[$j]?></li>
		
		<?php
		foreach ($lists as $list){
		if($timeframe[$j]==$list['frame'])
		{
		?>
		<?php if ($i++ % 2 == 0 ){?>
			<li class="noo-tl-item note animated" data-animation="fadeInRight" data-animation-delay="100">
				
				
					<h4 class="noo-tl-title"><a href="#" title="<?php echo $list['title']?>"><?php echo $list['title']?></a></h4>
					<p class="noo-tl-desc desc" <?php if ((!$display && $i==1 ) || ($display == 1)){?> style="display:block"<?php }?>><?php echo $list['description']?></p>
					<span class="date"><?php echo $list['date']?></span>							
					<span class="arrow fa fa-play"></span>
				
			</li>
			<?php } else { ?>
				
			<li class="noo-tl-item note animated" data-animation="fadeInLeft" data-animation-delay="100">
				
				
					<h4 class="noo-tl-title"><a href="#" title="<?php echo $list['title']?>"><?php echo $list['title']?></a></h4>
					<p class="noo-tl-desc desc" <?php if ((!$display && $i==1 ) || ($display == 1)){?> style="display:block"<?php }?>><?php echo $list['description']?></p>
					<span class="date"><?php echo $list['date']?></span>							
					<span class="arrow fa fa-play"></span>
				
				
			</li>
			<?php } ?>
		
		<?php } 
		}
		} 
		} ?>
	<li class="start fa fa-bookmark"></li>
	<li class="clear"></li>
</ul>
</div>