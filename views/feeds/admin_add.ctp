<h1>Adicionar Feed</h1>
<?php
echo $form->create('Feed');
echo $form->input('name');
echo $form->input('url');
echo $form->input('feed');
echo $form->label('user_id','Utilizador');
echo $form->select('user_id',$users);
echo $form->input('description', array('rows' => '3'));
echo $form->end('Adicionar');
?>