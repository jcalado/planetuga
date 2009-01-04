<h1><? __('Posts') ?></h1>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $paginator->sort('id');?></th>
		<th><?php echo $paginator->sort('name');?></th>
		<th><?php echo $paginator->sort('url');?></th>
		<th>Actions</th>
	</tr>

	<!-- Here is where we loop through our $posts array, printing out post info -->

	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td>
			<?php echo $html->link($post['Post']['title'], 
"/posts/view/".$post['Post']['slug']); ?>
		</td>
		<td><?php echo $html->link($post['Post']['permalink'],$post['Post']['permalink']); ?></td>
		<td>
			<?php echo $html->link('<img src="/img/buttons/edit.png"/>', array('action'=>'edit', $post['Post']['id']), array(),false,false); ?>
			<?php echo $html->link('<img src="/img/buttons/delete.png"/>', array('action'=>'delete', $post['Post']['id']), array(),false,false); ?>
		</td>
	</tr>
	<?php endforeach; ?>

</table>

<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null);?>
	<?php echo $paginator->numbers(array("separator" =>" ")); ?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null);?>

	<?php
	echo $paginator->counter(array(
	'format' => __('%count% artigos indexados.', true)
	));
	?>
</div>

<h3><?php echo $html->link('Add', "/admin/posts/add")?></h3>