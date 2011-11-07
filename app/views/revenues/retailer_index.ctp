<div class="revenues index">
	<h2><?php __('Revenues');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('min');?></th>
			<th><?php echo $this->Paginator->sort('max');?></th>
			<th><?php echo $this->Paginator->sort('value');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($revenues as $revenue):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $revenue['Revenue']['id']; ?>&nbsp;</td>
		<td><?php echo $revenue['Revenue']['min']; ?>&nbsp;</td>
		<td><?php echo $revenue['Revenue']['max']; ?>&nbsp;</td>
		<td><?php echo $revenue['Revenue']['value']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $revenue['Revenue']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $revenue['Revenue']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $revenue['Revenue']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $revenue['Revenue']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Revenue', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Purchasinggaps', true), array('controller' => 'purchasinggaps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchasinggap', true), array('controller' => 'purchasinggaps', 'action' => 'add')); ?> </li>
	</ul>
</div>