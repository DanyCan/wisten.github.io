<?php
/*
# mod_sp_quickcontact - Ajax based quick contact Module by JoomShaper.com
# -----------------------------------------------------------------------	
# Author    JoomShaper http://www.joomshaper.com
# Copyright (C) 2010 - 2012 JoomShaper.com. All Rights Reserved.
# License - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.joomshaper.com
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<script type="text/javascript">
window.addEvent('domready',function(){
	var sp_sc<?php echo $uniqid ?> = new sp_sc('sp_qc_submit', {
		name: document.id('name'),
		modId: <?php echo $uniqid ?>,
		email: document.id('email'),
		subject: document.id('subject'),
		message: document.id('message'),
		status: document.id("sp_qc_status"),
		name_text: "<?php echo $name_text ?>",
		email_text: "<?php echo $email_text ?>",
		msg_text: "<?php echo $msg_text ?>",
		err_msg: "<?php echo $err_msg ?>",
		email_warn: "<?php echo $email_warn ?>",
		wait_text: "<?php echo $wait_text ?>",
		failed_text: "<?php echo $failed_text ?>",
		ajax_url: "<?php echo JURI::base() ?>modules/mod_sp_quickcontact/helper.php"
	});
});
</script>

<div id="sp_quickcontact<?php echo $uniqid ?>" class="sp_quickcontact">

						<div id="sp_qc_status"></div>
						<!-- Name Input --><div class="sp_qc_clr"></div>
						<input type="text" name="name" id="name" class="form" onfocus="if (this.value=='<?php echo $name_text ?>') this.value='';" onblur="if (this.value=='') this.value='<?php echo $name_text ?>';" value="<?php echo $name_text ?>" />
						<!-- Email Input --><div class="sp_qc_clr"></div>
						<input type="text" name="email" id="email" class="form" onfocus="if (this.value=='<?php echo $email_text ?>') this.value='';" onblur="if (this.value=='') this.value='<?php echo $email_text ?>';" value="<?php echo $email_text ?>" />
						<!-- Subject Input --><div class="sp_qc_clr"></div>
						<input type="text" name="subject" id="subject" class="form" onfocus="if (this.value=='<?php echo $subject_text ?>') this.value='';" onblur="if (this.value=='') this.value='<?php echo $subject_text ?>';" value="<?php echo $subject_text ?>" />
						<!-- Message Area --><div class="sp_qc_clr"></div>
						<textarea name="message" id="message" class="form textarea" onfocus="if (this.value=='<?php echo $msg_text ?>') this.value='';" onblur="if (this.value=='') this.value='<?php echo $msg_text ?>';" cols="" rows=""><?php echo $msg_text ?></textarea>	
						<!-- Send Button --><div class="sp_qc_clr"></div>
						<button id="sp_qc_submit" class="button form-btn" type="submit" value="<?php echo $send_msg ?>"><i class="fa fa-envelope"></i></button> 
						<div class="sp_qc_clr"></div>

</div>

