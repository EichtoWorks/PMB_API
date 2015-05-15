<div class="box container small">
<h3><?php echo lang('edit_user_heading');?></h3>
<p><?php echo lang('edit_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(uri_string());?>

	<div class="row  uniform half">
      <div class="3u"><?php echo lang('edit_user_fname_label', 'first_name');?> </div>
      <div class="5u"><?php echo form_input($first_name);?></div>
    </div>  
    
    <div class="row  uniform half">
      <div class="3u"><?php echo lang('edit_user_lname_label', 'last_name');?></div>
      <div class="5u"><?php echo form_input($last_name);?></div>
    </div>  
	<div class="row  uniform half">
      <div class="3u"><?php echo lang('edit_user_company_label', 'company');?></div>
      <div class="5u"><?php echo form_input($company);?></div>
    </div>
    <div class="row  uniform half">
      <div class="3u"><?php echo lang('edit_user_phone_label', 'phone');?></div>
      <div class="5u"><?php echo form_input($phone);?></div>
    </div>
    <br />
    <div class="row  uniform half">
      <div class="4u"><?php echo lang('edit_user_password_label', 'password');?></div>
      <div class="5u"><?php echo form_input($password);?></div>
    </div>
    
    <div class="row  uniform half">
      <div class="4u"><?php echo lang('edit_user_password_confirm_label', 'password_confirm');?></div>
      <div class="5u"><?php echo form_input($password_confirm);?></div>
    </div>
	
    <div class="row  uniform half">
      <div class="4u">Select Theme</div>
      <div class="5u">
      	<select name="themes">
	  	<?php 
			
			foreach($themes as $_theme):
				$selected = ($user_theme === $_theme) ? ' selected="selected" ' : '';
				echo '<option value="'.$_theme.'" '. $selected .'>'.$_theme.'</option>';
			endforeach;
		?>
        </select>
      </div>
     </div>
   <br />

      <?php if ($this->ion_auth->is_admin()): ?>

          <h3><?php echo lang('edit_user_groups_heading');?></h3>
           <div class="row  uniform half">  
          <?php foreach ($groups as $group):?>
          	 <div class="4u">
              
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              
              <input type="checkbox" id="check<?php echo $group['id'];?>" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <label for="check<?php echo $group['id'];?>" class="checkbox"><?php echo $group['name'];?></label>
              
              
              </div>
          <?php endforeach?>
		  </div>
      <?php endif ?>
		
      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>
	  <br />
      <div class="row  uniform ">
      	<div class="4u">
	  	<?php $btn = array('name'=>'submit', 'id'=>'submit', 'value'=> lang('edit_user_submit_btn'), 'class'=>'small'); echo form_submit($btn);?>
        </div>
      </div>

<?php echo form_close();?>
</div>