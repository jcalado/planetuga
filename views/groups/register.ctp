<div class="login"> 
<h2>Registar</h2>     
<?php
    echo $form->create('User', array('action' => 'register'));
    echo $form->input('username');
    echo $form->input('password');
	echo $form->input('confirm_password');
    echo $form->input('name');
	echo $form->input('email');
	echo $form->hidden("created_at",array("value" => date('Y-m-d H:i:s')));
    echo $form->end('Registar');
?>
</div>