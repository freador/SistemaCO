<?php

App::uses("AppModel", "Model");

class Fcadastral extends AppModel {
	public $validate = array(
		'idade' => array('rule' => 'notEmpty'), 
		'serie' => array('rule' => 'notEmpty'), 
		'nomeAluno' => array('rule' => 'notEmpty'), 
		'sexo' => array('rule' => 'notEmpty'),
		'dnascimento'=> array('rule' => 'notEmpty'),
		'cidadeon'=> array('rule' => 'notEmpty'), 
		'estadon' => array('rule' => 'notEmpty'), 
		'cep' => array('rule' => 'notEmpty'),
		'tfixo' => array('rule' => 'notEmpty'),
		'tcelular' => array('rule' => 'notEmpty'),
		'trecado' => array('rule' => 'notEmpty'),
		'falac' => array('rule' => 'notEmpty'), 
		'email' => array('rule' => 'notEmpty'), 
		'assinou' => array('rule' => 'notEmpty'), 
		'rg' => array('rule' => 'notEmpty')
	);

	//public $belongsTo = array("Cescola" => array("className" => "Cescola", "foreignKey" => "escola_id"));
}
?>