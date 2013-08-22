<?php

App::uses("AppModel", "Model");

class Cescola extends AppModel {
		public $validate = array('Nescola' => array('rule' => 'notEmpty'),'Bairro' => array('rule' => 'notEmpty'),'diretora' => array('rule' => 'notEmpty'),'email' => array('rule' => 'notEmpty'),'contato' => array('rule' => 'notEmpty'),'Cidade' => array('rule' => 'notEmpty'),'Estado' => array('rule' => 'notEmpty'), 'Endereco' => array('rule' => 'notEmpty'));
		
}
?>