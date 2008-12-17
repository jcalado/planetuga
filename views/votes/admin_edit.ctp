<div class="votes form">
<?php echo $form->create('Vote');?>
	<fieldset>
 		<legend><?php __('Edit Vote');?></legend>
	<?php
		echo $form->input('id');
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
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Vote.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Vote.id'))); ?></li>
		<li><?php echo $html->link(__('List Votes', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
