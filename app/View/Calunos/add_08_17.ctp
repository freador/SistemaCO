
<h1>Cadastro de Alunos</h1>
<?php

echo $this->Form->create('Caluno');
echo $this->Form->input('nome');
echo $this->Form->input('idade');?>

<div class="input select required">
	<label for="MarcoZeroSexo">Escolha uma Escola</label>
	<select name="data[Caluno][escola_id]" id="escola">
		<option value="">Escolha uma Opção</option>
	</select>
</div>

<div class="input select required">
	<label for="CalunosOficina">Escolha uma oficina</label>
		<select name="data[Caluno][oficina_id]" id="oficina">
		<option value="">Escolha uma opção</option>
	</select>
</div>
<?php
echo $this->Form->input('serie');

echo $this->Form->input('dataInicio', array('title' => 'Data de Inicio', 'label' => 'Data de Inicio'));
echo $this->Form->input('dataTermino', array('title' => 'Data de Termino', 'label' => 'Data de Termino'));
echo $this->Form->input('horaInicio', array('title' => 'Hora de Inicio', 'label' => 'Hora de Inicio'));
echo $this->Form->input('horaTermino', array('title' => 'Hora de Termino', 'label' => 'Hora de Termino'));
echo $this->Form->input('nomeResp', array('title' => 'Nome do Responsável', 'label' => 'Nome do Responsável'));
echo $this->Form->input('rg');
echo $this->Form->input('gParent', array('title' => 'Grau Parentesco', 'label' => 'Grau Parentesco'));
echo $this->Form->input('telefone');
echo "<div id='input text'>";
echo "<label> Autorizado? </label>";
echo "</div>";
echo $this->Form->checkbox('autorizado', array('label'=> 'Assinou?', 'value' => 'SIM','style'=> 'margin-left: 8px;margin-top: -6px;margin-bottom: 35px;'));
echo "<div id='input text'>";
echo "<label> Assinou? </label>";
echo "</div>";
echo $this->Form->checkbox('assinou', array('label'=> 'Assinou?', 'value' => 'SIM','style'=> 'margin-left: 8px;margin-top: -6px;margin-bottom: 35px;'));
echo $this->Form->end('Save Post');

?>