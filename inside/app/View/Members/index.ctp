<div class="members index">
	<h2 class="h2-index"><?php echo __('Members'); ?></h2>
	<table class="table" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('firstname'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname'); ?></th>
			<th><?php echo $this->Paginator->sort('ocupation'); ?></th>
			<th><?php echo $this->Paginator->sort('picture'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('phonenumber'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('poles_id'); ?></th>
			<th><?php echo $this->Paginator->sort('website'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($members as $member): ?>
	<tr>
		<td><?php echo h($member['Member']['id']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['ocupation']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['picture']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['email']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['phonenumber']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($member['Pole']['name'], array('controller' => 'poles', 'action' => 'view', $member['Pole']['id']),array('class' => 'label label-default')); ?>
		</td>
		<td><?php echo h($member['Member']['website']); ?>&nbsp;</td>
		<td class="actions td-center">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $member['Member']['id']),array('class' => 'btn btn-primary btn-index')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $member['Member']['id']),array('class' => 'btn btn-info btn-index')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $member['Member']['id']),array('class' => 'btn btn-danger btn-index'), array(), __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<hr>
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
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Poles'), array('controller' => 'poles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poles'), array('controller' => 'poles', 'action' => 'add')); ?> </li>
	</ul>
</div>
