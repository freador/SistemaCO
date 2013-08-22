<?php
	class CfacilitadorsController extends AppController {
		public $helpers = array('Html','Form');
		public function index(){
				$this->set('Cfacilitadors', $this->Cfacilitador->find('all'));
				$this->layout = 'default';
		}		
		
		public function add(){
			if($this->request->is('post')){
				$this->Cfacilitador->create();
				if ($this->Cfacilitador->save($this->request->data)) {
						$this->request->data['Cfacilitadors']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->Cfacilitador->saveField('last_user', $this->request->data['Cfacilitadors']['last_user']);
						$this->Session->setFlash('Seu Facilitador Foi Salvo com Sucesso.');
						$this->redirect(array('action' => 'index'));
				}else{$this->Session->setFlash('Houve algum erro tente novamente!');}
			}
		}
		
		public function edit($id = null){
				if (!$id) {
					throw new NotFoundException(__('Invalid post'));
				}
				$Cfacilitador= $this->Cfacilitador->findById($id);
				if (!$Cfacilitador) {
					throw new NotFoundException(__('Invalid post'));
				}
				if ($this->request->is('post') || $this->request->is('put')) {
					$this->Cfacilitador->id = $id;
					if ($this->Cfacilitador->save($this->request->data)) {
						$this->request->data['Cfacilitador']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->Cfacilitador->saveField('last_user', $this->request->data['Cfacilitador']['last_user']);
						$this->Session->setFlash('Seu Facilitador foi editado com suscesso');
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash('Houve algum erro tente novamente');
					}
				}
					if (!$this->request->data) {
						$this->request->data = $Cfacilitador;
					}
		
		}
		
	}