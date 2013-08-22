<?php
	class MarcoZerosController extends AppController {
		public $helpers = array('Html','Form','Js');
		public $components = array(
        'RequestHandler'
    	);
		
		public function index(){
				$this->set('MarcoZeros', $this->MarcoZero->find('all'));
				$this->layout = 'default';
		}		
		
		public function add_08_12(){
			if($this->request->is('post')){
				$this->MarcoZero->create();
				if ($this->MarcoZero->save($this->request->data)) {
						$this->request->data['MarcoZeros']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->MarcoZero->saveField('last_user', $this->request->data['MarcoZeros']['last_user']);
						$this->Session->setFlash('Aluno Salvo com Sucesso.');
						$this->redirect(array('action' => 'index'));
				}else{$this->Session->setFlash('Houve algum erro tente novamente!');}
			}
		}
		
		public function add_13_17(){
			if($this->request->is('post')){
				$this->MarcoZero->create();
				if ($this->MarcoZero->save($this->request->data)) {
						$this->request->data['MarcoZeros']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->MarcoZero->saveField('last_user', $this->request->data['MarcoZeros']['last_user']);
						$this->Session->setFlash('Aluno Salvo com Sucesso.');
						$this->redirect(array('action' => 'index'));
				}else{$this->Session->setFlash('Houve algum erro tente novamente!');}
			}
		}
		
		public function add_18_24(){
			if($this->request->is('post')){
				$this->MarcoZero->create();
				if ($this->MarcoZero->save($this->request->data)) {
						$this->request->data['MarcoZeros']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->MarcoZero->saveField('last_user', $this->request->data['MarcoZeros']['last_user']);
						$this->Session->setFlash('Aluno Salvo com Sucesso.');
						$this->redirect(array('action' => 'index'));
				}else{$this->Session->setFlash('Houve algum erro tente novamente!');}
			}
		}

		public function slct(){
			
			$oficinas = $this->MarcoZero->query("SELECT id FROM co_coficinas;");
			$this->set('data',$oficinas);
			
			
		}
		
		public function edit($id = null){
				if (!$id) {
					throw new NotFoundException(__('Invalid post'));
				}
				$MarcoZero= $this->MarcoZero->findById($id);
				if (!$MarcoZero) {
					throw new NotFoundException(__('Invalid post'));
				}
				if ($this->request->is('post') || $this->request->is('put')) {
					$this->MarcoZero->id = $id;
					if ($this->MarcoZero->save($this->request->data)) {
						$this->request->data['MarcoZero']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->MarcoZero->saveField('last_user', $this->request->data['MarcoZero']['last_user']);
						$this->Session->setFlash('Sua escola foi editada com suscesso');
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash('Houve algum erro tente novamente');
					}
				}
					if (!$this->request->data) {
						$this->request->data = $MarcoZero;
					}
		
		}
		
	}