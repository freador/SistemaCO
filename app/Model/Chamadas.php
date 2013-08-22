<?php

App::uses("AppModel", "Model");

class Chamadas extends AppModel {
		public $validate = array(
		'nome' => array('rule' => 'notEmpty'),
		'escola_id' => array('rule' => 'notEmpty'),
		'serie' => array('rule' => 'notEmpty'),
		);
		
}
?>