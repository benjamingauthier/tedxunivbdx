<div class="talks view">
<h2><?php echo __('Talk'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($talk['Talk']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place'); ?></dt>
		<dd>
			<?php echo h($talk['Talk']['place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Strat'); ?></dt>
		<dd>
			<?php echo h($talk['Talk']['strat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End'); ?></dt>
		<dd>
			<?php echo h($talk['Talk']['end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($talk['Talk']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($talk['Talk']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Picture'); ?></dt>
		<dd>
			<?php echo h($talk['Talk']['picture']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Talk'), array('action' => 'edit', $talk['Talk']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Talk'), array('action' => 'delete', $talk['Talk']['id']), array(), __('Are you sure you want to delete # %s?', $talk['Talk']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Talks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talk'), array('action' => 'add')); ?> </li>
	</ul>
</div>
