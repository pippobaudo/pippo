<div class="images view">
<h2><?php  __('Image');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $image['Image']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Original Path'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $image['Image']['original_path']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Thumb Path'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $image['Image']['thumb_path']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $image['Image']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Size'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $image['Image']['size']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Image', true), array('action' => 'edit', $image['Image']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Image', true), array('action' => 'delete', $image['Image']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $image['Image']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Images', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals', true), array('controller' => 'deals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal', true), array('controller' => 'deals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Referrings', true), array('controller' => 'referrings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referring', true), array('controller' => 'referrings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Deals');?></h3>
	<?php if (!empty($image['Deal'])):?>
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
		foreach ($image['Deal'] as $deal):
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
<div class="related">
	<h3><?php __('Related Referrings');?></h3>
	<?php if (!empty($image['Referring'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Surname'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Phone'); ?></th>
		<th><?php __('Gender'); ?></th>
		<th><?php __('Image Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($image['Referring'] as $referring):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $referring['id'];?></td>
			<td><?php echo $referring['name'];?></td>
			<td><?php echo $referring['surname'];?></td>
			<td><?php echo $referring['email'];?></td>
			<td><?php echo $referring['phone'];?></td>
			<td><?php echo $referring['gender'];?></td>
			<td><?php echo $referring['image_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'referrings', 'action' => 'view', $referring['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'referrings', 'action' => 'edit', $referring['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'referrings', 'action' => 'delete', $referring['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $referring['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Referring', true), array('controller' => 'referrings', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
