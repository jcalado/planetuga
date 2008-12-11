<h1>Editar anúncio</h1>
<?php
	echo $form->create('Announce', array('action' => 'edit'));
	echo $form->input('title');
	echo $form->input('date');
	echo $form->input('content', array('rows' => '5', 'columns' => '10'));
        echo $form->input('id', array('type'=>'hidden')); 
	echo $form->checkbox('status');
	echo $form->end('Guardar anúncio');
?>