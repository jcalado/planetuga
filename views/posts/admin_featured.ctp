<h1><? __('Featured Posts') ?></h1>
<table>
	<tr>
		<th>ID</th>
		<th><? __('Name') ?></th>
		<th>URL</th>
		<th><? __('Actions') ?></th>
	</tr>

	<!-- Here is where we loop through our $posts array, printing out post info -->

	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td>
			<?php echo $html->link($post['Post']['title'], 
"/posts/view/".$post['Post']['id']); ?>
		</td>
		<td><?php echo $html->link($post['Post']['permalink'],$post['Post']['permalink']); ?></td>
		<td>
			<?php echo $html->link('Demote', "/posts/demote/{$post['Post']['id']}")?>
		</td>
	</tr>
	<?php endforeach; ?>

</table>

<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null);?>
	<?php echo $paginator->numbers(array("separator" =>" ")); ?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null);?>
</div>
