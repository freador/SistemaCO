<!-- /app/View/Iscas -->
<h1>Adicione uma Escola</h1>
<?php
echo $this->Form->create('Cescola');
echo $this->Form->input('Nescola', array('title' => 'Nome Escola', 'label' => 'Nome Escola'));
echo $this->Form->input('Bairro');
echo $this->Form->input('Cidade');
echo $this->Form->input('Estado');
echo $this->Form->input('Endereco');
echo $this->Form->input('diretora');
echo $this->Form->input('contato');
echo $this->Form->input('email');
echo $this->Form->end('Save Post');
?>