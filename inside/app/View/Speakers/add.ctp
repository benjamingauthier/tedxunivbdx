<div class="speakers form">
<?php echo $this->Form->create('Speaker'); ?>
	<fieldset>
		<legend><?php echo __('Add Speaker'); ?></legend>
	<?php
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('qualification');
		echo $this->Form->textarea('description');
		echo $this->Form->input('picture');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Speakers'), array('action' => 'index')); ?></li>
	</ul>
</div>
