<h1>Posts featured</h1>
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
			<?php echo $html->link('Demote', "/posts/demote/{$post['Post']['id']}")?>
		</td>
	</tr>
	<?php endforeach; ?>

</table>

<?php echo $paginator->prev("Anterior"); ?> 
<?php echo $paginator->numbers(); ?> 
<?php echo $paginator->next("Seguinte"); ?>
