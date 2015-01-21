<div class="members form">
<?php echo $this->Form->create('Member'); ?>
	<fieldset>
		<legend><?php echo __('Edit Member'); ?></legend>
	<?php
		echo $this->Form->input('id');
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
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Member.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Member.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Poles'), array('controller' => 'poles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poles'), array('controller' => 'poles', 'action' => 'add')); ?> </li>
	</ul>
</div>
