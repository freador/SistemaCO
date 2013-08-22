<h1>Lista Escolas</h1>
<p><?php echo $this->Html->link('Adicionar um Aluno de 08 á 17', array('action' => 'add_08_17')); ?></p>
<p><?php echo $this->Html->link('Adicionar um Aluno de 18 á 24', array('action' => 'add_18_24')); ?></p>
<table>
<tr>
<th>Id</th>
<th>Nome do Aluno</th>
<th>Idade</th>
<th>Oficina</th>
<th>Telefone</th>
<th>Ultima Interação</th>
</tr>
<!-- Here's where we loop through our $Calunos array, printing out post info -->
<?php if($Calunos != null): ?>
<?php foreach ($Calunos as $Caluno): ?>
<tr>
<td><?php echo $Caluno['Caluno']['id']; ?></td>
<td>
<?php echo $Caluno['Caluno']['nome']; ?>
</td>
<td>
<?php echo $Caluno['Caluno']['idade']; ?>
</td>
<td>
<?php echo $Caluno['Caluno']['oficina_id']; ?>
</td>
<td>
<?php echo $Caluno['Caluno']['telefone']; ?>
</td>
<td>
<?php echo $Caluno['Caluno']['updated']; ?>
</td>
<td>
<?php echo $this->Html->link('Edit ', array('action' => 'edit', $Caluno['Caluno']['id'])); ?>
</td>
</tr>
<?php endforeach; ?>
<?php else: ?>
	<td>Sem Dados</td>
<?php endif; ?>
</table>