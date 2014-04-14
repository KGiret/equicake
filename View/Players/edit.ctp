<div class="players form">
<?php echo $this->Form->create('Player'); ?>
	<fieldset>
		<legend><?php echo __('Edit Player'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('classe_id');
		echo $this->Form->input('specialite_id');
		echo $this->Form->input('role_id');
		echo $this->Form->input('rank_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Player.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Player.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Players'), array('action' => 'index')); ?></li>
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
