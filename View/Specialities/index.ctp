<div class="specialities index">
	<h2><?php echo __('Specialities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nom'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('classe_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($specialities as $speciality): ?>
	<tr>
		<td><?php echo h($speciality['Speciality']['id']); ?>&nbsp;</td>
		<td><?php echo h($speciality['Speciality']['nom']); ?>&nbsp;</td>
		<td><?php echo h($speciality['Speciality']['state']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($speciality['Classe']['name'], array('controller' => 'classes', 'action' => 'view', $speciality['Classe']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $speciality['Speciality']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $speciality['Speciality']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $speciality['Speciality']['id']), null, __('Are you sure you want to delete # %s?', $speciality['Speciality']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Speciality'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Classes'), array('controller' => 'classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classe'), array('controller' => 'classes', 'action' => 'add')); ?> </li>
	</ul>
</div>
