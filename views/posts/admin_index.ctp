<h1>Posts</h1>
<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>URL</th>
		<th>Actions</th>
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
			<?php echo $html->link('Edit', "/admin/posts/edit/{$post['Post']['id']}")?>
			<?php echo $html->link('Delete', "/admin/posts/delete/{$post['Post']['id']}", null, 'Are you sure?' )?>
		</td>
	</tr>
	<?php endforeach; ?>

</table>

<?php echo $paginator->prev("Anterior"); ?> 
<?php echo $paginator->numbers(); ?> 
<?php echo $paginator->next("Seguinte"); ?>

<h3><?php echo $html->link('Add', "/admin/posts/add")?></h3>