<div class="referrings index">
	<h2><?php __('Referrings');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('surname');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('image_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($referrings as $referring):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $referring['Referring']['id']; ?>&nbsp;</td>
		<td><?php echo $referring['Referring']['name']; ?>&nbsp;</td>
		<td><?php echo $referring['Referring']['surname']; ?>&nbsp;</td>
		<td><?php echo $referring['Referring']['email']; ?>&nbsp;</td>
		<td><?php echo $referring['Referring']['phone']; ?>&nbsp;</td>
		<td><?php echo $referring['Referring']['gender']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($referring['Image']['id'], array('controller' => 'images', 'action' => 'view', $referring['Image']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $referring['Referring']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $referring['Referring']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $referring['Referring']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $referring['Referring']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Referring', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Images', true), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image', true), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Retailers', true), array('controller' => 'retailers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retailer', true), array('controller' => 'retailers', 'action' => 'add')); ?> </li>
	</ul>
</div>