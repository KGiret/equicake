<div class="screenshots index">
	<h2><?php echo __('Screenshots'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('tier_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($screenshots as $screenshot): ?>
	<tr>
		<td><?php echo h($screenshot['Screenshot']['id']); ?>&nbsp;</td>
		<td><?php echo h($screenshot['Screenshot']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($screenshot['Tier']['name'], array('controller' => 'tiers', 'action' => 'view', $screenshot['Tier']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $screenshot['Screenshot']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $screenshot['Screenshot']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $screenshot['Screenshot']['id']), null, __('Are you sure you want to delete # %s?', $screenshot['Screenshot']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Screenshot'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tiers'), array('controller' => 'tiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tier'), array('controller' => 'tiers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
	</ul>
</div>
