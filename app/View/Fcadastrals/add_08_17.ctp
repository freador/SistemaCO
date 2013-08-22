
<h1>Adicione uma Ficha Cadastral IDADE 18 24</h1>
<?php

echo $this->Form->create('Fcadastral');
echo $this->Form->input('nomeAluno', array('title' => 'Nome do Aluno', 'label' => 'Nome do Aluno'));
echo $this->Form->input('idade', array('title' => 'Idade', 'label' => 'Idade'));
echo $this->Form->input('serie');
echo $this->Form->input('sexo', array("options"=>array(array('name'=>'Masculino','value'=>'Masculino'),array('name' =>'Feminino','value'=>'Feminino')),
    "empty" => "Escolha um sexo"));

echo $this->Form->input('dnascimento', array('title' => 'Data do Nascimento', 'label' => 'Data do Nacimento'));
echo $this->Form->input('cidadeon', array('title' => 'Cidade Onde Nasceu', 'label' => 'Cidade Onde Nasceu'));
echo $this->Form->input('estadoon', array('title' => 'Estado Onde Nasceu', 'label' => 'Estado Onde Nasceu'));
echo $this->Form->input('cep');
echo $this->Form->input('tfixo', array('title' => 'Telefone Fixo', 'label' => 'Telefone Fixo'));
echo $this->Form->input('tcelular', array('title' => 'Telefone Celular', 'label' => 'Telefone Celular'));
echo $this->Form->input('trecado', array('title' => 'Telefone para Recado', 'label' => 'Telefone para Recado'));
echo $this->Form->input('falac', array('title' => 'Falar Com', 'label' => 'Falar Com'));
echo $this->Form->input('email', array('title' => 'E-mail', 'label' => 'E-mail'));
$a = array();
foreach ($id as $key => $value) {
 array_push($a,array('name'=>$value["co_cescolas"]["Nescola"], 'value' => $value["co_cescolas"]["id"] ));	
 //array_push($b,$value["co_Cescolas"]["Nescola"] );
 
}

echo $this->Form->input('escola_id', array(
    "options"=>$a,
    "empty" => "Escolha uma Escola"
));

echo $this->Form->input('qpagaContas', array('title' => 'Quem paga as despesas da casa (quem mais contribui na renda familiar)?', 'label' => 'Quem paga as despesas da casa (quem mais contribui na renda familiar)?',
    "options"=>array(array('name'=>'Pai','value'=>'Pai'),array('name' =>'Mãe','value'=>'Mãe'),array('name' =>'Irmã/Irmão','value'=>'Irmã/Irmão'),array('name' =>'Outros','value'=>'Outros')),
    "empty" => "Escolha uma opção"));
echo $this->Form->input('qrendafamilia', array('title' => 'Aproximadamente, qual é a renda total da sua família? (1 salário mínimo = R$ 678,00)', 'label' => 'Aproximadamente, qual é a renda total da sua família? (1 salário mínimo = R$ 678,00)',
    "options"=>array(array('name'=>'1 salário Minimo','value'=>'1 salário Minimo'),array('name' =>'2 salário Minimo','value'=>'2 salário Minimo'),array('name' =>'3 salário Minimo','value'=>'3 salário Minimo'),array('name' =>'4 salário Minimo','value'=>'4 salário Minimo'),array('name' =>'5 salário Minimo','value'=>'5 salário Minimo'),array('name' =>'+5 salário Minimo','value'=>'+5 salário Minimo')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('nresp',array('title' => 'Nome do Responsável', 'label' => 'Nome do Responsável'));
echo $this->Form->input('rg');
echo $this->Form->input('gparent',array('title' => 'Grau do Parentesco', 'label' => 'Grau do Parentesco'));
echo $this->Form->input('tresp', array('title' => 'Nome do Responsável', 'label' => 'Nome do responsável'));
//echo $this->Form->input('assinou', array('title' => 'Assinou?', 'label' => 'Assinou?'));
echo "<div id='input text'>";
echo "<label> Assinou? </label>";
echo "</div>";
echo $this->Form->checkbox('assinou', array('label'=> 'Assinou?', 'value' => 'SIM','style'=> 'margin-left: 8px;margin-top: -6px;margin-bottom: 35px;'));
echo $this->Form->end('Save Post');

?>