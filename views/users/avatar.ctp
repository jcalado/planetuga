<img src="/img/avatars/<? echo $session->read('Auth.User.id') ?>.png"/>
<? echo $form->create('User', array('action' => 'avatar','type' => 'file')); ?>
<? echo $form->file('Avatar')?>
<? echo $form->submit('Enviar')?>