<div class="subcategories view">
<h2><?php  __('Subcategory');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subcategory['Subcategory']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subcategory['Subcategory']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($subcategory['Category']['name'], array('controller' => 'categories', 'action' => 'view', $subcategory['Category']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subcategory', true), array('action' => 'edit', $subcategory['Subcategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Subcategory', true), array('action' => 'delete', $subcategory['Subcategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subcategory['Subcategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcategories', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals', true), array('controller' => 'deals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal', true), array('controller' => 'deals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Deals');?></h3>
	<?php if (!empty($subcategory['Deal'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Subtitle'); ?></th>
		<th><?php __('Start Price'); ?></th>
		<th><?php __('End Price'); ?></th>
		<th><?php __('Start Discount'); ?></th>
		<th><?php __('End Discount'); ?></th>
		<th><?php __('Start Datetime'); ?></th>
		<th><?php __('End Datetime'); ?></th>
		<th><?php __('Users Count'); ?></th>
		<th><?php __('Retailers Count'); ?></th>
		<th><?php __('Deal Status'); ?></th>
		<th><?php __('Users Observer Count'); ?></th>
		<th><?php __('Image Id'); ?></th>
		<th><?php __('Subcategory Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Retailer Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subcategory['Deal'] as $deal):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $deal['id'];?></td>
			<td><?php echo $deal['title'];?></td>
			<td><?php echo $deal['subtitle'];?></td>
			<td><?php echo $deal['start_price'];?></td>
			<td><?php echo $deal['end_price'];?></td>
			<td><?php echo $deal['start_discount'];?></td>
			<td><?php echo $deal['end_discount'];?></td>
			<td><?php echo $deal['start_datetime'];?></td>
			<td><?php echo $deal['end_datetime'];?></td>
			<td><?php echo $deal['users_count'];?></td>
			<td><?php echo $deal['retailers_count'];?></td>
			<td><?php echo $deal['deal_status'];?></td>
			<td><?php echo $deal['users_observer_count'];?></td>
			<td><?php echo $deal['image_id'];?></td>
			<td><?php echo $deal['subcategory_id'];?></td>
			<td><?php echo $deal['user_id'];?></td>
			<td><?php echo $deal['retailer_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'deals', 'action' => 'view', $deal['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'deals', 'action' => 'edit', $deal['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'deals', 'action' => 'delete', $deal['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $deal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Deal', true), array('controller' => 'deals', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
