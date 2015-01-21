<div class="speakersHasTalks view">
<h2><?php echo __('Speakers Has Talk'); ?></h2>
	<dl>
		<dt><?php echo __('Speakers'); ?></dt>
		<dd>
			<?php echo $this->Html->link($speakersHasTalk['Speakers']['id'], array('controller' => 'speakers', 'action' => 'view', $speakersHasTalk['Speakers']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talks'); ?></dt>
		<dd>
			<?php echo $this->Html->link($speakersHasTalk['Talks']['name'], array('controller' => 'talks', 'action' => 'view', $speakersHasTalk['Talks']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Speakers Has Talk'), array('action' => 'edit', $speakersHasTalk['SpeakersHasTalk']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Speakers Has Talk'), array('action' => 'delete', $speakersHasTalk['SpeakersHasTalk']['id']), array(), __('Are you sure you want to delete # %s?', $speakersHasTalk['SpeakersHasTalk']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Speakers Has Talks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Speakers Has Talk'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Speakers'), array('controller' => 'speakers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Speakers'), array('controller' => 'speakers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Talks'), array('controller' => 'talks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talks'), array('controller' => 'talks', 'action' => 'add')); ?> </li>
	</ul>
</div>
