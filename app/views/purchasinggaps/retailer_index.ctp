<div class="purchasinggaps index">
	<h2><?php __('Purchasinggaps');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('quorum_id');?></th>
			<th><?php echo $this->Paginator->sort('pricerange_id');?></th>
			<th><?php echo $this->Paginator->sort('revenue_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($purchasinggaps as $purchasinggap):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $purchasinggap['Purchasinggap']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($purchasinggap['Quorum']['id'], array('controller' => 'quorums', 'action' => 'view', $purchasinggap['Quorum']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($purchasinggap['Pricerange']['id'], array('controller' => 'priceranges', 'action' => 'view', $purchasinggap['Pricerange']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($purchasinggap['Revenue']['id'], array('controller' => 'revenues', 'action' => 'view', $purchasinggap['Revenue']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $purchasinggap['Purchasinggap']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $purchasinggap['Purchasinggap']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $purchasinggap['Purchasinggap']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $purchasinggap['Purchasinggap']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Purchasinggap', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Quorums', true), array('controller' => 'quorums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quorum', true), array('controller' => 'quorums', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Priceranges', true), array('controller' => 'priceranges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pricerange', true), array('controller' => 'priceranges', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Revenues', true), array('controller' => 'revenues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revenue', true), array('controller' => 'revenues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proposals', true), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal', true), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
	</ul>
</div>