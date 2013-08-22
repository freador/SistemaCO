<?php
	class ChamadasController extends AppController {
		public $helpers = array('Html','Form');
		public $components = array('RequestHandler');	
		
		
			
		public function index(){
				$this->layout = 'default';
		}
		
		public function selct_oficina(){
		
			if( isset($_GET["idEscola"])){			
				$idEscola = $_GET["idEscola"];
				try{
						$oficinas = $this->Chamada->query("SELECT * FROM `co_coficinas`  WHERE escola_id={$idEscola};");
						$a = array();
						foreach ($oficinas as $key => $value) {
 								array_push($a,array('name'=>$value["co_coficinas"]["nome"], 'value' => $value["co_coficinas"]["id"] )); 
						}			 
					
				}catch( Exception $e){ echo $e;}
			}else{echo 'error';}
			$this->layout = null;
			Router::parseExtensions('jsonp');
			$this->set('off', $a);		
			
			
		}
		
		public function selct_escola(){
			
			$oficinas = $this->Chamada->query("SELECT * FROM `co_cescolas`;");
				$a = array();
			foreach ($oficinas as $key => $value) {
 				array_push($a,array('name'=>$value["co_cescolas"]["Nescola"], 'value' => $value["co_cescolas"]["id"] )); 
			}
			$this->layout = null;
			Router::parseExtensions('jsonp');
			$this->set('off', $a);		
			
			
		}		
		
		public function selct_aluno(){
			
			if( isset($_GET["idEscola"]) && isset($_GET["idOficina"]) ){			
				$idEscola = $_GET["idEscola"];
				$idOficina = $_GET["idOficina"];
				try{
						$oficinas = $this->Chamada->query("SELECT id,nome FROM `co_calunos`  WHERE escola_id={$idEscola} AND oficina_id={$idOficina} AND r_aluno = '' LIMIT 0 , 30;");
						$a = array();
						foreach ($oficinas as $key => $value) {
 								array_push($a,array('name'=>$value["co_calunos"]["nome"], 'value' => $value["co_calunos"]["id"] )); 
						}			 
					
				}catch( Exception $e){ echo $e;}
			}else{echo 'error';}
			$this->layout = null;
			Router::parseExtensions('jsonp');
			$this->set('off', $a);				
			
		}	
		
		public function insert_aluno_chamada(){
			$auth = $this->request->data['Calunos']['last_user'] = $this->Auth->user('id'); //Added this line
			if( isset($_GET["escola"]) && isset($_GET["oficina"])  && isset($_GET["id"]) && isset($_GET["nome"]) && isset($_GET["present"]) && isset($_GET["data"]) ){			
				$escola = $_GET["escola"];
				$oficina = $_GET["oficina"];
				$nome = $_GET["nome"];
				$present = $_GET["present"];
				$data = $_GET["data"];
				$id = $_GET["id"];
				try{
						$oficinas = $this->Chamada->query("INSERT INTO  `co_chamadas` (`id` ,`id_aluno` ,`nome` ,`escola_id` ,`oficina_id` ,`presenca` ,`date` ,`created` ,`updated` ,`last_user`)
						VALUES (NULL ,  '{$id}',  '{$nome}',  '{$escola}',  '{$oficina}',  '{$present}',  '{$data}',  '{$data}',  '{$data}',  '{$auth}');"); 			 
					
				}catch( Exception $e){ echo $e;}
			}else{echo 'error';}
			$this->layout = null;
			Router::parseExtensions('jsonp');
			$a = null;
			$this->set('off', $a);				
			
		}		
		
		public function ver_presenca(){}
		
		public function select_chamada(){
			
			if( isset($_GET["idEscola"]) && isset($_GET["idOficina"]) ){			
				$idEscola = $_GET["idEscola"];
				$idOficina = $_GET["idOficina"];
				try{
						$oficinas = $this->Chamada->query("SELECT id_aluno,nome, count(presenca) as presen FROM `co_chamadas`  WHERE escola_id={$idEscola} AND oficina_id={$idOficina} AND presenca = 'P' AND r_aluno = '' GROUP BY nome LIMIT 0 , 30;");
					
						$a = array();
						foreach ($oficinas as $key => $value) {
 								array_push($a,array('name'=>$value["co_chamadas"]["nome"], 'value' => $value["co_chamadas"]["id_aluno"],'presen' => $value[0]["presen"] )); 
						}			 
					
				}catch( Exception $e){ echo $e;}
			}else{echo 'error';}
			$this->layout = null;
			Router::parseExtensions('jsonp');
			$this->set('off', $a);				
			
			
		}
		
		public function update_aluno_chamada(){
			
			if( isset($_GET["id"]) && isset($_GET["rc"]) ){			
				$id = $_GET["id"];
				$rc = $_GET["rc"];
				try{
						$oficinas = $this->Chamada->query("UPDATE `co_calunos` SET r_aluno = {$rc} WHERE id = {$id}  ");
						$oficinas = $this->Chamada->query("UPDATE `co_chamadas` SET r_aluno = {$rc} WHERE id_aluno = {$id}  ");
				}catch( Exception $e){ echo $e;}
			}else{echo 'error';}
			$this->layout = null;
			Router::parseExtensions('jsonp');
			$a = null;
			$this->set('off', $a);				
			
			
		}
				
		

	}
?>