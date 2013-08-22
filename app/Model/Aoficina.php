<?php

App::uses("AppModel", "Model");

class Aoficina extends AppModel {
		public $validate = array(
		'nome' => array('rule' => 'notEmpty'),
		'sexo' => array('rule' => 'notEmpty'),
		'idade' => array('rule' => 'notEmpty'),
		'oficinas_id' => array('rule' => 'notEmpty'),
		'foiint' => array('rule' => 'notEmpty'),
		'propaprend' => array('rule' => 'notEmpty'),
		'sentidovida' => array('rule' => 'notEmpty'),
		'enxop' => array('rule' => 'notEmpty'),
		'te' => array('rule' => 'notEmpty'),
		'rexpor' => array('rule' => 'notEmpty'),
		'psalgum' => array('rule' => 'notEmpty'),
		'pmateriais' => array('rule' => 'notEmpty'),
		'pjogos' => array('rule' => 'notEmpty'),
		'tcorpo' => array('rule' => 'notEmpty'),
		'esuacida' => array('rule' => 'notEmpty'),
		'tatitude' => array('rule' => 'notEmpty'),
		'cbem' => array('rule' => 'notEmpty'),
		'tmotivou' => array('rule' => 'notEmpty'),
		'qbom' => array('rule' => 'notEmpty'),
		'qpena' => array('rule' => 'notEmpty'),
		'qtal' => array('rule' => 'notEmpty')				
		);
		
}
?>