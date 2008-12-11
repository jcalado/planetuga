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
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Tasks', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
