<div class="partners form">
<?php echo $this->Form->create('Partner'); ?>
	<fieldset>
		<legend><?php echo __('Add Partner'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('picture');
		echo $this->Form->input('website');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Partners'), array('action' => 'index')); ?></li>
	</ul>
</div>
