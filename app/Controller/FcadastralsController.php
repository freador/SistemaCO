<?php
	class FcadastralsController extends AppController {
		public $helpers = array('Html','Form');
		public function index(){
				$this->set('Fcadastrals', $this->Fcadastral->find('all'));
				$this->layout = 'default';
		}		
		
		public function add_18_24(){
			if($this->request->is('post')){
				$this->Fcadastral->create();
				if ($this->Fcadastral->save($this->request->data)) {
						$this->request->data['Fcadastrals']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->Fcadastral->saveField('last_user', $this->request->data['Fcadastrals']['last_user']);
						$this->Session->setFlash('Sua Ficha Foi Salva com Sucesso.');
						$this->redirect(array('action' => 'index'));
				}else{$this->Session->setFlash('Houve algum erro tente novamente!');}
			}
			
			$id = $this->Fcadastral->query("SELECT id,Nescola FROM co_cescolas;");
			$this->set('id',$id);
		}
		
		public function add_08_17(){
			if($this->request->is('post')){
				$this->Fcadastral->create();
				if ($this->Fcadastral->save($this->request->data)) {
						$this->request->data['Fcadastrals']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->Fcadastral->saveField('last_user', $this->request->data['Fcadastrals']['last_user']);
						$this->Session->setFlash('Sua Ficha Foi Salva com Sucesso.');
						$this->redirect(array('action' => 'index'));
				}else{$this->Session->setFlash('Houve algum erro tente novamente!');}
			}
			
			$id = $this->Fcadastral->query("SELECT id,Nescola FROM co_cescolas;");
			$this->set('id',$id);
		}

		public function edit($id = null){
				if (!$id) {
					throw new NotFoundException(__('Invalid post'));
				}
				$Fcadastral= $this->Fcadastral->findById($id);
				if (!$Fcadastral) {
					throw new NotFoundException(__('Invalid post'));
				}
				if ($this->request->is('post') || $this->request->is('put')) {
					$this->Fcadastral->id = $id;
					if ($this->Fcadastral->save($this->request->data)) {
						$this->request->data['Fcadastral']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->Fcadastral->saveField('last_user', $this->request->data['Fcadastral']['last_user']);
						$this->Session->setFlash('Sua escola foi editada com suscesso');
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash('Houve algum erro tente novamente');
					}
				}
					if (!$this->request->data) {
						$this->request->data = $Fcadastral;
					}
							$id = $this->Fcadastral->query("SELECT id,Nescola FROM co_cescolas;");
			$this->set('id',$id);
		
		}
		
	}
?>