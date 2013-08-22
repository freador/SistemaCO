<h1>Relatório diário dos Facilitadores</h1>
<p><?php echo $this->Html->link('Cadastre um Facilitador', array('action' => 'add'), array('class' => 'btn-18-24')); ?></p>
<table>
<tr>
<th>ID</th>
<th>Nome do Facilitador</th>
<th>tel</th>
<th>email</th>
<th>Ultima Interação</th>
</tr>
<!-- Here's where we loop through our $Cfacilitadors array, printing out post info -->
<?php if($Cfacilitadors != null): ?>
<?php foreach ($Cfacilitadors as $Cfacilitador): ?>
<tr>
<td><?php echo $Cfacilitador['Cfacilitador']['id']; ?></td>
<td>
<?php echo $Cfacilitador['Cfacilitador']['nome']; ?>
</td>
<td>
<?php echo $Cfacilitador['Cfacilitador']['tel']; ?>
</td>
<td>
<?php echo $Cfacilitador['Cfacilitador']['email']; ?>
</td>
<td>
<?php echo $Cfacilitador['Cfacilitador']['updated']; ?>
</td>
<td>
<?php echo $this->Html->link('Edit ', array('action' => 'edit', $Cfacilitador['Cfacilitador']['id'])); ?>
</td>
</tr>
<?php endforeach; ?>
<?php else: ?>
	<td>Sem Dados</td>
<?php endif; ?>
</table>