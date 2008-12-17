<div class="votes index">
<h2><?php __('Ready for aggregation');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('url');?></th>
	<th><?php echo $paginator->sort('feed');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th><?php echo $paginator->sort('author');?></th>
	<th><?php echo $paginator->sort('email');?></th>
	<th><?php echo $paginator->sort('submit_date');?></th>
	<th><?php echo $paginator->sort('limit_date');?></th>
	<th><?php echo $paginator->sort('status');?></th>
	<th><?php echo $paginator->sort('voters');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($votes as $vote):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $vote['Vote']['id']; ?>
		</td>
		<td>
			<?php echo $vote['Vote']['name']; ?>
		</td>
		<td>
			<?php echo $vote['Vote']['url']; ?>
		</td>
		<td>
			<?php echo $vote['Vote']['feed']; ?>
		</td>
		<td>
			<?php echo $vote['Vote']['description']; ?>
		</td>
		<td>
			<?php echo $vote['Vote']['author']; ?>
		</td>
		<td>
			<?php echo $vote['Vote']['email']; ?>
		</td>
		<td>
			<?php echo $vote['Vote']['submit_date']; ?>
		</td>
		<td>
			<?php echo $vote['Vote']['limit_date']; ?>
		</td>
		<td>
			<?php echo $html->link($vote['User']['name'], array('controller'=> 'users', 'action'=>'view', $vote['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Approve', true), array('action'=>'approve', $vote['Vote']['id'])); ?>
			<?php echo $html->link(__('Deny', true), array('action'=>'deny', $vote['Vote']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $vote['Vote']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $vote['Vote']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
