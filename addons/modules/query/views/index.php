<?php
  $formAttributes = array(
                      "id" => "",
                      "method" => "get",
                      "onsubmit" => "return validateSearchbox('Search','keyword');"
                    );
?>

<div class="container small">
	<div class="box">
		<?php echo form_open('index.php/query', $formAttributes); ?>
			<div class="row uniform half collapse-at-2">
				<div class="9u">
				<?php
					$attributes = array('name' => 'param', 'placeholder' => 'Enter Query', 'id' => 'keyword', "value" => $searchKeyword);
	                echo form_input($attributes);
				?>
				</div>
		        <div class="3u">
		        	<input type="hidden" id="hddnSearchKeyword" value="<?php echo $searchKeyword; ?>" />
		        	<?php echo form_submit('', 'Submit'); ?>
		        </div>
			</div>
		<?php echo form_close(); ?>
	</div>

	<div class="12u" id="QueryResult">
		<h3 style="text-align:center">Result</h3>
		<xpm class="prettyprint">
<?php echo $QueryResult ? $QueryResult : ''; ?>
		</xpm>
	</div>
</div>