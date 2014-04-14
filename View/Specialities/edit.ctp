<div class="specialities form">
<?php echo $this->Form->create('Speciality'); ?>
	<fieldset>
		<legend><?php echo __('Edit Speciality'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nom');
		echo $this->Form->input('state');
		echo $this->Form->input('classe_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Speciality.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Speciality.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Specialities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Classes'), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe'), array('controller' => 'classes', 'action' => 'add')); ?> </li>
	</ul>
</div>
