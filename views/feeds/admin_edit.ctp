<h1>Edit Feed</h1>
<?php
	echo $form->create('Feed', array('action' => 'edit'));
	echo $form->input('name');
	echo $form->input('url');
	echo $form->input('feed');
	echo $form->input('description', array('rows' => '3'));
        echo $form->input('id', array('type'=>'hidden')); 
	echo $form->end('Save Feed');
?>