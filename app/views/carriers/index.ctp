<div class="carriers index">
	<h2><?php __('Carriers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('company_name');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('website');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('fax');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($carriers as $carrier):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $carrier['Carrier']['id']; ?>&nbsp;</td>
		<td><?php echo $carrier['Carrier']['company_name']; ?>&nbsp;</td>
		<td><?php echo $carrier['Carrier']['email']; ?>&nbsp;</td>
		<td><?php echo $carrier['Carrier']['website']; ?>&nbsp;</td>
		<td><?php echo $carrier['Carrier']['phone']; ?>&nbsp;</td>
		<td><?php echo $carrier['Carrier']['fax']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $carrier['Carrier']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $carrier['Carrier']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $carrier['Carrier']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $carrier['Carrier']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Carrier', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Retailers', true), array('controller' => 'retailers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retailer', true), array('controller' => 'retailers', 'action' => 'add')); ?> </li>
	</ul>
</div>