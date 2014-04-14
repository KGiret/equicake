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
		<dt><?php echo __('Classe'); ?></dt>
		<dd>
			<?php echo $this->Html->link($player['Classe']['name'], array('controller' => 'classes', 'action' => 'view', $player['Classe']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Specialities'); ?></dt>
		<dd>
			<?php echo $this->Html->link($player['Specialities']['id'], array('controller' => 'specialities', 'action' => 'view', $player['Specialities']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Classes'), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe'), array('controller' => 'classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialities'), array('controller' => 'specialities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialities'), array('controller' => 'specialities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ranks'), array('controller' => 'ranks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rank'), array('controller' => 'ranks', 'action' => 'add')); ?> </li>
	</ul>
</div>
