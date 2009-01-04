<h1>Anúncios</h1>
<table>
	<tr>
		<th>ID</th>
		<th>Título</th>
		<th>Data</th>
		<th>Conteúdo</th>
		<th>Controlos</th>
	</tr>

	<!-- Here is where we loop through our $announces array, printing out announce info -->

	<?php foreach ($announces as $announce): ?>
	<tr>
		<td><?php echo $announce['Announce']['id']; ?></td>
		<td>
			<?php echo $html->link($announce['Announce']['title'], 
"/announces/view/".$announce['Announce']['id']); ?>
		</td>
		<td><?php echo $announce['Announce']['date']; ?></td>
		<td><?php echo $announce['Announce']['content']; ?></td>
		<td>
			<?php echo $html->link('<img src="/img/buttons/edit.png"/>', array('action'=>'edit', $announce['Announce']['id']), array(),false,false); ?>
			<?php echo $html->link('<img src="/img/buttons/delete.png"/>', array('action'=>'delete', $announce['Announce']['id']), array(),false,false); ?>			
		</td>
	</tr>
	<?php endforeach; ?>

</table>

<h3><?php echo $html->link('Adicionar', "/admin/announces/add")?></h3>