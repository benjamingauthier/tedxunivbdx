<div class="partners index">
	<h2 class="h2-index"><?php echo __('Partners'); ?></h2>
	<table class="table" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('picture'); ?></th>
			<th><?php echo $this->Paginator->sort('website'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($partners as $partner): ?>
	<tr>
		<td><?php echo h($partner['Partner']['id']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['name']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['description']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['picture']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['website']); ?>&nbsp;</td>
		<td class="actions td-center">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $partner['Partner']['id']),array('class' => 'btn btn-primary btn-index')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $partner['Partner']['id']),array('class' => 'btn btn-info btn-index')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $partner['Partner']['id']),array('class' => 'btn btn-danger btn-index'),array(), __('Are you sure you want to delete # %s?', $partner['Partner']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Partner'), array('action' => 'add')); ?></li>
	</ul>
</div>
