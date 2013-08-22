<h1>Cadastro de Facilitadores</h1>
<?php

echo $this->Form->create('Cfacilitador');
echo $this->Form->input('nome');
echo $this->Form->input('end', array('title' => 'Endereço', 'label' => 'Endereço'));
echo $this->Form->input('cidade', array('title' => 'Cidade', 'label' => 'Cidade'));
echo $this->Form->input('estado', array('title' => 'Estado', 'label' => 'Estado'));
echo $this->Form->input('bairro', array('title' => 'Bairro', 'label' => 'Bairro'));
echo $this->Form->input('cel', array('title' => 'Celular', 'label' => 'Celular'));
echo $this->Form->input('tel', array('title' => 'Telefone', 'label' => 'Telefone'));
echo $this->Form->input('datanascimento', array('title' => 'Data de Nascimento', 'label' => 'Data de Nascimento'));
echo $this->Form->input('email', array('title' => 'E-mail:', 'label' => 'E-mail:'));
echo $this->Form->input('facebook', array('title' => 'Facebook', 'label' => 'Facebook'));
echo $this->Form->end('Save Post');

?>