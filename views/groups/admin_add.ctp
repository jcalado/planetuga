<h1>Adicionar Grupo</h1>
<?php
echo $form->create('Group');
echo $form->input('name');
echo $form->input('created_at');
echo $form->end('Adicionar');
?>