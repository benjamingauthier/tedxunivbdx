<div class="speakers index">
	<h2 class="h2-index"><?php echo __('Speakers'); ?></h2>
	<table class="table" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('firstname'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname'); ?></th>
			<th><?php echo $this->Paginator->sort('qualification'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('picture'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($speakers as $speaker): ?>
	<tr>
		<td><?php echo h($speaker['Speaker']['id']); ?>&nbsp;</td>
		<td><?php echo h($speaker['Speaker']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($speaker['Speaker']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($speaker['Speaker']['qualification']); ?>&nbsp;</td>
		<td><?php echo h($speaker['Speaker']['description']); ?>&nbsp;</td>
		<td><?php echo h($speaker['Speaker']['picture']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $speaker['Speaker']['id']),array('class' => 'btn btn-primary btn-index')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $speaker['Speaker']['id']),array('class' => 'btn btn-info btn-index')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $speaker['Speaker']['id']), array('class' => 'btn btn-danger btn-index'), __('Are you sure you want to delete # %s?', $speaker['Speaker']['id'])); ?>
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
	<ul class="pagination pagination-large pull-right">
	<?php
	echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
	echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
	echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
	?>
	</ul>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Speaker'), array('action' => 'add')); ?></li>
	</ul>
</div>
