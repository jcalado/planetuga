<h1>Feeds</h1>
<table width="100%">
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Feed</th>
		<th>Acções</th>
	</tr>

	<!-- Here is where we loop through our $posts array, printing out post info -->

	<?php foreach ($feeds as $feed): ?>
	<tr>
		<td><?php echo $feed['Feed']['id']; ?></td>
		<td>
			<?php echo $html->link($feed['Feed']['name'], 
"/feeds/view/".$feed['Feed']['id']); ?>
		</td>
		<td><?php echo $html->link($feed['Feed']['feed'],$feed['Feed']['feed']); ?></td>
		<td>
			<?php echo $html->link('Editar', "/admin/feeds/edit/{$feed['Feed']['id']}")?>
			<?php echo $html->link('Apagar', "/admin/feeds/delete/{$feed['Feed']['id']}", null, 'Are you sure?' )?>
		</td>
	</tr>
	<?php endforeach; ?>

</table>

<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null);?>
	<?php echo $paginator->numbers(array("separator" =>" ")); ?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null);?>
</div>

<h3><?php echo $html->link('Adicionar', "/admin/feeds/add")?></h3>