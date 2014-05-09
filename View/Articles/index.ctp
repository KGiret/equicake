<div class="articles index">
	<h2><?php echo __('Articles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('contents'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('screenshot_id'); ?></th>
			<th><?php echo $this->Paginator->sort('video_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tier_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($articles as $article): ?>
	<tr>
		<td><?php echo h($article['Article']['id']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['title']); ?>&nbsp;</td>
		<td><?php echo $article['Article']['contents']; ?>&nbsp;</td>
		<td><?php echo h($article['Article']['date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($article['Screenshot']['name'], array('controller' => 'screenshots', 'action' => 'view', $article['Screenshot']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($article['Video']['name'], array('controller' => 'videos', 'action' => 'view', $article['Video']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($article['Tier']['name'], array('controller' => 'tiers', 'action' => 'view', $article['Tier']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $article['Article']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $article['Article']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $article['Article']['id']), null, __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Article'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Screenshots'), array('controller' => 'screenshots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Screenshot'), array('controller' => 'screenshots', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Videos'), array('controller' => 'videos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Video'), array('controller' => 'videos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiers'), array('controller' => 'tiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tier'), array('controller' => 'tiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
