<?php
	class AoficinasController extends AppController {
		public $helpers = array('Html','Form');
		public function index(){
				$this->set('Aoficinas', $this->Aoficina->find('all'));
				$this->layout = 'default';
		}		
		
		public function add(){
			if($this->request->is('post')){
				$this->Aoficina->create();
				if ($this->Aoficina->save($this->request->data)) {
						$this->request->data['Aoficinas']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->Aoficina->saveField('last_user', $this->request->data['Aoficinas']['last_user']);
						$this->Session->setFlash('Sua Oficina Foi Salva com Sucesso.');
						$this->redirect(array('action' => 'index'));
				}else{$this->Session->setFlash('Houve algum erro tente novamente!');}
			}
			$oficinas = $this->Aoficina->query("SELECT id,nome FROM co_coficinas;");
			$this->set('oficinas',$oficinas);
		}
		
		public function edit($id = null){
				if (!$id) {
					throw new NotFoundException(__('Invalid post'));
				}
				$Aoficina= $this->Aoficina->findById($id);
				if (!$Aoficina) {
					throw new NotFoundException(__('Invalid post'));
				}
				if ($this->request->is('post') || $this->request->is('put')) {
					$this->Aoficina->id = $id;
					if ($this->Aoficina->save($this->request->data)) {
						$this->request->data['Aoficina']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->Aoficina->saveField('last_user', $this->request->data['Aoficina']['last_user']);
						$this->Session->setFlash('Sua avaliação foi editada com suscesso');
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash('Houve algum erro tente novamente');
					}
				}
					if (!$this->request->data) {
						$this->request->data = $Aoficina;
					}
			$id = $this->Aoficina->query("SELECT id,Nescola FROM co_cescolas;");
			$this->set('id',$id);
			$oficinas = $this->Aoficina->query("SELECT id,nome FROM co_coficinas;");
			$this->set('oficinas',$oficinas);
		
		}
	}
?>