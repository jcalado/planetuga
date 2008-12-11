<h1>Esqueci-me da password</h1>
<?php
	echo $form->create('User', array('action' => 'reset'));
	echo $form->input('email');
	echo $form->end('Enviar');
?>

<p class="note">Será enviada uma mensagem para o seu email que contém um link. Deve clicar nele para que os seus novos dados lhe sejam enviados.</p>


<script type="text/javascript">
$('.note').effect("pulsate", { times: 3 }, 500);
</script>