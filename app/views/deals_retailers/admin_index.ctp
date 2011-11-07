<div class="dealsRetailers index">
	<h2><?php __('Deals Retailers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('deal_id');?></th>
			<th><?php echo $this->Paginator->sort('retailer_id');?></th>
			<th><?php echo $this->Paginator->sort('retailer_status');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($dealsRetailers as $dealsRetailer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $dealsRetailer['DealsRetailer']['id']; ?>&nbsp;</td>
		<td><?php echo $dealsRetailer['DealsRetailer']['deal_id']; ?>&nbsp;</td>
		<td><?php echo $dealsRetailer['DealsRetailer']['retailer_id']; ?>&nbsp;</td>
		<td><?php echo $dealsRetailer['DealsRetailer']['retailer_status']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $dealsRetailer['DealsRetailer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $dealsRetailer['DealsRetailer']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $dealsRetailer['DealsRetailer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dealsRetailer['DealsRetailer']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Deals Retailer', true), array('action' => 'add')); ?></li>
	</ul>
</div>