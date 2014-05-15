<div class="screenshots view">
<h2><?php echo __('Screenshot'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($screenshot['Screenshot']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($screenshot['Screenshot']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tier'); ?></dt>
		<dd>
			<?php echo $this->Html->link($screenshot['Tier']['name'], array('controller' => 'tiers', 'action' => 'view', $screenshot['Tier']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Screenshot'), array('action' => 'edit', $screenshot['Screenshot']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Screenshot'), array('action' => 'delete', $screenshot['Screenshot']['id']), null, __('Are you sure you want to delete # %s?', $screenshot['Screenshot']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Screenshots'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Screenshot'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiers'), array('controller' => 'tiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tier'), array('controller' => 'tiers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Articles'); ?></h3>
	<?php if (!empty($screenshot['Article'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Contents'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Screenshot Id'); ?></th>
		<th><?php echo __('Video Id'); ?></th>
		<th><?php echo __('Tier Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($screenshot['Article'] as $article): ?>
		<tr>
			<td><?php echo $article['id']; ?></td>
			<td><?php echo $article['title']; ?></td>
			<td><?php echo $article['contents']; ?></td>
			<td><?php echo $article['date']; ?></td>
			<td><?php echo $article['screenshot_id']; ?></td>
			<td><?php echo $article['video_id']; ?></td>
			<td><?php echo $article['tier_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'articles', 'action' => 'view', $article['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'articles', 'action' => 'edit', $article['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'articles', 'action' => 'delete', $article['id']), null, __('Are you sure you want to delete # %s?', $article['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
