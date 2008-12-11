<h1>Alterar password</h1>
<? echo $form->create('User', array('action' => 'changepassword')); ?>
	<?	echo $form->input('old_password',array('label'=>'Antiga password','size'=>20,'div'=>true,'type'=>'password')); ?>
	<?	echo $form->input('password',array('label'=>'Nova password','size'=>20,'div'=>true,'type'=>'password')); ?>
	<?	echo $form->input('repeat_password',array('label'=>'Confirme','size'=>20,'div'=>true,'type'=>'password')); ?>
<?	echo $form->end('Submit'); ?>

