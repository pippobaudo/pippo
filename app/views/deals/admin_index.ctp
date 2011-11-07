<div class="deals index">
	<h2><?php __('Deals');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('subtitle');?></th>
			<th><?php echo $this->Paginator->sort('start_price');?></th>
			<th><?php echo $this->Paginator->sort('end_price');?></th>
			<th><?php echo $this->Paginator->sort('start_discount');?></th>
			<th><?php echo $this->Paginator->sort('end_discount');?></th>
			<th><?php echo $this->Paginator->sort('start_datetime');?></th>
			<th><?php echo $this->Paginator->sort('end_datetime');?></th>
			<th><?php echo $this->Paginator->sort('users_count');?></th>
			<th><?php echo $this->Paginator->sort('retailers_count');?></th>
			<th><?php echo $this->Paginator->sort('deal_status');?></th>
			<th><?php echo $this->Paginator->sort('users_observer_count');?></th>
			<th><?php echo $this->Paginator->sort('image_id');?></th>
			<th><?php echo $this->Paginator->sort('subcategory_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('retailer_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($deals as $deal):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $deal['Deal']['id']; ?>&nbsp;</td>
		<td><?php echo $deal['Deal']['title']; ?>&nbsp;</td>
		<td><?php echo $deal['Deal']['subtitle']; ?>&nbsp;</td>
		<td><?php echo $deal['Deal']['start_price']; ?> &euro; &nbsp;</td>
		<td><?php echo $deal['Deal']['end_price']; ?> &euro; &nbsp;</td>
		<td><?php echo $deal['Deal']['start_discount']; ?> % &nbsp;</td>
		<td><?php echo $deal['Deal']['end_discount']; ?> %&nbsp;</td>
		<td><?php echo $deal['Deal']['start_datetime']; ?>&nbsp;</td>
		<td><?php echo $deal['Deal']['end_datetime']; ?>&nbsp;</td>
		<td><?php echo $deal['Deal']['users_count']; ?>&nbsp;</td>
		<td><?php echo $deal['Deal']['retailers_count']; ?>&nbsp;</td>
		<td><?php echo $deal['Deal']['deal_status']; ?>&nbsp;</td>
		<td><?php echo $deal['Deal']['users_observer_count']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($this->Html->image($deal['Image']['id']), array('controller' => 'images', 'action' => 'view', $deal['Image']['id']), array('escape'=>true)); ?>
		</td>
		<td>
			<?php echo $this->Html->link($deal['Subcategory']['name'], array('controller' => 'subcategories', 'action' => 'view', $deal['Subcategory']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($deal['User']['name'], array('controller' => 'users', 'action' => 'view', $deal['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($deal['Retailer']['id'], array('controller' => 'retailers', 'action' => 'view', $deal['Retailer']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $deal['Deal']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $deal['Deal']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $deal['Deal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $deal['Deal']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Deal', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Images', true), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image', true), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcategories', true), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory', true), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Retailers', true), array('controller' => 'retailers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retailer', true), array('controller' => 'retailers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feedbacks', true), array('controller' => 'feedbacks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feedback', true), array('controller' => 'feedbacks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proposals', true), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal', true), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
	</ul>
</div>