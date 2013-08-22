<h1>Lista Oficinas Cadastradas</h1>
<p><?php echo $this->Html->link('Adicionar uma Oficina', array('action' => 'add'), array('class' => 'btn-18-24')); ?></p>
<table>
<tr>
<th>ID</th>
<th>Nome da Oficina</th>
<th>Data de Inicio</th>
<th>Data de Termino</th>
<th>Ultima Interação</th>
</tr>
<!-- Here's where we loop through our $Coficinas array, printing out post info -->
<?php if($Coficinas != null): ?>
<?php foreach ($Coficinas as $Coficina): ?>
<tr>
<td><?php echo $Coficina['Coficina']['id']; ?></td>
<td>
<?php echo $Coficina['Coficina']['nome']; ?>
</td>
<td>
<?php echo $Coficina['Coficina']['dataInicio']; ?>
</td>
<td>
<?php echo $Coficina['Coficina']['dataTermino']; ?>
</td>
<td>
<?php echo $Coficina['Coficina']['updated']; ?>
</td>
<td>
<?php echo $this->Html->link('Edit ', array('action' => 'edit', $Coficina['Coficina']['id'])); ?>
</td>
</tr>
<?php endforeach; ?>
<?php else: ?>
	<td>Sem Dados</td>
<?php endif; ?>
</table>