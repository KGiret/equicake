<div class="specialities view">
<h2><?php echo __('Speciality'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($speciality['Speciality']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($speciality['Speciality']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($speciality['Speciality']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Classe'); ?></dt>
		<dd>
			<?php echo $this->Html->link($speciality['Classe']['name'], array('controller' => 'classes', 'action' => 'view', $speciality['Classe']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Speciality'), array('action' => 'edit', $speciality['Speciality']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Speciality'), array('action' => 'delete', $speciality['Speciality']['id']), null, __('Are you sure you want to delete # %s?', $speciality['Speciality']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Speciality'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classes'), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe'), array('controller' => 'classes', 'action' => 'add')); ?> </li>
	</ul>
</div>
