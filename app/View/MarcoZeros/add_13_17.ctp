
<h1>Marco Zero de 13 á 17 anos</h1>
<?php

echo $this->Form->create('MarcoZero');
echo $this->Form->input('nome');
echo $this->Form->input('idade');
echo $this->Form->input('sexo', array("options"=>array(array('name'=>'Masculino','value'=>'Masculino'),array('name' =>'Feminino','value'=>'Feminino')),
    "empty" => "Escolha um sexo"));
	
?>

<div class="input select required">
	<label for="MarcoZeroSexo">Escolha uma Escola</label>
	<select name="data[MarcoZero][escola_id]" id="escola">
		<option value="">Escolha uma Opção</option>
	</select>
</div>

<div class="input select required">
	<label for="MarcoZeroSexo">Escolha uma oficina</label>
		<select name="data[MarcoZero][oficina_id]" id="oficina">
		<option value="">Escolha uma opção</option>
	</select>
</div>


<?php

echo $this->Form->input('vcef', array('label' => 'Você é uma criança:',"options"=>array(array('name'=>'Feliz','value'=>'Feliz'),array('name' =>'Triste','value'=>'Triste'),array('name' =>'Tímida','value'=>'Tímida'),array('name' =>'Bagunceira','value'=>'Bagunceira'),array('name' =>'Quieta','value'=>'Quieta'),array('name' =>'Organizada','value'=>'Organizada')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('qualseusonho', array('label' => 'Qual é o seu maior Sonho?'));
echo $this->Form->input('qsuaprofissao', array('label' => 'Qual é a sua profissão ou qual profissão pretende seguir?'));

echo $this->Form->input('assistirtv', array('label' => 'Com Qual frequência você assiste TV',"options"=>array(array('name'=>'Todos os Dias','value'=>'Todos os Dias'),array('name' =>'Quase todos os Dias','value'=>'Quase todos os Dias'),array('name' =>'1 ou 2 vezes/semana','value'=>'1 ou 2 vezes/semana'),array('name' =>'Quinzenalmente','value'=>'Quinzenalmente'),array('name' =>'Mensalmente','value'=>'Mensalmente')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('abicicleta', array('label' => 'Com Qual frequência você Anda de Bicicleta',"options"=>array(array('name'=>'Todos os Dias','value'=>'Todos os Dias'),array('name' =>'Quase todos os Dias','value'=>'Quase todos os Dias'),array('name' =>'1 ou 2 vezes/semana','value'=>'1 ou 2 vezes/semana'),array('name' =>'Quinzenalmente','value'=>'Quinzenalmente'),array('name' =>'Mensalmente','value'=>'Mensalmente')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('fatoa', array('label' => 'Com Qual frequência você Fica á toa',"options"=>array(array('name'=>'Todos os Dias','value'=>'Todos os Dias'),array('name' =>'Quase todos os Dias','value'=>'Quase todos os Dias'),array('name' =>'1 ou 2 vezes/semana','value'=>'1 ou 2 vezes/semana'),array('name' =>'Quinzenalmente','value'=>'Quinzenalmente'),array('name' =>'Mensalmente','value'=>'Mensalmente')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('figrejas', array('label' => 'Com Qual frequência você Frequenta Igrejas',"options"=>array(array('name'=>'Todos os Dias','value'=>'Todos os Dias'),array('name' =>'Quase todos os Dias','value'=>'Quase todos os Dias'),array('name' =>'1 ou 2 vezes/semana','value'=>'1 ou 2 vezes/semana'),array('name' =>'Quinzenalmente','value'=>'Quinzenalmente'),array('name' =>'Mensalmente','value'=>'Mensalmente')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('fparques', array('label' => 'Com Qual frequência você Frequenta Parques',"options"=>array(array('name'=>'Todos os Dias','value'=>'Todos os Dias'),array('name' =>'Quase todos os Dias','value'=>'Quase todos os Dias'),array('name' =>'1 ou 2 vezes/semana','value'=>'1 ou 2 vezes/semana'),array('name' =>'Quinzenalmente','value'=>'Quinzenalmente'),array('name' =>'Mensalmente','value'=>'Mensalmente')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('ninternet', array('label' => 'Com Qual frequência você Navega na internet',"options"=>array(array('name'=>'Todos os Dias','value'=>'Todos os Dias'),array('name' =>'Quase todos os Dias','value'=>'Quase todos os Dias'),array('name' =>'1 ou 2 vezes/semana','value'=>'1 ou 2 vezes/semana'),array('name' =>'Quinzenalmente','value'=>'Quinzenalmente'),array('name' =>'Mensalmente','value'=>'Mensalmente')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('iaocinema', array('label' => 'Com Qual frequência você vai ao cinema',"options"=>array(array('name'=>'Todos os Dias','value'=>'Todos os Dias'),array('name' =>'Quase todos os Dias','value'=>'Quase todos os Dias'),array('name' =>'1 ou 2 vezes/semana','value'=>'1 ou 2 vezes/semana'),array('name' =>'Quinzenalmente','value'=>'Quinzenalmente'),array('name' =>'Mensalmente','value'=>'Mensalmente')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('iaoshop', array('label' => 'Com Qual frequência você vai ao shopping',"options"=>array(array('name'=>'Todos os Dias','value'=>'Todos os Dias'),array('name' =>'Quase todos os Dias','value'=>'Quase todos os Dias'),array('name' =>'1 ou 2 vezes/semana','value'=>'1 ou 2 vezes/semana'),array('name' =>'Quinzenalmente','value'=>'Quinzenalmente'),array('name' =>'Mensalmente','value'=>'Mensalmente')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('jvideogame', array('label' => 'Com Qual frequência você Joga video Games',"options"=>array(array('name'=>'Todos os Dias','value'=>'Todos os Dias'),array('name' =>'Quase todos os Dias','value'=>'Quase todos os Dias'),array('name' =>'1 ou 2 vezes/semana','value'=>'1 ou 2 vezes/semana'),array('name' =>'Quinzenalmente','value'=>'Quinzenalmente'),array('name' =>'Mensalmente','value'=>'Mensalmente')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('ler', array('label' => 'Com Qual frequência você Ler um livro',"options"=>array(array('name'=>'Todos os Dias','value'=>'Todos os Dias'),array('name' =>'Quase todos os Dias','value'=>'Quase todos os Dias'),array('name' =>'1 ou 2 vezes/semana','value'=>'1 ou 2 vezes/semana'),array('name' =>'Quinzenalmente','value'=>'Quinzenalmente'),array('name' =>'Mensalmente','value'=>'Mensalmente')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('ouvir', array('label' => 'Com Qual frequência você Escutar Música',"options"=>array(array('name'=>'Todos os Dias','value'=>'Todos os Dias'),array('name' =>'Quase todos os Dias','value'=>'Quase todos os Dias'),array('name' =>'1 ou 2 vezes/semana','value'=>'1 ou 2 vezes/semana'),array('name' =>'Quinzenalmente','value'=>'Quinzenalmente'),array('name' =>'Mensalmente','value'=>'Mensalmente')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('passear', array('label' => 'Com Qual frequência você Passear ou ficar na rua',"options"=>array(array('name'=>'Todos os Dias','value'=>'Todos os Dias'),array('name' =>'Quase todos os Dias','value'=>'Quase todos os Dias'),array('name' =>'1 ou 2 vezes/semana','value'=>'1 ou 2 vezes/semana'),array('name' =>'Quinzenalmente','value'=>'Quinzenalmente'),array('name' =>'Mensalmente','value'=>'Mensalmente')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('pesportes', array('label' => 'Com Qual frequência você Prática Esportes',"options"=>array(array('name'=>'Todos os Dias','value'=>'Todos os Dias'),array('name' =>'Quase todos os Dias','value'=>'Quase todos os Dias'),array('name' =>'1 ou 2 vezes/semana','value'=>'1 ou 2 vezes/semana'),array('name' =>'Quinzenalmente','value'=>'Quinzenalmente'),array('name' =>'Mensalmente','value'=>'Mensalmente')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('estimp', array('label' => 'Estudar é importante para você?',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('pqrz', array('label' => 'Por que razão?', "options"=>array(array('name'=>'Por que estudar é uma obrigação','value'=>'Por que estudar é uma obrigação'),array('name' =>'Para entender melhor o mundo','value'=>'Para entender melhor o mundo'),array('name'=>'Para garantir um bom emprego e um futuro melhor','value'=>'Para garantir um bom emprego e um futuro melhor'),array('name' =>'Para fazer amigos','value'=>'Para fazer amigos'),array('name' =>'Para aprender','value'=>'Para aprender'),array('name' =>'Por que a escola é chata','value'=>'Por que a escola é chata'),array('name' =>'Não faz sentido na minha vida','value'=>'Não faz sentido na minha vida')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('lereenttexto', array('label' => 'O quanto você sabe sobre ler e entender textos',"options"=>array(array('name'=>'Nada','value'=>'Nada'),array('name' =>'Pouco','value'=>'Pouco'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Muito','value'=>'Muito')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('escrevertexto', array('label' => 'O quanto você sabe sobre Escrever Textos',"options"=>array(array('name'=>'Nada','value'=>'Nada'),array('name' =>'Pouco','value'=>'Pouco'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Muito','value'=>'Muito')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('incoisas', array('label' => 'O quanto você sabe sobre Inventar Coisas',"options"=>array(array('name'=>'Nada','value'=>'Nada'),array('name' =>'Pouco','value'=>'Pouco'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Muito','value'=>'Muito')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('lcomnum', array('label' => 'O quanto você sabe sobre Lidar com numeros',"options"=>array(array('name'=>'Nada','value'=>'Nada'),array('name' =>'Pouco','value'=>'Pouco'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Muito','value'=>'Muito')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('fouesc', array('label' => 'O quanto você sabe sobre Falar ou Escutar',"options"=>array(array('name'=>'Nada','value'=>'Nada'),array('name' =>'Pouco','value'=>'Pouco'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Muito','value'=>'Muito')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('ouviroutro', array('label' => 'O quanto você sabe sobre Ouvir os outros',"options"=>array(array('name'=>'Nada','value'=>'Nada'),array('name' =>'Pouco','value'=>'Pouco'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Muito','value'=>'Muito')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('te', array('label' => 'O quanto você sabe sobre Trabalhar em Equipe',"options"=>array(array('name'=>'Nada','value'=>'Nada'),array('name' =>'Pouco','value'=>'Pouco'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Muito','value'=>'Muito')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('pesquisar', array('label' => 'O quanto você sabe sobre Pesquisar sobre diferentes assuntos',"options"=>array(array('name'=>'Nada','value'=>'Nada'),array('name' =>'Pouco','value'=>'Pouco'),array('name' =>'Mais ou Menos','value'=>'Mais ou Menos'),array('name' =>'Muito','value'=>'Muito')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('vcsamarco', array('label' => 'Você conheçe a Samarco',"options"=>array(array('name'=>'Não e não tenho a menor ideia do que faça.','value'=>'Não e não tenho a menor ideia do que faça.'),array('name' =>'Não sei o que fazem, mas já ouvi falar ou sei onde fica.','value'=>'Não sei o que fazem, mas já ouvi falar ou sei onde fica.'),array('name' =>'Sim, sei mais ou menos onde fica e o que fazem.','value'=>'Sim, sei mais ou menos onde fica e o que fazem.'),array('name' =>'Sim, conheço bastante.','value'=>'Sim, conheço bastante.')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('ovcachasa', array('label' => 'Qual o conheçimento que você tem sobre a samarco',"options"=>array(array('name'=>'1','value'=>'1'),array('name' =>'2','value'=>'2'),array('name' =>'3','value'=>'3'),array('name' =>'4','value'=>'4'),array('name' =>'5','value'=>'5')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('ovcespera', array('label' => 'O que você espera do Projeto?', 'rows' => '5'));

	
echo $this->Form->end('Save Post');



?>