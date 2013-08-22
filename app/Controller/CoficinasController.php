<?php
	class CoficinasController extends AppController {
		public $helpers = array('Html','Form');
		public function index(){
				$this->set('Coficinas', $this->Coficina->find('all'));
				$this->layout = 'default';
		}		
		
		public function add(){
			if($this->request->is('post')){
				$this->Coficina->create();
				if ($this->Coficina->save($this->request->data)) {
						$this->request->data['Coficinas']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->Coficina->saveField('last_user', $this->request->data['Coficinas']['last_user']);
						$this->Session->setFlash('Sua Oficina Foi Salva com Sucesso.');
						$this->redirect(array('action' => 'index'));
				}else{$this->Session->setFlash('Houve algum erro tente novamente!');}
			}
			
			$id = $this->Coficina->query("SELECT id,Nescola FROM co_cescolas;");
			$this->set('id',$id);
		}
		
				public function edit($id = null){
				if (!$id) {
					throw new NotFoundException(__('Invalid post'));
				}
				$Coficina= $this->Coficina->findById($id);
				if (!$Coficina) {
					throw new NotFoundException(__('Invalid post'));
				}
				if ($this->request->is('post') || $this->request->is('put')) {
					$this->Coficina->id = $id;
					if ($this->Coficina->save($this->request->data)) {
						$this->request->data['Coficina']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->Coficina->saveField('last_user', $this->request->data['Coficina']['last_user']);
						$this->Session->setFlash('Sua escola foi editada com suscesso');
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash('Houve algum erro tente novamente');
					}
				}
					if (!$this->request->data) {
						$this->request->data = $Coficina;
					}
				$id = $this->Coficina->query("SELECT id,Nescola FROM co_cescolas;");
				$this->set('id',$id);
		}
		
	}
?>