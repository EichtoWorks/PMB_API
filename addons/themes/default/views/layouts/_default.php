<?php echo $this->template->load_view('partials/metadata'); ?>
<!-- Main -->
	<section id="main" class="container">
		<?php echo $this->template->load_view('partials/header'); ?>

        <div class="box">
	        <?php echo $template['body']; ?>
        </div>
	</section>	
<?php echo $this->template->load_view('partials/footer'); ?>