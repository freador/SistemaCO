<?php
	class CalunosController extends AppController {
		
		public $helpers = array('Html','Form','Js');
		public $components = array(
        'RequestHandler'
    	);
		 public function beforeFilter() {
        if ($this->RequestHandler->accepts('html')) {
            // Execute code only if client accepts an HTML (text/html) response
        } elseif ($this->RequestHandler->accepts('xml')) {
            // Execute XML-only code
        }
        if ($this->RequestHandler->accepts(array('xml', 'rss', 'atom'))) {
            // Executes if the client accepts any of the above: XML, RSS or Atom
        }
    }
		public function index(){
				$this->set('Calunos', $this->Caluno->find('all'));
				$this->layout = 'default';
		}		
		
		public function add_08_17(){
			if($this->request->is('post')){
				$this->Caluno->create();
				if ($this->Caluno->save($this->request->data)) {
						$this->request->data['Calunos']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->Caluno->saveField('last_user', $this->request->data['Calunos']['last_user']);
						$this->Session->setFlash('Aluno Salvo com Sucesso.');
						$this->redirect(array('action' => 'index'));
				}else{$this->Session->setFlash('Houve algum erro tente novamente!');}
			}
			$id = $this->Caluno->query("SELECT id,Nescola FROM co_cescolas;");
			$this->set('id',$id);
			$oficinas = $this->Caluno->query("SELECT id,nome FROM co_coficinas;");
			$this->set('oficinas',$oficinas);
		}
		
		public function add_18_24(){
			if($this->request->is('post')){
				$this->Caluno->create();
				if ($this->Caluno->save($this->request->data)) {
						$this->request->data['Calunos']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->Caluno->saveField('last_user', $this->request->data['Calunos']['last_user']);
						$this->Session->setFlash('Aluno Salvo com Sucesso.');
						$this->redirect(array('action' => 'index'));
				}else{$this->Session->setFlash('Houve algum erro tente novamente!');}
			}
			$id = $this->Caluno->query("SELECT id,Nescola FROM co_cescolas;");
			$this->set('id',$id);
			$oficinas = $this->Caluno->query("SELECT id,nome FROM co_coficinas;");
			$this->set('oficinas',$oficinas);
		}

		public function slct(){
			
			$oficinas = $this->Caluno->query("SELECT id FROM co_coficinas;");
			$this->set('data',$oficinas);
			
			
		}
		
		public function edit($id = null){
				if (!$id) {
					throw new NotFoundException(__('Invalid post'));
				}
				$Caluno= $this->Caluno->findById($id);
				if (!$Caluno) {
					throw new NotFoundException(__('Invalid post'));
				}
				if ($this->request->is('post') || $this->request->is('put')) {
					$this->Caluno->id = $id;
					if ($this->Caluno->save($this->request->data)) {
						$this->request->data['Caluno']['last_user'] = $this->Auth->user('id'); //Added this line
						$this->Caluno->saveField('last_user', $this->request->data['Caluno']['last_user']);
						$this->Session->setFlash('Sua escola foi editada com suscesso');
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash('Houve algum erro tente novamente');
					}
				}
					if (!$this->request->data) {
						$this->request->data = $Caluno;
					}
			$id = $this->Caluno->query("SELECT id,Nescola FROM co_cescolas;");
			$this->set('id',$id);
			$oficinas = $this->Caluno->query("SELECT id,nome FROM co_coficinas;");
			$this->set('oficinas',$oficinas);
		
		}
		
	}