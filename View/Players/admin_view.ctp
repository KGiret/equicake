<div class="players view">
<h2><?php echo __('Player'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($player['Player']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($player['Player']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profession'); ?></dt>
		<dd>
			<?php echo $this->Html->link($player['Profession']['name'], array('controller' => 'professions', 'action' => 'view', $player['Profession']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Speciality'); ?></dt>
		<dd>
			<?php echo $this->Html->link($player['Speciality']['name'], array('controller' => 'specialities', 'action' => 'view', $player['Speciality']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($player['Role']['name'], array('controller' => 'roles', 'action' => 'view', $player['Role']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rank'); ?></dt>
		<dd>
			<?php echo $this->Html->link($player['Rank']['name'], array('controller' => 'ranks', 'action' => 'view', $player['Rank']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Player'), array('action' => 'edit', $player['Player']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Player'), array('action' => 'delete', $player['Player']['id']), null, __('Are you sure you want to delete # %s?', $player['Player']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professions'), array('controller' => 'professions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profession'), array('controller' => 'professions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialities'), array('controller' => 'specialities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Speciality'), array('controller' => 'specialities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ranks'), array('controller' => 'ranks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rank'), array('controller' => 'ranks', 'action' => 'add')); ?> </li>
	</ul>
</div>
