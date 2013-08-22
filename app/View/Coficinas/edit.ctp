<h1>Edição de Oficina</h1>
<?php

echo $this->Form->create('Coficina');
echo $this->Form->input('nome');
$a = array();
foreach ($id as $key => $value) {
 array_push($a,array('name'=>$value["co_cescolas"]["Nescola"], 'value' => $value["co_cescolas"]["id"] ));	
 //array_push($b,$value["co_Cescolas"]["Nescola"] );
 
}

echo $this->Form->input('escola_id', array(
    "options"=>$a,
    "empty" => "Choose",
));

echo $this->Form->input('dataInicio', array('title' => 'Data de Inicio', 'label' => 'Data de Inicio'));
echo $this->Form->input('dataTermino', array('title' => 'Data de Termino', 'label' => 'Data de Termino'));
echo $this->Form->input('horaInicio', array('title' => 'Hora de Inicio', 'label' => 'Hora de Inicio'));
echo $this->Form->input('horaTermino', array('title' => 'Hora de Termino', 'label' => 'Hora de Termino'));
echo $this->Form->end('Save Post');

?>