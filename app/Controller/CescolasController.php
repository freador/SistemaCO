<?php
	class CescolasController extends AppController {
		public $helpers = array('Html','Form');
		public function index(){
				$this->set('Cescolas', $this->Cescola->find('all'));
				$this->layout = 'default';
		}		
		
		public function add(){
			if($this->request->is('post')){
				$this->Cescola->create();
				if ($this->Cescola->save($this->request->data)) {
						$this->request->data['Cescolas']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->Cescola->saveField('last_user', $this->request->data['Cescolas']['last_user']);
						$this->Session->setFlash('Sua Escola Foi Salva com Sucesso.');
						$this->redirect(array('action' => 'index'));
				}else{$this->Session->setFlash('Houve algum erro tente novamente!');}
			}
		}
		
		public function edit($id = null){
				if (!$id) {
					throw new NotFoundException(__('Invalid post'));
				}
				$cescola= $this->Cescola->findById($id);
				if (!$cescola) {
					throw new NotFoundException(__('Invalid post'));
				}
				if ($this->request->is('post') || $this->request->is('put')) {
					$this->Cescola->id = $id;
					if ($this->Cescola->save($this->request->data)) {
						$this->request->data['Cescola']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->Cescola->saveField('last_user', $this->request->data['Cescola']['last_user']);
						$this->Session->setFlash('Sua escola foi editada com suscesso');
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash('Houve algum erro tente novamente');
					}
				}
					if (!$this->request->data) {
						$this->request->data = $cescola;
					}
		
		}
		
	}