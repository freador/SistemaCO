<?php
	class RoficineirosController extends AppController {
		public $helpers = array('Html','Form');
		public function index(){
				$this->set('Roficineiros', $this->Roficineiro->find('all'));
				$this->layout = 'default';
		}		
		
		public function add(){
			if($this->request->is('post')){
				$this->Roficineiro->create();
				if ($this->Roficineiro->save($this->request->data)) {
						$this->request->data['Roficineiros']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->Roficineiro->saveField('last_user', $this->request->data['Roficineiros']['last_user']);
						$this->Session->setFlash('Sua Escola Foi Salva com Sucesso.');
						$this->redirect(array('action' => 'index'));
				}else{$this->Session->setFlash('Houve algum erro tente novamente!');}
			}
			$id = $this->Roficineiro->query("SELECT id,nome FROM co_coficinas;");
			$this->set('id',$id);
		}
		
		public function edit($id = null){
				if (!$id) {
					throw new NotFoundException(__('Invalid post'));
				}
				$Roficineiro= $this->Roficineiro->findById($id);
				if (!$Roficineiro) {
					throw new NotFoundException(__('Invalid post'));
				}
				if ($this->request->is('post') || $this->request->is('put')) {
					$this->Roficineiro->id = $id;
					if ($this->Roficineiro->save($this->request->data)) {
						$this->request->data['Roficineiro']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->Roficineiro->saveField('last_user', $this->request->data['Roficineiro']['last_user']);
						$this->Session->setFlash('Sua escola foi editada com suscesso');
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash('Houve algum erro tente novamente');
					}
				}
					if (!$this->request->data) {
						$this->request->data = $Roficineiro;
					}
		
		}
		
	}