<h1>Editar Post</h1>
<?php
	echo $form->create('Post', array('action' => 'edit'));
	echo $form->input('title');
	echo $form->input('permalink');
	echo $form->input('content', array('rows' => '5', 'columns' => '10'));
        echo $form->input('id', array('type'=>'hidden')); 
	echo $form->end('Save Post');
?>