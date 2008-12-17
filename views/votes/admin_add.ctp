<div class="votes form">
<?php echo $form->create('Vote');?>
	<fieldset>
 		<legend><?php __('Add Vote');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('url');
		echo $form->input('feed');
		echo $form->input('description');
		echo $form->input('author');
		echo $form->input('email');
		echo $form->input('submit_date');
		echo $form->input('limit_date');
		echo $form->input('user_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>

