<?php echo $this->Session->flash('auth') ?>
<?php echo $this->Session->flash() ?>

<?php echo $this->Form->create('Cliente', array('action' => 'login')) ?>
<?php echo $this->Form->input('email') ?>
<?php echo $this->Form->input('senha', array('type' => 'password')) ?>
<?php echo $this->Form->end('Entrar') ?>