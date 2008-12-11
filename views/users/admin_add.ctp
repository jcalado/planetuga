<h1>Adicionar Utilizador</h1>
<?php
echo $form->create('User');
echo $form->input('username');
echo $form->input('password');
echo $form->input('email');
echo $form->input('created_at');
echo $form->input('name');
echo $form->end('Adicionar');
?>