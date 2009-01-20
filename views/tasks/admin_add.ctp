<div class="tasks form">
<?php echo $form->create('Task');?>
	<fieldset>
 		<legend><?php __('Add Task');?></legend>
	<?php
		echo $form->input('assigned_to', array('options' => $users));
		echo $form->input('priority', array('options' => array("1","2","3","4","5"), 'default' => '3'));
		echo $form->input('subject');
		echo $form->input('task');
		echo $form->input('deadline');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
