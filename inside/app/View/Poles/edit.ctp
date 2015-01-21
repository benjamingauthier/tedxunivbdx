<div class="poles form">
<?php echo $this->Form->create('Pole'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pole'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('picture');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pole.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Pole.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Poles'), array('action' => 'index')); ?></li>
	</ul>
</div>
