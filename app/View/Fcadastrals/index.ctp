<h1>Lista Fichas Cadastrais</h1>
<p><?php echo $this->Html->link('Adicionar uma Ficha Cadastral 18 24', array('action' => 'add_18_24'), array('class' => 'btn-18-24')); ?></p>
<p><?php echo $this->Html->link('Adicionar uma Ficha Cadastral 08 17', array('action' => 'add_08_17'), array('class' => 'btn-18-24')); ?></p>
<table>
<tr>
<th>Id</th>
<th>Nome do Aluno</th>
<th>Idade</th>
<th>Nome da Escola</th>
<th>Data de Nascimento</th>
<th>Assinou?</th>
<th>Ultima Interação</th>
</tr>
<!-- Here's where we loop through our $Fcadastrals array, printing out post info -->
<?php if($Fcadastrals != null): ?>
<?php foreach ($Fcadastrals as $Fcadastral): ?>
<tr>
<td><?php echo $Fcadastral['Fcadastral']['id']; ?></td>
<td>
<?php echo $Fcadastral['Fcadastral']['nomeAluno']; ?>
</td>
<td>
<?php echo $Fcadastral['Fcadastral']['idade']; ?>
</td>
<td>
<?php echo $Fcadastral['Fcadastral']['escola_id'];
		
 ?>
</td>
<td>
<?php echo $Fcadastral['Fcadastral']['dnascimento']; ?>
</td>
<td>
<?php echo $Fcadastral['Fcadastral']['assinou']; ?>
</td>

<td>
<?php echo $Fcadastral['Fcadastral']['updated']; ?>
</td>
<td>
<?php echo $this->Html->link('Edit ', array('action' => 'edit', $Fcadastral['Fcadastral']['id'])); ?>
</td>
</tr>
<?php endforeach; ?>
<?php else: ?>
	<td>Sem Dados</td>
<?php endif; ?>
</table>