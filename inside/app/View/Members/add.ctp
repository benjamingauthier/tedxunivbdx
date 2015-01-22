<div class="members form">
<?php echo $this->Form->create('Member'); ?>
	<?php echo $this->Form->create('Member', array(
			'inputDefaults' => array(
				'class' => 'form-control form-add'
			)
		)
	);; ?>
	<fieldset>
		<legend><?php echo __('Add Member'); ?></legend>
	<?php
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('ocupation');
		echo $this->Form->input('picture');
		echo $this->Form->input('email');
		echo $this->Form->input('phonenumber');
		echo $this->Form->input('description');
		echo $this->Form->input('poles_id');
		echo $this->Form->input('website');
	?>
	</fieldset>
	<br>
	<?php echo $this->Form->end(array(
		'label' => 'Submit',
		'class' => 'btn btn-primary btn-connexion',
		'div' => array(
			'class' => 'btn-login btn-add btn-river'
		)
	));
	?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Poles'), array('controller' => 'poles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poles'), array('controller' => 'poles', 'action' => 'add')); ?> </li>
	</ul>
</div>
