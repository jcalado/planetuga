<div class="tasks form">
<?php echo $form->create('Task');?>
	<fieldset>
 		<legend><?php __('Add Task');?></legend>
	<?php
		echo $form->input('user_id');
		echo $form->input('assigned_to');
		echo $form->input('priority');
		echo $form->input('subject');
		echo $form->input('task');
		echo $form->input('created_at');
		echo $form->input('deadline');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
