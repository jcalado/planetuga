<div class="tasks form">
<?php echo $form->create('Task');?>
	<fieldset>
 		<legend><?php __('Edit Task');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('assigned_to', array('options' => $users));
		echo $form->input('priority');
		echo $form->input('subject');
		echo $form->input('task');
		echo $form->input('deadline');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Task.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Task.id'))); ?></li>
		<li><?php echo $html->link(__('List Tasks', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
