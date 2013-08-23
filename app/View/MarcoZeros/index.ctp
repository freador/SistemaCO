<h1>Lista Escolas</h1>
<p><?php echo $this->Html->link('Adicionar um Aluno de 08 a 12', array('action' => 'add_08_12')); ?></p>
<p><?php echo $this->Html->link('Adicionar um Aluno de 13 a 17', array('action' => 'add_13_17')); ?></p>
<p><?php echo $this->Html->link('Adicionar um Aluno de 18 a 24', array('action' => 'add_18_24')); ?></p>
<table>
<tr>
<th>Id</th>
<th>Nome do Aluno</th>
<th>Idade</th>
<th>Sexo</th>
<th>Você é Feliz?</th>
<th>Ultima Interação</th>
</tr>
<!-- Here's where we loop through our $MarcoZeros array, printing out post info -->
<?php if($MarcoZeros != null): ?>
<?php foreach ($MarcoZeros as $MarcoZero): ?>
<tr>
<td><?php echo $MarcoZero['MarcoZero']['id']; ?></td>
<td>
<?php echo $this->Html->link($MarcoZero['MarcoZero']['nome'], array('action' => 'view', $MarcoZero['MarcoZero']['id'])); ?>
</td>
<td>
<?php echo $this->Html->link($MarcoZero['MarcoZero']['idade'], array('action' => 'view', $MarcoZero['MarcoZero']['id'])); ?>
</td>
<td>
<?php echo $this->Html->link($MarcoZero['MarcoZero']['sexo'], array('action' => 'view', $MarcoZero['MarcoZero']['id'])); ?>
</td>
<td>
<?php echo $this->Html->link($MarcoZero['MarcoZero']['vcef'], array('action' => 'view', $MarcoZero['MarcoZero']['id'])); ?>
</td>
<td>
<?php echo $MarcoZero['MarcoZero']['updated']; ?>
</td>
<td>
<?php echo $this->Html->link('Edit ', array('action' => 'edit', $MarcoZero['MarcoZero']['id'])); ?>
</td>
</tr>
<?php endforeach; ?>
<?php else: ?>
	<td>Sem Dados</td>
<?php endif; ?>
</table>