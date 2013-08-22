<?php

App::uses("AppModel", "Model");

class Roficineiro extends AppModel {

	public $validate = array(
		'nome' => array('rule' => 'notEmpty'), 
		'oficina_id' => array('rule' => 'notEmpty'), 
		'vcplanejamento' => array('rule' => 'notEmpty'),
		'tempodeatv' => array('rule' => 'notEmpty'),
		'apropatendesug' => array('rule' => 'notEmpty'),
		'oficinasentido' => array('rule' => 'notEmpty'),
		'motivouapr' => array('rule' => 'notEmpty'),
		'ocorr' => array('rule' => 'notEmpty'),
		'encam' => array('rule' => 'notEmpty'),
		'pp' => array('rule' => 'notEmpty'),
		'pm' => array('rule' => 'notEmpty'),
		'pv' => array('rule' => 'notEmpty'), 

 );

}
?>