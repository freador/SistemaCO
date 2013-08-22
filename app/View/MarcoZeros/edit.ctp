
<h1>Marco Zero de 18 á 24 Anos</h1>
<?php

echo $this->Form->create('MarcoZero');
echo $this->Form->input('nome');
echo $this->Form->input('idade');
echo $this->Form->input('sexo', array("options"=>array(array('name'=>'Masculino','value'=>'Masculino'),array('name' =>'Feminino','value'=>'Feminino')),
    "empty" => "Escolha um sexo"));

echo $this->Form->input('ecl', array("options"=>array(array('name'=>'Solteiro(a)','value'=>'Solteiro(a)'),array('name' =>'Casado(a)','value'=>'Casado(a)'),array('name' =>'Divorciado(a)','value'=>'Divorciado(a)'),array('name' =>'Viuvo(a)','value'=>'Viuvo(a)'),array('name' =>'Osutros','value'=>'Outros')),
    "empty" => "Escolha uma opção",'label' => 'Estado Civil'));
    
echo $this->Form->input('vcef', array('label' => 'Você é um jovem feliz:',"options"=>array(array('name'=>'Feliz','value'=>'Feliz'),array('name' =>'Triste','value'=>'Triste'),array('name' =>'Tímida','value'=>'Tímida'),array('name' =>'Bagunceira','value'=>'Bagunceira'),array('name' =>'Quieta','value'=>'Quieta'),array('name' =>'Organizada','value'=>'Organizada')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('vtfilhos', array('label' => 'Você tem filhos?',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('qfilhos', array('label' => 'Se sim, quantos filhos?'));

echo $this->Form->input('qualseusonho', array('label' => 'Qual é o seu maior Sonho?'));

echo $this->Form->input('qlprofissao', array('label' => 'Qual é a sua profissão ou qual profissão pretende seguir?'));


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
	
echo $this->Form->input('cqvcmora', array('label' => 'Com quem você Mora',"options"=>array(array('name'=>'Com os pais','value'=>'Com os pais'),array('name' =>'Em casa de familiares','value'=>'Em casa de familiares'),array('name' =>'Pensão/Pensionato','value'=>'Pensão/Pensionato'),array('name' =>'Em casa de Amigos','value'=>'Em casa de Amigos'),array('name' =>'Outros','value'=>'Outros')),
"empty" => "Escolha uma opção"));

echo $this->Form->input('qpessoamora', array('label' => 'Quantas pessoas moram com você?'));

echo $this->Form->input('qpagadesp', array('title' => 'Quem paga as despesas da casa (quem mais contribui na renda familiar)?', 'label' => 'Quem paga as despesas da casa (quem mais contribui na renda familiar)?',
    "options"=>array(array('name'=>'Pai','value'=>'Pai'),array('name' =>'Mãe','value'=>'Mãe'),array('name' =>'Irmã/Irmão','value'=>'Irmã/Irmão'),array('name' =>'Outros','value'=>'Outros')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('qsuarenda', array('title' => 'Aproximadamente, qual é a renda total da sua família? (1 salário mínimo = R$ 678,00)', 'label' => 'Aproximadamente, qual é a renda total da sua família? (1 salário mínimo = R$ 678,00)',
    "options"=>array(array('name'=>'1 salário Minimo','value'=>'1 salário Minimo'),array('name' =>'2 salário Minimo','value'=>'2 salário Minimo'),array('name' =>'3 salário Minimo','value'=>'3 salário Minimo'),array('name' =>'4 salário Minimo','value'=>'4 salário Minimo'),array('name' =>'5 salário Minimo','value'=>'5 salário Minimo'),array('name' =>'+5 salário Minimo','value'=>'+5 salário Minimo')),
    "empty" => "Escolha uma opção"));

	
echo $this->Form->input('estimp', array('label' => 'Estudar é importante para você?',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('pqrz', array('label' => 'Por que razão?', "options"=>array(array('name'=>'Por que estudar é uma obrigação','value'=>'Por que estudar é uma obrigação'),array('name' =>'Para entender melhor o mundo','value'=>'Para entender melhor o mundo'),array('name'=>'Para garantir um bom emprego e um futuro melhor','value'=>'Para garantir um bom emprego e um futuro melhor'),array('name' =>'Para fazer amigos','value'=>'Para fazer amigos'),array('name' =>'Para aprender','value'=>'Para aprender'),array('name' =>'Por que a escola é chata','value'=>'Por que a escola é chata'),array('name' =>'Não faz sentido na minha vida','value'=>'Não faz sentido na minha vida')),
    "empty" => "Escolha uma opção"));
	
echo $this->Form->input('vestacursando', array('label' => 'Você está estudando atualmente?',"options"=>array(array('name'=>'Sim','value'=>'Sim'),array('name' =>'Não','value'=>'Não')),
    "empty" => "Escolha uma opção"));

echo $this->Form->input('qserie', array('label' => 'Qual série você está estudando?'));
	
echo $this->Form->input('qnomeescola', array('label' => 'Qual escola você está estudando?'));

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