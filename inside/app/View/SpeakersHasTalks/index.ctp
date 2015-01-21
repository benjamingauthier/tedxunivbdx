<div class="speakersHasTalks index">
	<h2><?php echo __('Speakers Has Talks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('speakers_id'); ?></th>
			<th><?php echo $this->Paginator->sort('talks_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($speakersHasTalks as $speakersHasTalk): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($speakersHasTalk['Speakers']['id'], array('controller' => 'speakers', 'action' => 'view', $speakersHasTalk['Speakers']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($speakersHasTalk['Talks']['name'], array('controller' => 'talks', 'action' => 'view', $speakersHasTalk['Talks']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $speakersHasTalk['SpeakersHasTalk']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $speakersHasTalk['SpeakersHasTalk']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $speakersHasTalk['SpeakersHasTalk']['id']), array(), __('Are you sure you want to delete # %s?', $speakersHasTalk['SpeakersHasTalk']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Speakers Has Talk'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Speakers'), array('controller' => 'speakers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Speakers'), array('controller' => 'speakers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Talks'), array('controller' => 'talks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talks'), array('controller' => 'talks', 'action' => 'add')); ?> </li>
	</ul>
</div>
