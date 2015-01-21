<div class="talks form">
<?php echo $this->Form->create('Talk'); ?>
	<fieldset>
		<legend><?php echo __('Add Talk'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Talks'), array('action' => 'index')); ?></li>
	</ul>
</div>
