<div class="talks form">
<?php echo $this->Form->create('Talk'); ?>
	<fieldset>
		<legend><?php echo __('Edit Talk'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('place');
		echo $this->Form->input('strat');
		echo $this->Form->input('end');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Talk.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Talk.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Talks'), array('action' => 'index')); ?></li>
	</ul>
</div>
