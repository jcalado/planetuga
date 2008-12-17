<fieldset>
	<legend><? __('Add Announce') ?></legend>
<?php
echo $form->create('Announce');
echo $form->input('title');
echo $form->input('date');
echo $form->input('content', array('rows' => '3'));
echo $form->end('Adicionar');
?>
</fieldset>