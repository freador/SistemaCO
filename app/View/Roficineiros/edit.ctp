
<h1>Editar o Relatório</h1>
<?php

echo $this->Form->create('Roficineiro');
echo $this->Form->input('nome');
	?>

<div class="input select required">
	<label for="MarcoZeroSexo">Escolha uma Escola</label>
	<select name="data[Roficineiro][escola_id]" id="escola">
		<option value="">Escolha uma Opção</option>
	</select>
</div>

<div class="input select required">
	<label for="MarcoZeroSexo">Escolha uma oficina</label>
		<select name="data[Roficineiro][oficina_id]" id="oficina">
		<option value="">Escolha uma opção</option>
	</select>
</div>


<?php
	
echo $this->Form->input('vcplanejamento', array('title' => 'Você cumpriu o planejamento das atividades propostas para a oficina?', 'label' => 'Você cumpriu o planejamento das atividades propostas para a oficina?'));
echo $this->Form->input('tempodeatv', array('title' => 'O tempo foi adequado para desenvolver as atividades propostas?', 'label' => 'O tempo foi adequado para desenvolver as atividades propostas?'));
echo $this->Form->input('apropatendesug', array('title' => 'No geral, você avalia que a proposta da oficina atendeu os objetivos sugeridos?', 'label' => 'No geral, você avalia que a proposta da oficina atendeu os objetivos sugeridos?'));
echo $this->Form->input('oficinasentido', array('title' => 'Considera que a oficina fez sentido para os alunos?', 'label' => 'Considera que a oficina fez sentido para os alunos?'));
echo $this->Form->input('motivouapr', array('title' => 'Considera que a oficina os motivou para a aprendizagem?', 'label' => 'Considera que a oficina os motivou para a aprendizagem?'));
echo $this->Form->input('ocorr', array('title' => 'Ocorrências', 'label' => 'Ocorrências', 'rows' => '3'));
echo $this->Form->input('encam', array('title' => 'Encaminhamento', 'label' => 'Encaminhamento', 'rows' => '3'));
echo $this->Form->input('pp', array('title' => 'Pontos Positivos', 'label' => 'Pontos Positivos', 'rows' => '3'));
echo $this->Form->input('pm', array('title' => 'Pontos a Melhorar', 'label' => 'Pontos a Melhorar', 'rows' => '3'));
echo $this->Form->input('pv', array('title' => 'Próxima Vez', 'label' => 'Próxima Vez', 'rows' => '3'));

echo $this->Form->end('Save Post');

?>