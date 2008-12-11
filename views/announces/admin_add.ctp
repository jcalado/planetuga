<h1>Adicionar Anúncio</h1>
<?php
echo $form->create('Announce');
echo $form->input('title');
echo $form->input('date');
echo $form->input('content', array('rows' => '3'));
echo $form->end('Adicionar');
?>