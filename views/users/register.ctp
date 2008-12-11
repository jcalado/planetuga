<div class="login"> 
<h2>Nova conta</h2>     

<h4>Dados de acesso</h4>
<?  echo $form->create('User', array('action' => 'register')); ?>
<?  echo $form->input('username'); ?>
<?  echo $form->input('password'); ?>
<?	echo $form->input('confirm_password',array('label'=>'Confirme:','size'=>20,'div'=>true,'type'=>'password')); ?>

<h4>Dados pessoais</h4>
<?	echo $form->input('name',array('label'=>'Nome')); ?>
<?	echo $form->input('email',array('label'=>'E-Mail')); ?>
<?	echo $form->hidden("created_at",array("value" => date('Y-m-d H:i:s'))); ?>
<?  echo $form->end('Registar'); ?>

</div>