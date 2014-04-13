<div class="screenshots form">
<?php echo $this->Form->create('Screenshot'); ?>
	<fieldset>
		<legend><?php echo __('Add Screenshot'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('tier_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Screenshots'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tiers'), array('controller' => 'tiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tier'), array('controller' => 'tiers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
	</ul>
</div>
