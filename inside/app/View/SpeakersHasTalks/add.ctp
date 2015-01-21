<div class="speakersHasTalks form">
<?php echo $this->Form->create('SpeakersHasTalk'); ?>
	<fieldset>
		<legend><?php echo __('Add Speakers Has Talk'); ?></legend>
	<?php
		echo $this->Form->input('speakers_id');
		echo $this->Form->input('talks_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Speakers Has Talks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Speakers'), array('controller' => 'speakers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Speakers'), array('controller' => 'speakers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Talks'), array('controller' => 'talks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talks'), array('controller' => 'talks', 'action' => 'add')); ?> </li>
	</ul>
</div>
