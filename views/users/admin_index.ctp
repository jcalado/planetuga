<div class="users index">
<h2><?php __('Users');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('group_id');?></th>
	<th><?php echo $paginator->sort('username');?></th>
	<th><?php echo $paginator->sort('email');?></th>
	<th><?php echo $paginator->sort('created_at');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($users as $user):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $user['User']['id']; ?>
		</td>
		<td>
			<?php echo $user['User']['group_id']; ?>
		</td>
		<td>
			<?php echo $user['User']['username']; ?>
		</td>
		<td>
			<?php echo $user['User']['email']; ?>
		</td>
		<td>
			<?php echo $user['User']['created_at']; ?>
		</td>
		<td>
			<?php echo $user['User']['name']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link('<img src="/img/buttons/view.png"/>', array('action'=>'view', $user['User']['id']), array(),false,false); ?>
			<?php echo $html->link('<img src="/img/buttons/edit.png"/>', array('action'=>'edit', $user['User']['id']), array(),false,false); ?>
			<?php echo $html->link('<img src="/img/buttons/delete.png"/>', array('action'=>'delete', $user['User']['id']), array(),false,false); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null);?>
	<?php echo $paginator->numbers(array("separator" =>" ")); ?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null);?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Add user', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>


<hr class="noscreen" />