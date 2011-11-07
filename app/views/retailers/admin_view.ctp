<div class="retailers view">
<h2><?php  __('Retailer');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $retailer['Retailer']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Company Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $retailer['Retailer']['company_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Owner'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $retailer['Retailer']['owner']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $retailer['Retailer']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Website'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $retailer['Retailer']['website']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vat'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $retailer['Retailer']['vat']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $retailer['Retailer']['address']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Zipcode'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $retailer['Retailer']['zipcode']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $retailer['Retailer']['phone']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fax'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $retailer['Retailer']['fax']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Company Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $retailer['Retailer']['company_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Registration Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $retailer['Retailer']['registration_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Deals Ok'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $retailer['Retailer']['deals_ok']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Deals Ko'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $retailer['Retailer']['deals_ko']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Feedback Ok Counter'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $retailer['Retailer']['feedback_ok_counter']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Carrier'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($retailer['Carrier']['id'], array('controller' => 'carriers', 'action' => 'view', $retailer['Carrier']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Referring'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($retailer['Referring']['name'], array('controller' => 'referrings', 'action' => 'view', $retailer['Referring']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Retailer', true), array('action' => 'edit', $retailer['Retailer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Retailer', true), array('action' => 'delete', $retailer['Retailer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $retailer['Retailer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Retailers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retailer', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Deals');?></h3>
	<?php if (!empty($retailer['Deal'])):?>
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
		foreach ($retailer['Deal'] as $deal):
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
	<h3><?php __('Related Feedbacks');?></h3>
	<?php if (!empty($retailer['Feedback'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Deal Id'); ?></th>
		<th><?php __('Retailer Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Feedback Text'); ?></th>
		<th><?php __('Feedback Value'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($retailer['Feedback'] as $feedback):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $feedback['id'];?></td>
			<td><?php echo $feedback['deal_id'];?></td>
			<td><?php echo $feedback['retailer_id'];?></td>
			<td><?php echo $feedback['user_id'];?></td>
			<td><?php echo $feedback['feedback_text'];?></td>
			<td><?php echo $feedback['feedback_value'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'feedbacks', 'action' => 'view', $feedback['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'feedbacks', 'action' => 'edit', $feedback['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'feedbacks', 'action' => 'delete', $feedback['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $feedback['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Feedback', true), array('controller' => 'feedbacks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Proposals');?></h3>
	<?php if (!empty($retailer['Proposal'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Retailer Id'); ?></th>
		<th><?php __('Deal Id'); ?></th>
		<th><?php __('Purchasinggap Id'); ?></th>
		<th><?php __('Percent'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($retailer['Proposal'] as $proposal):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $proposal['id'];?></td>
			<td><?php echo $proposal['retailer_id'];?></td>
			<td><?php echo $proposal['deal_id'];?></td>
			<td><?php echo $proposal['purchasinggap_id'];?></td>
			<td><?php echo $proposal['percent'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'proposals', 'action' => 'view', $proposal['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'proposals', 'action' => 'edit', $proposal['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'proposals', 'action' => 'delete', $proposal['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $proposal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proposal', true), array('controller' => 'proposals', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
