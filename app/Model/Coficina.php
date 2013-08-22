<?php

App::uses("AppModel", "Model");

class Coficina extends AppModel {
		public $validate = array(
		'nome' => array('rule' => 'notEmpty'),
		'escola_id' => array('rule' => 'notEmpty'),
		'dataInicio' => array('rule' => 'notEmpty'),
		'dataTermino' => array('rule' => 'notEmpty'),
		'horaInicio' => array('rule' => 'notEmpty'),
		'horaTermino' => array('rule' => 'notEmpty')
		);
		
}
?>
