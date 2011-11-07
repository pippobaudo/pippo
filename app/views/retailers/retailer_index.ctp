<div class="retailers index">
	<h2><?php __('Retailers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('company_name');?></th>
			<th><?php echo $this->Paginator->sort('owner');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('website');?></th>
			<th><?php echo $this->Paginator->sort('vat');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('zipcode');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('fax');?></th>
			<th><?php echo $this->Paginator->sort('company_type');?></th>
			<th><?php echo $this->Paginator->sort('registration_date');?></th>
			<th><?php echo $this->Paginator->sort('deals_ok');?></th>
			<th><?php echo $this->Paginator->sort('deals_ko');?></th>
			<th><?php echo $this->Paginator->sort('feedback_ok_counter');?></th>
			<th><?php echo $this->Paginator->sort('carrier_id');?></th>
			<th><?php echo $this->Paginator->sort('referring_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($retailers as $retailer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $retailer['Retailer']['id']; ?>&nbsp;</td>
		<td><?php echo $retailer['Retailer']['company_name']; ?>&nbsp;</td>
		<td><?php echo $retailer['Retailer']['owner']; ?>&nbsp;</td>
		<td><?php echo $retailer['Retailer']['email']; ?>&nbsp;</td>
		<td><?php echo $retailer['Retailer']['website']; ?>&nbsp;</td>
		<td><?php echo $retailer['Retailer']['vat']; ?>&nbsp;</td>
		<td><?php echo $retailer['Retailer']['address']; ?>&nbsp;</td>
		<td><?php echo $retailer['Retailer']['zipcode']; ?>&nbsp;</td>
		<td><?php echo $retailer['Retailer']['phone']; ?>&nbsp;</td>
		<td><?php echo $retailer['Retailer']['fax']; ?>&nbsp;</td>
		<td><?php echo $retailer['Retailer']['company_type']; ?>&nbsp;</td>
		<td><?php echo $retailer['Retailer']['registration_date']; ?>&nbsp;</td>
		<td><?php echo $retailer['Retailer']['deals_ok']; ?>&nbsp;</td>
		<td><?php echo $retailer['Retailer']['deals_ko']; ?>&nbsp;</td>
		<td><?php echo $retailer['Retailer']['feedback_ok_counter']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($retailer['Carrier']['id'], array('controller' => 'carriers', 'action' => 'view', $retailer['Carrier']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($retailer['Referring']['name'], array('controller' => 'referrings', 'action' => 'view', $retailer['Referring']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $retailer['Retailer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $retailer['Retailer']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $retailer['Retailer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $retailer['Retailer']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Retailer', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Carriers', true), array('controller' => 'carriers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrier', true), array('controller' => 'carriers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Referrings', true), array('controller' => 'referrings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referring', true), array('controller' => 'referrings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals', true), array('controller' => 'deals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal', true), array('controller' => 'deals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feedbacks', true), array('controller' => 'feedbacks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feedback', true), array('controller' => 'feedbacks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proposals', true), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal', true), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
	</ul>
</div>