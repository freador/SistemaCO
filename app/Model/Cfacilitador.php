<?php

App::uses("AppModel", "Model");

class Cfacilitador extends AppModel {
		public $validate = array(
		'nome' => array('rule' => 'notEmpty'),
		'end' => array('rule' => 'notEmpty'),
		'cidade' => array('rule' => 'notEmpty'),
		'estado' => array('rule' => 'notEmpty'),
		'bairro' => array('rule' => 'notEmpty'),
		'cel' => array('rule' => 'notEmpty'),
		'tel' => array('rule' => 'notEmpty'),
		'datanascimento' => array('rule' => 'notEmpty'),
		'email' => array('rule' => 'notEmpty'),
		'facebook' => array('rule' => 'notEmpty')		
		);
		
}
?>