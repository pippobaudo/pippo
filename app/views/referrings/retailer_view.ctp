<div class="referrings view">
<h2><?php  __('Referring');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $referring['Referring']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $referring['Referring']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Surname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $referring['Referring']['surname']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $referring['Referring']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $referring['Referring']['phone']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gender'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $referring['Referring']['gender']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Image'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($referring['Image']['id'], array('controller' => 'images', 'action' => 'view', $referring['Image']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Referring', true), array('action' => 'edit', $referring['Referring']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Referring', true), array('action' => 'delete', $referring['Referring']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $referring['Referring']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Referrings', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referring', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images', true), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image', true), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Retailers', true), array('controller' => 'retailers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retailer', true), array('controller' => 'retailers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Retailers');?></h3>
	<?php if (!empty($referring['Retailer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Company Name'); ?></th>
		<th><?php __('Owner'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Website'); ?></th>
		<th><?php __('Vat'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('Zipcode'); ?></th>
		<th><?php __('Phone'); ?></th>
		<th><?php __('Fax'); ?></th>
		<th><?php __('Company Type'); ?></th>
		<th><?php __('Registration Date'); ?></th>
		<th><?php __('Deals Ok'); ?></th>
		<th><?php __('Deals Ko'); ?></th>
		<th><?php __('Feedback Ok Counter'); ?></th>
		<th><?php __('Carrier Id'); ?></th>
		<th><?php __('Referring Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($referring['Retailer'] as $retailer):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $retailer['id'];?></td>
			<td><?php echo $retailer['company_name'];?></td>
			<td><?php echo $retailer['owner'];?></td>
			<td><?php echo $retailer['email'];?></td>
			<td><?php echo $retailer['website'];?></td>
			<td><?php echo $retailer['vat'];?></td>
			<td><?php echo $retailer['address'];?></td>
			<td><?php echo $retailer['zipcode'];?></td>
			<td><?php echo $retailer['phone'];?></td>
			<td><?php echo $retailer['fax'];?></td>
			<td><?php echo $retailer['company_type'];?></td>
			<td><?php echo $retailer['registration_date'];?></td>
			<td><?php echo $retailer['deals_ok'];?></td>
			<td><?php echo $retailer['deals_ko'];?></td>
			<td><?php echo $retailer['feedback_ok_counter'];?></td>
			<td><?php echo $retailer['carrier_id'];?></td>
			<td><?php echo $retailer['referring_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'retailers', 'action' => 'view', $retailer['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'retailers', 'action' => 'edit', $retailer['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'retailers', 'action' => 'delete', $retailer['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $retailer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Retailer', true), array('controller' => 'retailers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
