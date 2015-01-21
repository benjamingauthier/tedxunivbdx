<div class="speakers view">
<h2><?php echo __('Speaker'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($speaker['Speaker']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($speaker['Speaker']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($speaker['Speaker']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qualification'); ?></dt>
		<dd>
			<?php echo h($speaker['Speaker']['qualification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($speaker['Speaker']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Picture'); ?></dt>
		<dd>
			<?php echo h($speaker['Speaker']['picture']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Speaker'), array('action' => 'edit', $speaker['Speaker']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Speaker'), array('action' => 'delete', $speaker['Speaker']['id']), array(), __('Are you sure you want to delete # %s?', $speaker['Speaker']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Speakers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Speaker'), array('action' => 'add')); ?> </li>
	</ul>
</div>
