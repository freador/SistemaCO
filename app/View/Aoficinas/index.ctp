<h1>Avaliação de Oficinas</h1>
<p><?php echo $this->Html->link('Adicionar uma Avaliação de Oficinas', array('action' => 'add')); ?></p>
<table>
<tr>
<th>Id</th>
<th>Nome</th>
<th>idade</th>
<th>sexo</th>
<th>Ultima Interação</th>
</tr>
<!-- Here's where we loop through our $Aoficinas array, printing out post info -->
<?php if($Aoficinas != null): ?>
<?php foreach ($Aoficinas as $Aoficina): ?>
<tr>
<td><?php echo $Aoficina['Aoficina']['id']; ?></td>
<td>
<?php echo $this->Html->link($Aoficina['Aoficina']['nome'], array('action' => 'view', $Aoficina['Aoficina']['id'])); ?>
</td>
<td>
<?php echo $this->Html->link($Aoficina['Aoficina']['idade'], array('action' => 'view', $Aoficina['Aoficina']['id'])); ?>
</td>
<td>
<?php echo $this->Html->link($Aoficina['Aoficina']['sexo'], array('action' => 'view', $Aoficina['Aoficina']['id'])); ?>
</td>
<td>
<?php echo $Aoficina['Aoficina']['updated']; ?>
</td>
<td>
<?php echo $this->Html->link('Edit ', array('action' => 'edit', $Aoficina['Aoficina']['id'])); ?>
</td>
</tr>
<?php endforeach; ?>
<?php else: ?>
	<td>Sem Dados</td>
<?php endif; ?>
</table>