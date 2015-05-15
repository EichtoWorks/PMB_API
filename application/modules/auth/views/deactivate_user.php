<h3><?php echo lang('deactivate_heading');?></h3>
<p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

<?php echo form_open("auth/deactivate/".$user->id);?>

  <div class="row uniform half collapse-at-2">
  	<div class="4u">
  		<input type="radio" id="yes" name="confirm" value="yes" checked="checked" />
		<?php echo lang('deactivate_confirm_y_label', 'yes');?>
    </div>
    <div class="4u">
    	<input type="radio" id="no" name="confirm" value="no" />
    	<?php echo lang('deactivate_confirm_n_label', 'no');?>
    </div>
  </div>
  <div class="row uniform">
     <div class="12u">
	  <?php echo form_hidden($csrf); ?>
      <?php echo form_hidden(array('id'=>$user->id)); ?>
      <?php echo form_submit('submit', lang('deactivate_submit_btn'));?>
     </div>	
  </div>

<?php echo form_close();?>