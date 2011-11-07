<div class="quorums index">
	<h2><?php __('Quorums');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('min');?></th>
			<th><?php echo $this->Paginator->sort('max');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($quorums as $quorum):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $quorum['Quorum']['id']; ?>&nbsp;</td>
		<td><?php echo $quorum['Quorum']['min']; ?>&nbsp;</td>
		<td><?php echo $quorum['Quorum']['max']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $quorum['Quorum']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $quorum['Quorum']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $quorum['Quorum']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $quorum['Quorum']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Quorum', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Purchasinggaps', true), array('controller' => 'purchasinggaps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchasinggap', true), array('controller' => 'purchasinggaps', 'action' => 'add')); ?> </li>
	</ul>
</div>