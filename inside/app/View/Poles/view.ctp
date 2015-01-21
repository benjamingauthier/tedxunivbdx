<div class="poles view">
<h2><?php echo __('Pole'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pole['Pole']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($pole['Pole']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($pole['Pole']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Picture'); ?></dt>
		<dd>
			<?php echo h($pole['Pole']['picture']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pole'), array('action' => 'edit', $pole['Pole']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pole'), array('action' => 'delete', $pole['Pole']['id']), array(), __('Are you sure you want to delete # %s?', $pole['Pole']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Poles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pole'), array('action' => 'add')); ?> </li>
	</ul>
</div>
