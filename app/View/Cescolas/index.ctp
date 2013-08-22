<h1>Lista Escolas</h1>
<p><?php echo $this->Html->link('Adicionar uma Escola', array('action' => 'add')); ?></p>
<table>
<tr>
<th>Id</th>
<th>Nome da Escola</th>
<th>Estadp</th>
<th>Cidade</th>
<th>Bairro</th>
<th>Endereço</th>
<th>Ultima Interação</th>
</tr>
<!-- Here's where we loop through our $Cescolas array, printing out post info -->
<?php if($Cescolas != null): ?>
<?php foreach ($Cescolas as $Cescola): ?>
<tr>
<td><?php echo $Cescola['Cescola']['id']; ?></td>
<td>
<?php echo $this->Html->link($Cescola['Cescola']['Nescola'], array('action' => 'view', $Cescola['Cescola']['id'])); ?>
</td>
<td>
<?php echo $this->Html->link($Cescola['Cescola']['Bairro'], array('action' => 'view', $Cescola['Cescola']['id'])); ?>
</td>
<td>
<?php echo $this->Html->link($Cescola['Cescola']['Estado'], array('action' => 'view', $Cescola['Cescola']['id'])); ?>
</td>
<td>
<?php echo $this->Html->link($Cescola['Cescola']['Cidade'], array('action' => 'view', $Cescola['Cescola']['id'])); ?>
</td>
<td>
<?php echo $this->Html->link($Cescola['Cescola']['Endereco'], array('action' => 'view', $Cescola['Cescola']['id'])); ?>
</td>

<td>
<?php echo $Cescola['Cescola']['updated']; ?>
</td>
<td>
<?php echo $this->Html->link('Edit ', array('action' => 'edit', $Cescola['Cescola']['id'])); ?>
</td>
</tr>
<?php endforeach; ?>
<?php else: ?>
	<td>Sem Dados</td>
<?php endif; ?>
</table>