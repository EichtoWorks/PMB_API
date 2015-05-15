<header>
    <h2>Search</h2>
    <p>A generic page for every non-generic situation.</p>
</header>
<div class="container small">
<div class="box ">
	<?php echo form_open(); ?>
    <div class="row uniform half collapse-at-2">
	    <div class="7u">
		<?php $attributes = array('name' => 'keyword', 'placeholder' => 'search', 'id' => 'keyword');
              echo form_input($attributes); 
              echo anchor('#', 'Advance Search', 'title="Advance Search"');
        ?>
        </div>
        <div class="3u">
		  <?php echo form_submit('mysubmit', 'Search');	  ?>
     	</div>
    </div>
     

          
    <?php echo form_close(); ?>
    
</div>

