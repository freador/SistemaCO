<?php

App::uses("AppModel", "Model");

class Caluno extends AppModel {
		public $validate = array(
		'nome' => array('rule' => 'notEmpty'),
		'escola_id' => array('rule' => 'notEmpty'),
		'serie' => array('rule' => 'notEmpty'),
		'idade' => array('rule' => 'notEmpty'),
		'oficina_id' => array('rule' => 'notEmpty'),
		'dataInicio' => array('rule' => 'notEmpty'),
		'dataTermino' => array('rule' => 'notEmpty'),
		'horaInicio' => array('rule' => 'notEmpty'),
		'horaTermino' => array('rule' => 'notEmpty'),
		'nomeResp' => array('rule' => 'notEmpty'),
		'rg' => array('rule' => 'notEmpty'),
		'gParent' => array('rule' => 'notEmpty'),
		'telefone' => array('rule' => 'notEmpty'),
		'autorizado' => array('rule' => 'notEmpty'),
		'assinado' => array('rule' => 'notEmpty'),
		);
		
}
?>