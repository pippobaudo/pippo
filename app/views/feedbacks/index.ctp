<div class="feedbacks index">
	<h2><?php __('Feedbacks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('deal_id');?></th>
			<th><?php echo $this->Paginator->sort('retailer_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('feedback_text');?></th>
			<th><?php echo $this->Paginator->sort('feedback_value');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($feedbacks as $feedback):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $feedback['Feedback']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($feedback['Deal']['title'], array('controller' => 'deals', 'action' => 'view', $feedback['Deal']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($feedback['Retailer']['id'], array('controller' => 'retailers', 'action' => 'view', $feedback['Retailer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($feedback['User']['name'], array('controller' => 'users', 'action' => 'view', $feedback['User']['id'])); ?>
		</td>
		<td><?php echo $feedback['Feedback']['feedback_text']; ?>&nbsp;</td>
		<td><?php echo $feedback['Feedback']['feedback_value']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $feedback['Feedback']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $feedback['Feedback']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $feedback['Feedback']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $feedback['Feedback']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Feedback', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Deals', true), array('controller' => 'deals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal', true), array('controller' => 'deals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Retailers', true), array('controller' => 'retailers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retailer', true), array('controller' => 'retailers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>