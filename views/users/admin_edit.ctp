<h1><? __('Edit user') ?></h1>
<?php
	echo $form->create('User', array('action' => 'edit'));
	echo $form->input('name');
	echo $form->input('username');
	echo $form->input('group_id');
	echo $form->input('password');
	echo $form->input('email');
	echo $form->input('created_at');
        echo $form->input('id', array('type'=>'hidden')); 
	echo $form->end('Guardar');
?>