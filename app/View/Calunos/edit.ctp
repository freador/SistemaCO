
<h1>Edição de Alunos</h1>
<?php

echo $this->Form->create('Caluno');
echo $this->Form->input('nome');
echo $this->Form->input('idade');

$a = array();
foreach ($id as $key => $value) {
 array_push($a,array('name'=>$value["co_cescolas"]["Nescola"], 'value' => $value["co_cescolas"]["id"] ));	
 //array_push($b,$value["co_Cescolas"]["Nescola"] );
 
}

echo $this->Form->input('escola_id', array(
    "options"=>$a,
    "empty" => "Choose",
));

$b = array();
foreach ($oficinas as $key => $value) {
 array_push($b,array('name'=>$value["co_coficinas"]["nome"], 'value' => $value["co_coficinas"]["id"] ));	
 //array_push($b,$value["co_Cescolas"]["Nescola"] );
 
}

echo $this->Form->input('oficina_id', array(
    "options"=>$b,
    "empty" => "Choose",
));

echo $this->Form->input('serie');
echo $this->Form->input('dataInicio', array('title' => 'Data de Inicio', 'label' => 'Data de Inicio'));
echo $this->Form->input('dataTermino', array('title' => 'Data de Termino', 'label' => 'Data de Termino'));
echo $this->Form->input('horaInicio', array('title' => 'Hora de Inicio', 'label' => 'Hora de Inicio'));
echo $this->Form->input('horaTermino', array('title' => 'Hora de Termino', 'label' => 'Hora de Termino'));
echo $this->Form->input('rg');
echo $this->Form->input('telefone');
echo "<div id='input text'>";
echo "<label> Assinou? </label>";
echo "</div>";
echo $this->Form->checkbox('assinou', array('label'=> 'Assinou?', 'value' => 'SIM','style'=> 'margin-left: 8px;margin-top: -6px;margin-bottom: 35px;'));
echo $this->Form->end('Save Post');

?>