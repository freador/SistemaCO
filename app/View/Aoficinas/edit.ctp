<!-- /app/View/Iscas -->
<h1>Edite uma Avaliação</h1>
<?php
echo $this->Form->create('Aoficina');

echo $this->Form->input('nome');

echo $this->Form->input('sexo', array("options"=>array(array('name'=>'Masculino','value'=>'Masculino'),array('name' =>'Feminino','value'=>'Feminino')),
    "empty" => "Escolha um sexo"));

echo $this->Form->input('idade');

	?>

<div class="input select required">
	<label for="MarcoZeroSexo">Escolha uma Escola</label>
	<select name="data[Aoficina][escola_id]" id="escola">
		<option value="">Escolha uma Opção</option>
	</select>
</div>

<div class="input select required">
	<label for="MarcoZeroSexo">Escolha uma oficina</label>
		<select name="data[Aoficina][oficina_id]" id="oficina">
		<option value="">Escolha uma opção</option>
	</select>
</div>


<?php
	

echo $this->Form->input('foiint', array('label' => 'Foi interessante para você?',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('propaprend', array('label' => 'Proporcionou que você aprendesse coisas novas?',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('sentidovida', array('label' => 'Faz sentido na sua vida? ',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('enxop', array('label' => 'Te ajudou a enxergar novas oportunidades para o seu futuro?',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('te', array('label' => 'A atividade de ensinou como trabalhar em equipe?',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('rexpor', array('label' => 'A atividade de ensinou como Refletir e expor as suas ideias.',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('psalgum', array('label' => 'A atividade de ensinou como Pesquisar sobre algum assunto.',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('pmateriais', array('label' => 'A atividade de ensinou como Produzir materiais escritos (texto, jornal, cartaz, etc).',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('pjogos', array('label' => 'A atividade de ensinou como Produzir outros tipos de materiais como jogos, vídeos, fotografias, spot de rádio, etc).',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('tcorpo', array('label' => 'A atividade de ensinou como Trabalhar o seu corpo.',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));
   
echo $this->Form->input('esuacida', array('label' => 'A atividade de ensinou como Exercer sua cidadania .',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('tatitude', array('label' => 'A atividade de ensinou como Ter uma atitude de mais respeito com o meio ambiente',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('cbem', array('label' => 'A atividade de ensinou como Conduziu bem as atividades ?',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('tmotivou', array('label' => 'A atividade de ensinou como Te motivou para a aprendizagem?',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('qbom', array('title' => 'Que Bom...', 'label' => 'Que Bom...', 'rows' => '3'));
echo $this->Form->input('qpena', array('title' => 'Que Pena...', 'label' => 'Que Pena...', 'rows' => '3'));
echo $this->Form->input('qtal', array('title' => 'Que Tal...', 'label' => 'Que Tal...', 'rows' => '3'));
echo $this->Form->end('Save Post');
?>