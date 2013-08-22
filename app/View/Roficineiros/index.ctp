<h1>Relatório diário dos Facilitadores</h1>
<p><?php echo $this->Html->link('Adicionar um relatório', array('action' => 'add'), array('class' => 'btn-18-24')); ?></p>
<table>
<tr>
<th>ID</th>
<th>Nome do Facilitador</th>
<th>Oficina</th>
<th>Ultima Interação</th>
</tr>
<!-- Here's where we loop through our $Roficineiros array, printing out post info -->
<?php if($Roficineiros != null): ?>
<?php foreach ($Roficineiros as $Roficineiro): ?>
<tr>
<td><?php echo $Roficineiro['Roficineiro']['id']; ?></td>
<td>
<?php echo $Roficineiro['Roficineiro']['nome']; ?>
</td>
<td>
<?php echo $Roficineiro['Roficineiro']['oficina_id']; ?>
</td>
<td>
<?php echo $Roficineiro['Roficineiro']['updated']; ?>
</td>
<td>
<?php echo $this->Html->link('Edit ', array('action' => 'edit', $Roficineiro['Roficineiro']['id'])); ?>
</td>
</tr>
<?php endforeach; ?>
<?php else: ?>
	<td>Sem Dados</td>
<?php endif; ?>
</table>